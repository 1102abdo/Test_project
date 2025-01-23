@extends('front.master')
@section('title','S ervice')
@section('service-active','active')
@section('hero')
<x-hero-section title="Service" subtitle="Service"></x-hero-section>
@endsection
@section('content')
  <x-front-services-component></x-front-services-component>


    <x-front-testmonials-component></x-front-testmonials-component>
@endsection