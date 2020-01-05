@extends('layouts.profile')
@section('title', 'プロフィール編集')

@section('content')
    <div class="container">
        <div class="col-md-8 mx-auto">
            <h2>プロフィール編集</h2>
            <form action="{{ action('Admin\ProfileController@update') }}" method="post" enctype="multiport/form-data">
                @if (count($errors) > 0)
                    <ul>
                        @foreach($errors->all() as $e)
                            <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                @endif
                <div class="form-group row">
                    <label class="col-md-2" for="name">氏名(name)</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="name" value=" {{ $profiles_form->name }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2" for="gender">性別(gender)</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="gender" value=" {{ $profiles_form->gender }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2" for="hobby">趣味(hobby)</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="hobby" value=" {{ $profiles_form->hobby }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-2" for="introduction">自己紹介欄(introduction)</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="introduction" value=" {{ $profiles_form->introduction }}">
                    </div>
                </div>
                {{ csrf_field() }}
                <input type="submit" class="btn btn-primary" value="更新">
            </form>
        </div>
    </div>
@endsection