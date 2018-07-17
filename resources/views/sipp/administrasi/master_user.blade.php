@extends('welcome')
@section('content')
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    @include('sipp/administrasi/_sidebar')
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <!-- BEGIN PAGE BAR -->
        {{-- <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>Dashboard</span>
                </li>
            </ul>
        </div> --}}
        <!-- END PAGE BAR -->
        <!-- BEGIN PAGE TITLE-->
        <div id="wrapper">
            <!-- Navigation -->
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Master Data User</h1>
                    </div>
                </div>

                <div class="row" style="margin-top: 8px; margin-bottom: 8px">
                    <div class="col-lg-12">
                        {!! Form::open(['route' => 'master_user.store', 'files'=>true, 'enctype'=>'multipart/form-data']) !!}
                        <button type="button" class="btn btn-primary" style="float: right;" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah User</button>

                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <table width="100%">
                                            <tr>
                                                <td>NIK</td>
                                                <td></td>
                                                <td>
                                                    {{-- <input class="form-control" name="nik" required/> --}}
                                                    {{ Form::text('nik', null, array('class' => 'form-control', 'required' => '')) }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3"><br></td>
                                            </tr>
                                            <tr>
                                                <td>Nama</td>
                                                <td></td>
                                                <td>
                                                    {{-- <input class="form-control" name="nama" required/> --}}
                                                    {{ Form::text('name', null, array('class' => 'form-control', 'required' => '')) }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3"><br></td>
                                            </tr>
                                            <tr>
                                                <td>Password</td>
                                                <td></td>
                                                <td>
                                                    {{-- <input class="form-control" name="password" required/> --}}
                                                    {{ Form::text('password', null, array('class' => 'form-control', 'required' => '')) }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3"><br></td>
                                            </tr>
                                            <tr>
                                                <td>E-Mail</td>
                                                <td></td>
                                                <td>
                                                    {{-- <input type="email" class="form-control" name="email" required/> --}}
                                                    {{ Form::text('email', null, array('class' => 'form-control', 'required' => '')) }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3"><br></td>
                                            </tr>
                                            <tr>
                                                <td>No Hp</td>
                                                <td></td>
                                                <td>
                                                    {{-- <input class="form-control" name="no_hp" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/> --}}
                                                    {{ Form::number('handphone', null, array('class' => 'form-control', 'required' => '')) }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3"><br></td>
                                            </tr>
                                            <tr>
                                                <td>Role</td>
                                                <td></td>
                                                <td>
                                                    {{ Form::select('role', ['-- Pilih Role --' => '-- Pilih Role --', 'Member' => 'Member', 'Wawancara' => 'Wawancara'], null, array('class' => 'form-control', 'required' => '')) }}
                                                </td>
                                            </tr>
                                        </table>
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success">Success</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>

                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>No Hp</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; ?>
                                @foreach($halo as $halo)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td></td>
                                    <td>{{ $halo->nama_lengkap }}</td>
                                    <td>{{ $halo2->email }}</td>
                                    <td>{{ $halo2->handphone }}</td>
                                    <td>{{}}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary"><i class="fa fa-pencil"></i></button>
                                        <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
        </div>
        <!-- END CONTENT BODY -->
    </div>
</div>
<!-- END CONTENT -->
@endsection