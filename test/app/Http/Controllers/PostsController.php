<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests\PostRequest;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(3);
        $data = ['posts' => $posts];

        return view('posts.index', $data);
    }

    public function single($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.single')
            ->with('post', $post)
            ->with('id', $id);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(PostRequest $request)
    {
        $post = new Post();

        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->author = $request->input('author');
        $post->draft = $request->input('draft');

        $post->save();

        return redirect('/posts')
            ->with('message', 'Entry id: ' . $post->id . ' succesfully saved');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.edit')
            ->with('post', $post);
    }

    public function update(PostRequest $request, $id)
    {
        $post = Post::findOrFail($id);

        $post->fill($request->input());
        $post->save();

        return redirect('/posts/' . $id)
            ->with('message', 'Entry id: ' . $id . ' updated');
    }

    public function destroy($id)
    {
        // 1 method
        $post = Post::findOrFail($id);
        $post->delete();

        // 2 method
        // Post::destroy($id);

        return redirect('/posts')
            ->with('message', 'Entry id: ' . $id . ' deleted');
    }
}
