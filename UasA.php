<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PENGGAJIHAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <center>
        <form action="UasB.php" method="post">
      <img src="logo yayasan assalaam.jfif" alt="">
      <h3>PENGGAJIHAN</h3>
      <h3>GURU/KARYAWAN YAYASAN ASSALAAM</h3>
      <div class="card" style="width:30%;">
        <div class="card-header">
          <p style="text-align:left;">Data Penggajihan</p>
        </div>
        <div class="card-body">
          <p style="text-align:left;">No</p>
          <input type="text" class="form-control" placeholder="No" name="no" required>
        </div>

        <div class="card-body">
          <p style="text-align:left;">Nama</p>
          <input type="text" class="form-control" placeholder="Nama" name="nama" required>
        </div>

        <div class="card-body">
          <p style="text-align:left;">Unit Pendidikan</p>
          <select class="form-select" aria-label="Default select example" name="unit" required>
            <option selected disabled value="">Pilih Unit Pendidikan</option>
            <option value="TK">TK</option>
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
            <option value="SMK">SMK</option>
          </select>
        </div>

        <div class="card-body">
          <p style="text-align:left;">Tanggal Gaji</p>
          <input type="date" class="form-control" name="tgl" required>
        </div>

        <div class="card-body">
          <table class="table table-borderless">
            <thead>
              <tr>
                <th style="text-align:center;"><i>Gaji</i></th>
                <th style="text-align:center;"><i>Potongan</i></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="card-body">
                    <p style="text-align:left;">Jabatan</p>
                    <select class="form-select" aria-label="Default select example" name="jabatan" required>
                      <option selected disabled value="">Pilih Jabatan</option>
                      <option value="Kepala Sekolah">Kepala Sekolah</option>
                      <option value="Wakasek">Wakasek</option>
                      <option value="Guru">Guru</option>
                      <option value="OB">OB</option>
                    </select>
                  </div>
                </td>
                <td>
                  <div class="card-body">
                    <p style="text-align:left;">BPJS</p>
                    <input type="text" class="form-control" name="bpjs" required>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="card-body">
                    <p style="text-align:left;">Lama Kerja</p>
                    <input type="number" class="form-control" placeholder="Lama Kerja" name="lama" required>
                  </div>
                </td>
                <td>
                  <div class="card-body">
                    <p style="text-align:left;">Pinjaman</p>
                    <input type="text" class="form-control" placeholder="Pinjaman" name="pinjaman" required>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="card-body">
                    <p style="text-align:left;">Status</p>
                    <select class="form-select" aria-label="Default select example" name="status" required>
                      <option selected disabled value="">Pilih Status Kerja</option>
                      <option value="Tetap">Tetap</option>
                      <option value="Kontrak">Kontrak</option>
                    </select>
                  </div>
                  </div>
                </td>
                <td>
                  <div class="card-body">
                    <p style="text-align:left;">Tabungan</p>
                    <input type="text" class="form-control" placeholder="Tabungan" name="tabungan" required>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="card-body">
                  </div>
                </td>
                <td>
                  <div class="card-body">
                    <p style="text-align:left;">Infaq</p>
                    <input type="text" class="form-control" placeholder="Lainnya" name="lainnya" required>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>     
        </div>
      </div>
    </center>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
