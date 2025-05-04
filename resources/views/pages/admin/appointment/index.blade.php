@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Appointment</h1>
        <!-- Tambahkan form untuk filter -->
        <form action="{{ route('appointment.index') }}" method="get">
            @csrf
            <div class="form-row align-items-center">
                <div class="col-auto">
                    <label class="sr-only" for="start_date">Tanggal</label>
                    <input type="date" class="form-control" id="start_date" name="start_date" placeholder="Tanggal">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Userame</th>
                            <th>Email</th>
                            <th>Tanggal Book</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->username }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->start_time }}</td>
                                <td>{{ $item->transaction_status }}</td>
                                <td>
                                    <a href="{{ route('appointment.show', $item->id) }}" class="btn btn-primary">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <form action="{{ route('appointment.destroy', $item->id) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <td colspan="7" class="text-center">
                                Data Kosong
                            </td>
                        @endforelse
                    </tbody>
                </table>

                <!-- Tampilkan Tautan Paginasi -->
                <div class="d-flex justify-content-center mt-4">
                    {{ $items->links() }}
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /.container-fluid -->
@endsection
