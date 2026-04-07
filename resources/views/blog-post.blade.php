<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Blog Posts</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
/* Header wrapper with flex to align icons left and right */
.header-wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    margin-bottom: 40px;
}

/* H1 in center with spacing */
.header-wrapper h1 {
    margin: 0 40px;
}

/* Floating icon container */
.header-icons {
    display: flex;
    gap: 10px;
}

/* Horizontal wave animation */
@keyframes floatWave {
    0%, 100% { transform: translateX(0); }
    25% { transform: translateX(8px); }
    50% { transform: translateX(0); }
    75% { transform: translateX(-8px); }
}

/* Apply animation to all icons */
.header-icons svg {
    animation: floatWave 2s ease-in-out infinite;
}

/* Different speeds for variety */
.header-icons svg:nth-child(1) { animation-duration: 2s; }
.header-icons svg:nth-child(2) { animation-duration: 2.5s; }
.header-icons svg:nth-child(3) { animation-duration: 3s; }
</style>
</head>
<body>
<div class="container py-5">

    <!-- Blog Title with Icons on Both Sides -->
    <div class="header-wrapper">
        <div class="header-icons">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="text-danger" viewBox="0 0 16 16">
                <path d="M8 0L6 5h4L8 16l4-6H4l4-10z"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="text-warning" viewBox="0 0 16 16">
                <path d="M8 0L6 5h4L8 16l4-6H4l4-10z"/>
            </svg>
        </div>
        <h1>Blog Posts</h1>
        <div class="header-icons">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="text-success" viewBox="0 0 16 16">
                <path d="M8 0L6 5h4L8 16l4-6H4l4-10z"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="text-primary" viewBox="0 0 16 16">
                <path d="M8 0L6 5h4L8 16l4-6H4l4-10z"/>
            </svg>
        </div>
    </div>

    <div class="mb-4">
        <a href="/" class="btn btn-outline-dark">← Back to Home Page</a>
    </div>

    <!-- Success message -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Create New Post Form -->
    <div class="card mb-5 shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4>Create a New Post</h4>
        </div>
        <div class="card-body">
            <form action="/blog-post" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="text" name="title" class="form-control" placeholder="Post Title" required>
                </div>
                <div class="mb-3">
                    <textarea name="body" class="form-control" rows="4" placeholder="Post Content" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create Post</button>
            </form>
        </div>
    </div>

    <!-- Display all posts -->
    @foreach($posts as $post)
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ Str::limit($post->body, 150) }}</p>

                <!-- View Post Button -->
                <a href="/view/{{ $post->id }}" class="btn btn-outline-primary btn-sm mb-2">View</a>

                <!-- Edit Post Button -->
                <a href="/edit/{{ $post->id }}" class="btn btn-warning btn-sm mb-2">Edit</a>

                <!-- Delete Post -->
                <form action="/posts/{{ $post->id }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm mb-2" onclick="return confirm('Are you sure you want to delete this post?')">Delete Post</button>
                </form>

                <!-- Comments decider if it shows or no comment --> 
                <div class="mt-3">
                    @if($post->comments->count() > 0)
                        <p>
                          Comments ({{ $post->comments->count() }})
                        </p>
                    @else
                        <span>No comments yet</span>
                    @endif
                </div>
                              
            </div>
        </div>
    @endforeach

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>