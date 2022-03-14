<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id','desc')->paginate(3);
        return view('backend.categories.index')->with([
            'categories'=>$categories
        ]);
    }
    public function index2()
    {
        $categories = Category::onlyTrashed()->paginate(3); 
        return view('backend.categories.index2')->with([
            'categories'=>$categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->get('name')==null){
            return redirect()->back();
    }
    else
    {
        $data = $request->only(['name','content']);
        $category = Category::create([
            'name' => $data['name'],
            //'slug' => Str::slug($data['name']),
            'content'=> $data['content'],
        ]);
        return redirect()->route('backend.categories.index');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = DB::table('categories')->find($id);
        return view('backend.categories.edit')->with([
            'category'=> $category
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
        if($request->get('name')==null){
            return redirect()->back();
    }
    else
    {
        $data = $request->only(['name','content']);
        $category = Category::find($id);
        $category->name = $data['name'];
        $category->content = $data['content'];
        $category->save();
        return redirect()->route('backend.categories.index');
    }
    }
    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()->route('backend.categories.index');
    }
    public function restore($id)
    {
        $category=Category::withTrashed()->find($id);
        $category->restore();
        return redirect()->route('backend.categories.index2');
    }

}
