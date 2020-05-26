<?php $data = FootballlerClass::getFootballers();?>
<?php $located_arr = array("0" => "GK", "1" => "DF", "2" => "MF", "3" => "FW"); ?>

<div class="container">
  <div class="row justify-content-md-center" style="margin-top:10%;">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Mevkii</th>
      <th scope="col">Adı & Soyadı</th>
      <th scope="col">Yaşı</th>
      <th scope="col">Memleket</th>
      <th scope="col">Uyruk</th>
      <th scope="col">Takım</th>
      <th scope="col">Hastalığı</th>
      <th scope="col">NEET</th>
      <th scope="col">Skill</th>
    </tr>
  </thead>
  <tbody>
      <?php
    if ($data) {
      foreach ($data as $row) {?>
      <td>                <?php
                $data = explode(",", $row['located']);
                $data = str_replace('[','',$data);
                $data = str_replace(']','',$data);
                $data = str_replace('"','',$data);
                for ($i=0; $i < count($data); $i++) {
                  $data2 = $located_arr[$data[$i]];
                  echo "<p>".$data2."</p>";
                } ?></td>
      <td><?=$row['namesurname']; ?></td>
      <td><?=$row['age']; ?></td>
      <td><?=$row['country']; ?></td>
      <td><?=$row['nationality']; ?></td>
      <td><?=$row['team']; ?></td>
      <td><?=$row['disease']; ?></td>
      <td><?=$row['neet']; ?></td>
      <td>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#viewSkills<?=$row['id']; ?>" style="margin-bottom:20px;">
          Tüm Skill'ler
        </button>
      </td>
    </tr>
    <!-- View Skill's Modal -->
    <div class="modal fade" id="viewSkills<?=$row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="viewSkillsLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="viewSkillsLabel"><?=$row['namesurname']; ?> Skill Listesi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="container">
            <div class="col col-md-12" style="margin:7%;">
              <div class="form-group">
                Level 1: <?=$row['skill']; ?> <br />
                Level 2: <?=$row['skill2']; ?><br />
                Level 3: <?=$row['skill3']; ?>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
          </div>
        </div>
      </div>
    </div>
  <?php } } else {
    echo "<tr><td colspan='9'><div class='alert alert-info' role='alert'>
  <strong>Veri yok!</strong> Oyuncu bulunamadı.
</div></td></tr>";
  } ?>
  </tbody>
</table>
  </div>
</div>
