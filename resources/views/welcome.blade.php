@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="card-title fw-bold">
                        Course Count
                    </h3>
                    <h4 class="m-0">
                        {{ $courses }}
                    </h4>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="card-title fw-bold">
                        Course Material Count
                    </h3>
                    <h4 class="m-0">
                        {{ $materials }}
                    </h4>
                </div>
            </div>
        </div>
    </div>
@endsection
