@extends('layout.main')

@section('title','tambah mahasiswa')

@section('content')

<div class ="row">
    {{-- formulir tambah fakultas --}}
    <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Mahasiswa</h4>
                  <p class="card-description">
                    formulir tambah mahasiswa
                </p>
                  <form method="POST" action="{{route('mahasiswa.store') }}" class="forms-sample" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="npm">Npm</label>
                      <input type="text" class="form-control" name="npm" value ="{{old('npm')}}" placeholder="npm">
                      @error('npm')
                        <span class = "text-danger">{{$message }}</span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" name="nama" placeholder="Nama">
                      @error('nama')
                        <span class = "text-danger">{{$message }}</span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="tempat_lahir">tempat lahir</label>
                      <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat lahir">
                      @error('tempat_lahir')
                        <span class = "text-danger">{{$message }}</span>
                      @enderror
                    </div><div class="form-group">
                      <label for="tanggal_lahir">tanggal lahir</label>
                      <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal lahir">
                      @error('tanggal_lahir')
                        <span class = "text-danger">{{$message }}</span>
                      @enderror
                    </div><div class="form-group">
                      <label for="alamat">alamat</label>
                      <input type="text" class="form-control" name="alamat" placeholder="Alamat">
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
                        <option value = "{{$item['id']}}">
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