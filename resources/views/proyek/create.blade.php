@extends('layouts.master')

@section('content')

    <div class="container">

        <div class="alert alert-info">
            <i class="glyphicon glyphicon-info-sign"></i> Silahkan isi data proyek berikut
        </div>
        <div class="panel panel-primary">

            <div class="panel-body">

                <form method="post" action="{{url('/proyek')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nama_proyek">Nama Proyek :</label>
                                <input class="form-control" id="nama_proyek" required type="text" name="nama_proyek">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="deskripsi_proyek">Deskripsi Proyek :</label>
                                <textarea name="deskripsi_proyek" id="deskripsi_proyek" required class="form-control" rows="4"></textarea>
                            </div>
                        </div>
                    </div>

                    <button type="submit" name="submit" class="btn btn-success btn-lg"><i class="glyphicon glyphicon-send"></i> Submit</button>
                    <button type="reset" class="btn btn-danger btn-lg">Reset</button>
                </form>
            </div>
        </div>

    </div>

@endsection