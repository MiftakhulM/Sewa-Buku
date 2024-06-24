@extends('layout.mainlayout')

@section('title', 'Profile')
    
@section('content')
    <div class="mt-2">
        <h2 class="mb-3">Your Rent Log</h2>
        <x-rent-log-table :rentlog='$rent_logs'/>
    </div>
@endsection