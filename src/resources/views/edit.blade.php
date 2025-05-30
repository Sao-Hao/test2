@extends('layouts.default')
<style>
    th {
        background-color:rgb(255, 171, 14);
        color: white;
        padding: 5px 40px;
    }
    tr:nth-child(odd) td{
        background-color: #FFFFFF;
    }
    td {
        padding: 25px 40px;
        background-color:rgb(244, 210, 154);
        text-align: center;
    }
    button {
        padding: 10px 20px;
        background-color:rgb(255, 79, 3);
        border: none;
        color: white;
    }
</style>
@section('title', 'edit.blade.php')

@section('content')
@if (count($errors) > 0)
<p>入力に問題があります</p>
@endif
<form action="/products/{{ $form->id }}/update" method="POST">
    <table>
        @csrf
        @if ($errors->has('name'))
        <tr>
            <th styld="background-color: red">ERROR</th>
            <td>{{$errors->first('name')}}</td>
        </tr>
        @endif
        <tr>
            <th>name</th>
            <td>
                <input type="text" name="name" value="{{$form->name}}">
            </td>
        </tr>
        @if ($errors->has('price'))
        <tr>
            <th styld="background-color: red">ERROR</th>
            <td>{{$errors->first('price')}}</td>
        </tr>
        @endif
        <tr>
            <th>price</th>
            <td>
                <input type="text" name="price" value="{{$form->price}}">
            </td>
        </tr>
        @if ($errors->has('description'))
        <tr>
            <th styld="background-color: red">ERROR</th>
            <td>{{$errors->first('description')}}</td>
        </tr>
        @endif
        <tr>
            <th>description</th>
            <td>
                <input type="text" name="description" value="{{$form->description}}">
            </td>
        </tr>
        <!-- <tr>
            <th>
                season
            </th>
            <td>
                <input type="text" name="season" value="{{$form->season}}">
            </td>
        </tr> -->
        <tr>
            <th></th>
            <td>
                <button>変更を保存</button>
            </td>
        </tr>
    </table>
</form>
@endsection