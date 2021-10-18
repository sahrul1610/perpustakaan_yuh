@extends("Layout.v_template")
@section('title','Buku')
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
                <th>Kode Buku</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Tahun Terbit</th>
                <th>Penerbit</th>
                <th>Aksi</th>
              </tr>
              <?php $no =1; ?>
            @foreach ($buku as $data )
            <tbody>
                <tr>
              <td>{{ $no++ }}</td>
                  <td>{{ $data->kode_buku}}
                  </td>
                  <td>{{ $data->judul }}</td>
                  <td>{{ $data->pengarang }}</td>
                  <td>{{ $data->tahun_terbit }}</td>
                  <td>{{ $data->penerbit }}</td>

                    <td>
                        <a href="/buku/detail/{{ $data->kode_buku }}" class="btn btn-sm btn-success">Detail</a>
                        <a href="" class="btn btn-sm btn-primary">Edit</a>
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
