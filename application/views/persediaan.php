<div class="container">
<table class="table table-striped" style="text-align: center;">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Kopi</th>
      <th scope="col">Jenis</th>
      <th scope="col">Asal</th>
      <th scope="col">Persediaan</th>
      <th scope="col">Bayar</th>
    </tr>
  </thead>
  <tbody class="">
          <?php
          $no = 1; 
          foreach($data as  $row): ?>
          <tr>
             <td><?php echo $no++; ?></td>
             <td><?php echo $row->nama; ?></td>
             <td><?php echo $row->jenis; ?></td>
             <td><?php echo $row->asal; ?></td>
            <td><?php echo $row->persediaan; ?> barang</td>
            <td> <a href="<?= base_url('transaksi/transaksiDetail/') . $row->id ?>" class="btn btn-success">Bayar</a></td>
          </tr>
         <?php endforeach; ?>
        </tbody>
</table>
</div>