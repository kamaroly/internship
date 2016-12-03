<?php

namespace App\Http\Controllers;

use Sentry;
use App\Resume;
use App\Http\Requests\ResumeRequest;
use Illuminate\Http\Request;


class ResumeController extends Controller
{	
	/**
	 * Display the list of approved resumes
	 * 	
	 * @return view
	 */
    public function index()
    {
    	$resumes = Resume::paginate(20);

    	return view('resumes.index',compact('resumes'));
    }

    /**
     * Show the form for creating resume
     * 
     * @return 
     */
    public function create()
    {
    	$resume = new Resume;

    	return view('resumes.create',compact('resume'));
    }


    /**
     * Store a resume in the databsae
     * @param  ResumeRequest $request 
     * @return view   
     */
    public function store(ResumeRequest $request)
    {

    	$resume = new Resume($request->only('title','resume','file'));

    	$user = Sentry::getUser();

    	$user->resumes()->save($resume);

    	flash()->success('resume uploaded successfully');

    	return redirect()->route('resumes.index');
    }
}
