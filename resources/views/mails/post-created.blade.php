<div>
    <h1>Dear {{ $post->user->name }}</h1>
    <h5>You created at {{ $post->created_at }} new post.</h5>
    <p>Post id: {{ $post->id }}</p>
    <div>{{ $post->short_content }}</div>
    <div>{{ $post->content }}</div>
    <strong>Thanks.</strong>
</div>
