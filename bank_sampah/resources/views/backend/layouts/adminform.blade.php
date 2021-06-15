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
                    <h1 class="m-0">Tambah Admin</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('admin')}}">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Admin</li>
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
                    <div class="card-header">
                        <span>
                            <h3><strong>
                                    <center>FORM TAMBAH ADMIN</center>
                                </strong></h3>
                        </span>
                    </div>
                    <div class="card-body p-5 bg-dark">
                        <form action="">

                            <!-- nama -->
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-8">
                                    <input type="text" name="name" class="form-control" id="name" value=""
                                        maxlength="45" placeholder="Tuliskan Nama Lengkap Anda" required>
                                </div>
                            </div>
                            <!-- username -->
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Username</label>
                                <div class="col-sm-8">
                                    <input type="text" name="username_register" class="form-control" id="username"
                                        value="" maxlength="45" placeholder="Username" required>
                                </div>

                            </div>
                            <!-- email -->
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" name="email_register"
                                        aria-describedby="emailHelp" value="" placeholder="Masukkan email anda"
                                        maxlength="45" required>
                                </div>

                            </div>
                            <!-- password -->
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-8">
                                    <input type="password" name="password_register" class="form-control" maxlength="255"
                                        id="password" placeholder="password" required>
                                </div>

                            </div>
                            <!-- Konfirm Password -->
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Konfirmasi Password</label>
                                <div class="col-sm-8">
                                    <input type="password" name="password_register_confirm" class="form-control"
                                        id="password" placeholder="konfirmasi password" maxlength="255" required>
                                </div>

                            </div>
                            <!-- tanggal lahir -->
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-8">
                                    <input type="date" name="birthdate" class="form-control" id="lahir admin"
                                        name="lahiradmin">
                                </div>

                            </div>
                            
                            <!-- Jenis Kelamin -->
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-8">
                                    <select class="custom-select" id="gender" name="gender" required>
                                        <option value="#">-- Pilih Jenis Kelamin --</option>
                                        <option value="#">Laki - Laki</option>
                                        <option value="#">Perempuan</option>
                                    </select>
                                </div>

                            </div>
                            <!-- Nomer Telepon -->
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nomer Telepon</label>
                                <div class="input-group col-sm-8">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">+62</span>
                                    </div>
                                    <input type="text" pattern="[0-9]{11}" name="phone" class="form-control"
                                        name="phone" placeholder="8xxxxxxxxxxxx" maxlength="15"
                                        value="" required>
                                </div>
                            </div>
                            <!-- Alamat Lengkap -->
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Alamat Lengkap</label>
                                <div class="input-group col-sm-8">
                                    <div class="input-group">
                                        <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="5"
                                            placeholder="tuliskan alamat lengkap anda"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="input-group col-sm-12 ">
                                    <button type="submit"
                                        class="btn btn-primary btn-lg btn-block mt-3">Daftarkan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endsection