<?php

namespace App\Http\Requests;

use App\Models\AdminNotifications;
use Illuminate\Foundation\Http\FormRequest;

class StoreAdminNotificationsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $notification = AdminNotifications::find($this->route('admin_notifications'));

        return $notification && $this->user()->can('update', $notification);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id' => 'required|integer|exists:users',
            'title' => 'required|min:2|max:255',
            'message' => 'required',
            'status' => 'required',
            'type' => 'required'
        ];
    }
}
