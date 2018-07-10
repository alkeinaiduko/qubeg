<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class AdminBlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin-layouts.admin-blogs');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-layouts.write-blog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'title' => 'required|min:6',
            'description' => 'required|min:10',
            'blog_cover' => 'image|mimes:jpeg,jpg,png|max:10000'
        ]);

        // File Upload
        if($request->hasFile('blog_cover')) {
            $fileNameWithExt = $request->file('blog_cover')->getClientOriginalName();

            // GET FILE NAME
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            // GET EXTENSION
            $extension = $request->file('blog_cover')->getClientOriginalExtension();
            // File Unique Name
            $fileNameToStore = $filename. '_'. time().'.'.$extension;

            $path = $request->file('blog_cover')->storeAs('public/blog_cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $blog = new Blog;
        $blog->title = request('title');
        $blog->description = request('description');
        $blog->blog_cover = $fileNameToStore;
        $blog->save();

        return back()->with('success', 'Blog Posted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
