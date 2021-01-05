<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $no=1; foreach($tr as $t): ?>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">nama</th>
      <th scope="col">status</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td ><?= $no++ ?></td>
      <td ><?= $t->nama ?></td>
      <td ><?= $t->status?></td>
      <td>Rp. <?= $t->total?></td>
    </tr>
  </tbody>
</table>
    <?php endforeach; ?>
</body>
</html>