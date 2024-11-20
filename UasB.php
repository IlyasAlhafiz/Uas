<?php
class Gaji
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function ambil($input)
    {
        return $this->data[$input];
    }
}

if (isset($_POST['simpan'])) {
    $Gaji = new Gaji($_POST);

    $jabatan = $Gaji->ambil('jabatan');
    $lama = $Gaji->ambil('lama');
    $status = $Gaji->ambil('status');
    $bpjs = $Gaji->ambil('bpjs') ?? 0;
    $pinjaman = $Gaji->ambil('pinjaman') ?? 0;
    $tabungan = $Gaji->ambil('tabungan') ?? 0;
    $lainnya = $Gaji->ambil('lainnya') ?? 0;
    
    if ($jabatan == 'Kepala Sekolah') {
        $gaji = 10000000;
    } elseif ($jabatan == 'Wakasek') {
        $gaji = 7500000;
    } elseif ($jabatan == 'Guru') {
        $gaji = 5000000;
    } elseif ($jabatan == 'OB') {
        $gaji = 2500000;
    } else {
        $gaji = 0;
    }

    $tunjangan = ($lama >= 5) ? 1000000 : 0;
    $bonus = ($status === 'Tetap') ? 500000 : 0;

    $gajiBersih = ($gaji + $bonus + $tunjangan) - ($bpjs + $pinjaman + $tabungan + $lainnya);
} else {
    $Gaji = null;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Struk Gaji</title>
  </head>
  <body>
  <?php if ($Gaji): ?>
    <center><br><br>
        <div class="card" style="width:30%;">
          <h6 class="card-header"><?php echo $Gaji->ambil('nama'); ?></h6>
          <div class="card-body">
            <h4 class="text-primary">STRUK GAJI</h4>
            <table>
                <tr class="text-primary">
                    <td>No</td>
                    <td>:</td>
                    <td><?php echo $Gaji->ambil('no'); ?></td>
                </tr>
                <tr class="text-primary">
                    <td>Nama</td>
                    <td>:</td>
                    <td><?php echo $Gaji->ambil('nama'); ?></td>
                </tr>
                <tr class="text-primary">
                    <td>Unit Pendidikan</td>
                    <td>:</td>
                    <td><?php echo $Gaji->ambil('unit'); ?></td>
                </tr>
                <tr class="text-primary">
                    <td>Tanggal Gaji</td>
                    <td>:</td>
                    <td><?php echo $Gaji->ambil('tgl'); ?></td>
                </tr>
                <tr class="text-primary">
                    <td>Jabatan</td>
                    <td>:</td>
                    <td><?php echo $jabatan; ?></td>
                </tr>
                <tr class="text-primary">
                    <td>Gaji</td>
                    <td>:</td>
                    <td><?php echo number_format($gaji, 0, ',', '.'); ?></td>
                </tr>
                <tr class="text-primary">
                    <td>Lama Kerja</td>
                    <td>:</td>
                    <td><?php echo "$lama tahun"; ?></td>
                </tr>
                <tr class="text-primary">
                    <td>Status kerja</td>
                    <td>:</td>
                    <td><?php echo $status; ?></td>
                </tr>
                <tr class="text-primary">
                    <td>Bonus</td>
                    <td>:</td>
                    <td><?php echo number_format($bonus, 0, ',', '.'); ?></td>
                </tr>
                <tr class="text-primary">
                    <td>BPJS</td>
                    <td>:</td>
                    <td><?php echo number_format($bpjs, 0, ',', '.'); ?></td>
                </tr>
                <tr class="text-primary">
                    <td>Pinjaman</td>
                    <td>:</td>
                    <td><?php echo number_format($pinjaman, 0, ',', '.'); ?></td>
                </tr>
                <tr class="text-primary">
                    <td>Tabungan</td>
                    <td>:</td>
                    <td><?php echo number_format($tabungan, 0, ',', '.'); ?></td>
                </tr>
                <tr class="text-primary">
                    <td>Infaq</td>
                    <td>:</td>
                    <td><?php echo number_format($lainnya, 0, ',', '.'); ?></td>
                </tr>
                <tr class="text-primary">
                    <td>Gaji Bersih</td>
                    <td>:</td>
                    <td><?php echo "Rp." . number_format($gajiBersih, 0, ',', '.'); ?></td>
                </tr>
            </table>
          </div>
        </div>
    </center>
    <?php else: ?>
        <div class="text-primary">Tidak ada data yang disimpan.</div>
    <?php endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
