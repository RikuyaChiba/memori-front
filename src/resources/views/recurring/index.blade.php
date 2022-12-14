@extends('layouts.master')

@section('title', $title)

@section('content')
<div class="container-fluid">
  <div class="row mt-3">
  {{-- TODO: Create a sidebar --}}
    <div class="col-3"></div>
    <div class="col-3">
      @component('components.card.card',
        [
            'title' => 'Today',
            'recurrings' => $recurrings['first_day'],
        ])
      @endcomponent
    </div>
    <div class="col-3">
      @component('components.card.card',
        [
          'title' => '1day recurring',
          'recurrings' => $recurrings['one_day'],
        ])
      @endcomponent
    </div>
    <div class="col-3">
      @component('components.card.card',
        [
          'title' => '3day recurring',
          'recurrings' => $recurrings['three_day'],
        ])
      @endcomponent
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-3"></div>
    <div class="col-3">
      @component('components.card.card',
        [
          'title' => '1week recurring',
          'recurrings' => $recurrings['one_week'],
        ])
      @endcomponent
    </div>
    <div class="col-3">
      @component('components.card.card',
        [
          'title' => '2week recurring',
          'recurrings' => $recurrings['two_week'],
        ])
      @endcomponent
    </div>
    <div class="col-3">
      @component('components.card.card',
        [
          'title' => '1month recurring',
          'recurrings' => $recurrings['one_month'],
        ])
      @endcomponent
    </div>
  </div>
</div>
@endsection
