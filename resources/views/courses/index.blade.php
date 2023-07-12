@extends('layouts.app')
@section('title', 'Courses')

@section('content')
    <div class="row">
        <div class="col-12 mb-3">
            <a href="{{ route('courses.create') }}" class="btn btn-primary">
                Create Course
            </a>
        </div>
        <div class="col">
            <div class="card shadow-sm">
                <div class="card-body">
                    <table class="table table-bordered wrap responsive display table-hover" id="myTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Duration</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courses as $course)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $course->title }}</td>
                                    <td>{{ $course->duration }}</td>
                                    <td>
                                        <a href="{{ route('courses.show', $course) }}"
                                            class="btn btn-sm btn-secondary fw-bold">
                                            Detail
                                        </a>
                                        <a href="{{ route('courses.edit', $course) }}"
                                            class="btn btn-sm btn-warning fw-bold">
                                            Edit
                                        </a>
                                        <a href="{{ route('courses.destroy', $course) }}"
                                            class="btn btn-sm btn-danger fw-bold" data-confirm-delete="true">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
