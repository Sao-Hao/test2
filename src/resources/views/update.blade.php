<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/update.css') }}" />
</head>

<body>
    <header class="header">
    </header>

    <main>


        <form class="form">
            <div class="form_group">
                <div style="margin-bottom: 20px;">
                    <input type="file" name="image">
                </div>
                <div class="form__error">
                    <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">商品名</span>
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
                <button class="form__button-submit" type="submit">変更を保存</button>
            </div>
        </form>
    </main>
</body>

</html>
