<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registrasi Ulang</title>
   @include('Tamplate.head')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('Tamplate.left-sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                   @include('Tamplate.navbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Data  Registrasi Ulang</h1>
                   
                    <div class="content">
                        <div class="card card-info card-outline">
                            <div class="card-header">
                                <div class="card-tools">
                                    @if (session()->get('error'))
                                        <div class="alert alert-danger mt-3">
                                            {!! session()->get('error') !!}
                                        </div>
                                    @endif
                                    @if (session()->get('success'))
                                        <div class="alert alert-success mt-3">
                                            {!! session()->get('success') !!}
                                        </div>
                                    @endif
                                    <form id="formsearch">
                                        <div class="form-group">
                                            <label for="no_bib">Masukan isi QR Code</label>
                                            <input type="text" class="form-control" name="no_bib" id="no_bib" placeholder="Masukan isi QR Code" rows="3" autofocus />
                                            {{-- <textarea name="no_bib" class="form-control" autofocus></textarea> --}}
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                            <div class="card-body">
                                @if ($data)
                                    <form action="{{ route('registrasiulang.store') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="id_pendaftaran_peserta" value="{{ $data->id_pendaftaran_peserta }}" />
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" class="form-control" name="nama"id="nama" placeholder="" value="{{ $data->nama }}" disabled="disabled">
                                        </div>
                                        <div class="form-group">
                                            <label for="NIK">No identitas</label>
                                            <input type="number" class="form-control" name="nik" id="nik" placeholder="" value="{{ $data->nik }}" disabled="disabled">
                                            
                                        </div>
                                        <div class="form-group">
                                            <label for="nm_komunitas">Nama Komunitas</label>
                                            <input type="text" class="form-control" name="nm_komunitas" id="nm_komunitas" placeholder="" value="{{$data->nm_komunitas }}" disabled="disabled">
                                        </div>
                                        <div class="form-group">
                                            <label for="tempat_lahir">Tempat Lahir</label>
                                            <input type="text" class="form-control" name="tempat_lahir"id="tempat_lahir" placeholder="" value="{{ $data->tempat_lahir }}" disabled="disabled">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="tanggal_lahir">Tanggal Lahir</label>
                                            <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="" value="{{ $data->tanggal_lahir }}" disabled="disabled">
                                        </div>
                                        <div class="form-group">
                                            <label for="no_telp">No Telphone atau whatsapp</label>
                                            <input type="text" class="form-control" name="no_telp"id="no_telp" placeholder="" value="{{ $data->no_telp }}" disabled="disabled">
                                        </div>
                                        <div class="form-groupp">
                                            <label for="daftarevent-option">Daftar Event</label>
                                            <select class="form-control" name="id_event" id="daftarevent" disabled="disabled">
                                                @foreach ($event as $p)
                                                <option value="{{ $p->id_event }}"@if($data->id_event == $p->id_event)selected @endif>{{ $p->nama_event }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="kategorikelas-option">Kategori Kelas</label>
                                            <select class="form-control" id="id_kategori_event" name="id_kategori_event" disabled="disabled">
                                                @foreach ($kategori as $p)
                                                <option value="{{  $p->id_kategori_event }}"@if($data->id_kategori_event == $p->id_kategori_event)selected @endif>{{ $p->nama_kategori }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success" >Registrasi Ulang</button>
                                        </div>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                  
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('Tamplate.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

  @include('Tamplate.script')
  <script>
    $('textarea').keypress(function(e){
        if (e.keyCode === 13) {
            $('#formsubmit').submit();
        }
    })
  </script>
</body>

</html>

