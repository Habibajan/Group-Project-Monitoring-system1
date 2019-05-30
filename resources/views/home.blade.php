@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome to Group project Monitoring System
               
                            <nav class="navbar navbar-light bg-light">
                                <form class="form-inline">
                                @csrf
                                    <button class="btn btn-outline-success" type="button"> <a class="nav-link" href="{{ route('project.member') }}"><strong>Update Your progress
                                        </strong>  </a></button>
                                
                                </form>
                            </nav>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="alert alert-success" role="alert">
                            <p>You are logged in As a member </p>
    
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
