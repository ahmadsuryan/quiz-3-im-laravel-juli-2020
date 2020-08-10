@extends('layouts.master')

@section('content')

    <div class="container">

        <div class="panel panel-primary">
            <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nama_proyek">Nama Proyek :</label>
                                <input class="form-control" id="nama_proyek" type="text" name="nama_proyek"
                                value={{ $proyek->nama_proyek }} disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                            <label for="deskripsi_proyek">Deskripsi Proyek :</label>
                                <input class="form-control" id="deskripsi_proyek" type="text" name="deskripsi_proyek"
                                value={{ $proyek->deskripsi_proyek }} disabled>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

    </div>

@endsection