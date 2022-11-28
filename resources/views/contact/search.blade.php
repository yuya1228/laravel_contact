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
    <h1>管理システム</h1>
    <div class="management_box">
        <table class="management">
            <tr>
                <th><label>お名前</label></th>
                <td><input type="text" class="system_text"></td>

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
                <div class="register">
                    <td>
                        <input type="text" class="system_text">
                    </td>
                    <td>
                        <span>~</span>
                    </td>
                    <td>
                        <input type="text" class="system_text">
                    </td>
                </div>
            </tr>

            <tr>
                <th><label>メールアドレス</label></th>
                <td>
                    <input type="text" class="system_text">
                </td>
            </tr>

            <tr>
                <td>
                    <button class="search_button">検索</button>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="" class="search_liset"><p>リセット</p></a>
                </td>
            </tr>
        </table>
    </div>

{{ $contacts->links('pagination::bootstrap-4') }}

    <table class="search_system">
        <tr>
            <th>ID</th>
            <th>お名前</th>
            <th>性別</th>
            <th>メールアドレス</th>
            <th>ご意見</th>
        </tr>
    </table>
</body>

</html>
