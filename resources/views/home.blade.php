@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Hello <h7 style="color:red;">{{ Auth::user()->name }}</h7> <h7>&#128512;</h7></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Logged in Successfully !!!') }}<br/>
                    Go To <a href="{{ route('student.index') }}">{{ __('Dashboard') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
