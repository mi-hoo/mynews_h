{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.profile')


{{-- profile.blade.phpの@yield('title')に'MYプロフィール'を埋め込む --}}
@section('title', 'プロフィール編集')

{{-- profile.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>プロフィール編集</h2>
                <form action="{{ action('Admin\ProfileController@update')}}"method="post">
                    @csrf
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">氏名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ $profile_form->name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">性別</label>
                        <div class="col-md-10">
                        <div class="form-check-inline">
                         <input class="form-check-input" type="radio" name="gender" value="male" checked="{{ $profile_form->gender }}" >
                         <label class="form-check-label" for="radio1">男性</label>
                        </div>
                        <div class="form-check-inline">
                         <input class="form-check-input" type="radio" name="gender" value="female" checked="{{ $profile_form->gender }}">
                         <label class="form-check-label" for="radio2">女性</label>
                        </div>
                        </div>
　　　　　　　　　　</div>
                    <div class="form-group row">
                         <label class="col-md-2">趣味</label>
                         <div class="col-md-10">
                            <input type="text" class="form-control" name="hobby" value="{{ $profile_form->hobby }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">自己紹介欄</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="introduction" rows="10">{{ $profile_form->introduction }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $profile_form->id }}">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection