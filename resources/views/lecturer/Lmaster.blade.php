@extends('lecturer.lecLayout')

@section('lecContent')
  
  <tutor-dashboard
  logout_user="{{ route('logout', app()->getLocale()) }}"
  tutor_img="{{ asset('img/user1.png')}}"
  ></tutor-dashboard>

@endsection