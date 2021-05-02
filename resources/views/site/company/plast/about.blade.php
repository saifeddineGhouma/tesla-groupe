@extends('layout.master')


@section('logo')
<a class="navbar-brand text-brand" href="{{route('tesla.plast.about')}}">TESLA <span class="color-b">PLAST</span></a>
@endsection
@section('content')
  @include('site.company.electrical.inc.title')
  @include('site.company.electrical.inc.picture')
  @include('site.company.plast.inc.service')
  @include('site.company.electrical.inc.team')


    @endsection
