@extends('layout.main')

@section('title','prodi')

@section('content')


<div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Prodi</h4>
                  <p class="card-description">
                    List data fakultas <code></code>
                  </p>
                  {{-- tombol tambah --}}
                  <a href="{{route('prodi.create')}}" class="btn btn-rounded btn-primary">Tambah</a>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Nama Program studi</th>
                          <th>singkatan</th>

                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($prodi as $item)
                        <tr>
                            <td>{{ $item["nama"]}}</td>
                            <td>{{ $item["singkatan"]}}</td>

                        </tr>

                        @endforeach



                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            @if (session('success'))
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
               Swal.fire({
                  title: "Good job!",
                  text: "{{ session('success') }}",
                  icon: "success"
                });
              </script>
  @endif

 @endsection



