<div class="card">
  <div class="card-header">
    {{ $title }}
  </div>
  <div class="card-body">
    <ul class="recurring-items list-group">
      @foreach ($recurrings as $recurring)
        <li class="recurring-item list-group-item mb-2">
          {{-- HACK: Modify if statement to display text when records of recurrings table is 0 --}}
          @empty($recurring->name)
            It seems that there is nothing here...
          @else
            {{ $recurring->name }}
          @endempty
        </li>
      @endforeach
    </ul>
  </div>
</div>
