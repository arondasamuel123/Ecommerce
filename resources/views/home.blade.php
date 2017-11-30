@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" align="center">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p align="center">Welcome to BootsForU!</p>
                    <p align="center">Click the button to get started</p>
                        <div align="center">
                    <a href="{{ url ('/home1') }}" class="btn btn-primary">HOME</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
