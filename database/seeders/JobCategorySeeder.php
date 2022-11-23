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
        $backend =  JobCategory::updateOrCreate([
            'name' => 'Backend Developer',
            'slug' => Str::slug('Backend Developer'),
        ]);
        $frontend =  JobCategory::updateOrCreate([
            'name' => 'Frontend Developer',
            'slug' => Str::slug('Frontend Developer'),
        ]);
        $software =  JobCategory::updateOrCreate([
            'name' => 'Software Engineer',
            'slug' => Str::slug('Software Engineer'),
        ]);
        $developer =  JobCategory::updateOrCreate([
            'name' => 'Software Developer',
            'slug' => Str::slug('Software Developer'),
        ]);
        $full =  JobCategory::updateOrCreate([
            'name' => 'Full Stack Software Developer',
            'slug' => Str::slug('Full Stack Software Developer'),
        ]);
        $network =  JobCategory::updateOrCreate([
            'name' => 'Network Engineer',
            'slug' => Str::slug('Network Engineer'),
        ]);
        $db =  JobCategory::updateOrCreate([
            'name' => 'Database Developer',
            'slug' => Str::slug('Database Developer'),
        ]);
        $block =  JobCategory::updateOrCreate([
            'name' => 'Blockchain Developer',
            'slug' => Str::slug('Blockchain Developer'),
        ]);
        $cyber =  JobCategory::updateOrCreate([
            'name' => 'CyberSecurity Engineer',
            'slug' => Str::slug('CyberSecurity Engineer'),
        ]);
        $cloud =  JobCategory::updateOrCreate([
            'name' => 'Cloud Security Engineer',
            'slug' => Str::slug('Cloud Security Engineer'),
        ]);
    }
}
