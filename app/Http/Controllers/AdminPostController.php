<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class AdminPostController extends Controller
{
    public function index()
    {
        return view('admin.posts.index', [
            'posts' => Post::paginate(50)
        ]);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store()
    {
        $attributes = $this->validatePost(new Post());

        //$attributes['slug'] = Str::of(request('title'))->slug('-'); //create a slug based upon the title of the post

        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

        $attributes['user_id'] = auth()->id();

        Post::create($attributes);

        return redirect('/')->with('success', 'Your post has been published!!');
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', [
            'post' => $post
        ]);
    }

    public function update(Post $post){

        $attributes = $this->validatePost($post);

        if(isset($attributes['thumbnail'])){

            if(Storage::exists($post->thumbnail)){

                Storage::delete($post->thumbnail);
            }

            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }

        $post->update($attributes);

        return back()->with('success', 'Post successfully updated!');
    }

    public function destroy(Post $post)
    {
        if(Storage::exists($post->thumbnail)){

            Storage::delete($post->thumbnail);
        }

        $post->delete();

        return back()->with('success', 'Post successfully deleted!');
    }

    protected function validatePost(?Post $post = null) :array //if it doesn't receive an instance of Post then it will instanciate one automatically, otherwise it will use the array
    {
        $post ??= new post();

        return $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' => $post->exists ? 'image' : 'require|image',
            'slug' => ['required', Rule::unique('categories', 'slug')],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);
    }
}
