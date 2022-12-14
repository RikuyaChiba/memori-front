<div class="card">
  <div class="card-header">
    {{ $title }}
  </div>
  <div class="card-body">
    @foreach ($recurrings as $recurring)
      <div class="recurring-item mb-2">
        <div class="card-title mb-0">
          {{-- HACK: Modify if statement to display text when records of recurrings table is 0 --}}
          @empty($recurring->name)
            It seems that there is nothing here...
          @else
            <p draggable="true">{{ $recurring->name }}</p>
          @endempty
        </div>
      </div>
    @endforeach
  </div>
</div>
