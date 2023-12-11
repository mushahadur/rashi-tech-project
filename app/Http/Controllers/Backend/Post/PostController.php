<?php

namespace App\Http\Controllers\Backend\Post;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\User\PostRequest;
use App\Repositories\Interfaces\PostRepositoryInterface;

class PostController extends Controller
{
    protected $postRepository;
    public function __construct(PostRepositoryInterface $postRepository)
    {
         $this->postRepository = $postRepository;
    }

    public function index()
    {
        $posts = $this->postRepository->All();
        return view('admin.pages.post.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.pages.post.create');
    }

    public function store(PostRequest $request)
    {
        $this->postRepository->storeData($request);

        return redirect(route('post.index'))->with('message', 'Post  create successfully.');
    }

    public function edit(Post $post)
    {
        return view('admin.pages.post.edit', compact('post'));
    }

    public function update(PostRequest $request, string $id)
    {
        $this->postRepository->updateData($request, $id);

        return redirect(route('post.index'))->with('message', 'Post  Update successfully.');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect(route('post.index'))->with('message', 'Post Deleted successfully.');
    }
}
