<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = App\Category::create(['name' => 'Cars', 'fonts' => 'fa fa-car',]);
        $category = App\Category::create(['name' => 'Computers And Mobiles','fonts' => 'fa fa-mobile',]);
        $category = App\Category::create(['name' => 'Animals And Birds','fonts' => 'fa fa-paw',]);
        $category = App\Category::create(['name' => 'Furniture','fonts' => 'fa fa-chair',]);
        $category = App\Category::create(['name' => 'Real Estates','fonts' => 'fa fa-building',]);


    }
}
