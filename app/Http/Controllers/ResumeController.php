<?php

namespace App\Http\Controllers;

use Sentry,Log;
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
        if (request()->has('q')) {
            $resumes = Resume::search(request()->get('q'))->paginate(20);
        }
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
     * Show resume in a form to edit
     * @param  integer  $resume  unique id of the resume  
     * @return
     */
    public function  edit($resume)
    {
        // Retrieve resume from the database 
        // using its ID  if we dont find it
        // we will generate an exception 
        // and log it in the logs.
        $resume = Resume::findOrFail($resume); 

        return view('resumes.edit',compact('resume'));
    }

    /**
     * Store a resume in the databsae
     * @param  ResumeRequest $request 
     * @return view   
     */
    public function store(ResumeRequest $request,$resumeId = null)
    {

        $data   = $request->only('title','resume','file');
        $data   = array_map('trim',$data); // Remove any trailing space

        // If resume ID id not null, then we assume the user 
        // wants to update existing resume. therefore
        // we need to find exisitng resume and update 
        // its information, no need to create a new one.
        // 
        if (!is_null($resumeId)) {
            // Finding existing resume
            $foundResume = Resume::findOrFail($resumeId);
            // Updating resume
            $foundResume->update($data);

            // Notifying in the browser that the resume
            // has been updated
            flash()->success('Resume successfully updated');

            // Redirect to the resume list.
            return redirect()->route('resumes.index');
        }

        $resume = new Resume($data);
    	$user = Sentry::getUser();
    	$user->resumes()->save($resume);

    	flash()->success('resume uploaded successfully');

    	return redirect()->route('resumes.index');
    }

    /**
     * Method to remove the resume from the database
     * @param   $resumeId 
     * @return  redirect
     */
    public function destroy($resumeId)
    {
        // Find resume to delete
         $foundResume = Resume::findOrFail($resumeId);
         // Log that someone has deleted the resume
         Log::warning(Sentry::getUser()->email.' has deleted the resume with details :'.$foundResume->toJson());

         $foundResume->delete();

        flash()->warning('Resume has been deleted');
        return redirect()->route('resumes.index');
    }
}
