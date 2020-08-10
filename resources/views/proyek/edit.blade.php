@extends('layouts.master')

@section('content')

    <div class="container">

        <div class="alert alert-info">
            <i class="glyphicon glyphicon-info-sign"></i> Silahkan ubah isi data berikut
        </div>
        <div class="panel panel-primary">

            <div class="panel-heading">
                Form Pertanyaan
            </div>
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
                <form role="form" method="POST" action="/pertanyaan/{{$pertanyaan->id}}"> 
                    @csrf
                    @method('PUT') 
                
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="judul">Judul :</label>
                                <input class="form-control" id="judul" required type="text" name="judul"
                                value="{{old('judul',$pertanyaan->judul)}}">
                                @error('title')
                                    <div class="alert alert-danger">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="isi">Isi Pertanyaan :</label>
                                <textarea name="isi" id="isi" required class="form-control" 
                                rows="4">{{old('isi',$pertanyaan->isi)}}</textarea>
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