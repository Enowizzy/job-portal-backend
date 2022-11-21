<?php

namespace Database\Seeders;

use App\Models\JobCategory;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $job =  JobCategory::updateOrCreate([
            'name' => 'Gown',
            'slug' => Str::slug('Gown'),
        ]);
    }
}
