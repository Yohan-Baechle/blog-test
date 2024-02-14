<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{ $post->picture }}" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">{{ $post->title }}</h5>
        <p class="card-text">{{ $post->content }}</p>
        <a href="{{ route('post.show', ['slug' => $post->getSlug(), 'post' => $post]) }}" class="btn btn-primary">Voir
            plus</a>
    </div>
</div>
