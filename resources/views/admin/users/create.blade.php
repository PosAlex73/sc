@extends('layouts.base')
@section('content')
    @include('admin.components.back_button', ['back' => 'users.index'])
    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">{{ __('forms.name') }}</label>
            <input type="text" class="form-control" id="name" name="name" required aria-describedby="name">
            <div id="name" class="form-text">{{ __('forms.name') }}</div>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">{{ __('forms.email') }}</label>
            <input type="email" class="form-control" id="email" name="email" required aria-describedby="email">
            <div id="email" class="form-text">{{ __('forms.email') }}</div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">{{ __('forms.password') }}</label>
            <input type="password" class="form-control" id="password" name="password" required aria-describedby="password">
        </div>
        <div class="mb-3">
            <label for="">{{ __('forms.statuses') }}</label>
            <select class="form-select" name="status" aria-label="Default select example">
                @foreach($statuses as $status)
                    <option value="{{ $status }}">{{ __('enums.user_statuses' . $status) }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="">{{ __('forms.type') }}</label>
            <select class="form-select" name="type" aria-label="Default select example">
                @foreach($types as $type)
                    <option value="{{ $type }}">{{ __('enums.user_types' . $type) }}</option>
                @endforeach
            </select>
        </div>
        @include('admin.components.submit')
    </form>
@endsection
