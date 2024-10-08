<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Landingpageseo;

class SeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Landingpageseo::create([
            'page' => 'Home',
            'title_en' => 'test data',
            'title_ar' => 'test data',
            'keywords_en' => 'test data',
            'keywords_ar' => 'test data',
            'description_en' => 'test data',
            'description_ar' => 'test data'
        ]);

        Landingpageseo::create([
            'page' => 'Projects',
            'title_en' => 'test data',
            'title_ar' => 'test data',
            'keywords_en' => 'test data',
            'keywords_ar' => 'test data',
            'description_en' => 'test data',
            'description_ar' => 'test data'
        ]);

        Landingpageseo::create([
            'page' => 'About',
            'title_en' => 'test data',
            'title_ar' => 'test data',
            'keywords_en' => 'test data',
            'keywords_ar' => 'test data',
            'description_en' => 'test data',
            'description_ar' => 'test data'
        ]);

        Landingpageseo::create([
            'page' => 'Units',
            'title_en' => 'test data',
            'title_ar' => 'test data',
            'keywords_en' => 'test data',
            'keywords_ar' => 'test data',
            'description_en' => 'test data',
            'description_ar' => 'test data'
        ]);

    }
}
