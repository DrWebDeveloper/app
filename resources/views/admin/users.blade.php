@extends('admin.layouts.app')
@section('title')
    Users
@endsection
@section('content')
<br>
<br>
    <div class="row">
        {{-- <h3> Users: {{ count($users) }}</h3> --}}

        @foreach ($users as $user)

            {{ $user->id  }}. {{ $user->name  }} ({{ $user->email  }}) joined at {{ date('l d M Y - h:i A', strtotime($user->created_at)) }}<br>

        @endforeach
    </div>
@endsection
