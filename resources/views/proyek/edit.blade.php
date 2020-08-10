@extends('layouts.master')

@section('content')

    <div class="container">

        <div class="alert alert-info">
            <i class="glyphicon glyphicon-info-sign"></i> Silahkan ubah isi data berikut
        </div>
        <div class="panel panel-primary">

            <div class="panel-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <form role="form" method="POST" action="/proyek/{{$proyek->id}}"> 
                    @csrf
                    @method('PUT') 
                
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nama_proyek">Nama Proyek :</label>
                                <input class="form-control" id="nama_proyek" required type="text" name="nama_proyek"
                                value="{{old('nama_proyek',$proyek->nama_proyek)}}">
                                @error('title')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="isi">Deskripsi Proyek :</label>
                                <textarea name="deskripsi_proyek" id="deskripsi_proyek" required class="form-control" 
                                rows="4">{{old('deskripsi_proyek',$proyek->deskripsi_proyek)}}</textarea>
                                @error('title')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror

                            </div>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success btn-lg"><i class="glyphicon glyphicon-send"></i> Submit</button>
                </form>
            </div>
        </div>

    </div>

@endsection