@extends('layouts.base')
@section('content')
    @include('admin.components.back_button', ['back' => 'pages.index'])
    <form action="{{ route('pages.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="page_title" class="form-label">{{ __('forms.page_title') }}</label>
            <input type="text" class="form-control" id="page_title" name="title" required aria-describedby="emailHelp">
            <div id="title_help" class="form-text">{{ __('forms.title_is_required') }}</div>
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">{{ __('forms.page_text') }}</label>
            <textarea class="form-control" id="text" name="text" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="">{{ __('forms.page_status') }}</label>
            <select class="form-select" name="status" aria-label="Default select example">
                @foreach($statuses as $status)
                    <option value="{{ $status }}">{{ __('enums.common_status_' . $status) }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="">{{ __('forms.page_type') }}</label>
            <select class="form-select" name="type" aria-label="Default select example">
                @foreach($page_types as $type)
                    <option value="{{ $type }}">{{ __('enums.page_statuses' . $type) }}</option>
                @endforeach
            </select>
        </div>
        @include('admin.components.submit')
    </form>
@endsection
