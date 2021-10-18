@extends('Layout.v_template')
@section('title','Petugas')
@section('content')
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">data @yield('title')</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Password</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <?php $no =1; ?>
            @foreach ( $petugas as $data )
            <tbody>
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $data->nama_petugas }}
                  </td>
                  <td>{{ $data->password }}</td>
                  <td>
                      <a href="" class="btn btn-sm btn-warning">Edit</a>
                      <a href="" class="btn btn-sm btn-primary">tambah</a>
                      <a href="" class="btn btn-sm btn-danger">hapus</a>
                </td>
                </tr>


            @endforeach

            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

@endsection
