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
                    <th scope="col">{{ __('vars.messages') }}</th>
                    <th scope="col">{{ __('vars.create') }}</th>
                    <th scope="col">{{ __('vars.delete') }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($threads as $thread)
                    <tr>
                        <th scope="row">{{ $thread->id }}</th>
                        <td><a href="{{ route('threads.edit', ['thread' => $thread]) }}">{{ $thread->user->name }}</a></td>
                        <td>{{ $thread->messages_count }}</td>
                        <td>{{ $thread->created_at }}</td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="threads[]" value="{{ $thread->id }}" id="flexCheckChecked">
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @else
            <p>{{ __('vars.no_threads_found') }}</p>
        @endif
    </form>
@endsection
