@extends('layouts.master')

@section('content')
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">        
        <div class="card-body p-0">
          <a class="btn btn-info btn-sm" href="{{url('/proyek/create' )}}">
            <i class="fa fa-add"></i>
            Add New
          </a>
          <br>
          <table id="example1" class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 5%">
                          id
                      </th>
                      <th style="width: 25%">
                          Nama Proyek
                      </th>
                      <th style="width: 45%">
                          Deskripsi Proyek
                      </th>
                      <th style="width: 25%">
                         Aksi
                      </th>
                  </tr>
              </thead>
              <tbody>
              @foreach($proyek as $dt)
                  <tr>
                      <td>{{ $dt->id }}</td>
                      <td>{{ $dt->nama_proyek }}</td>
                      <td>{{ $dt->deskripsi_proyek }}</td>
                      <td style="display: flex">
                          <a class="btn btn-primary btn-sm" href="{{url('/proyek/'.$dt->id )}}">
                              <i class="fas fa-folder"></i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="{{url('/proyek/'.$dt->id.'/edit' )}}">
                              <i class="fas fa-pencil-alt"></i>
                              Edit
                          </a>
                          <form action="{{url('/proyek/'.$dt->id )}}" method="post">
                             @csrf
                             @method('DELETE')
                             <input type="submit" value="Delete" onClick="return confirm('betul mau dihapus ?')" class="btn btn-danger btn-sm">
                          </form>
                      </td>
                  </tr>
              @endforeach
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  @endsection

  <!-- @push('script')
    <link rel="stylesheet" href="{{url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
    <script>
        $(function () {
            $("#example1").DataTable();
        });
    </script>
@endpush -->