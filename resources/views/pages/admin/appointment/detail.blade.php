@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Transaksi</h1>
      </div>

      <!-- Content Row -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card shadow">
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <td>{{ $item->id }}</td>
                    </tr>
                    <tr>
                        <th>Username</th>
                        <td>{{ $item->username }}</td>
                    </tr>
                    <tr>
                        <th>Tanggal Appointment</th>
                        <td>{{ $item->start_time }}</td>
                    </tr>
                    <th>Email</th>
                        <td>{{ $item->email }}</td>
                    </tr>
                    <th>No Handphone</th>
                        <td>{{ $item->nohp }}</td>
                    </tr>
                    
                    
                </table>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
