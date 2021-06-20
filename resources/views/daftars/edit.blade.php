@extends('daftars.layout')
  
@section('content')
   
<div class="container mt-5">
   
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Edit Data Pendaftar
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('daftars.update',$daftar->id) }}" id="myForm">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="namalengkap">Nama Lengkap :</label>                  
                    <input type="text" name="namalengkap" class="form-control" id="namalengkap" value="{{ $daftar->namalengkap }}" aria-describedby="namalengkap" placeholder="Masukkan Judul Buku">                
                </div>
                <div class="row form-group">
            <div class="col col-md-3">
                <label for="jk" class=" form-control-label">Jenis Kelamin</label>
            </div>
                <div class="col-12 col-md-9">
                     <select name="jk" value="{{ $daftar->jk }}" id="jk" class="form-control">
                     <option selected value="{{ $daftar->jk }}">{{ $daftar->jk }}</option>
                     <option value="Laki-laki">Laki-laki</option>
                     <option value="Perempuan">Perempuan</option>
                     </select>
                 </div>
           </div>
           <div class="form-group">
                <label for="alamatlengkap">Alamat lengkap :</label>                   
                <textarea class="form-control" name="alamatlengkap" class="form-control" id="alamatlengkap" value="{{ $daftar->alamatlengkap }}" aria-describedby="alamatlengkap" placeholder="Masukkan Alamat lengkap">{{ $daftar->alamatlengkap }}</textarea>               
            </div>
            <div class="row form-group">
            <div class="col col-md-3">
                <label for="agama" class=" form-control-label">Agama :</label>
            </div>
                <div class="col-12 col-md-9">
                     <select name="agama" value="{{ $daftar->agama }}" id="agama" class="form-control">
                     <option selected value="{{ $daftar->agama }}">{{ $daftar->agama }}</option>
                     <option value="Islam">Islam</option>
                     <option value="Katholik">Katholik</option>
                     <option value="Kristen">Kristen</option>
                     <option value="Hindu">Hindu</option>
                     <option value="Budha">Budha</option>
                     <option value="Kong Huchu">Kong Huchu</option>
                     </select>
                 </div>
           </div>
                <div class="form-group">
                    <label for="asalsmp">Asal SMP :</label>                    
                    <input type="text" name="asalsmp" class="form-control" id="asalsmp" value="{{ $daftar->asalsmp }}" aria-describedby="asalsmp" placeholder="asalsmp">                
                </div>
                <div class="row form-group">
            <div class="col col-md-3">
                <label for="jurusan" class=" form-control-label">Jurusan :</label>
            </div>
                <div class="col-12 col-md-9">
                     <select name="jurusan" value="{{ $daftar->jurusan }}" id="jurusan" class="form-control">
                     <option selected value="{{ $daftar->jurusan }}">{{ $daftar->jurusan }}</option>
                     <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak (RPL)</option>
                     <option value="Tata Boga">Tata Boga (TBG)</option>
                     <option value="Tata Busana">Tata Busana</option>
                     <option value="Multimedia">Multimedia</option>>
                     </select>
                 </div>
           </div>   
            <button type="submit" class="btn btn-primary">Confirm Data</button>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection