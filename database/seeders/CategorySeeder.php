<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

        $categories = [
            [
                'name' => 'Artisanat',
                'slug' => 'artisanat',
                'image' => 'images/categories/artisanat.jpeg',
                'description' => '',
            ],
            [
                'name' => 'Informatique',
                'slug' => 'informatique',
                'image' => 'images/categories/computer-science.jpeg',
                'description' => '',
            ],
            [
                'name' => 'Communication',
                'slug' => 'communication',
                'image' => 'images/categories/communication.png',
                'description' => '',
            ],
            [
                'name' => 'Marketing et Vente',
                'slug' => 'marketing-et-vente',
                'image' => 'images/categories/marketing-sales.jpeg',
                'description' => '',
            ],
            [
                'name' => 'Finance et Comptabilité',
                'slug' => 'finance-et-comptabilité',
                'image' => 'images/categories/marketing-sales.jpeg',
                'description' => '',
            ],
            [
                'name' => 'Développement Personnel',
                'slug' => 'developpement-personnel',
                'image' => 'images/categories/developement-personnel.jpeg',
                'description' => '',
            ],
            [
                'name' => 'Electronique',
                'slug' => 'electronique',
                'image' => 'images/categories/electronique.jpeg',
                'description' => '',
            ],
            [
                'name' => 'Graphisme',
                'slug' => 'graphisme',
                'image' => 'images/categories/graphisme.png',
                'description' => '',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}