<?php

namespace App\Repositories;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Interfaces\PostRepositoryInterface;


class PostRepository implements PostRepositoryInterface {
    public function All(){
        $userId = Auth::user()->id;
        return Post::where('user_id', $userId)->get();
    }

      public function findById($id){
        return Post::find($id);
    }

    public function storeData($request){
        
        $post = new Post();
        if ($request->hasFile('image')) {
            $destinationPath= 'public/Post-image/';
            $image      = $request->file('image');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs($destinationPath,$fileName);
            $post->image = $fileName;
        }

        $post->user_id        = $request->user_id;
        $post->title        = $request->title;
        $post->description        = $request->description;
        $post->save();
    }
  
    public function updateData($request, $id){

       $updatePost = Post::find($id);

       if ($request->hasFile('image')) {
        $destinationPath= 'public/Post-image/';
        $image      = $request->file('image');
        $fileName   = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs($destinationPath,$fileName);
        $updatePost->image = $fileName;
    }

    $updatePost->user_id        = $request->user_id;
    $updatePost->title        = $request->title;
    $updatePost->description        = $request->description;
    $updatePost->update();
    }
}