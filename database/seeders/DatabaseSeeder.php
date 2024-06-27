<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'name_ar'=>'Task',
            'name_en'=>'مهمة',
        ]);

        $this->call([
            UserSeeder::class,
            PermissionSeeder::class,
        ]);
    }
}
