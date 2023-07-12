@extends('layouts.app')

@section('title', 'Detail Course Material')

@section('content')
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row gap-3">
                <div class="col-12">
                    <label for="course_id" class="form-label">Course</label>
                    <select name="course_id" id="course_id" class="form-select  @error('course_id') is-invalid @enderror"
                        disabled>
                        <option selected disabled>Select a course</option>
                        @foreach ($courses as $course)
                            <option value="{{ $course->id }}" @selected(old('course_id', $material->course_id) == $course->id)>{{ $course->title }}
                            </option>
                        @endforeach
                    </select>
                </div>
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
                <div class="col-12">
                    <label for="embed_link" class="form-label">Link</label>
                    <input type="text" class="form-control @error('embed_link') is-invalid @enderror" id="embed_link"
                        name="embed_link" placeholder="Enter the course material embed link"
                        value="{{ old('embed_link', $material->embed_link) }}" disabled>
                </div>
                <div class="col-12 text-end">
                    <a href="{{ route('materials.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
