<x-layouts.app>
  <x-slot:title>
    {{ $title }}
  </x-slot>
  <div class="container my-5">
    <h2 class="mb-3">{{ $category->name }}</h2>
    @foreach ($articles as $article)
      <x-article-card :article="$article" />
    @endforeach
  </div>
</x-layouts.app>

