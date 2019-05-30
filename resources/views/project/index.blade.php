@extends('layouts.app')

@section('content')
<div class="container">
            <div class="card-header">Group Project Monitoring System    <br><br>
                 <nav class="navbar navbar-light bg-light">
                <form class="form-inline">
                @csrf
                    <button class="btn btn-outline-success" type="button"><a class="nav-link" href="{{ route('project.create') }}"><strong>Add Project Tasks
                           </strong> </a></button> &nbsp&nbsp
                    {{-- <button class="btn btn-sm btn-outline-primary" type="button"><a class="nav-link" href="{{ route('project.index') }}"><strong>View progress
                            </strong></a></button> --}}
                </form>
                </nav>
                </div><br> <br>
                
    <div class="row justify-content-center">
   
    @foreach($Tasks as $project)
    <div class="card" style="width: 40rem;">
        <div class="card-body">
            <div class="card-title"><h3>{{ $project->user_name }}</h3></div>
            <div class="card-text">
                 Task name: <b>{{  $project->task_name}}</b><br />
                Task description: <b>{{ $project->description }}</b><br />
                 Dateline: {{  $project->dateline }}<br />
                 Progress: {{  $project->progress}}<br />
                {{-- <a href="{{action('projectController@edit', $project->id)}}" class="btn btn-warning"><i class="fa fa-pencil" style="font-size:24px color:red;"></i>Edit</a> --}}
                <div>
                
                 <form action="{{ route('project.destroy', $project->id)}}" method="post">
                  @csrf
                  
                  <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i>Delete</button>
                </form> 
                </div>
            </div>

        </div>
    </div>
    @endforeach
    </div>
</div>
@endsection