@extends('layouts.layout')

@section('contact')
    <div class="contact">
        <h1>お問い合わせ</h1>
        <form action="{{ route('contact.confirm') }}" method="POST">
            @csrf
            <table>
                <tr>
                    <th>
                        <p><label>お名前<span>※</span></label></p>
                    </th>
                    <td>
                        <p><input type="text" class="sur_name" name="surname" value="{{ old('surname') }}"></p>
                        <p class="example">例) 山田</p>
                        @error('surname')
                            {{ $message }}
                        </td>
                    @enderror
                    <td>
                        <p><input type="text" class="first_name" name="firstname" value="{{ old('firstname') }}"></p>
                        <p class="example">例) 太郎</p>
                        @error('firstname')
                            {{ $message }}
                        </td>
                    @enderror
                </tr>

                <tr>
                    <th><label>性別<span>※</span></label></th>
                    <td>
                        <input type="radio" id="man" name="gender" value="男性" checked="checked">
                        <label for="man">男性</label>
                        <input type="radio" id="woman" name="gender" value="女性">
                        <label for="woman">女性</label>
                    </td>
                </tr>

                <tr>
                    <th>
                        <p><label>メールアドレス<span>※</span></label></p>
                    </th>
                    <td>
                        <p><input type="text" class="email" name="email" value="{{ old('email') }}"></p>
                        <p class="example">例) test@example.com</p>
                        @error('email')
                        {{$message}}
                    </td>
                    @enderror
                </tr>

                <tr>
                    <th>
                        <p><label>郵便番号<span>※</span></label></p>
                    </th>
                    <td>
                        <div class="post_box">
                            <p> 〒</p>
                            <input type="text" class="post" name="postcode" value="{{ old('postcode') }}">
                        </div>
                        <p class="example">例) 123-4567</p>
                        @error('postcode')
                        {{$message}}
                    </td>
                    @enderror
                </tr>

                <tr>
                    <th>
                        <p><label>住所<span>※</span></label></p>
                    </th>
                    <td>
                        <p><input type="text" class="address" name="address" value="{{ old('address') }}"></p>
                        <p class="example">例) 東京都渋谷区千駄ヶ谷1-2-3</p>
                        @error('address')
                        {{$message}}
                    </td>
                    @enderror
                </tr>

                <tr>
                    <th>
                        <p><label>建物名</label></p>
                    </th>
                    <td>
                        <p><input class="building_name" type="text" name="building_number"
                                value="{{ old('building_number') }}"></p>
                        <p class="example">例) 千駄ヶ谷マンション101</p>
                    </td>
                </tr>

                <tr>
                    <th>
                        <p><label>ご意見<span>※</span></label></p>
                    </th>
                    <td>
                        <textarea name="text" class="opnion">{{ old('text') }}</textarea>
                        @error('text')
                        {{$message}}
                    </td>
                    @enderror
                </tr>
            </table>
            <button type="submit">確認</button>
        </form>
    </div>
@endsection
