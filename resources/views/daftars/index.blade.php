@extends('daftars.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb mt-3 mb-3">
            <div class="text-left">
                <h2>PPDB - SMK Semangat 45 !</h2>
            </div>
            <div class="text-right">
                <a class="btn btn-success" href="{{ route('daftars.create') }}">Daftar siswa !</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong><p>{{ $message }}</p></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
   
    <table class="table table-striped table-bordered">
        <tr>
            <th>No Reg</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>Alamat Lengkap</th>
            <th>Agama</th>
            <th>Asal SMP</th>
            <th>Jurusan</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($daftars as $key => $daftar)
        <tr>
          
            <td>{{ $key+1 }}</td>
            <td>{{ $daftar->namalengkap }}</td>
            <td>{{ $daftar->jk }}</td>
            <td>{{ $daftar->alamatlengkap }}</td>
            <td>{{ $daftar->agama }}</td>
            <td>{{ $daftar->asalsmp }}</td>
            <td>{{ $daftar->jurusan }}</td>
            <td>
                <form action="{{ route('daftars.destroy',$daftar->id) }}" method="POST" onsubmit="return confirm('Apakah yakin data akan dihapus?')">
   
                    <a class="btn btn-info" href="{{ route('print' ,$daftar->id) }}">Print</a>
    
                    <a class="btn btn-primary" href="{{ route('daftars.edit',$daftar->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
      
@endsection