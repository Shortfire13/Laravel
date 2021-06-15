@extends('backend.layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Transaksi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
                        <li class="breadcrumb-item active">Transaksi</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <!-- card header -->
                    <div class="card-header">
                        <h3><strong>Transaksi</strong></h3>
                    </div>
                    <!-- card body -->
                    <div class="card-body">
                        <div class="col-12">
                            <!-- table management user -->
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Tanggal Pengambilan</th>
                                        <th scope="col">Nama Pelanggan</th>
                                        <th scope="col">Uang Yang Didapat</th>
                                        <th scope="col">No. Hp</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>23-06-2021</td>
                                        <td>Hanif</td>
                                        <td>Rp.3000</td>
                                        <td>08123456789</td>
                                        <td>
                                            <a type="button" class="btn btn-primary" href="#">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->
    @endsection