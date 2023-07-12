@extends('layouts.app')
@section('title', 'Course Materials')

@section('content')
    <div class="row">
        <div class="col-12 mb-3">
            <a href="{{ route('materials.create') }}" class="btn btn-primary">
                Create Course Material
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
                                <th>Course</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($materials as $material)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $material->title }}</td>
                                    <td>{{ $material->duration }}</td>
                                    <td>{{ $material->course->title }}</td>
                                    <td>
                                        <a type="button" href="" class="btn btn-sm btn-dark fw-bold"
                                            data-bs-toggle="modal" data-bs-target="#modal{{ $material->id }}">
                                            Preview
                                        </a>
                                        @include('materials.modal')
                                        <a href="{{ route('materials.show', $material) }}"
                                            class="btn btn-sm btn-secondary fw-bold">
                                            Detail
                                        </a>
                                        <a href="{{ route('materials.edit', $material) }}"
                                            class="btn btn-sm btn-warning fw-bold">
                                            Edit
                                        </a>
                                        <a href="{{ route('materials.destroy', $material) }}"
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
