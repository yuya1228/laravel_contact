<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>検索ページ</title>
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="management">
        <h1>管理システム</h1>
        <table>
            <tr>
                <th><label>お名前</label></th>
                <td><input type="text"></td>

                <th><label>性別</label></th>
                <td>
                    <input type="radio" name="gender" value="全て" checked="checked"><label
                        for="all">全て</label>
                    <input type="radio" name="gender" value="男性"><label for="man">男性</label>
                    <input type="radio" name="gender" value="女性"><label for="woman">女性</label>
                </td>
            </tr>

            <tr>
                <th><label>登録日</label></th>
                <td>
                    <input type="text">
                </td>
                <td>
                    <span>~</span>
                    <input type="text">
                </td>
            </tr>

            <tr>
                <th><label>メールアドレス</label></th>
                <td>
                    <input type="text">
                </td>
            </tr>
        </table>
        <button class="search_button">検索</button>
        <a href="">リセット</a>
    </div>
</body>

</html>
