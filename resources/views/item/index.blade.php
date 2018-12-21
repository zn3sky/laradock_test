@extends('layouts.app')

@section('title', '一覧')

@section('sidebar')
@endsection

@section('content')
    <input type="button" value="新規登録">
    @foreach ($items as $item)
        @if ($loop->first)
            <table>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th></th>
                </tr>
        @endif
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>
                <input type="button" value="詳細">
                <input type="button" value="編集">
                <input type="button" value="削除">
            </td>
        </tr>
        @if ($loop->last)
            </table>
        @endif
    @endforeach
@endsection