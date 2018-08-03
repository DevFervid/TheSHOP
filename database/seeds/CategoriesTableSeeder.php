<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = ['name' => 'Clothing', 'slug' => str_slug('Clothing') ];
        $category2 = ['name' => 'Phones ', 'slug' => str_slug('Phones') ];
        $category3 = ['name' => 'Electronics', 'slug' => str_slug('Electronics') ];
        $category4 = ['name' => 'Farming Equipments', 'slug' => str_slug('Farming Equipments') ];
        $category5 = ['name' => 'Stationery', 'slug' => str_slug('Stationery') ];
        $category6 = ['name' => 'Car Appliances', 'slug' => str_slug('Car Appliances') ];
        $category7 = ['name' => 'Furniture', 'slug' => str_slug('Furniture') ];
        $category8 = ['name' => 'Kitchen Equipments', 'slug' => str_slug('Kitchen Equipments') ];
        $category9 = ['name' => 'Computers', 'slug' => str_slug('Computers') ];


        Category::create($category1);
        Category::create($category2);
        Category::create($category3);
        Category::create($category4);
        Category::create($category5);
        Category::create($category6);
        Category::create($category7);
        Category::create($category8);
        Category::create($category9);
    }
}
