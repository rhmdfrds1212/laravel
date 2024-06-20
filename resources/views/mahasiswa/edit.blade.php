@extends('layout.main')

@section('title','tambah mahasiswa')

@section('content')

<div class ="row">
    {{-- formulir tambah fakultas --}}
    <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Ubah Mahasiswa</h4>
                  <p class="card-description">
                    formulir ubah mahasiswa
                </p>
                  <form method="POST" action="{{route('mahasiswa.update',$mahasiswa['id']) }}" class="forms-sample" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                      <label for="npm">Npm</label>
                      <input type="text" class="form-control" name="npm" value ="{{old('npm') ? old('npm') : $mahasiswa['npm'] }}" placeholder="npm" readonly>
                      @error('npm')
                        <span class = "text-danger">{{$message }}</span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" name="nama" value ="{{old('nama') ? old('nama') : $mahasiswa['nama']}}" placeholder="Nama">
                      @error('nama')
                        <span class = "text-danger">{{$message }}</span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="tempat_lahir">tempat lahir</label>
                      <input type="text" class="form-control" name="tempat_lahir" value ="{{old('tempat_lahir') ? old('tempat_lahir') : $mahasiswa['tempat_lahir']}}" placeholder="Tempat lahir">
                      @error('tempat_lahir')
                        <span class = "text-danger">{{$message }}</span>
                      @enderror
                    </div><div class="form-group">
                      <label for="tanggal_lahir">tanggal lahir</label>
                      <input type="date" class="form-control" name="tanggal_lahir" value ="{{old('tanggal_lahir') ? old('tanggal_lahir') : $mahasiswa['tanggal_lahir']}}" placeholder="Tanggal lahir">
                      @error('tanggal_lahir')
                        <span class = "text-danger">{{$message }}</span>
                      @enderror
                    </div><div class="form-group">
                      <label for="alamat">alamat</label>
                      <input type="text" class="form-control" name="alamat" value ="{{old('alamat') ? old('alamat') : $mahasiswa['alamat']}}" placeholder="Alamat">
                      @error('alamat')
                        <span class = "text-danger">{{$message }}</span>
                      @enderror
                    </div>
                    
                    <div class = "form-group">
                      <label for="prodi_id">Prodi</label>
                      <label for="prodi_id" ></label>
                      <select name="prodi_id"
                      class ="form-control">
                    @foreach ($prodi as $item)
                        <option value = "{{$item['id']}}" {{ (old('prodi_id')==
                      $item["id"])? "selected" : ($mahasiswa['prodi_id']== $item["id"]? "selected" : null )}}>
                             {{$item['nama']}}
                        </option>
                    @endforeach
                    </select>
                    </div>

                    <div class="form-group">
                      <label for="url_foto">Url Foto</label>
                      <input type="file" class="form-control" name="url_foto" placeholder="url">
                      @error('url_foto')
                        <span class = "text-danger">{{$message }}</span>
                      @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{url('mahasiswa')}}" class="btn btn-light">Batal</a>
                  </form>
                </div>
              </div>
            </div>
</div>
@endsection