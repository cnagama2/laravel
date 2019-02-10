@extends ('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <P>ここが本文のコンテンツです。</P>
  <P>必要なだけ記述できます。</P>
@endsection

@section('footer')
copyright 2019 cnagamatsu.
@endsection