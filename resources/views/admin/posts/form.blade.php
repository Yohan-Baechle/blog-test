@extends('admin.admin')

@section('title', $post->exists ? 'Editer un article' : 'Créer un article')

@section('content')
    <h1>@yield('title')</h1>

    <form class="vstack gap-2" action="{{ route($post->exists ? 'admin.post.update' : 'admin.post.store', $post) }}"
        method="POST">

        @csrf
        @method($post->exists ? 'put' : 'post')

        <div class="row">
            @include('shared.input', [
                'class' => 'col',
                'label' => 'Titre',
                'name' => 'title',
                'value' => $post->title,
            ])
            <div class="col row">
                @include('shared.input', [
                    'class' => 'col',
                    'label' => 'Image',
                    'name' => 'picture',
                    'value' => $post->picture,
                ])
            </div>
        </div>
        @include('shared.input', [
            'type' => 'textarea',
            'class' => 'col',
            'label' => 'Contenu',
            'name' => 'content',
            'value' => $post->content,
        ])

        <div>
            <button class="btn btn-primary">
                @if ($post->exists)
                    Modifier
                @else
                    Créer
                @endif

            </button>
        </div>

    </form>
@endsection
