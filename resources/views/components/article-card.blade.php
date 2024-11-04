<div class="row mb-3">
  <div class="col-12 col-md-4">
    <img src="{{ $article->image }}" class="rounded-4" alt="img" width="100%" height="200px">
  </div>
  <div class="col-12 col-md-8">
    <h5>{{ $article->title }}</h5>
    <p class="mb-1">
      {{ \Carbon\Carbon::parse($article->date)->format('d M Y') }} | by:
      {{ $article->writer->name }}
    </p>
    <p class="limited-text">
      {{ $article->content }}
    </p>
    <div class="d-flex justify-content-end">
      <a href="{{ route('detail.show', ['id' => $article->id]) }}" class="btn btn-dark fw-semibold">read
        more...</a>
    </div>
  </div>
</div>
