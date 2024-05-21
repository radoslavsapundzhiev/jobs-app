<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    //Show all jobs
    public function index() {
        return view('jobs.index', [
            'jobs' => Job::latest()->paginate(6)
        ]);
    }
}
