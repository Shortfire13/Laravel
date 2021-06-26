@extends('backend.layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">List Pegawai</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
                        <li class="breadcrumb-item active">List Pegawai</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body p-5 bg-dark">
                        <table class="table table-striped dataTable dtr-inline" aria-describedby="adminlist_info"
                            role="grid" id="adminlist">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pegawai as $pegawais)
                                <tr>
                                    <td>{{$pegawais->id}}</td>
                                    <td>{{$pegawais->name}}</td>
                                    <td>
                                        <a href=""
                                            class=" btn btn-primary mr-2" data-tooltip="tooltip" data-placement="bottom"
                                            title="Edit">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <a type="button" class="btn btn-danger text-white" data-target="#deleteModal" role="button" data-tooltip="tooltip" data-toggle="modal" data-placement="bottom" title="Hapus">
                                            <i class="bi bi-trash-fill"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @endsection