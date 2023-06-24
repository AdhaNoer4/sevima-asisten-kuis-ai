@extends('template.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-6">
       
        <ol class="list-group ">
            <li class="list-group-item d-flex justify-content-between align-items-start">
              <div class="ms-2 me-auto">
                <div class="fw-bold">Nama</div>
                {{ auth()->user()->name }}
              </div>
              
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
              <div class="ms-2 me-auto">
                <div class="fw-bold">Username</div>
                {{ auth()->user()->username }}
              </div>
              
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
              <div class="ms-2 me-auto">
                <div class="fw-bold">email</div>
                {{ auth()->user()->email}}
              </div>
              
            </li>
          </ol>
    </div>
</div>

@endsection