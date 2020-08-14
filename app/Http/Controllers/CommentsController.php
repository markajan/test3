<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $comments = Comment::all();
//        foreach ($comments as $comment) {
//            echo $comment->rate . "<br>";
//        }

        ////???????????
//        $flights = $comments->reject(function ($comment) {
//            echo $comment->rate;
//        });

//        Comment::chunk(5, function ($comment) {
//            dd($comment);
//            foreach ($comment as $comment) {
//                echo $comment->rate . "<br>";
//            }
//        });

        $comments = Comment::where('rate', 5)->cursor();
        foreach ($comments as $comment) {
            echo $comment->rate . "<br>";

        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comment = Comment::where('id', $id)->first();
//        dd($comment->rate);//5
        $comment->rate = 2;
        $freshFlight = $comment->fresh();
        dd($comment->rate);//2

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment = Comment::where('id', $id)->first();
        $comment->rate = 2.3;
//        dd($comment->rate);
        $comment->refresh();
        $comment->rate;
        dd($comment->rate);//2

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
