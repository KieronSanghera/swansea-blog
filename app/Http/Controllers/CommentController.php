<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Student;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $post = Post::findOrFail($id);
        return view('comments.create', ['post_id' => $post]);
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
            'post_id' => 'required',
            'commenter_id'=> 'required',
            'body' =>'required'
        ]);

        $student = Student::where('id', $data['commenter_id'])->first();

        $c = new Comment();
        $c->post_id = $data['post_id'];
        $c->student_id = $student->id;
        $c->body = $data['body'];
        $c->save();

        session()->flash('message', 'comment was added.');
        return view('posts.show', ['post' => $data['post_id']]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        $request->validate([
            'comment_id' => 'required'
        ]);

        $comment = Comment::findOrFail($request->comment_id);
        $post_id = $comment->post_id;
        $comment->delete();

        return redirect()->route('posts.show', ['id' => $post_id])->with('message', 'Post was deleted');
    }
}
