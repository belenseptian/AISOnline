@extends('backend.master')

@section('title')

@if(!isset($name) || $name=='')
{{ 'Home' }}
@elseif($name=='live-cctv')
{{ 'Live CCTV' }}
@endif
@endsection


@section('header-text')
@php ($navbar = 'Home')
@if(!isset($name) || $name=='')
@php ($navbar = 'Home')
@elseif($name=='live-cctv')
@php ($navbar = 'Live CCTV')
@endif
@endsection

@section('breadcrumb')
@if(!isset($name) || $name=='')
{{ '' }}
@elseif($name=='live-cctv')
<li class="breadcrumb-item active" aria-current="page">Live CCTV</li>
@endif

@endsection


@section('content')
@if(!isset($name) || $name=='')
@include('backend.dashboard')
@elseif($name=='live-cctv')
@include('backend.live-cctv')
@else
<script>
	window.location.href = "{{ url('/') }}/error";
</script>
@endif


@endsection