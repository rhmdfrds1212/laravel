@extends('layout.main')

@section('title','mahasiswa')

@section('content')


<div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Mahasiswa</h4>
                  <p class="card-description">
                    List data mahasiswa <code></code>
                  </p>
                  {{-- tombol tambah --}}
                  <a href="{{route('mahasiswa.create')}}" class="btn btn-rounded btn-primary">Tambah</a>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>NPM</th>
                          <th>Nama</th>
                          <th>Foto</th>
                          <th>Program Studi</th>
                          <th>#</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($mahasiswa as $item)
                        <tr>
                            <td>{{ $item["npm"]}}</td>
                            <td>{{ $item["nama"]}}</td>
                            <td><img src="{{ url('foto/'. $item["url_foto"]) }}"></td>
                            <td>{{ $item["prodi"]["nama"] }}</td>
                            <td>
                                <form action="{{ route('mahasiswa.destroy', $item["id"]) }}" method="post"></form>
                            </td>
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
