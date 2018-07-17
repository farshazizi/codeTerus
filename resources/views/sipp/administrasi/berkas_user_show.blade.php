@extends('welcome')
@section('content')
<style>
/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>
<div class="page-sidebar-wrapper">
    @include('sipp/administrasi/_sidebar')
</div>

<div class="page-content-wrapper">
    <div class="page-content">
        <h2 class="page-title">Pemeriksaan Form SIPP</h2>
        <div id="wrapper">
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            Formulir ermohonan SIPP
                            </div>

                            {{-- <div class="tab">
                                <button class="active tablinks" onclick="openCity(event, 'London')">London</button>
                                <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
                            </div> --}}

                            <div class="panel-body">
                                <ul class="nav nav-tabs">
                                    <li class="active tablinks"><a data-toggle="tab" onclick="openCity(event, 'PendidikanKarir')" id="defaultOpen">Pendidikan - Karir</a></li>
                                    <li class="tablinks"><a data-toggle="tab"  onclick="openCity(event, 'PengembanganProfessional')">Pengembangan Professional</a></li>
                                </ul>

                                <div id="PendidikanKarir" class="tabcontent">
                                    <div id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover">
                                              <thead>
                                                <tr>
                                                  <th class="column-title"><center>Jenjang Pendidikan</th>
                                                  <th class="column-title"><center>Universitas</th>
                                                  <th class="column-title"><center>Bidang Ilmu </th>
                                                  <th class="column-title"><center>Tahun Masuk</th>
                                                  <th class="column-title"><center>Tahun Lulus</th>
                                                  <th class="column-title"><center>Ijazah</th>
                                                  <th class="column-title"><center>Transkrip</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <?php $i = 1; ?>
                                                @foreach($halo as $halo)
                                                <tr>
                                                  <td><center>{{ $halo->jenjang_pendidikan }}</center></td>
                                                  <td><center>{{ $halo->universitas }}</center></td>
                                                  <td><center>{{ $halo->bidang_ilmu }}</center></td>
                                                  <td><center>{{ $halo->tahun_masuk }}</center></td>
                                                  <td><center>{{ $halo->tahun_lulus }}</center></td>
                                                  <td>
                                                    <center>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ijazah<?php echo $i; ?>">Lihat</button>
                                                    </center>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="ijazah<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Berkas Foto</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <img src="/images/ijazah/{{ $halo->ijazah }}" style="width: 75%; height: 50%">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </td>
                                                  <td>
                                                    <center>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#transkrip<?php echo $i; ?>">Lihat</button>
                                                    </center>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="transkrip<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Berkas Foto</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <img src="/images/transkrip/{{ $halo->transkrip }}" style="width: 75%; height: 50%">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                  </td>
                                                </tr>
                                                @endforeach
                                              </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div id="PengembanganProfessional" class="tabcontent">
                                    <div id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover">
                                              <thead>
                                                <tr>
                                                  <th class="column-title"><center>No.</th>
                                                  <th class="column-title"><center>Tahun</th>
                                                  <th class="column-title"><center>Nama Kegiatan</th>
                                                  <th class="column-title"><center>Nama Penyelenggara/Organisasi</th>
                                                  <th class="column-title"><center>Waktu/Lama</th>
                                                  <th class="column-title"><center>Bukti Foto Sertifikat</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                <?php $i = 1; ?>
                                                @foreach($halos as $halos)
                                                <tr>
                                                  <td><center>{{ $i++ }}</center></td>
                                                  <td><center>{{ $halos->tahun }}</center></td>
                                                  <td><center>{{ $halos->nama_kegiatan }}</center></td>
                                                  <td><center>{{ $halos->nama_penyelenggara }}</center></td>
                                                  <td><center>{{ $halos->durasi }}</center></td>
                                                  <td>
                                                    <center>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#foto_bukti<?php echo $i; ?>">View</button>
                                                    </center>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="foto_bukti<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Berkas Foto</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <img src="/images/foto_bukti/{{ $halos->foto_bukti }}" style="width: 75%; height: 50%">
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>
@endsection