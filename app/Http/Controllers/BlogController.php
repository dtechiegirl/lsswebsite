<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Pagination\Paginator;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function blog()
    {
        //
        $post = Post::paginate(3);
       

        return view('blog.view-blog', ['posts'=> $post]);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('blog.create-blog');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request);
        $request->validate([
            'title' => 'required',
            'description' => 'max:500',
            'picture' => 'required|mimes:jpg,png,jpeg|max:5048',
            'content' => 'required',
            'category' => 'required',
        ]);

         if ($request->hasFile('image')) {
            $file = $request->file('picture');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images' . $filename);
            // $post->picture = $file;
        }
        $newImageName = uniqid() . '-' . $request->title . '.'  . $request->picture->extension();
        $request->picture->store(public_path('images'), $newImageName);

        // dd($slug);
        Post::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            // 'slug' => SlugService::createslug(Post::class,  'slug', $request->title),
            'picture' =>  $newImageName,
            'content' => $request->input('content'),
            'category'=> $request->input('category'),
                   // 'user_id' => auth()->user()->id
        ]);


        return redirect('/blog')->with('message', 'Your Post Has Been Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        return view('blog.show-blog')->with('post', Post::where('id', $id)->first());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $id = Post::find($id);
        return view('blog.edit-blog')->with('post', $id);
    }

   

    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'nullable',
            'description' => 'max:500',
            'picture' => 'nullable|mimes:jpg,png,jpeg|max:5048',
            'content' => 'nullable',
            'category' => 'nullable',

        ]);
        $post = Post::find($id);
        if ($request->hasFile('image')) {
            $file = $request->file('picture');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('/images' . $filename);
            $post->picture = $file;
        }
        $post->update([
            'title'=> $request->title,
            'content'=> $request->content,
            'description'=> $request->description,
            'category'=> $request->description,

        ]);
      
        
        // $post->create(
          
        // ); 
        // $post->save();
        return redirect('/blog')->with('message', 'Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $post = Post::where('id', $id)->first();
        return view('blog.delete-blog', ['post' => $post]);
    }
    public function destroy($id)

    {
        //
        $post = Post::where('id', $id);
        $post->delete();
        return redirect('/blog')->with('message', 'Post Deleted Successfully');
    }
}




