@extends('layouts.app')

@section('title', 'Form')

@section('content')
    <form action="{{ isset($todo) ? route('todos.update', $todo->id) : route('todos.store') }}" method="POST">
        @csrf
        @method(isset($todo) ? 'PUT' : 'POST')

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $todo->name ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description"
                value="{{ $todo->description ?? '' }}">
        </div>

        <div class="mb-3">
            <label for="due_date" class="form-label">Due Date</label>
            <input type="date" class="form-control" id="due_date" name="due_date" value="{{ $todo->due_date ?? '' }}"
                required>
        </div>

        <button class="btn btn-success">Save</button>

    </form>
@endsection
