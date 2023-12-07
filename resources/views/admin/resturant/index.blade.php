@extends('layouts.admin')

@section('content')

<div class="container p-3">
    <div class="row justify-content-center">
        {{-- dati personali. --}}
        <div class="col-12 d-xl-flex flex-wrap p-0">
            <div class="col-sm-12 col-xl-10 pb-4">
                <h3 class="text-white fw-bold">PRESENTAZIONE</h3>
            </div>

            {{-- dati personali. --}}
            <div class="col-md-8 d-flex flex-column p-0">
                <h3 class="text-white fw-bold">DATI PERSONALI</h3>
                <ul class="list-group list-group-flush rounded-4 my-4 pb-4">
                    <li class="list-group-item px-3 border-0"><i class="fa-regular fa-user me-3" style="color: #000000;"></i>  {{  $user->name }}</li>
                    <li class="list-group-item px-3 border-0"><i class="fa-regular fa-user me-3" style="color: #000000;"></i>  {{  $user->lastname }}</li>
                    <li class="list-group-item px-3 border-0"><i class="fa-regular fa-envelope me-3" style="color: #000000;"></i>  {{  $user->email }}</li>
                </ul>
            </div>
            
        </div>

        {{-- bottone --}} 
        <div class="col-12 d-flex justify-content-md-start pt-4 ps-0">
            <button type="button" class="mt-4 btn btn-light btnColor border-0">
                <a class="text-decoration-none text-white fs-5 fw-bold" href="{{route("admin.users.edit", $user->id)}}">Modifica il profilo</a>                       
            </button>
        </div>
       
    </div>
</div>

@endsection

