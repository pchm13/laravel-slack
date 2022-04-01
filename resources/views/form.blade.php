@extends('master')

@section('title', '送信フォーム')

@section('content')
  <form method="POST">
    @csrf

    <label for="name">曲名</label><br>
    <input type="text" id="name" name="name"><br>

    <label for="lyrics">歌詞</label><br>
    <textarea id="lyrics" name="lyrics"></textarea><br>

    <button type="submit">送信</button>
  </form>
@endsection