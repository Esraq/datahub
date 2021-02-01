@extends('layouts.super_admin')

@section('content')

<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Super Admin Dashboard</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
      </ol>
    </div>

    <div class="row mb-3">
      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Total Project</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">5</div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3 completed</span>
                  <span>2 pending</span>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-calendar fa-2x text-primary"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Earnings (Annual) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Ongoing Project</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">6</div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 3</span>
                  <span>Added Recently</span>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-envelope fa-2x text-success"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- New User Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1"> User</div>
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">366</div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 20.4%</span>
                  <span>Since last month</span>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-users fa-2x text-info"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Pending Requests Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">Pending Projects</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                  <span>Since yesterday</span>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-comments fa-2x text-warning"></i>
              </div>
            </div>
          </div>
        </div>
      </div>















@endsection
