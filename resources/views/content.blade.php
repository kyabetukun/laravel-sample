@extends('layouts.hello')

@section('title','投稿一覧')


@section('content')
  <h3>ユーザーネーム</h3>
  <p>{{ $post->name }}</p>
  <h3>投稿一覧</h3>
  <p>{{ $post->contents }} </p>
@endsection
