<h1>投稿一覧</h1>

@foreach ($posts as $post)
    <div style="margin-bottom: 20px;">
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
    </div>
@endforeach