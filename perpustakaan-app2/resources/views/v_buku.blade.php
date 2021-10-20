@extends("Layout.v_template")
@section('title','Buku')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">
          Data Buku
        </h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Kode Buku</th>
              <th>Nama Buku</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @php $no = 0 @endphp
            @foreach($buku as $b)
            <tr>
              <td>{{ ++$no }}</td>
              <td>{{ $b->kode_buku }}</td>
              <td></td>
              <td></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>
@endsection
