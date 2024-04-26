@extends('layouts.app')

@section('title', 'Todos')

@section('content')
    <div>
        <a href="{{ route('todos.create') }}" class="btn btn-primary">Add Todo</a>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Due Date</th>
                    <th>Completed</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($todos as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->due_date }}</td>
                        <td>{{ $item->completed }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="{{ route('todos.edit', $item->id) }}" class="btn btn-info ">Edit</a>

                                <form action="{{ route('todos.destroy', $item->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf

                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
