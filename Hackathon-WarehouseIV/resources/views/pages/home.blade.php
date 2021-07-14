@extends('layout.main')

{{-- Title setting--}}
@section('title', '首頁')

{{-- Custom CSS --}}
@section('custom-css')

@stop

{{-- Js inject :before --}}
@section('js-before')

@stop

{{-- Js inject :after --}}
@section('js-after')

@stop

{{-- Js inject :after --}}
@section('body')

    @include('component.home.kv')
    @include('component.home.we-are')
    @include('component.home.work')
    @include('component.footer')
@stop
