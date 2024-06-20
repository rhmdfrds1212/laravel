@extends('layout.main')

@section('title','prodi')

@section('content')

<div class="row">
    {{-- formulir tambah fakultas --}}
<div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Program Studi</h4>
                  <p class="card-description">
                    Formulir Tambah program Studi
                  </p>
                  <form method="POST" action="{{ route('prodi.store')}}"class="forms-sample">
                    @csrf
                    <div class="form-group">
                      <label for="nama">Nama Program Studi</label>
                      <input type="text" class="form-control" name="nama" 
                      value="{{old('nama')}}" 
                      placeholder= "Nama ">
                      @error('nama')
                      <span class="text-danger"> {{$message}} </span>   
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="singkatan">Singkatan</label>
                      <input type="text" class="form-control" name="singkatan" value="{{old('singkatan')}}" placeholder="FIKR,FEB,..">
                    </div>
                     <div class="form-group">
                      <label for="fakultas_id">Fakultas</label>
                     
                        <select name="fakultas_id" 
                        class="form-control">
                            @foreach ($fakultas as $item)
                                <option value="{{ $item['id']}}">
                                    {{$item['nama']}}
                                </option>
                                
                            @endforeach
                    </select>
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <a href="{{url('fakultas')}}" class="btn btn-light">Batal</button>
                  </form>
                </div>
              </div>
            </div>
</div>
@endsection