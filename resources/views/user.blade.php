@extends('layouts.hello')

@section('title','ユーザーの一覧')


@section('content')
  <h3>ユーザー一覧</h3>
  @foreach($user as $u)
  <p>{{ $u->name }}</p>
  @endforeach
@endsection

