@extends('layouts.default')
<style>
    th {
        background-color:rgb(255, 171, 14);
        color: white;
        padding: 5px 40px;
    }
    tr:nth-child(odd) td{
        background-color: #FFFFF;
    }
    td {
        padding: 25px 40px;
        background-color:rgb(244, 210, 154);
        text-align: center;
    }

    svg.w-5.h-5 {
    /*paginateメソッドの矢印の大きさ調整のために追加*/
    width: 30px;
    height: 30px;
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
        <td><img src="{{ asset('fruits-img/'.$product->image) }}" alt="{{ $product->name }}" style="width:150px;"></td>
    </tr>
    @endforeach
</table>
{{ $products->links() }}
@endsection