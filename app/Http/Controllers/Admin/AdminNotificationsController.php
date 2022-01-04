<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreAdminNotificationsRequest;
use App\Http\Requests\UpdateAdminNotificationsRequest;
use App\Models\AdminNotifications;

class AdminNotificationsController extends AdminController
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
     * @param  \App\Http\Requests\StoreAdminNotificationsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdminNotificationsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdminNotifications  $adminNotifications
     * @return \Illuminate\Http\Response
     */
    public function show(AdminNotifications $adminNotifications)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminNotifications  $adminNotifications
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminNotifications $adminNotifications)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminNotificationsRequest  $request
     * @param  \App\Models\AdminNotifications  $adminNotifications
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdminNotificationsRequest $request, AdminNotifications $adminNotifications)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminNotifications  $adminNotifications
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminNotifications $adminNotifications)
    {
        //
    }
}
