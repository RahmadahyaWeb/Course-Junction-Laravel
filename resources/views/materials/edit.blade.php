@extends('layouts.app')

@section('title', 'Edit Course Material')

@section('content')
    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('materials.update', $material) }}" method="POST">
                @csrf
                @method('put')
                <div class="row gap-3">
                    <div class="col-12">
                        <label for="course_id" class="form-label">Course</label>
                        <select name="course_id" id="course_id" class="form-select  @error('course_id') is-invalid @enderror">
                            <option selected disabled>Select a course</option>
                            @foreach ($courses as $course)
                                <option value="{{ $course->id }}" @selected(old('course_id', $material->course_id) == $course->id)>{{ $course->title }}
                                </option>
                            @endforeach
                        </select>
                        @error('course_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                            name="title" placeholder="Enter the course material title"
                            value="{{ old('title', $material->title) }}">
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="summernote" class="form-label">Description</label>
                        <textarea name="description" id="summernote" class="@error('description') is-invalid @enderror">{{ old('description', $material->description) }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="duration" class="form-label">Duration</label>
                        <input type="text"
                            class="html-duration-picker form-control @error('duration') is-invalid @enderror"
                            name="duration" id="duration" value="{{ old('duration', $material->duration) }}">
                        @error('duration')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="embed_link" class="form-label">Link</label>
                        <input type="text" class="form-control @error('embed_link') is-invalid @enderror" id="embed_link"
                            name="embed_link" placeholder="Enter the course material embed link"
                            value="{{ old('embed_link', $material->embed_link) }}">
                        @error('embed_link')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-12 text-end">
                        <a href="{{ route('materials.index') }}" class="btn btn-secondary">Back</a>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
