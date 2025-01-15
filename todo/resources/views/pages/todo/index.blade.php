@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="page-title">To-do List</h1>
            </div>

            <div class="col-lg-12">
                <form action="{{ route('todo.store') }}" class="form-background" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label for="exampleFormControlInput1" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Enter title">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Sumit</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($tasks as $key => $task)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td>{{ $task->title }}</td>
                                <td>{{ $task->description }}</td>
                                <td>
                                    @if ($task->done == 0)
                                        <span class="badge text-bg-danger">Not Completed</span>
                                    @else
                                        <span class="badge text-bg-success">Completed</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('todo.delete', $task->id) }}" class="btn btn-danger">Delete</a>
                                    <a href="{{ route('todo.done', $task->id) }}" class="btn btn-success">Done</a>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>


        </div>
    </div>
@endsection

@push('css')
    <style>
        .page-title {
            font-size: 40px;
            font-weight: bold;
            color: #055e16;
        }

        .form-background {
            background-color: #ecedff;
            padding: 20px;
            border-radius: 5px;
        }
    </style>
@endpush
