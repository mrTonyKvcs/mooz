<?php

use App\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    protected $categories = [
        [
            'name' => 'moOz'
        ]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->categories as $category) {
            Category::create([
                'slug' => Str::slug($category['name']),
                'name' => $category['name']
            ]);
        }
    }
}
