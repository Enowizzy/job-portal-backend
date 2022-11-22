<?php

namespace App\Services;

use App\Models\Job;
use App\Services\JobServiceInterface;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;

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
        foreach($job->image as $image){
            Storage::delete("public/public/jobs/{$image}");
        }
        foreach($job->pdf as $pdf){
            Storage::delete("public/public/jobs/{$pdf}");
        }
        $job->delete();
    }

    public function updateJobById($id, array $data)
    {
        return Job::find($id)->update($data);
    }
}
