@extends('layouts.app')

@section('content')

@if (count($messages) > 0)
<ul class="list-group">
    @foreach ($messages as $message)
        <li class="list-group-item">
            To: <strong> {{ $message->userTo->name }} , {{ $message->userTo->email }} </strong> | Subject: {{ $message->subject }}
        </li>
    @endforeach
</ul>

@else
No messages!
@endif

@endsection
