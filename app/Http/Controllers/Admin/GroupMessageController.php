<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreGroupMessageRequest;
use App\Http\Requests\UpdateGroupMessageRequest;
use App\Models\GroupMessage;
use Illuminate\Routing\Controller;

class GroupMessageController extends AdminController
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
     * @param  \App\Http\Requests\StoreGroupMessageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGroupMessageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GroupMessage  $groupMessage
     * @return \Illuminate\Http\Response
     */
    public function show(GroupMessage $groupMessage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GroupMessage  $groupMessage
     * @return \Illuminate\Http\Response
     */
    public function edit(GroupMessage $groupMessage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGroupMessageRequest  $request
     * @param  \App\Models\GroupMessage  $groupMessage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGroupMessageRequest $request, GroupMessage $groupMessage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GroupMessage  $groupMessage
     * @return \Illuminate\Http\Response
     */
    public function destroy(GroupMessage $groupMessage)
    {
        //
    }
}
