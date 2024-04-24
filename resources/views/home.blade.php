@extends('layouts.master')
@section('title', 'HomePage')
@section('content')
    @include('pages.home.include.banner')
    @include('pages.home.include.favourite_destinations')
    @include('pages.home.include.type_travel')
@stop
@section('css')
    <style>
        swiper-container {
            width: 100%;
            height: 100%;
        }

        swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            display: inline-block;
            overflow: hidden;
            border-radius: 9999px;
        }

        swiper-slide div {
            display: inline-block;
            border-radius: 9999px;
            overflow: hidden;
        }

        swiper-slide div img {
            display: block;
            transition: transform .4s;
        }

        swiper-slide div:hover img {
            transform: scale(1.3);
            transform-origin: 50% 50%;
        }
    </style>
@stop
@section('script')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
@stop
