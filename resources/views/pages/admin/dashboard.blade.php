@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
      </div>

      <!-- Content Row -->
      <div class="row">

      
        <div class="col-xl-4 col-md-6 mb-3">
          <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Appointment</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $appointment }}</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-calendar fa-3x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="col-xl-4 col-md-6 mb-3">
          <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Sukses</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $transaction_status }}</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-check fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-4 col-md-6 mb-3">
          <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Blogs</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $travel_package }}</div>
                </div>
                <div class="col-auto">
                  <i class="fas fa-newspaper fa-3x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
@endsection