@extends('base')

@section('content')
    <div class="bg-light p-5 mb-5 text-center">
        <div class="container">
            <h1>Blog lorem ipsum</h1 <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis enim ea
            delectus inventore. Possimus officiis libero laudantium, perspiciatis qui suscipit exercitationem maiores,
            reprehenderit illum ex est optio vel quasi doloremque, voluptatibus aliquam non officia eos expedita numquam
            dolore vitae? Similique, fugit rerum dicta ex incidunt praesentium tempore pariatur dolorem nam!</p>
        </div>
    </div>

    <div class="container">
        <h2>Nos derniers articles</h2>
        <div class="row">
            @foreach ($posts as $post)
                <div class="col">
                    @include('post.card', ['post' => $post])
                </div>
            @endforeach

        </div>
    </div>
@endsection
