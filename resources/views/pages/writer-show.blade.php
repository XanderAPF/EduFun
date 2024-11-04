<x-layouts.app>
  <x-slot:title>
    {{ $title }}
  </x-slot>
  <div class="container my-5">
    <div class="d-flex mb-4">
      <img src="{{ $writer->photo }}" class="img-fluid bg-secondary rounded-circle" width="60" height="60"
        alt="" srcset="">
      <div class="ms-3 text-center">
        <p class="m-0 fw-bold">{{ $writer->name }}</p>
        <p class="m-0">{{ $writer->speciality }}</p>
      </div>
    </div>
    @if (count($articles) > 0)
      @foreach ($articles as $article)
        <x-article-card :article="$article" />
      @endforeach
    @else
      <h5 class="text-center">Belum Ada artikel yang ditulis</h5>
    @endif
  </div>
</x-layouts.app>

