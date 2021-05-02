@extends('admin.layouts.app')
@section('title')
    Plans Setting
@endsection
@section('content')
<br>
<br>
    <div class="row">
        @foreach ($plans as $plan)
            {{ $plan->name  }}
        @endforeach
    </div>
@endsection
