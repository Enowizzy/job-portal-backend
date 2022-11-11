<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function jobs(Request $request)
    {
        if ($request->hasFile('pdf')) {
            $file      = $request->file('pdf');
            $filename  = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $picture   = date('His') . '-' . $filename;
            $file->move(public_path('jobs'), $picture);
            $input = $request->all();
            $json = Job::create(array_merge(
                $input,
                [
                    'name' => $request->name,
                    'email' => $request->email,
                    'subject' => $request->subject,
                    'message' => $request->message,
                    'pdf' => $picture,
                    'image' => $picture,
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
}
