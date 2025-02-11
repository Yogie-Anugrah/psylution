@extends('layouts.app')

@section('content')

@include("home.hero")
@include('about.visi-misi', ['data' => $data])
@include("home.services")
@include('about.mitra', ['mitras' => $mitras])
@include('about.podcast', ['podcastUrl' => $podcastUrl])

@endsection