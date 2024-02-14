@extends('admin.admin')

@section('title', 'Tous les articles')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Tous les articles</h1>
        <a href="{{ route('admin.post.create') }}" class="btn btn-primary">Ajouter un article</a>
    </div>
    <div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Image</th>
                    <th>Contenu</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td><img src="{{ $post->picture }}}" width="200" alt="photo de l'article"></td>
                        <td>{{ $post->content }}</td>
                        <td>
                            <div class="d-flex gap-2 w-100 justify-content-end">
                                <a href="{{ route('admin.post.edit', $post) }}" class="btn btn-primary">Editer</a>
                                <form action="{{ route('admin.post.destroy', $post) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">Supprimer</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{ $posts->links() }}

@endsection
