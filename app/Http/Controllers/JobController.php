<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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

    //Show create form
    public function create()
    {
        return view('jobs.create');
    }

    //Store job
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('jobs', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Job::create($formFields);
        
        return redirect('/')->with('message', 'Job created successfully!');
    }
}
