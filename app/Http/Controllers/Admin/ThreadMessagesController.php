<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreThreadMessagesRequest;
use App\Http\Requests\UpdateThreadMessagesRequest;
use App\Models\ThreadMessages;
use Illuminate\Routing\Controller;

class ThreadMessagesController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreThreadMessagesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreThreadMessagesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ThreadMessages  $threadMessages
     * @return \Illuminate\Http\Response
     */
    public function show(ThreadMessages $threadMessages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ThreadMessages  $threadMessages
     * @return \Illuminate\Http\Response
     */
    public function edit(ThreadMessages $threadMessages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateThreadMessagesRequest  $request
     * @param  \App\Models\ThreadMessages  $threadMessages
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateThreadMessagesRequest $request, ThreadMessages $threadMessages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ThreadMessages  $threadMessages
     * @return \Illuminate\Http\Response
     */
    public function destroy(ThreadMessages $threadMessages)
    {
        //
    }
}
