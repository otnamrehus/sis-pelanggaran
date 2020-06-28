@extends('layouts.admin.app')

@section('assets-top')
<!-- Page level plugin CSS-->
<link href="{{ asset('assets/blog-admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<!-- Responsive datatable examples -->
<link href="{{ asset('assets/blog-admin/vendor/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Data Siswa Konseling</a>
            </li>
            <li class="breadcrumb-item active">Tabel</li>
        </ol>
        @if(Session::has('success'))
            <div class="alert alert-success alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ Session::get('success') }}
            </div>
        @endif
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-list"></i> Data Siswa Konseling
            </div>
            <div class="card-body table-responsive">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Siswa</th>
                                <th>Jurusan</th>
                                <th>Kelas</th>
                                <th>Pelanggaran</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Siswa</th>
                                <th>Jurusan</th>
                                <th>Kelas</th>
                                <th>Pelanggaran</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('assets-bottom')
<!-- Page level plugin JavaScript-->
<script src="{{ asset('assets/blog-admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/blog-admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<!-- Responsive examples -->
<script src="{{ asset('assets/blog-admin/vendor/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/blog-admin/vendor/datatables/responsive.bootstrap4.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $("#dataTable").DataTable({
            order: [ [0, 'desc'] ],
            processing: true,
            serverSide: true,
            ajax: "{{ route('api.datatable.konseling') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'nama_siswa', name: 'nama_siswa'},
                {data: 'jurusan', name: 'jurusan'},
                {data: 'rombel', name: 'rombel'},
                {data: 'jenis_pelanggaran', name: 'jenis_pelanggaran'},
                {data: 'status', name: 'status'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });
    });
</script>
@endsection