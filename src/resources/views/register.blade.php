<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                Create Form
            </a>
        </div>
    </header>

    <main>
        <div class="create-form__content">
            <div class="create-form__heading">
                <h2>商品登録</h2>
            </div>
            <form class="form">
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">商品名</span>
                        <span class="form__label--required">必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="name" placeholder="商品名を入力" />
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">値段</span>
                        <span class="form__label--required">必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="name" placeholder="値段を入力" />
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                        </div>
                    </div>
                </div>

<form action="/product/upload" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image">
    <button type="submit">ファイルを選択</button>
</form>
@if (session('image_path'))
    <img src="{{ asset('storage/' . session('image_path')) }}" alt="アップロード画像">
@endif



                <div class="form__image">
                    <label for="image" class="file-label">ファイルを選択</label>
                    <input type="file" name="image" id="image" class="file-input">
                </div>
                <div class="form__error">
                    <!--バリデーション機能を実装したら記述します。-->
                </div>
                    <!--cssの記述
.file-input {
    display: none;
}

.file-label {
    display: inline-block;
    padding: 10px 20px;
    background-color: #ddd;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
}
-->

                <div class="form__season">
                    @foreach (['春' => 1, '夏' => 2, '秋' => 3, '冬' => 4] as $label => $value)
                        <label style="margin-right: 10px;">
                            <input type="checkbox" name="seasons[]" value="{{ $value }}"
                                @if(is_array(request('seasons')) && in_array($value, request('seasons'))) checked @endif>
                            {{ $label }}
                        </label>
                    @endforeach
                </div>
                <div class="form_group">
                    <div class="form_group-title">
                        <span class="form__label--item">商品説明</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--textarea">
                            <textarea name="content" placeholder="商品の説明を入力"></textarea>
                    </div>
                </div>
                <div class="form__button">
                    <a href="{{ route('product.index') }}" class="form__button-back">戻る</a>
                    <button class="form__button-submit" type="submit">登録</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>
