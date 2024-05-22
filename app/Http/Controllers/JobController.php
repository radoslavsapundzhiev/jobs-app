<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    //Get all jobs
    public function index()
    {
        return view('jobs.index', [
            'jobs' => Job::latest()->filter(request(['tag', 'search']))->paginate(6)
        ]);
    }

    //Get single job
    public function show(Job $job)
    {
        return view('jobs.show', [
            'job' => $job
        ]);
    }
}
