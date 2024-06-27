<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Celebrity;
use App\Models\Competition;
use App\Models\Notification;
use App\Models\Order;
use App\Models\Product;
use App\Models\Sale;
use App\Models\SaleCelebrity;
use App\Models\Statistic;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        Carbon::setWeekStartsAt(Carbon::SATURDAY);
        Carbon::setWeekEndsAt(Carbon::FRIDAY);
    }

    public function index()
    {
        $title = trans('admin.Dashboard');

        $allProducts = Product::count();
        $allCategories = Category::count();
        $allUsers = User::count();

        $maxViewsProducts = Product::orderBy('views', 'desc')->take(8)->get();

        return view('admin.dashboard.new', get_defined_vars());
    }
}
