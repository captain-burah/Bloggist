@extends('lecturer.lecLayout')

@section('lecContent')
  
  <tutor-dashboard
  locale="{{ app()->getLocale() }}"
  link-en="{{ route('logout', setLocale(en) ) }}"
  link-sn="{{ route('logout', setLocale(sn) )  }}"
  ></tutor-dashboard>

@endsection