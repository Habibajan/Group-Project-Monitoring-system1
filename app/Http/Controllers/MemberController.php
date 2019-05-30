<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Illuminate\Http\Request;
use App\Member;
use App\Project;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $Tasks = Project::get();
        
        // $Tasks = DB::select('select * from projects where user_name = : "'.Auth::user()->name.'"');    
      
        // $Tasks = Project::all(" WHERE user_name = '".Auth::user()->name."'");
        
        // $Tasks =  Project::all()::where('user_name', Auth::user()->name)->get();
        // " WHERE user_name = '".Auth::user()->name."'" ;
        //// return " WHERE user_name = '".Auth::user()->name."'" ;//.compact('project');
        // return view('stud_view',['users'=>$users]);
        // if (Project::where('user_name',Auth::user()->name)->exists()) {
    
            // $project = Project::find($name);
            // $tasks = $this->getTasks($name);
            // $permissions = $this->getPermissions($id);
                //   $Tasks = Project::get();

                    //  return view('project.member', ['projects' => $Tasks],compact('Tasks'));

            // return view('project.member')->withTasks($Tasks);
        // }
        $Tasks = DB::select('select * from projects where user_name = ?',['Mohammad reza']);// (Auth::user()->name)->get());
          return view('project.member', ['projects' => $Tasks],compact('Tasks'));
          
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        // $Tasks = DB::select('select * from projects WHERE user_name = "'.Auth::user()->name.'"');       
  
        //   return view('project.member', compact('Tasks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
