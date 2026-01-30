<h1>Liste des Posts</h1>

<a href="/posts/create">Ajouter un post</a>

<ul>
    @foreach($posts as $post)
        <li>
            <strong>{{ $post->titre }}</strong><br>
            {{ $post->contenu }}
        </li>
    @endforeach
</ul>
