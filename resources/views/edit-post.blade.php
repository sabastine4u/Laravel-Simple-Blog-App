<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Edit Post</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container py-5">
    <div class="mb-4">
    <a href="/blog-post" class="btn btn-outline-dark">
        ← Back to Blog
    </a>
</div>
    <h2>Edit Post</h2>

    <form action="/update/{{ $post->id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <input type="text" name="title" class="form-control" value="{{ $post->title }}" required>
        </div>

        <div class="mb-3">
            <textarea name="body" class="form-control" rows="5" required>{{ $post->body }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
  
</div>

</body>
</html>