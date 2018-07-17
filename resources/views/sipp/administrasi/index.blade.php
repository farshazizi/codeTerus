@extends('welcome')
@section('content')
<div class="page-sidebar-wrapper">
    @include('sipp/administrasi/_sidebar')
</div>

<div class="page-content-wrapper">
  <div class="page-content">
    <div id="wrapper">
      <div id="page-wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">List Pemohon SIPP</h1>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Nama</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                @foreach($halo as $halo)
                <tr>
                  <td>{{ $i++ }}</td>
                  <td>{{ $halo->created_at }}</td>
                  <td>{{ $halo->nama_lengkap }}</td>
                  <td>Menunggu Pengecekan Sekretariat</td>
                  <td>
                    <center><a href="{{ route('ubahberkas.show', $halo->id) }}"><button type="button" class="btn btn-primary">Cek Berkas</button></a></center>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection