@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Home')

@section('content')
<div class="row">
  <div class="col-xl-3 col-sm-4 col-6 mb-4">
    <div class="card" >
      <div class="card-body text-center">
        <div class="avatar avatar-md mx-auto mb-3">
          <span class="avatar-initial rounded-circle bg-label-info"><i class="bx bx-heart fs-3"></i></span>
        </div>
        <span class="d-block mb-1 text-nowrap">Medicación</span>
        <h2 class="mb-0">48</h2>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-4 col-6 mb-4">
    <div class="card"  >
      <div class="card-body text-center">
        <div class="avatar avatar-md mx-auto mb-3">
          <span class="avatar-initial rounded-circle bg-label-warning"><i class="bx bxs-capsule fs-3"></i></span>
        </div>
        <span class="d-block mb-1 text-nowrap">Pastillas</span>
        <h2 class="mb-0">17</h2>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-4 col-6 mb-4">
    <div class="card">
      <div class="card-body text-center">
        <div class="avatar avatar-md mx-auto mb-3">
          <span class="avatar-initial rounded-circle bg-label-danger"><i class="bx bx-vial fs-3"></i></span>
        </div>
        <span class="d-block mb-1 text-nowrap">Inyecciones</span>
        <h2 class="mb-0">29</h2>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-4 col-6 mb-4">
    <div class="card">
      <div class="card-body text-center">
        <div class="avatar avatar-md mx-auto mb-3">
          <span class="avatar-initial rounded-circle bg-label-primary"><i class="bx bx-dizzy fs-3"></i></span>
        </div>
        <span class="d-block mb-1 text-nowrap">Dolor</span>
        <h2 class="mb-0">72</h2>
      </div>
    </div>
  </div>
</div>
<h1 class="mt-3">Medicamentos</h1>
<div class="row">
  <div class="col-xl-2 col-sm-4 col-6 mb-4">
    <div class="card" onclick="ver(1)">
      <div class="card-body text-center">
        <div class="avatar avatar-md mx-auto mb-3">
          <span class="avatar-initial rounded-circle bg-label-info"><i class="bx bx-capsule fs-3"></i></span>
        </div>
        <span class="d-block mb-1 text-nowrap">Paracetamol</span>
        <h3 class="mb-0">1 gr</h3>
      </div>
    </div>
  </div>
  <div class="col-xl-2 col-sm-4 col-6 mb-4">
    <div class="card" onclick="ver(2)">
      <div class="card-body text-center">
        <div class="avatar avatar-md mx-auto mb-3">
          <span class="avatar-initial rounded-circle bg-label-warning"><i class="bx bxs-vial fs-3"></i></span>
        </div>
        <span class="d-block mb-1 text-nowrap">Nolotil</span>
        <h3 class="mb-0">500 mg/l</h3>
      </div>
    </div>
  </div>
  <div class="col-xl-2 col-sm-4 col-6 mb-4">
    <div class="card" onclick="add()">
      <div class="card-body text-center">
        <div class="avatar avatar-md mx-auto mb-3">
          <span class="avatar-initial rounded-circle bg-label-danger"><i class="bx bxs-plus-square fs-3"></i></span>
        </div>
        <span class="d-block mb-1 text-nowrap"></span>
        <h3 class="mb-0"></h3>
      </div>
    </div>
  </div>

</div>
@endsection

<script>
  function ver(id){
    console.log('hice click')
    window.location.href="medicacion/"+id
  }
  function add(){
    console.log('hice click')
    window.location.href="medicacion/add"  }
</script>
