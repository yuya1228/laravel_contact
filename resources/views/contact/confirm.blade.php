@extends('layouts.layout')

@section('contact')
    <form method="POST" action="{{ route('contact.thanks') }}">
        @csrf
        <div class="content">
            <h1>内容確認</h1>
            <table>
                <tr>
                    <th><label>お名前</label></th>
                    <td>
                        {{ $inputs['surname'] }}
                        <input class="sur_name" name="surname" value="{{ $inputs['surname'] }}" type="hidden">
                        {{ $inputs['firstname'] }}
                        <input class="first_name" name="firstname" value="{{ $inputs['firstname'] }}" type="hidden">
                    </td>
                </tr>

                <tr>
                    <th><label>性別</label></th>
                    <td>
                        {{ $inputs['gender'] }}
                        <input type="hidden" id="man" name="gender" value="男性">
                        <input type="hidden" id="woman" name="gender" value="女性">
                    </td>
                </tr>

                <tr>
                    <th><label>メールアドレス</label></th>
                    <td>
                        {{ $inputs['email'] }}
                        <input type="hidden" class="email" name="email" value="{{ $inputs['email'] }}">
                    </td>
                </tr>

                <tr>
                    <th><label>郵便番号</label></th>
                    <td>
                        {{ $inputs['postnumber'] }}
                        <input type="hidden" class="post" name="postnumber" value="{{ $inputs['postnumber'] }}">
                    </td>
                </tr>

                <tr>
                    <th><label>住所</label></th>
                    <td>
                        {{ $inputs['address'] }}
                        <p><input type="hidden" class="address" name="address" value="{{ $inputs['address'] }}"></p>
                    </td>
                </tr>

                <tr>
                    <th><label>建物名</label></th>
                    <td>
                        {{ $inputs['building_number'] }}
                        <input class="building_name" type="hidden" name="building_number"
                            value="{{ $inputs['building_number'] }}">
                    </td>
                </tr>

                <tr>
                    <th><label>ご意見</label></th>
                    <td>
                        {{ $inputs['text'] }}
                        <input name="text" type="hidden" value="{{ $inputs['text'] }}" class="opnion">
                    </td>
                </tr>
            </table>
            <button type="submit" name="action" value="submit" class="send">送信</button>
            <p class="fix"><a href="{{ route('contact.index') }}">修正する</a></p>
        </div>
    </form>
@endsection
