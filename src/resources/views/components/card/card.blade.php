<div class="card">
  <div class="card-header">
    {{ $title }}
  </div>
  <div class="card-body">
    @foreach ($recurrings as $recurring)
      <div class="card-title">
        {{-- HACK: Modify if statement to display text when records of recurrings table is 0 --}}
        @empty($recurring->name)
            It seems that there is nothing here...
        @else
            {{ $recurring->name }}
        @endempty
      </div>
    @endforeach
  </div>
</div>
