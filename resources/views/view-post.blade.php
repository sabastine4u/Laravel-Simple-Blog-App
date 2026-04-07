<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $post->title }}</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body { font-family: Arial, sans-serif; background: #f8f9fa; padding: 50px 20px; }
.container { max-width: 800px; margin: auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); }
h1 { margin-bottom: 20px; }
.comments { margin-top: 40px; }
.comment { border-top: 1px solid #ddd; padding: 15px 0; }
.comment:first-child { border-top: none; }
</style>
</head>
<body>

<div class="container">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>

    <div class="comments">
        <h4>Comments ({{ $post->comments->count() }})</h4>
        @forelse($post->comments as $comment)
            <div class="comment">
                <strong>{{ $comment->author }}</strong>
                <p>{{ $comment->body }}</p>
            </div>
        @empty
            <p>No comments yet.</p>
        @endforelse
    </div>
    <div class="mt-4">
    <h5>Add Comment</h5>

    <form action="/comments" method="POST">
        @csrf
        <input type="hidden" name="post_id" value="{{ $post->id }}">

        <div class="mb-3">
            <input type="text" name="author" class="form-control" placeholder="Your Name" required>
        </div>

        <div class="mb-3">
            <textarea name="body" class="form-control" rows="3" placeholder="Your Comment" required></textarea>
        </div>

        <button type="submit" class="btn btn-success">Post Comment</button>
    </form>
</div>
    <div class="mb-4">
    <a href="/blog-post" class="btn btn-outline-dark" style="margin-top:20px">
        ← Back to Blog
    </a>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>