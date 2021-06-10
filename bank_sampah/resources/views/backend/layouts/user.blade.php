@extends('backend.layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Manajemen User</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Manajemen User</li>
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
                        <h3><strong>Management User</strong></h3>
                    </div>
                    <!-- card body -->
                    <div class="card-body">
                        <div class="col-12">
                            <!-- table management user -->
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">No. Hp</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Hanif</td>
                                        <td>hanifsatrio12@gmail.com</td>
                                        <td>08123456789</td>
                                        <i class="bi-star-fill text-warning"></i>
                                        <i class="bi-star-fill text-warning"></i>
                                        <i class="bi-star-fill text-warning"></i>
                                        <i class="bi-star-fill text-warning"></i>
                                        <i class="bi-star-half text-warning"></i>
                                        </td>
                                        <td>
                                            <a type="button" class="btn btn-primary" data-tooltip="tooltip"
                                                data-placement="bottom" title="Lihat Detail" href="#">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a type="button" class="btn btn-danger text-white"
                                                data-target="#deleteModal" role="button" data-tooltip="tooltip"
                                                data-toggle="modal" data-placement="bottom" title="Hapus" onclick="#">
                                                <i class="fas fa-trash-alt"></i>
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