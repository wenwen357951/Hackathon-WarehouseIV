@extends('layout.main')

{{-- Title setting--}}
@section('title', '資助貧困')

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
    @include('component.circle-menu')
    <div class="background"
         style="background: url('https://cdn.discordapp.com/attachments/818403886301184024/864932833670987776/circle-background-10.png') center center no-repeat;
                 background-size: cover;position: absolute; left: 0;top: 0;width: 100vw;height: 100vh;z-index: -1;">
    </div>
@stop
