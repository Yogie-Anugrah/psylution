@extends('layouts.app')

@section('content')

@include('testimoni.list-testimoni', ['testimonis' => $testimonis])
@include('testimoni.submit-testimoni')

@endsection
