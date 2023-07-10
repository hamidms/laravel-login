<!-- resources/views/dashboard/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Dashboard</h1>
    <p>Welcome, {{ Auth::user()->name }}!</p>
@endsection
