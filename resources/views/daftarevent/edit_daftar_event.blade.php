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
                        <h3>Edit  daftar event</h3>
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
                    <form action="{{ route('daftarevent.update', $data->id_event) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                                <label for="nama_event">Nama event</label>
                                <input type="text" id="nama_event" name="nama_event" class="form-control" placeholder="nama_event" value="{{ old('nama_event', $data->nama_event) }}">
                        </div>
                      
                        <div class="form-group">
                                <label for="tgl_daftar">Tanggal Daftar</label>
                                <input type="date" id="tgl_daftar" name="tgl_daftar" class="form-control" placeholder="tgl_daftar" value="{{ old('tgl_daftar', $data->tgl_daftar) }}">
                        </div>
                        <div class="form-group">
                            <label for="tgl_maks_daftar">Tanggal Maksimal Daftar</label>
                            <input type="date" id="tgl_maks_daftar" name="tgl_maks_daftar" class="form-control" placeholder="" value="{{ old('tgl_maks_daftar', $data->tgl_maks_daftar) }}">
                         </div>
                         <div class="form-group">
                                <label for="informasi">Masukan Deskripsi informasi event</label>
                                 <input type="text" id="informasi" name="informasi" class="form-control" placeholder="Nomor Telp." value="{{ old('informasi', $data->informasi) }}">
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

