@extends("Layout.v_template")
@section('title','Detail Buku')

@section('content')
<p><a href="/buku" class="btn btn-success tbn-sm">Kembali</a></p>
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data @yield('title')</h3>


        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table">
            <tr>
                <th>Kode Buku</th>
                <th style="width:30px">:</th>
                <th>{{ $buku->kode_buku }}</th>
            </tr>
            <tr>
                <th>Judul</th>
                <th style="width:30px">:</th>
                <th>{{ $buku->judul }}</th>
            </tr>
            <tr>
                <th>Pengarang</th>
                <th style="width:30px">:</th>
                <th>{{ $buku->pengarang }}</th>
            </tr>
            <tr>
                <th>Tahun Terbit</th>
                <th style="width:30px">:</th>
                <th>{{ $buku->tahun_terbit }}</th>
            </tr>
            <tr>
                <th>Penerbit</th>
                <th style="width:30px">:</th>
                <th>{{ $buku->penerbit }}</th>
            </tr>

          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
@endsection
