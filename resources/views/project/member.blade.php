@extends('layouts.app')

@section('content')
 <div class="container">
   {{-- <div class="row justify-content-center">
    @if(Auth::user()->name)->exists())
    @foreach($Tasks as $project)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <div class="card-title">Task name:<h3>{{ $project->task_name }}</h3></div>
            <div class="card-text">
                Task description: <b>{{ $project->description }}</b><br />
                 Dateline: {{  $project->dateline }}<br />
                 Progress: {{  $project->progress}}<br />
               <a href="{{action('projectController@edit', $project->id)}}" class="btn btn-warning"><i class="fa fa-pencil" style="font-size:24px color:red;"></i>Edit</a> 
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
    @endif
    </div>
</div> --}}
 <table class="table">
 {{-- @if(Auth::user()->name) --}}
    @foreach($Tasks as $project)
                        <thead class="thead-dark">
                            <tr>
                           <th scope="col">#</th> 
                            {{-- <th scope="col"> Name</th> --}}
                            <th scope="col">Task name</th>
                            <th scope="col">Task description</th>
                            <th scope="col"> Dateline</th>
                            <th scope="col"> Progress:</th>
                            <th scope="col">Update Your Progress </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                         <th scope="row">1</th> 
                            <td>{{ $project->task_name }}</td>
                            <td>{{ $project->description }}</td>
                            <td>{{  $project->dateline }}</td>
                            <td>{{  $project->progress}}</td>
                            <td> <a href="{{action('ProjectController@edit', $project->id)}}" class="btn btn-warning"><i class="fa fa-pencil" style="font-size:24px color:red;"></i>Update</a>
                            </td>
                                
                            </tr>
                            
                        </tbody>
                         @endforeach
                        {{-- @endif   --}}
                       </table> 
                       </div>
@endsection