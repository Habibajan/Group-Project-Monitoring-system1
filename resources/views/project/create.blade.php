@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Devide the thasks</div>
                <form action="{{ route('project.store') }}" method="post">
                    <div class="card-body">
                        @csrf
                      
                        <label>Name</label>
                        <input type="text" class="form-control" name="user_name" />
                        <label>Task Name</label>
                        <input type="text" class="form-control" name="task_name" />
                         <label>Description</label>
                        <input type="textarea" class="form-control" name="description" />
                         <label>Dateline</label>
                        <input type="date" class="form-control" name="dateline" />
                        <input style="display: none;"  type="number" class="form-control" name="progress" />
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form> 
                {{-- <form action="{{ route('project.store') }}" method="post">
                 @csrf
                    <div class="form-row">
                        <div class="col-7">
                        <label>Task Name</label>
                        <input type="text" class="form-control" name="task_name" />
                        </div>
                        <div class="col">
                        <label>Description</label>
                            <input type="textarea" class="form-control" name="description" />
                        </div>
                        <div class="col">
                        <label>Dateline</label>
                        <input type="date" class="form-control" name="dateline" />    </div>
                        <div class="col">
                        <label>Progress</label>
                        <input type="number" class="form-control" name="progress" />    </div>
                        <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </div>
            </form> --}}
            </div>
        </div>
        
    </div>
</div>
@endsection