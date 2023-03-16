<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

   //
    public function create()
    {
        return view('podcasts');
    }


    public function store(Request $request)
    {

        $formFields = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'comment' => 'required'
        ]);

        $getPreviousUrl = $request->session()->get('_previous');
        $getPreviousUrlId = strstr($getPreviousUrl["url"], "podcasts/");
        $getPreviousUrlId = str_replace("podcasts/", "", $getPreviousUrlId);

        $formFields['podcast_id'] = $getPreviousUrlId;

        Comment::create($formFields);

        return redirect('/podcasts/' . $getPreviousUrlId)->with('success', 'Comment added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
