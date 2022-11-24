<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>お問い合わせ</title>
    <link rel="stylesheet" href="resources/css/style.css">
</head>
<body>
    <h1>お問い合わせ</h1>
    <div class="contact">
        <form action="" method="POST">
            @csrf
            <label>お名前</label>
                <input type="text" required="required" name="surname">
                <input type="text" required="required" name="firstname">

            <p>性別</p>
                <input type="radio" required="required" name="gender"><label for="gender_radio">男性</label>
                <input type="radio" required="required" name="gender"><label for="gender_radio">女性</label>

            <label>メールアドレス</label>
                <input type="text" required="required" name="email">

            <label>郵便番号</label>
                <span>〒</span>
                <input type="text" required="required" name="postnumber">

            <label>住所</label>
                <input type="text" required="required" name="address">

            <label>建物名</label>
                <input type="building_name">

            <label>ご意見</label>
                <textarea name="text" required="required"></textarea>

            <button>確認</button>
        </form>
    </div>
</body>
</html>
