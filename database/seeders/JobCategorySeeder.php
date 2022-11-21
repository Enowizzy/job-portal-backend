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
            'name' => 'Backend Developer',
            'slug' => Str::slug('Backend Developer'),
        ]);
        $job =  JobCategory::updateOrCreate([
            'name' => 'Frontend Developer',
            'slug' => Str::slug('Frontend Developer'),
        ]);
        $job =  JobCategory::updateOrCreate([
            'name' => 'Software Engineer',
            'slug' => Str::slug('Software Engineer'),
        ]);
        $job =  JobCategory::updateOrCreate([
            'name' => 'Software Developer',
            'slug' => Str::slug('Software Developer'),
        ]);
        $job =  JobCategory::updateOrCreate([
            'name' => 'Full Stack Software Developer',
            'slug' => Str::slug('Full Stack Software Developer'),
        ]);
        $job =  JobCategory::updateOrCreate([
            'name' => 'Network Engineer',
            'slug' => Str::slug('Network Engineer'),
        ]);
        $job =  JobCategory::updateOrCreate([
            'name' => 'Database Developer',
            'slug' => Str::slug('Database Developer'),
        ]);
        $job =  JobCategory::updateOrCreate([
            'name' => 'Blockchain Developer',
            'slug' => Str::slug('Blockchain Developer'),
        ]);
        $job =  JobCategory::updateOrCreate([
            'name' => 'CyberSecurity Engineer',
            'slug' => Str::slug('CyberSecurity Engineer'),
        ]);
        $job =  JobCategory::updateOrCreate([
            'name' => 'Cloud Security Engineer',
            'slug' => Str::slug('Cloud Security Engineer'),
        ]);
    }
}
