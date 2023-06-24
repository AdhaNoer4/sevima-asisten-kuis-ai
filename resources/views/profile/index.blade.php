@extends('template.main')

@section('container')
<ol class="list-group col-lg-4">
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
        <div class="fw-bold">Email</div>
        {{ auth()->user()->email }}
      </div>
      
    </li>
  </ol>
@endsection