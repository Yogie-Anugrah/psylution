@extends('layouts.app')

@section('content')

@include('konseling.main')
@foreach ($services as $id => $service)
    @include('components.konseling-section', ['service' => $service, 'id' => $id])
@endforeach

@endsection