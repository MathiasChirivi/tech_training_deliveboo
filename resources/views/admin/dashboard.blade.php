@extends('layouts.admin')

@section('content')

<?php 
    $user = Auth::user();
?>

<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-primary" role="alert">
                    {{ session('Benvenuto') }}
                </div>
                @endif

                @auth
                    <div class="alert alert-success" role="alert">
                        {{ __('Benvenuto/a,') }} {{ Auth::user()->name }} {{ Auth::user()->surname }}!
                    </div>
                @endauth 
            </div>

        </div>
    </div>
    
</div>