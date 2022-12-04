@extends('layouts.master')

@section('title', $title)

@section('content')
    <div class="container mt-2">
        @if ($errors->all())
            <div class="error">
                @foreach ($errors->all() as $error)
                    <p class="mb-0">{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <div class="card mt-2">
            <div class="card-body">
                <h5 class="card-title">Save recurring task</h5>
                <form action="{{ route('recurring_create') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="recurringName">Task Name</label>
                        <input id="recurringName" class="form-control" type="text" name="name" placeholder="Things you wanted to remenber you just learned.">
                        <button type="submit" class="btn btn-primary mt-2">save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
