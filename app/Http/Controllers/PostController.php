<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Admin;
use App\Models\User;
use App\Models\Student;
use App\Services\Twitter;
use Database\Seeders\CommentTableSeeder;

class PostController extends Controller
{

    public function apiIndex($id)
    {
        $comments = Comment::all()->where('post_id', $id);
        return $comments;
    }

    public function twitterApi(Twitter $twitter){

        $twitter->tweet("Tweeting this");

        return "Twitter API";

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        $posts = Post::all();
        return view('posts.index' , ['posts' =>$posts, 'users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
            'admin_id' => 'required'
        ]);

        if($request->hasFile('file')) {
            $request->validate([
                'image' => 'mimes:jpeg,bmp,png'
            ]);
            
            $request->file->store('product', 'public');
            
            $admin = Admin::where('user_id', $data['admin_id'])->first();

            $p = new Post();
            $p->title = $data['title'];
            $p->body = $data['body'];
            $p->file_path = $request->file->hashName();
            $p->admin_id = $admin->id;
            $p->save();
        }

        
        $students = Student::all();


        $p = new Post();
        $p->title = $data['title'];
        $p->body = $data['body'];
        $p->admin_id = $admin->id;
        $p->save();
        
        $comments = Comment::where('post_id', $p->id)->get();
        session()->flash('message', 'Post created.');
        return view('posts.show', ['post' => $p, 'comments' => $comments,
         'admin' => $admin, 'students' => $students]);
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
        $comments = Comment::where('post_id', $id)->get();
        $post = Post::findOrFail($id);
        $admin = $post->admin()->first();
        $students = Student::all();
        return view('posts.show', ['post' => $post, 'comments' => $comments,
         'admin' => $admin, 'students' => $students]);
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
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index')->with('message', 'Post was deleted');
        //
    }
}
