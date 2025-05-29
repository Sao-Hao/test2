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
@section('title', 'add.blade.php')

@section('content')
<form action="/products/register" method="POST" enctype="multipart/form-data">
    <table>
    @csrf
        <tr>
            <th>商品名</th>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <th>値段</th>
            <td><input type="text" name="price"></td>
        </tr>
        <tr>
            <th>商品画像</th>
            <td><input type="file" name="image"></td>
        </tr>
        <tr>
            <th>季節</th>
            <td>
            <label><input type="checkbox" name="season[]" value="1"> 春</label>
            <label><input type="checkbox" name="season[]" value="2"> 夏</label>
            <label><input type="checkbox" name="season[]" value="3"> 秋</label>
            <label><input type="checkbox" name="season[]" value="4"> 冬</label>
            </td>
        </tr>
        <tr>
            <th>商品説明</th>
            <td><input type="text" name="description" ></td>
        </tr>
        <tr>
            <th></th>
            <td><button>登録</button></td>
        </tr>
    </table>
</form>
@endsection
