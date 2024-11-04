<x-layouts.app>
  <x-slot:title>
    {{ $title }}
  </x-slot>
  <div class="container-fluid min-vh-100 py-5">
    <div class="row h-25 d-flex align-items-center mx-md-5 mb-5">
      <div class="col-12">
        <h3 class="fw-bold text-center text-md-start">Our Writers:</h3>
      </div>
    </div>
    <div class="row h-75">
      @foreach ($writers as $writer)
        <a href="{{ route('writers.show', ['id' => $writer->id]) }}"
          class="col-12 col-md-4 text-decoration-none text-black">
          <div class="d-flex flex-column align-items-center text-center">
            <img src="{{ $writer->photo }}" class="card-img-top rounded-circle shadow-sm" alt="img"
              style="width: 175px; height: 175px;">
            <div class="card-body">
              <p class="fw-bold my-2">{{ $writer->name }}</p>
              <p class="">Spesialis {{ $writer->speciality }}</p>
            </div>
          </div>
        </a>
      @endforeach
    </div>
  </div>
</x-layouts.app>

