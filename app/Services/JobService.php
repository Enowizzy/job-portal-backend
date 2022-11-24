<?php

namespace App\Services;

use App\Models\Job;
use App\Models\JobCategory;
use App\Services\JobServiceInterface;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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
            Storage::delete("public/public/jobs/".$job->image);
     
            Storage::delete("public/public/jobs/".$job->pdf);
       
        if ( $job->delete()) {
            return response()->json([
                'success' => true,
                'code' => 1,
                'message' => 'Job Deleted Successfully!',
            ]);
        }
    }

    public function updateJobById($id, array $data)
    {
        return Job::find($id)->update($data);
    }

    public function getJobCategories()
    {
        return JobCategory::all();
    }
}
