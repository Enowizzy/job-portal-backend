<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Actions\CreateJob;
use Illuminate\Http\Request;
use App\Services\JobServiceInterface;
use App\Http\Requests\CreateJobRequest;

class JobController extends Controller
{
    public $jobServiceInterface;

    function  __construct(JobServiceInterface $jobServiceInterface)
    {
        $this->jobServiceInterface = $jobServiceInterface;
    }
    public function create(CreateJobRequest $request, CreateJob $createJob)
    {
        return $createJob->handle($request);
    }
    public function show()
    {
        return  $this->jobServiceInterface->getJobList();
    }
    public function view()
    {
        return  $this->jobServiceInterface->getLatestJobList();
    }
    public function viewJobs($id)
    {
        return  $this->jobServiceInterface->viewJobById($id);
    }
    public function delete($id)
    {
        return  $this->jobServiceInterface->deleteJobById($id);
    }
    public function update(Request $request,$id)
    {
        $data = $request->all();
        return  $this->jobServiceInterface->updateJobById($id, $data);
    }
    public function job_categories()
    {
        return $this->jobServiceInterface->getJobCategories();
    }
  
}
