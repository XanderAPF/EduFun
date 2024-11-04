<x-layouts.app>
  <x-slot:title>
    {{ $title }}
  </x-slot>
  <div class="container py-5">
    <h3>Popular</h3>
    @foreach ($articles as $article)
      <x-article-card :article="$article" />
    @endforeach
    <div class="py-3">
      {{ $articles->links('pagination::bootstrap-5') }}
    </div>
  </div>
</x-layouts.app>
