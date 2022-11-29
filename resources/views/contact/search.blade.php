@extends('layouts.layout')

@section('contact')
    <h1 class="system_title">管理システム</h1>
    <div class="management_box">
        <table class="management">
            <form action="{{ route('contact.search') }}" method="GET">
                @csrf
                <tr>
                    <th>
                        <p><label>お名前</label></p>
                    </th>
                    <td>
                        <p><input type="text" name="keyword" class="system_text"></p>
                    </td>

                    <th><label>性別</label></th>
                    <td>
                        <input type="radio" name="gender" value="0" checked="checked"><label
                            for="all">全て</label>
                        <input type="radio" name="gender" value="1"><label for="man">男性</label>
                        <input type="radio" name="gender" value="2"><label for="woman">女性</label>
                    </td>

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
                            <input type="text" name="created_at"  class="system_text">
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
                        <a href="{{ route('contact.search') }}" class="search_liset">
                            <p class="reset_button">リセット</p>
                        </a>
                    </td>
                </tr>
            </form>
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
        @foreach ($contacts as $contact)
            <tr>
                <td>
                    {{ $contact->id }}
                </td>
                <td>
                    {{ $contact->fullname }}
                </td>
                <td>
                    {{ $contact->gender }}
                </td>
                <td>
                    {{ $contact->email }}
                </td>
                <td class="opinion_text">
                    {{ $contact->opinion }}
                </td>
                <td>
                    <form action="{{ route('contact.destroy', ['id' => $contact->id]) }}" method="POST">
                        @csrf
                        @method('DELETE');
                        <button class="delete_button">削除</button>
                    </form>
                </td>
        @endforeach
        </tr>
    </table>
@endsection
