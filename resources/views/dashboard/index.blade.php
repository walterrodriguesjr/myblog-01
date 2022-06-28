@extends('layouts.dashboard')

@section('title')
    Página principal do Dashboard
@endsection

@section('breadcrumbs')
    Breadcrumbs
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Bem-vindo {{ Auth::user()->name }}</h2>
        </div>
    </div>
@endsection
