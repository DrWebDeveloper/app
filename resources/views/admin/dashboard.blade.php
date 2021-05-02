@extends('admin.layouts.app')
@section('title')
    Admin Panel
@endsection
@section('content')
<br>
<br>
    <div class="row">
        <a href="{{ $setting->siteurl }}">{{ $setting->sitename }}</a>
    </div>
@endsection
