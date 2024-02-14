@extends('base')

@section('title', 'Tous nos articles')

@section('content')

    <div class="bg-light p-5 mb-5 text-center">
        <form action="" method="get" class="container d-flex gap-2">
            <input placeholder="Mot clé" type="text" name="title" id="" class="form-control"
                value="{{ $input['title'] ?? '' }}">
            <button class="btn btn-primary btn-sm flex-grow-0">Rechercher</button>
        </form>
    </div>


    <div class="container">
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-3 mb-4">
                    @include('post.card')
                </div>
            @endforeach
        </div>

        <div class="my-4">
            {{ $posts->links() }}
        </div>
    </div>


@endsection
