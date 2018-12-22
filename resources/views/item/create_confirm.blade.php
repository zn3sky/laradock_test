@extends('layouts.app')

@section('title', '新規登録')

@section('sidebar')
@endsection

@section('content')
    <form method="post" action="/items/create">
        <div>name:{{ $inputItem->name }}<div>
        <input type="button" value="修正">
        <input type="button" value="登録">
    </form>
@endsection
