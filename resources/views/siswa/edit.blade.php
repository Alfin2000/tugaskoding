        @extends('layouts.master')

        @section('content')
        <div class="main">
            <div class="main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Inputs</h3>
                                </div>
                                <div class="panel-body">
                                    <form action="/kelas/{{$siswa->kelas_id}}/update" method="post">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Kelas ID</label>
                                            <input name="kelas_id" type="text" class="form-control" id="kelas_id" aria-describedby="emailHelp" placeholder="Masukkan Kelas ID" value="{{$siswa->kelas_id}}">
                                            <small id="emailHelp" class="form-text text-muted">Kelas ID harus berupa angka.</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Nama Kelas</label>
                                            <input name="nama" type="text" class="form-control" id="nama" placeholder="Masukkan Nama Kelas" value="{{$siswa->nama}}">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @stop
        @section('content1')
        <h1>Edit Data Kelas</h1>
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
        @endif
        <div class="row">
            <div class="modal-body">
                <form action="/kelas/{{$siswa->kelas_id}}/update" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kelas ID</label>
                        <input name="kelas_id" type="text" class="form-control" id="kelas_id" aria-describedby="emailHelp" placeholder="Masukkan Kelas ID" value="{{$siswa->kelas_id}}">
                        <small id="emailHelp" class="form-text text-muted">Kelas ID harus berupa angka.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nama Kelas</label>
                        <input name="nama" type="text" class="form-control" id="nama" placeholder="Masukkan Nama Kelas" value="{{$siswa->nama}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Ubah Data</button>
                </form>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        @endsection('content')