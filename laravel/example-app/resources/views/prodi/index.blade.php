@extends('layout.main')

@section('title','prodi')

@section('content')

<div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Prodi</h4>
                  <p class="card-description">
                    List data prodi <code></code>
                  </p>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Nama prodi</th>
                          <th>singkatan</th>
                          <th>Nama Fakultas</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($prodi as $item)
                        <tr>
                            <td>{{ $item["nama"]}}</td>
                            <td>{{ $item["singkatan"]}}</td>
                            <td>{{ $item["fakultas"]["nama"]}}</td>

                        </tr>
                            
                        @endforeach
                            
                       
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection




