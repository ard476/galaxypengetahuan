

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col">
            <h1 class="m-0 text-dark">Transaksi</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
      <div class="card">
        <div class="card-header">
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label>Barcode</label>
              <div class="form-inline">
                <select id="barcode" class="form-control select2 col-sm-6" onchange="getNama()"></select>
                <span class="ml-3 text-muted" id="nama_produk"></span>
              </div>
              <small class="form-text text-muted" id="sisa"></small>
            </div>
            <div class="form-group">
              <label>Jumlah</label>
              <input type="number" class="form-control col-sm-6" placeholder="Jumlah" id="jumlah" onkeyup="checkEmpty()">
            </div>
            <div class="form-group">
              <button id="tambah" class="btn btn-success" onclick="checkStok()" disabled>Tambah</button>
              <button id="bayar" class="btn btn-success" data-toggle="modal" data-target="#modal" disabled>Bayar</button>
            </div>
          </div>
          <div class="col-sm-6 d-flex justify-content-end text-right nota">
            <div>
              <div class="mb-0">
                <b class="mr-2">Nota</b> <span id="nota"></span>
              </div>
              <span id="total" style="font-size: 80px; line-height: 1" class="text-danger">0</span>
            </div>
          </div>
        </div>
        </div>
        <div class="card-body">
          <table class="table w-100 table-bordered table-hover" id="transaksi">
            <thead>
              <tr>
                <th>Barcode</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Actions</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<div class="modal fade" id="modal">
<div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title">Bayar</h5>
    <button class="close" data-dismiss="modal">
      <span>&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <form id="form">
      <div class="form-group">
        <label>Tanggal</label>
        <input type="text" class="form-control" name="tanggal" id="tanggal" required>
      </div>
      <div class="form-group">
        <label>Pelanggan</label>
        <select name="pelannggan" id="pelanggan" class="form-control select2"></select>
      </div>
      <div class="form-group">
        <label>Jumlah Uang</label>
        <input placeholder="Jumlah Uang" type="number" class="form-control" name="jumlah_uang" onkeyup="kembalian()" required>
      </div>
      <div class="form-group">
        <label>Diskon</label>
        <input placeholder="Diskon" type="number" class="form-control" onkeyup="kembalian()" name="diskon">
      </div>
      <div class="form-group">
        <b>Total Bayar:</b> <span class="total_bayar"></span>
      </div>
      <div class="form-group">
        <b>Kembalian:</b> <span class="kembalian"></span>
      </div>
      <button id="add" class="btn btn-success" type="submit" onclick="bayar()" disabled>Bayar</button>
      <button id="cetak" class="btn btn-success" type="submit" onclick="bayarCetak()" disabled>Bayar Dan Cetak</button>
      <button class="btn btn-danger" data-dismiss="modal">Close</button>
    </form>
  </div>
</div>
</div>
</div>


