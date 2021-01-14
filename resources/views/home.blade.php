@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">
                Create a band
            </div>
            <div class="card-body">
                <h5 class="card-title">Click on the "New band" button to create a band</h5>
                <p class="card-text">Fill in all required fields and click on "Create" to create your band.</p>
                <a class="btn btn-primary" href="{{ route('createband') }}">New Band</a>
            </div>
        </div>
    </div>
</div>
@endsection
