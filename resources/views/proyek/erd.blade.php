@extends('layouts.master')

@section('content')
<div class="container">

<div class="panel panel-primary">
    <div class="panel-body">
        <img src="{{url('./ERD.PNG')}}"  alt="...">
    </div>
</div>
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