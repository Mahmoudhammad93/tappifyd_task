<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Component;
use App\Models\Drink;
use App\Models\Extra;
use App\Models\Media;
use App\Models\Option;
use App\Models\Product;
use App\Models\ProductOption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('image', 'category')->latest()->paginate(30);

        // return $products;

        return view('admin.products.index', [
            'title' => trans('admin.All Products'),
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create', [
            'title' => trans('admin.Add New Product'),
            'products' => Product::get(),
            'categories' => Category::orderBy('name_' . lang(), 'asc')->get(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_ar'           => 'required',
            'name_en'           => 'required',
            'category_id'       => 'required',
            'description_ar'    => 'required',
            'description_en'    => 'required',
            'price'         => 'required',
            "images"            => "required|array|min:1",
            "images.*"          => "required|image|mimes:jpeg,png,jpg,webp",
        ], [], [
            'name_ar'           => trans('admin.Name Ar'),
            'name_en'           => trans('admin.Name En'),
            'category_id'       => trans('admin.Category'),
            'description_ar'    => trans('admin.Description Ar'),
            'description_en'    => trans('admin.Description En'),
            'price'         => trans('admin.Price'),
            'images'            => trans('admin.Images'),
        ]);

        $product = Product::create([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'category_id' => $request->category_id,
            'description_ar' => $request->description_ar,
            'description_en' => $request->description_en,
            'price' => $request->price,
        ]);

        if ($request->hasFile('images')) {
            ini_set('memory_limit', '-1');
            $files = $request->file('images');
            $image_path = date("Y-m-d") . '/';
            foreach ($files as $file) {
                $image_extension = $file->getClientOriginalExtension();
                $image_imageName = date('mdYHis') . uniqid() . '.' . $image_extension;
                File::makeDirectory(public_path('storage/products/' . $image_path), $mode = 0777, true, true);
                Image::make($file)
                    ->resize(650, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })
                    ->save(public_path('storage/products/' . $image_path) . $image_imageName, 90);
                $image = new Media();
                $image->filename = $image_imageName;
                $image->mime = $file->getClientMimeType();
                $image->mediaable_id = $product->id;
                $image->mediaable_type = 'App\Models\Product';
                $image->url = url('') . '/storage/products/' . $image_path . $image_imageName;
                $image->save();
            }
        }

        userLogs([
            'model' => '\App\Models\Product',
            'model_id' => $product->id,
            'description_ar' => 'اضافة منتج جديد',
            'description_en' => 'Add New Product',
            'status' => 'create'
        ]);

        return redirect(aurl('products'))->with('success', 'operation success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::with('images', 'category')->find($id);
        return view('admin.products.view', [
            'title' => $product->name,
            'product' => $product,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        

        return view('admin.products.edit', [
            'title' => $product->name,
            'product' => $product,
            'categories' => Category::orderBy('name_' . lang(), 'asc')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $request->validate([
            'name_ar'           => 'required',
            'name_en'           => 'required',
            'category_id'       => 'required',
            'description_ar'    => 'required',
            'description_en'    => 'required',
            'price'         => 'required',
            "images"            => "nullable|array|min:1",
            "images.*"          => "nullable|image|mimes:jpeg,png,jpg,webp",
        ], [], [
            'name_ar'           => trans('admin.Name Ar'),
            'name_en'           => trans('admin.Name En'),
            'category_id'       => trans('admin.Category'),
            'description_ar'    => trans('admin.Description Ar'),
            'description_en'    => trans('admin.Description En'),
            'price'         => trans('admin.Price'),
            'images'            => trans('admin.Images'),
        ]);

        $product = Product::where('id', $id)->first();
        $product->name_ar = $request->name_ar;
        $product->name_en = $request->name_en;
        $product->category_id = $request->category_id;
        $product->description_ar = $request->description_ar;
        $product->description_en = $request->description_en;
        $product->price = $request->price;
        $product->save();

        if ($request->hasFile('images')) {
            ini_set('memory_limit', '-1');
            $files = $request->file('images');
            $image_path = date("Y-m-d") . '/';
            foreach ($files as $file) {
                $image_extension = $file->getClientOriginalExtension();
                $image_imageName = date('mdYHis') . uniqid() . '.' . $image_extension;
                File::makeDirectory(public_path('storage/products/' . $image_path), $mode = 0777, true, true);
                Image::make($file)
                    ->resize(650, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })
                    ->save(public_path('storage/products/' . $image_path) . $image_imageName, 90);
                $image = new Media();
                $image->filename = $image_imageName;
                $image->mime = $file->getClientMimeType();
                $image->mediaable_id = $product->id;
                $image->mediaable_type = 'App\Models\Product';
                $image->url = url('') . '/storage/products/' . $image_path . $image_imageName;
                $image->save();
            }
        }

        if ($request->has('delete_images')) {
            $files = $request->delete_images;
            foreach ($files as $file) {
                $image = Media::where('id', $file)->first();
                if ($image) {
                    File::delete(public_path(str_replace(url(""), "", $image->url)));
                    $image->delete();
                }
            }
        }

        userLogs([
            'model' => '\App\Models\Product',
            'model_id' => $product->id,
            'description_ar' => 'تحديث بيانات المنتج',
            'description_en' => 'Update Product Details',
            'status' => 'update'
        ]);

        return redirect(aurl('products'))->with('success', 'operation success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $product = Product::find($request->product_id);
        if ($product) {
            $product->delete();
        }
        userLogs([
            'model' => '\App\Models\Product',
            'model_id' => $request->product_id,
            'description_ar' => 'حذف المنتج',
            'description_en' => 'Delete Product',
            'status' => 'delete'
        ]);
        return back()->with('success', 'operation success');
    }

    public function generateSlug($slug, $id)
    {
        $data = Product::where('slug', $slug)->first();
        if ($data) {
            return $slug . "." . $id;
        } else {
            return $slug;
        }
    }
}
