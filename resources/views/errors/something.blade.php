@extends('layouts.error')

@section('content')
<div class="content">
    <div class="">
        <div class="title col-md-6">
            Whoops!
        </div>
        <div class="sub-title m-b-md">
            Something went wrong on the system
        </div>
    </div>
    <div class="sub-sub-title  m-b-md">
        Error Message: {{$message}}
    </div>
    <div class="links">
        <a href="#">Click here to Send error report</a> 
    </div>
</div>
@endsection