@extends('layouts.app')

@section('title', '新規登録')


@section('script')
    <script src=" {{ mix('js/item/create.js') }} "></script>
@endsection

@section('sidebar')
@endsection

@section('content')
        <div id="js-content">
        <create-form-component
            index-url="{{ action('ItemController@index') }}"
            store-url="{{ action('ItemController@store') }}"
        ></create-form-component>
    </div>
@endsection