@extends('layouts.app')

@section('content')
<form action="{{ route('send') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="to">To</label>
        <select name="to" id="to" class="form-control">
            @foreach ($users as $user)
        <option value="{{ $user->id }}">{{ $user->name }} , {{ $user->email }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
      <label for="subject">Email address</label>
      <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
    </div>
    <div class="form-group">
        <label for="message">Message</label>
        <textarea type="textarea" class="form-control" id="message" name="message" placeholder="Enter Message"></textarea>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
