@extends('layouts.app')

@section('content')

@include('psikolog-kami.top-five', ['psikologs' => $psikologs])

@include('psikolog-kami.list-psikolog', ['psikologsPaginated' => $psikologsPaginated])

@endsection