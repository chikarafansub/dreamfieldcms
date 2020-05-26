<?php $data = teamClass::getteam(); ?>
<div class="container">
  <div class="row justify-content-md-center" style="margin-top:10%;">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Takım Adı</th>
      <th scope="col">Taktik</th>
      <th scope="col">Yıl</th>
      <th scope="col">Kaptan</th>
      <th scope="col">NEET</th>
    </tr>
  </thead>
  <tbody>
    <?php
    if ($data) {
      foreach ($data as $row) {?>
    <tr>
      <td><?=$row['teamname']; ?></td>
      <td><?=$row['tactic']; ?></td>
      <td><?=$row['date']; ?></td>
      <td><?=$row['captain']; ?></td>
      <td><?=$row['neet']; ?></td>
    </tr>
  <?php } } else {
    echo "<tr><td colspan='9'><div class='alert alert-info' role='alert'>
  <strong>Veri yok!</strong> Takım bulunamadı.
</div></td></tr>";
  } ?>
  </tbody>
</table>
  </div>
</div>
