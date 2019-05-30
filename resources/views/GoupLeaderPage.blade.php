@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
           
                <div class="card-header">Group Project Monitoring System    <br><br>
                 <nav class="navbar navbar-light bg-light">
                <form class="form-inline">
                    <button class="btn btn-outline-success" type="button"><a class="nav-link" href="{{ route('project.create') }}"><strong>Add Project Tasks
                           </strong> </a></button> &nbsp&nbsp
                    <button class="btn btn-sm btn-outline-primary" type="button"><a class="nav-link" href="{{ route('project.index') }}"><strong>View progress
                            </strong></a></button>
                </form>
                </nav></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="alert alert-success" role="alert">
                            <p>You are logged in As a Group Leader </p>
    
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
