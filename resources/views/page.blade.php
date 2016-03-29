@extends('layout.master')

@section('title')
  {{ $p->name }}
@stop

@section('container')
  <div class="row">
    <div class="menu col-xs-12 col-sm-12 col-md-12 col-lg-12">
      @include('include.menu')
    </div>
    <div class="content col-xs-12 col-sm-12 col-md-12 col-lg-12">
      @if (Session::get('content'))
        @include('include.' . Session::get('content'))
      @endif
    </div>
  </div>
@stop