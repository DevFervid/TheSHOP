<?php

use Illuminate\Database\Seeder;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Supplier::create([
            'name' => 'Cate',
            'password' => bcrypt('password'),
            'email' => 'cate@gmail.com',
            'phone' => '0717503802',
            'idcard' => '31779005',
            'about' =>  'Sells Clothing',
            'location' => 'Along Mombasa Road',
            
        ]);
        App\Supplier::create([
            'name' => 'Grace',
            'password' => bcrypt('password'),
            'email' => 'grace@gmail.com',
            'phone' => '0717503803',
            'idcard' => '31779006',
            'about' =>  'Sells A Variety of Electronic Appliances',
            'location' => 'Along Naivasha Road',
            
        ]);
        App\Supplier::create([
            'name' => 'Joy',
            'password' => bcrypt('password'),
            'email' => 'joy@gmail.com',
            'phone' => '0717503804',
            'idcard' => '31779007',
            'about' =>  'Sells Farming Equipments',
            'location' => 'Along Limuru Road',
            
        ]);
        App\Supplier::create([
            'name' => 'Jane',
            'password' => bcrypt('password'),
            'email' => 'jane@gmail.com',
            'phone' => '0717503805',
            'idcard' => '31779008',
            'about' =>  'Sells Kitchen Equipments',
            'location' => 'Along Kitui Road',
            
        ]);
        App\Supplier::create([
            'name' => 'Shantel',
            'password' => bcrypt('password'),
            'email' => 'shantel@gmail.com',
            'phone' => '0717503806',
            'idcard' => '31779009',
            'about' =>  'Sells The Best Phones',
            'location' => 'Athi River',
            
        ]);

        App\Supplier::create([
            'name' => 'Marrie',
            'password' => bcrypt('password'),
            'email' => 'marrie@gmail.com',
            'phone' => '0717503807',
            'idcard' => '31779000',
            'about' =>  'Wholesaler',
            'location' => 'Along Nairobi-Machakos Road',
            
        ]);
    }
}
