@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-3">
            <img src="/images/instagram_profile_image.png" width="150" height="150" class="rounded-circle" alt="logo image">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-4"><strong>I53</strong> posts</div class="pr-4">
                <div class="pr-4"><strong>23k</strong> followers</div class="pr-4">
                <div class="pr-4"><strong>215</strong> following</div>
            </div>
            <div class="pt-3">
            <div class="font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div class="pt-2"><a href=#>{{ $user->profile->url}}</a></div>
            </div>
        </div>
    </div>

    <div class="row pt-4">
        <div class="col-4"><img src="https://images.unsplash.com/photo-1501369343204-a53c9cd517bc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="" class="w-100"></div>
        <div class="col-4"><img src="https://images.unsplash.com/photo-1514472796143-14ece5ab7d94?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1652&q=80" alt="" class="w-100"></div>
        <div class="col-4"><img src="https://images.unsplash.com/photo-1553013476-78af3d3cf8cf?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80" alt="" class="w-100"></div>
    </div>
</div>
@endsection
