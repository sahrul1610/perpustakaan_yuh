
@extends("Layout.v_template")
@section('title','Anggota')
@section('content')
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data @yield('title')</h3>

          <div class="box-tools">
            <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
              <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

              <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
                <th>No</th>
                <th>Id Anggota</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tempat, Tanggal LAhir</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
              <?php $no =1; ?>
              @foreach ( $anggota as $data )
              <tbody>
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->id_anggota }}
                    </td>
                    <td>{{ $data->nama_anggota }}</td>
                    <td>{{ $data->alamat }}</td>
                    <td>{{ $data->ttl_anggota }}</td>
                    <td>{{ $data->status_anggota}}</td>
                    <td>
                        <a href="" class="btn btn-sm btn-primary">tambah</a>
                        <a href="" class="btn btn-sm btn-warning">edit</a>
                        <a href="" class="btn btn-sm btn-danger">hapus</a>
                  </td>
                  </tr>
            @endforeach
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
@endsection


