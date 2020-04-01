@extends('layouts.front')

@section('content')
    <div class="container">
     <div class="col-md-8 mx-auto">
       <p>プロフィール</p>
        <table class="table">
            <tr>
             <th width="20%">名前</th>
             <th width="60%">{{ $profile_form->name }}</th>
            </tr>
            <tr>
             <th width="20%">性別</th>
             <th width="60%">{{ $profile_form->gender }}</th>
            </tr>
             <th width="20%">趣味</th>
             <th width="60%">{{ $profile_form->hobby }}</th>
            </tr>
            <tr>
             <th width="20%">自己紹介</th>
             <th width="60%">{{ $profile_form->introduction }}</th>
            </tr>
        </table>
     </div>
    </div>
@endsection