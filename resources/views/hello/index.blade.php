@extends ('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <P>ここが本文のコンテンツです。</P>
  <P>必要なだけ記述できます。</P>
  
  @component('components.message')
    @slot('msg_title')
    CAUTION!
    @endslot
    
    @slot('msg_content')
    これはメッセージの表示です。
    @endslot
  @endcomponent
  
@endsection

@section('footer')
copyright 2019 cnagamatsu.
@endsection