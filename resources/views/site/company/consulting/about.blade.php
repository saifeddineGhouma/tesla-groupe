@extends('layout.master')


@section('logo')
<a class="navbar-brand text-brand" href="{{route('tesla.consulting.about')}}">TESLA <span class="color-b">CONSULTING</span></a>
@endsection
@section('content')
  @include('site.company.electrical.inc.title')
  @include('site.company.electrical.inc.picture')
  @include('site.company.consulting.inc.service')
  @include('site.company.electrical.inc.team')


    @endsection
