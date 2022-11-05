<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\ServiceCategory::insert(
            [
                [
                'name' => 'Food Delivery',
                'description' => 'test@example.com',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Oversabi Market',
                'description' => 'test@example.com',
                'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Package Delivery',
                'description' => 'test@example.com',
                'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),

            ],
            [
                'name' => 'Pest Control',
                'description' => 'test@example.com',
                'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Pickup Laundary',
                'description' => 'test@example.com',
                'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Cleaning Services',
                'description' => 'test@example.com',
                'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
            ]
    ]
        );
    }
}
