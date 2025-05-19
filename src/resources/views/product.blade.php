<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/product.css') }}" />
</head>

<body>
    <main>
        <div class="items">
            <div class="item">
                <img src="{{ asset('fruits-img/kiwi.png') }}" alt="キウイ">
                <p>キウイ</p><p>￥800</p>
            </div>
            <div class="item">
                <img src="{{ asset('fruits-img/strawberry.png') }}" alt="ストロベリー">
                <p>ストロベリー</p><p>￥1200</p>
            </div>
            <div class="item">
                <img src="{{ asset('fruits-img/orange.png') }}" alt="オレンジ">
                <p>オレンジ</p><p>￥850</p>
            </div>
            <div class="item">
                <img src="{{ asset('fruits-img/watermelon.png') }}" alt="スイカ">
                <p>スイカ</p><p>￥700</p>
            </div>
            <div class="item">
                <img src="{{ asset('fruits-img/peach.png') }}" alt="ピーチ">
                <p>ピーチ</p><p>￥1000</p>
            </div>
            <div class="item">
                <img src="{{ asset('fruits-img/muscat.png') }}" alt="マスカット">
                <p>シャインマスカット</p><p>￥1400</p>
            </div>
        </div>
    </main>
</body>
</html>