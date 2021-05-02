@extends('layout.master')
@section('logo')
<a class="navbar-brand text-brand" href="{{route('tesla.trading.about')}}">TESLA <span class="color-b">TRADING</span></a>
@endsection
@section('content')
  @include('site.company.electrical.inc.title')
  @include('site.company.electrical.inc.picture')
  @include('site.company.trading.inc.service')
  @include('site.company.electrical.inc.team')


    @endsection
