<x-layouts.app>
  <x-slot:title>
    {{ $title }}
  </x-slot>
  <div class="img-fluid object-cover" alt="img"
    style="height: 65vh; background-image: url('assets/images/home.jpg'); background-position: center; background-size: cover">
  </div>
  <div class="container my-5">
    @foreach ($articles as $article)
      <x-article-card :article="$article" />
    @endforeach
  </div>
</x-layouts.app>

