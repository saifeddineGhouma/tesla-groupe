@extends('layout.master')


@section('logo')
<a class="navbar-brand text-brand" href="#">TESLA <span class="color-b">ELECTRICAL</span></a>
@endsection
@section('content')
  @include('site.company.electrical.inc.title')
  @include('site.company.electrical.inc.picture')
  @include('site.company.electrical.inc.service')
  @include('site.company.electrical.inc.team')


    @endsection
