@extends('backend.layouts.app')

@section('content')
    <div class="col-md-6">
        <h1>{{ $thread->subject }}</h1>
        @each('backend.messenger.partials.messages', $thread->messages, 'message')

        @include('backend.messenger.partials.form-message')
    </div>
@stop
