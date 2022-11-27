@extends('layouts.master')

@section('title', $title)

@section('content')
    <div class="container">
        <div class="card mt-2">
            <div class="card-body">
                <h5 class="card-title">Save recurring task</h5>
                <form action="#" method="POST">
                    <div class="form-group">
                        {{ csrf_field() }}
                        <label for="recurringName">Task Name</label>
                        <input id="recurringName" class="form-control" type="" placeholder="Things you wanted to remenber you just learned.">
                        <a href="#" class="btn btn-primary mt-2">save</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
