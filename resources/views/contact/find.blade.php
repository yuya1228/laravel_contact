@extends('layouts.layout')

@section('contact')
    <h1 class="system_title">管理システム</h1>
    <div class="management_box">
        <table class="management">
            <form action="{{ url('/find') }}" method="post">
                @csrf
                <tr>
                    <th>
                        <p><label>お名前</label></p>
                    </th>
                    <td>
                        <p><input type="text" name="fullname" class="system_text"></p>
                    </td>

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
                            <input type="text" name="created_at" class="system_text">
                        </td>
                        <td>
                            <span>~</span>
                        </td>
                        <td>
                            <input type="text" name="created_at" class="system_text">
                        </td>
                    </div>
                </tr>

                <tr>
                    <th><label>メールアドレス</label></th>
                    <td>
                        <input type="text" name="email" class="system_text">
                    </td>
                </tr>

                <tr>
                    <td>
                        <button type="submit" class="search_button">検索</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="{{ route('contact.find') }}" class="search_liset">
                            <p>リセット</p>
                        </a>
                    </td>
                </tr>
            </form>
        </table>
    </div>

    <table class="search_system">
        <tr>
            <th>ID</th>
            <th>お名前</th>
            <th>性別</th>
            <th>メールアドレス</th>
            <th>ご意見</th>
        </tr>
@endsection
