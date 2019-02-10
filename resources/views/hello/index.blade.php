@extends ('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <P>ここが本文のコンテンツです。</P>
  <p>Controller value<br>'message' = {{$message}}</p>
  <p>ViewComposer value<br>'view_message' = {{$view_message}}</p>
@endsection

@section('footer')
copyright 2019 cnagamatsu.
@endsection