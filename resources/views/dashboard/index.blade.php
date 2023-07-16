<!-- resources/views/dashboard/index.blade.php -->

@extends('layouts.app')

@section('content')
    <p>Good Day!</p>
    <h1>Welcome, {{ Auth::user()->name }}!</h1>
@endsection
