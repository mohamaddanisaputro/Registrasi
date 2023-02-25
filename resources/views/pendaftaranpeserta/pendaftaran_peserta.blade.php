<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pendaftaran Peserta</title>
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
                   

                    <!-- Topbar Navbar -->
                   @include('Tamplate.navbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Data Pendaftaran peserta</h1>
                    <div class="content">
                        <div class="card card-info card-outline">
                            
                            <div class="card-header">
                                <div class="card-tools">
                                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" name="cari" class="form-control bg-light border-0 small" placeholder="Search for..." value="{{ old('cari') }}"
                                            aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                               
                                    <a href="{{ route('pendaftaranpeserta.create') }}" class="btn btn-success">Tambah data <i class="fas fa-plus-square"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pendaftaranpeserta">Data Pendaftaran Peserta</label>
                     </div>

                   <div class="card-body">
                    <table class="table table-border">
                        <tr>
                            <th>No. BIB </th>
                            <th>Nama Peserta </th>
                            <th>NIK </th>
                            <th>Nama Komunitas</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>No Telpon</th>
                            <th>Nama Event</th>
                            <th>Kategori Kelas</th>
                            <th>Tanggal Daftar</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($pendaftaranpeserta as $r)
                        <tr>
                            <td>{{ $r->no_bib }}</td>
                            <td>{{ $r->nama}}</td>
                            <td>{{ $r->nik}}</td>
                            <td>{{ $r->nm_komunitas}}</td>
                            <td>{{ $r->tempat_lahir}}</td>
                            <td>{{ $r->tanggal_lahir}}</td>
                            <td>{{ $r->no_telp}}</td>
                            <td>{{ $r->daftarevent->nama_event }}</td>
                            <td>{{ $r->kategorikelas->nama_kategori }}</td>
                            <td>{{ $r->tgl_daftar }}</td>
                            
                            <td class="d-flex">
                                <a class="btn btn-success mr-2" href="{{ route('pendaftaranpeserta.edit', $r->id_pendaftaran_peserta  ) }}">Edit</a>
                                <form method="post" action="{{ route('pendaftaranpeserta.destroy', $r->id_pendaftaran_peserta ) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
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
</body>

</html>

