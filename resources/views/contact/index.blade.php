@extends('layouts.layout')

@section('contact')
    <h1>お問い合わせ</h1>
    <div class="contact">
        <form action="" method="POST">
            @csrf
            <table>
                <tr>
                    <td><label>お名前</label><span>※</span></td>
                    <td><input type="text" required="required" name="surname"></td>
                    <td><input type="text" required="required" name="firstname"></td>
                </tr>

                <tr>
                    <td><label>性別</label><span>※</span></td>
                    <td><input type="radio" required="required" name="gender"><label for="gender_radio">男性
                            <input type="radio" required="required" name="gender"><label for="gender_radio">女性</td>
                </tr>

                <tr>
                    <td><label>メールアドレス</label><span>※</span></td>
                    <td><input type="text" required="required" name="email"></td>
                </tr>

                <tr>
                    <td><label>郵便番号</label><span>※</span></td>
                    <td>〒<input type="text" required="required" name="postnumber"></td>
                </tr>

                <tr>
                    <td><label>住所</label><span>※</span></td>
                    <td><input type="text" required="required" name="address"></td>
                </tr>

                <tr>
                    <td><label>建物名</label></td>
                    <td><input type="building_name"></td>
                </tr>

                <tr>
                    <td><label>ご意見</label><span>※</span></td>
                    <td>
                        <textarea name="text" required="required"></textarea>
                    </td>
                </tr>
            </table>
            <button>確認</button>
        </form>
    </div>
@endsection
