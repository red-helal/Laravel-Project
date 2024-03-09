@extends('pages.pageLayout')
@section('pageTitle')
About
@endsection
@section('headerTitle')
About Page
@endsection

@section('pageContent')

@include('include.aboutSection')
@include('include.factsSection')
@include('include.teamSection')

@endsection
