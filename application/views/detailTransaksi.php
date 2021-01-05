
    <?php $no=1; foreach($data as $t): ?>
        <div class="container">
            <table class="table mt-5">
      <thead>
        <tr>
          <th scope="col">no</th>
          <th scope="col">nama</th>
          <th scope="col">status</th>
          <th scope="col">Total</th>
          <th scope="col">Kirim</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td ><?= $no++ ?></td>
          <td ><?= $t->nama ?></td>
          <td ><?= $t->status?></td>
          <td>Rp. <?= $t->total?></td>
          <td><a class="btn btn-success" href="<?= base_url('transaksi/done')?>">Kirim</a></td>
        </tr>
      </tbody>
    </table>
        </div>
    <?php endforeach; ?>
