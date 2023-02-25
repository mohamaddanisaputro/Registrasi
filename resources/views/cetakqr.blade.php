<!DOCTYPE html>
<html lang="en">

<head>
@include('TamplateDepan.head')

</head>

<body>
  
    <!DOCTYPE html>
    <html>
      <head>
        @include('TamplateDepan.head')
      </head>
      <body>
        <div class="card mx-auto mt-5" style="width: 350px;">
          <div class="card-body">
            @if ($data)
                <h5 class="card-title text-center mt-3">Screnshoot QR Di bawah ini</h5>
                
                <div class="qr-code text-center mt-3">
                {{-- <img src="qr-code.png" alt="QR Code" width="150" height="150"> --}}
                {!! $qrcode !!}
                </div>
                
                <table class="table mt-3">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>{{ $data->nama }}</td>
                    </tr>
                    <tr>
                        <td>Event</td>
                        <td>:</td>
                        <td>{{ $data->daftarevent->nama_event }}</td>
                    </tr>
                    <tr>
                        <td>Kategori</td>
                        <td>:</td>
                        <td>{{ $data->kategorikelas->nama_kategori }}</td>
                    </tr>
                </table>
            @else
            <div class="alert alert-danger">
				Data Registrasi Tidak Ditemukan
			</div>
            @endif
            <div class="text-center mt-5">
              <a href="{{ url('/') }}" class="btn btn-primary btn-sm">Kembali</a>
            </div>
          </div>
        </div>
      </body>
    </html>
    
   
  
 @include('TamplateDepan.footer')
</body>

</html>