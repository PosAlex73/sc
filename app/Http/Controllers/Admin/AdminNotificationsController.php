<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreAdminNotificationsRequest;
use App\Http\Requests\UpdateAdminNotificationsRequest;
use App\Models\AdminNotifications;
use Illuminate\Http\Request;

class AdminNotificationsController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin_notes = AdminNotifications::paginate(static::getPagination());

        return view('admin.admin_notifications.list', ['admin_notes' => $admin_notes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin_notifications.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdminNotificationsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdminNotificationsRequest $request)
    {
        $admin_note = AdminNotifications::create($request->all());

        return redirect(route('admin_notifications.edit', ['admin_notifications' => $admin_note]));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdminNotifications  $adminNotifications
     * @return \Illuminate\Http\Response
     */
    public function show(AdminNotifications $adminNotifications)
    {
        return view('admin.admin_notifications.show', ['admin_note' => $adminNotifications]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminNotifications  $adminNotifications
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminNotifications $adminNotifications)
    {
        return view('admin.admin_notifications.edit', ['admin_note' => $adminNotifications]);
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
        $adminNotifications::update($request->all());

        return view('admin.admin_notifications.edit', ['admin_note' => $adminNotifications]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminNotifications  $adminNotifications
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminNotifications $adminNotifications)
    {
        AdminNotifications::destroy($adminNotifications);

        return redirect(route('admin_notifications.index'));
    }

    public function massDelete(Request $request)
    {
        AdminNotifications::destroy($request->admin_notifications);

        return redirect(route('admin_notifications.index'));
    }
}
