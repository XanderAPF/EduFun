<x-layouts.app>
  <x-slot:title>
    {{ $title }}
  </x-slot>
  <div class="container-fluid mt-5">
    <h5 class="mx-5">{{ $article->title }}</h5>
  </div>
  <div class="container">
    <img src="{{ $article->image }}" class="img-fluid bg-secondary rounded-5" style="height: 60vh; width: 100%;"
      alt="img">
    <p class="mb-3">
      {{ \Carbon\Carbon::parse($article->date)->format('d M Y') }} | by:
      {{ $article->writer->name }}
    </p>
    <p>
      {{ $article->content }}
    </p>
  </div>
</x-layouts.app>
