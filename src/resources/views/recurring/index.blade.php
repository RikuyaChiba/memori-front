@extends('layouts.master')

@section('title', $title)

@section('content')
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">
                0day recurring
            </div>
            <div class="card-body">
                @foreach ($recurrings as $recurring)
                <div class="card-title">
                    {{-- HACK: Modify if statement to display text when records of recurrings table is 0 --}}
                    @empty($recurring->name)
                        It seems there is nothing here...
                    @else
                        {{ $recurring->name }}
                    @endempty
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
