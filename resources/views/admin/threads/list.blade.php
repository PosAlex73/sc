@extends('layouts.base')
@section('content')
    <form action="{{ route('threads.mass_delete') }}" method="post">
        @csrf
        <div class="container d-flex justify-content-between">
            <a href="{{ route('threads.create') }}" class="btn btn-primary">{{ __('var.create_new') }}</a>
            <button type="submit" class="btn btn-danger">{{ __('var.delete_selected') }}</button>
        </div>
        @if($threads->count() > 0)
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{ __('vars.name') }}</th>
                    <th scope="col">{{ __('vars.email') }}</th>
                    <th scope="col">{{ __('vars.status') }}</th>
                    <th scope="col">{{ __('vars.type') }}</th>
                    <th scope="col">{{ __('vars.delete') }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td><a href="{{ route('users.edit', ['user' => $user]) }}">{{ $user->name }}</a></td>
                        <td>{{ $user->email }}</td>
                        <td>{{ __('enums.user_status_' . $user->status) }}</td>
                        <td>{{ __('enums.user_type_' . $user->type) }}</td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="users[]" value="{{ $user->id }}" id="flexCheckChecked">
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>{{ __('vars.no_users_found') }}</p>
        @endif
    </form>
@endsection
