<?php

namespace App\Services;


interface JobServiceInterface
{
    public function getJobList();
    public function getJobImageList();
    public function pdf($pdf_file);
    public function image($image_files);
    public function response($json);
   
}
