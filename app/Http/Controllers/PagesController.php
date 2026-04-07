<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class PagesController extends Controller
{
    // Show all posts AND form
    public function blog()
    {
        $posts = Post::with('comments')->latest()->get();
        return view('blog-post', compact('posts'));
    }

    // Store a new post
    public function storePost(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        Post::create([
            'title' => $request->title,
            'body' => $request->body,
        ]);

        // Redirect back to the same page
        return redirect('/blog-post')->with('success', 'Post created successfully!');
    }

    // view a particular post id
    public function viewPost($id)
    {
        $post = Post::with('comments')->findOrFail($id); // fetch post and its comments
        return view('view-post', compact('post'));
    }

    // Store a comment
    public function storeComments(Request $request)
    {
        $request->validate([
            'author' => 'required|string|max:255',
            'body' => 'required|string',
            'post_id' => 'required|exists:posts,id',
        ]);

        Comment::create([
            'author' => $request->author,
            'body' => $request->body,
            'post_id' => $request->post_id,
        ]);

        return back()->with('success', 'Comment added successfully!');
    }

    // Delete post
    public function deletePost(Post $post)
    {
        $post->delete();
        return back()->with('success', 'Post deleted!');
    }

    // Delete comment
    public function deleteComment(Comment $comment)
    {
        $comment->delete();
        return back()->with('success', 'Comment deleted!');
    }

    // Edit Post 
    public function editPost($id)
    {
        $post = Post::findOrFail($id);
        return view('/edit-post', compact('post'));
    }

    public function updatePost(Request $request, $id)
    {
        $post = Post::FindOrFail($id);
        $post->update([
            'title' => $request->title,
            'body' => $request->body
        ]);
        return redirect('/blog-post')->with('success', 'Post updated successfully!');
    }

    //   contact page 
    public function contactPage()
    {
        return view('/contact-admin');  // No leading slash
    }
}
