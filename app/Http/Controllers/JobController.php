<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Services\JobServiceInterface;

class JobController extends Controller
{
    public $jobServiceInterface;

    function  __construct(JobServiceInterface $jobServiceInterface)
    {
        $this->jobServiceInterface = $jobServiceInterface;
    }

    public function create(Request $request)
    {
        if ($request->hasFile('pdf') && $request->hasFile('image')) {
            $file      = $request->file('pdf');
            $filename  = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $picture   = date('His') . '-' . $filename;
            $file->move(public_path('jobs'), $picture);

            $image_file      = $request->file('image');
            $_image_name  = $image_file->getClientOriginalName();
            $extension = $image_file->getClientOriginalExtension();
            $image   = date('His') . '-' . $_image_name;
            $image_file->move(public_path('jobs'), $image);

            $input = $request->all();
            $json = Job::create(array_merge(
                $input,
                [
                    'position' => $request->position,
                    'company' => $request->company,
                    'location' => $request->location,
                    'message' => $request->message,
                    'pdf' => $picture,
                    'image' => $image,
                    // 'images' => implode(',', $image)
                ]
            ));
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
        } else {
            return response()->json(["message" => "Select image first."]);
        }
    }

    public function show()
    {
        return  $this->jobServiceInterface->getJobList();
    }
    public function getJobImageList()
    {
        return  $this->jobServiceInterface->getJobImageList();
    }

    
}
