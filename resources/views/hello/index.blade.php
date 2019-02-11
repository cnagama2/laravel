@extends ('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <P>ここが本文のコンテンツです。</P>
  <table>
    @foreach($data as $item)
    <tr><th>{{$item['name']}}</th>
    <td>{{$item['mail']}}</td>
    </tr>
    @endforeach
  </table>
@endsection

@section('footer')
copyright 2019 cnagamatsu.
@endsection