<?php

namespace App\Services;


interface JobServiceInterface
{
    public function getJobList();
    public function getLatestJobList();
    public function pdf($pdf_file);
    public function image($image_files);
    public function response($json);
    public function viewJobById($id);
    public function deleteJobById($id);
    public function updateJobById($id, array $data);
    public function getJobCategories();
   
}
