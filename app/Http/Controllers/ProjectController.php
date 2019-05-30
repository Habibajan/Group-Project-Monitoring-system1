<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Tasks = Project::get();

        return view('project.index', compact('Tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('project.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new Project;
        $project->task_name = $request->get('task_name');
        $project->description = $request->get('description');
        $project->dateline = $request->get('dateline');
        $project->user_name = $request->get('user_name');
        $project->progress = $request->get('progress');
        $project->user()->associate($request->user());

        $project->save();

        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);

        return view('project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project = Project::find($id);
        $project->task_name = $request->get('task_name');
        $project->description = $request->get('description');
        $project->dateline = $request->get('dateline');
        $project->user_name = $request->get('user_name');
        $project->progress = $request->get('progress');
        $project->user()->associate($request->user());

        $project->save();  
        return redirect('/project/member')->with('success', 'project has been deleted Successfully');  
        // return $this->member();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
    
         return redirect('/project')->with('success', 'project has been deleted Successfully');    
        }
}
