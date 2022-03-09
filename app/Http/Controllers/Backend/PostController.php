<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
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

        $posts = DB::table('posts')->get();
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
        $post=DB::table('posts')->find($id);
        return view('backend.posts.show',[
            'post' => $post
        ]);
    }

    public function create()
    {
        return view('backend.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->get('title')==null){
                return redirect()->back();
        }
        else
        {
            $data = $request->only(['title','content']);
            DB::table('posts')->insert([
                'title' => $data['title'],
                'slug' => Str::slug($data['title']),
                'content' => $data['content'],
                'user_created_id' => 1,
                'user_updated_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]);
            return redirect()->route('backend.posts.index');
        }
    }

    public function edit($id)
    {
        $post = DB::table('posts')->find($id);
        return view('backend.posts.edit')->with([
            'post'=>$post
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
            DB::table('posts')->where('id',$id)
                ->update([
                'title' => $data['title'],
                'content' => $data['content'],
            ]);
            return redirect()->route('backend.posts.index');
        }
    }
    public function destroy($id)
    {
        DB::table('posts')->where('id',$id)->delete();
        return redirect()->route('backend.posts.index');
    }

}
