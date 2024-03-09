@extends('layout')

@section('title')
@yield('pageTitle')
@endsection

@section('content')
{{-- page heade............................ --}}
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
    <div class="container py-5">
        <h1 class="display-3 text-white  slideInRight">@yield('headerTitle')</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb  slideInRight mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">@yield('headerTitle')</li>
            </ol>
        </nav>
    </div>
</div>
{{-- page heade............................ --}}

@yield('pageContent')

@endsection
