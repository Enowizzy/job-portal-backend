<?php

namespace App\Services;

use App\Models\Job;
use App\Services\JobServiceInterface;
use Illuminate\Support\Facades\Request;

class JobService implements JobServiceInterface
{
    public function __construct()
    {
        //
    }

    public function getJobList()
    {
       return Job::all();
    }
    public function pdf($pdf_file)
    {
    }
    public function image($image_files)
    {
    }

    public function response($json)
    {
    }
}
