@extends('layouts.app')

@section('content')
    From:{{ $message->userFrom->name }}
    <br>
    Email: {{ $message->userFrom->email }}
    <br>
    Subject: {{ $message->subject }}
    <hr>
    Message:
    <br> <br>
    {{ $message->body }}
    <hr>
<a href="{{ route('create', $message->userForm->id) }}" class="btn btn-primary">Reply</a>
@endsection
