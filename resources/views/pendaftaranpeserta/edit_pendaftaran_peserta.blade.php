<!DOCTYPE html>
<html lang="en">

<head>
    <title>SB Admin 2 - Blank</title>
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
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <h3>Edit Data pendaftaran peserta</h3>
                    </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('pendaftaranpeserta.update', $data->id_pendaftaran_peserta) }}" method="post">
                        @csrf
                        @method('PUT')
                        <form action="{{ route('pendaftaranpeserta.store') }}" method="post">
                            @csrf
                            
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama"id="nama" placeholder="" value="{{ old('nama',$data->nama) }}">
                            </div>
                            <div class="form-group">
                                <label for="NIK">No identitas</label>
                                <input type="number" class="form-control" name="nik" id="nik" placeholder="" value="{{ old('nik',$data->nik) }}">
                                
                            </div>
                            <div class="form-group">
                                <label for="nm_komunitas">Nama Komunitas</label>
                                <input type="text" class="form-control" name="nm_komunitas" id="nm_komunitas" placeholder="" value="{{ old('nm_komunitas',$data->nm_komunitas) }}">
                            </div>
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" class="form-control" name="tempat_lahir"id="tempat_lahir" placeholder="" value="{{ old('tempat_lahir',$data->tempat_lahir) }}">
                            </div>
                            
                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="" value="{{ old('tanggal_lahir',$data->tanggal_lahir) }}">
                            </div>
                            <div class="form-group">
                                <label for="no_telp">No Telphone atau whatsapp</label>
                                <input type="text" class="form-control" name="no_telp"id="no_telp" placeholder="" value="{{ old('no_telp',$data->no_telp) }}">
                            </div>
                        <div class="form-groupp">
                            <label for="daftarevent-option">Daftar Event</label>
                            <select class="form-control" name="id_event" id="daftarevent">
                                @foreach ($event as $p)
                                <option value="{{ $p->id_event }}"@if($data->id_event == $p->id_event)selected @endif>{{ $p->nama_event }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kategorikelas-option">Kategori Kelas</label>
                            <select class="form-control" id="id_kategori_event" name="id_kategori_event">
                                @foreach ($kategori as $p)
                                <option value="{{  $p->id_kategori_event }}"@if($data->id_kategori_event == $p->id_kategori_event)selected @endif>{{ $p->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success" >Update  Data</button>
                        </div>
                    </form>

                </div>
                </div>

                    <!-- Page Heading -->
                    
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
</body>

</html>

