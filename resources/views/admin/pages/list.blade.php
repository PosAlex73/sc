@extends('layouts.base')
@section('content')
    <form action="{{ route('pages.mass_delete') }}" method="post">
        @csrf
        <div class="container d-flex justify-content-between">
            <a href="{{ route('pages.create') }}" class="btn btn-primary">{{ __('var.create_new') }}</a>
            <button type="submit" class="btn btn-danger">{{ __('var.delete_selected') }}</button>
        </div>
        @if($pages->count() > 0)
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{ __('vars.title') }}</th>
                    <th scope="col">{{ __('vars.status') }}</th>
                    <th scope="col">{{ __('vars.type') }}</th>
                    <th scope="col">{{ __('vars.delete') }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pages as $page)
                    <tr>
                        <th scope="row">{{ $page->id }}</th>
                        <td><a href="{{ route('pages.edit', ['page' => $page]) }}">{{ $page->title }}</a></td>
                        <td>{{ __('enums.common_status_' . $page->status) }}</td>
                        <td>{{ __('enums.page_statuses_' . $page->status) }}</td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="pages[]" value="{{ $page->id }}" id="flexCheckChecked">
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>{{ __('vars.no_pages_found') }}</p>
        @endif
    </form>
@endsection
