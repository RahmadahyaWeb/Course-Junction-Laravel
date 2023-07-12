@extends('layouts.app')

@section('title', 'Detail Course')

@section('content')
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row gap-3">
                <div class="col-12">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                        name="title" placeholder="Enter the course title" value="{{ old('title', $course->title) }}"
                        disabled>
                </div>
                <div class="col-12">
                    <label for="summernote" class="form-label">Description</label>
                    <textarea class="form-control" id="show" disabled>{{ $course->description }}</textarea>
                </div>
                <div class="col-12">
                    <label for="duration" class="form-label">Duration</label>
                    <input class="html-duration-picker form-control @error('duration') is-invalid @enderror" name="duration"
                        id="duration" value="{{ $course->duration }}" disabled>
                </div>
                <div class="col-12 text-end">
                    <a href="{{ route('courses.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
