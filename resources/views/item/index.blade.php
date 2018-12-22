@extends('layouts.app')

@section('title', '一覧')

@section('script')
    <script src=" {{ mix('js/item/index.js') }} "></script>
@endsection

@section('content')
    <div id="js-content">
        <button-create-component></button-create-component>
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
    </div>
@endsection