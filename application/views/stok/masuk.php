

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col">
            <h1 class="m-0 text-dark">Stok Masuk</h1>
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
            <button class="btn btn-success" data-toggle="modal" data-target="#modal">Add</button>
          </div>
          <div class="card-body">
            <table class="table w-100 table-bordered table-hover" id="stok_masuk">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Barcode</th>
                  <th>Nama Produk</th>
                  <th>Jumlah</th>
                  <th>Keterangan</th>
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
        <h5 class="modal-title">Add Data</h5>
        <button class="close" data-dismiss="modal">
          <span>&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form">
          <div class="form-group">
            <label>Tanggal</label>
            <input id="tanggal" type="text" class="form-control" placeholder="Kategori" name="tanggal" required>
          </div>
          <div class="form-group">
            <label>Barcode</label>
            <select name="barcode" id="barcode" class="form-control select2" required></select>
          </div>
          <div class="form-group">
            <label>Jumlah</label>
            <input type="number" class="form-control" placeholder="Jumlah" name="jumlah" required>
          </div>
          <div class="form-group">
            <label>Keterangan</label>
            <select name="keterangan" class="form-control" onchange="checkKeterangan(this)">
              <option value="penambahan">Penambahan</option>
              <option value="lain">Lain</option>
            </select>
          </div>
          <div class="form-group supplier">
            <label>Supplier</label>
            <select name="supplier" class="form-control select2" id="supplier"></select>
          </div>
          <div class="form-group lain d-none">
            <label>Lain</label>
            <input type="text" class="form-control" placeholder="Lain">
          </div>
          <button class="btn btn-success" type="submit">Add</button>
          <button class="btn btn-danger" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>

