@extends('layouts.main')

@section('title', 'dashboard Petugas')
@section('text', 'dashboard Petugas')



@section('content')

<div class="card">
    <div class="card-header">
      <h4>Selamat datang {{Auth::user()->name }} !</h4>
    </div>
</div>



@endsection