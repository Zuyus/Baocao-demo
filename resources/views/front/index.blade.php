@extends('front.layouts.master')
@section('title', isset($title) ? $title : 'Home')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')

@section('content')
    @if ((session('theme') && session('theme') == 'theme2') || $allsettings['theme'] == 'two')
        @include('front.home.themetwo')
    @else
        @include('front.home.themeone')
    @endif
@endsection

