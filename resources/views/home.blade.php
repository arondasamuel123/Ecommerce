@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome to BootsForU! Click the button to get started
                    <a href="{{ url ('/home1') }}" class="btn btn-primary">HOME</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
