@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit progess</div>
                <form action="{{ route('project.update',$project->id)}}" method="post">
                    <div class="card-body">
                        @csrf
            
                        <input style="display: none;"  type="text" value="{{$project->user_name}}" class="form-control" name="user_name" />
            
                        <input style="display: none;"  type="text" value="{{$project->task_name}}" class="form-control" name="task_name" />
             
                        <input style="display: none;"  type="textarea" value="{{$project->description}}" class="form-control" name="description" />
             
                        <input style="display: none;"  type="date" value="{{$project->dateline}}" class="form-control" name="dateline" />
                        <label>Progress</label>
                        <input type="text" class="form-control" name="progress" value="{{$project->progress}}"/>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary"> Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection