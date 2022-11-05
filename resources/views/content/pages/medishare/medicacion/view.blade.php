@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Medicación')

@section('content')
<h1>Paracetamol</h1>
<div class="row">
  <div class="col-xl-4 col-lg-5 col-md-5">
    <div class="card mb-4">
      <div class="card-body">
        <small class="text-muted text-uppercase">INFO</small>
        <ul class="list-unstyled mb-4 mt-3">
          <li class="d-flex align-items-center mb-3"><i class="bx bx-user"></i><span class="fw-semibold mx-2">Nombre del medicamento:</span> <span>Paracetamol</span></li>
          <li class="d-flex align-items-center mb-3"><i class="bx bx-notepad"></i><span class="fw-semibold mx-2"> Descripción:</span> <span>Para el dolor de cabeza</span></li>
          <li class="d-flex align-items-center mb-3"><i class="bx bx-vial"></i><span class="fw-semibold mx-2"> Dosis:</span> <span>1 Gr</span></li>
          <li class="d-flex align-items-center mb-3"><i class="bx bx-capsule"></i><span class="fw-semibold mx-2"> Tipo:</span> <span>Pastilla</span></li>
          <li class="d-flex align-items-center mb-3"><i class="bx bxs-calendar"></i><span class="fw-semibold mx-2"> Añadido en:</span> <span>10/10/2022 10:25:32</span></li>
          <li class="d-flex align-items-center mb-3"><i class="bx bxs-calendar-check"></i><span class="fw-semibold mx-2"> Actualizado en:</span> <span>12/10/2022 10:25:32</span></li>
          <li class="d-flex align-items-center mb-3"><i class="bx bx-check"></i><span class="fw-semibold mx-2">Estado:</span> <span>Activ0</span></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-xl-8">
    <div class="card">
      <h5 class="card-header">Table Basic</h5>
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr>
              <th>Medicación</th>
              <th>Nombre del paciente</th>
              <th>Paciente</th>
              <th>Estado</th>
              <th>Fecha</th>
            </tr>
          </thead>

          <tbody class="table-border-bottom-0">

            <tr>
              <td><i class="bx bxs-capsule text-success me-3"></i> <strong>Parecetamol</strong></td>
              <td>Ismael</td>
              <td>
                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="Ismael" data-bs-original-title="Ismael">
                    <img src="https://pixinvent.com/demo/frest-bootstrap-laravel-admin-dashboard-template/demo/assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                  </li>
                </ul>
              </td>
              <td><span class="badge bg-label-success me-1">Tomado</span></td>
              <td>10/10/20222 10:25</td>
            </tr>

            <tr>
              <td><i class="bx bxs-capsule text-success me-3"></i> <strong>Parecetamol</strong></td>
              <td>Ismael</td>
              <td>
                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="Ismael" data-bs-original-title="Ismael">
                    <img src="https://pixinvent.com/demo/frest-bootstrap-laravel-admin-dashboard-template/demo/assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                  </li>
                </ul>
              </td>
              <td><span class="badge bg-label-success me-1">Tomado</span></td>
              <td>10/10/20222 10:25</td>
            </tr>

            <tr>
              <td><i class="bx bxs-capsule text-danger me-3"></i> <strong>Parecetamol</strong></td>
              <td>Ismael</td>
              <td>
                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="Ismael" data-bs-original-title="Ismael">
                    <img src="https://pixinvent.com/demo/frest-bootstrap-laravel-admin-dashboard-template/demo/assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                  </li>
                </ul>
              </td>
              <td><span class="badge bg-label-danger me-1">Olvidada</span></td>
              <td>10/10/20222 10:25</td>
            </tr>

            <tr>
              <td><i class="bx bxs-capsule text-success me-3"></i> <strong>Parecetamol</strong></td>
              <td>Ismael</td>
              <td>
                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="Ismael" data-bs-original-title="Ismael">
                    <img src="https://pixinvent.com/demo/frest-bootstrap-laravel-admin-dashboard-template/demo/assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                  </li>
                </ul>
              </td>
              <td><span class="badge bg-label-success me-1">Tomado</span></td>
              <td>10/10/20222 10:25</td>
            </tr>

            <tr>
              <td><i class="bx bxs-capsule text-danger me-3"></i> <strong>Parecetamol</strong></td>
              <td>Ismael</td>
              <td>
                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                  <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" aria-label="Ismael" data-bs-original-title="Ismael">
                    <img src="https://pixinvent.com/demo/frest-bootstrap-laravel-admin-dashboard-template/demo/assets/img/avatars/5.png" alt="Avatar" class="rounded-circle">
                  </li>
                </ul>
              </td>
              <td><span class="badge bg-label-danger me-1">Olvidada</span></td>
              <td>10/10/20222 10:25</td>
            </tr>



          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
