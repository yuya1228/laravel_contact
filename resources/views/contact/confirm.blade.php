@extends('layouts.layout')

@section('contact')
    <form method="POST" action="{{ route('contact.thanks') }}">
        @csrf

        <table>
            <tr>
                <th><label>お名前</label></th>
                <td>
                    <input class="sur_name" name="surname" value="{{ $inputs['surname'] }}" type="hidden">
                </td>
                <td>
                    <input class="first_name" name="firstname" value="{{ $inputs['firstname'] }}" type="hidden">
                </td>
            </tr>

            <tr>
                <th><label>性別</label></th>
                <td>
                    <input type="hidden" id="man" name="gender" value="{{ $inputs['gender'] }}">
                    <input type="hidden" id="woman" name="gender" value="{{ $inputs['gender'] }}">
                </td>
            </tr>

            <tr>
                <th><label>メールアドレス</label></th>
                <td>
                    <input type="hidden" class="email" name="email" value="{{ $inputs['email'] }}">
                </td>
            </tr>

            <tr>
                <th><label>郵便番号</label></th>
                <td>
                    <p>〒<input type="hidden" class="post" name="postnumber" value="{{ $inputs['postnumber'] }}"></p>
                </td>
            </tr>
        </table>
    </form>
