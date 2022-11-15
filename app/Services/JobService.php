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
        $job_list = Job::all();
        return response()->file(public_path('jobs/'. $job_list->image));
        return response($job_list);
    }

    public function pdf($pdf_file)
    {
        # code...
        $file      = $pdf_file;
        $filename  = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $picture   = date('His') . '-' . $filename;
        $file->move(public_path('jobs'), $picture);
        return $picture;
    }
    public function image($image_files)
    {
        # code...
        $image_file      = $image_files;
        $_image_name  = $image_file->getClientOriginalName();
        $extension = $image_file->getClientOriginalExtension();
        $image   = date('His') . '-' . $_image_name;
        $image_file->move(public_path('jobs'), $image);
        return $image;
    }

    public function response($json)
    {
        if ($json) {
            return response()->json([
                'success' => true,
                'code' => 1,
                'message' => 'job posted successful',
            ]);
        } else {
            return response()->json([
                'success' => false,
                'code' => 2,
                'message' => 'error has occur please try again later',
            ], 500);
        }
    }
}
