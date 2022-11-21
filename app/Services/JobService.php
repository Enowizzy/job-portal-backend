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
    public function viewJobById($id)
    {
        $job = Job::find($id);
        if (is_null($job)) {
            return response()->json([
                'success' => false,
                'code' => 2,
                'message' => 'Oops! looks like job details not found here',
            ]);
        }
        return response()->json($job, 200);
    }
    public function deleteJobById($id)
    {
        $job = Job::find($id);
        if (is_null($job)) {
            return response()->json([
                'success' => false,
                'code' => 2,
                'message' => 'Oops! looks like job details not found here',
            ]);
        }
        $image_path = public_path('public/jobs/'. $job->image);
        $pdf_path = public_path('public/jobs/'. $job->pdf);
        if($image_path && $pdf_path){
            return $job->delete();
        }
       
    }
}
