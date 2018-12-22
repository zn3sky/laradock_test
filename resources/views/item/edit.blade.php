@extends('layouts.app')

@section('title', '編集')

@section('sidebar')
@endsection

@section('content')
    <div>name:<input type="text" value="{{ $item->name }}"><div>
    <input type="button" value="一覧へ戻る">
    <input type="button" value="編集確認">
@endsection