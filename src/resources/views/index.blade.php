@extends('layouts.default')
<style>
    th {
        background-color:rgb(222, 58, 116);
        color: white;
        padding: 5px 40px;
    }
    tr:nth-child(odd) td{
        background-color: #FFFFF;
    }
    td {
        padding: 25px 40px;
        background-color: #EEEEEE;
        text-align: center;
    }
</style>
@section('title','index.blade.php')

@section('content')
<table>
    <tr>
        <th>商品名</th>
        <th>値段</th>
        <th>説明文</th>
        <th>画像</th>
    </tr>
    @foreach($products as $product)
    <tr>
        <td>{{$product->name}}</td>
        <td>¥{{$product->price}}</td>
        <td>{{$product->description}}</td>
        <td><img src="{{ asset('fruits-img/'.$product->image) }}" alt="{{ $product->name }}" style="width:100px;"></td>
    </tr>
    @endforeach
</table>
@endsection