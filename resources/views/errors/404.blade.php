@extends('layouts.error')

@section('content')
<div class="content">
    <div class="row col-md-12">
        <div class="title col-md-6">
            {{$user->name}} 
        </div>
        <div class="col-md-6 sub-title m-b-md">Email: {{$user->email}}</div>
    </div>
    <div class="row sub-sub-title col-md-12 m-b-md">
        Created at: {{$user->created_at}}
        gender: {{$user->LecturerInfo->gender}}
    </div>
    <div class="links">
        <a>created by Captain Burah</a>
    </div>
</div>
@endsection