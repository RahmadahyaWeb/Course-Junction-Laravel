@extends('layouts.app')

@section('title', 'Edit Course')

@section('content')
    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('courses.update', $course) }}" method="POST">
                @csrf
                @method('put')
                <div class="row gap-3">
                    <div class="col-12">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                            name="title" placeholder="Enter the course title" value="{{ old('title', $course->title) }}">
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="summernote" class="form-label">Description</label>
                        <textarea name="description" id="summernote" class="@error('description') is-invalid @enderror">{{ old('description', $course->description) }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="duration" class="form-label">Duration</label>
                        <input class="html-duration-picker form-control @error('duration') is-invalid @enderror"
                            name="duration" id="duration" value="{{ $course->duration }}">
                        @error('duration')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-12 text-end">
                        <a href="{{ route('courses.index') }}" class="btn btn-secondary">Back</a>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
