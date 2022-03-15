<?php

namespace App\Http\Controllers\Backend;
use App\Models\Post;
use App\Models\User;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $title=\request()->get('title');
        // $posts_query = DB::table('posts')->select('*');
        // if (!empty($title)){
        //     $posts_query = $posts_query->where('title',"LIKE","%$title%");
        // }
        $posts =Post::orderBy('id','desc')->paginate(5);
        return view('backend.posts.index')->with([
            'posts'=>$posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Post::with('user','category','tags')->find($id);
        return view('backend.posts.show',[
            'post' => $post
        ]);
    }

    public function create()
    {
        $tags=Tag::get();
        $categories=Category::get();
        return view('backend.posts.create',[
            'tags' => $tags,
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        if(Post::get('title')==null){
                return redirect()->back();
        }
        else
        {   
            $data = $request->only(['title','content']);
            // $user->posts()->create($data);
            $tags = $request->get('tags');
            $category = $request->get('category');
            $post = new Post();
            $post->title = $data['title'];
            // $post->slug = Str::slug($data['title']);
            // $post->slug = $data['title'];
            $post->content = $data['content'];
            $post->save(); 
            $user = User::find(1);
            $user-> posts()->save($post);
            $post->tags()->attach($tags);
            // $post = Post::create([
            //     'title' => $data['title'],
            //     //'slug' => Str::slug($data['title']),
            //     'content'=> $data['content'],
            //     'user_created_id'=> 1,
            // ]);
            
            return redirect()->route('backend.posts.index');
        }
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $tags = Tag::get();
        $categories = Category::get(); 
        return view('backend.posts.edit')->with([
            'post'=>$post,
            'tags'=>$tags,
            'categories'=>$categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->get('title')==null){
                return redirect()->back();
        }
        else
        {
            $data = $request->only(['title','content']);
            $tags = $request->get('tags');
            $post = Post::find($id);
            $post->title = $data['title'];
            $post->user_created_id=1;
            $post->content = $data['content'];
            $post->tags()->sync($tags);
            $post->save();
            return redirect()->route('backend.posts.index');
        }
    }
    public function destroy($id)
    {
        Post::where('id',$id)->delete();
        return redirect()->route('backend.posts.index');
    }

}
