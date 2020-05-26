<?php $data = teamClass::getTeam(); ?>
<?php $data2 = skillClass::getskill(); ?>
<?php $data3 = skill2Class::getskill2(); ?>
<?php $data4 = skill3Class::getskill3(); ?>

<div class="container">
  <div class="row justify-content-md-center" style="margin-top:15%;">
    <form action="/index?url=CreateFootballer" method="post">
      <div class="form-group">
          <input type="text" name="namesurname" placeholder="Adı Soyadı" autocomplete="on" class="form-control" autocomplete="off">
      </div>
      <div class="form-group">
          <input type="text" name="age" placeholder="Yaşı" autocomplete="on" class="form-control" autocomplete="off">
      </div>
      <div class="form-group">
          <input type="text" name="country" placeholder="Memleket" autocomplete="on" class="form-control" autocomplete="off">
      </div>
      <div class="form-group">
          <input type="text" name="nationality" placeholder="Uyruk" autocomplete="on" class="form-control" autocomplete="off">
      </div>

             <div class="col col-md-12" style="margin:7%;">
                <div class="form-group">
                    <input type="checkbox" name="located[]" value="0"> Kaleci
                </div>
                <div class="form-group">
                  <input type="checkbox" name="located[]" value="1"> Defans
                </div>
                <div class="form-group">
                  <input type="checkbox" name="located[]" value="2"> Orta Saha
                </div>
                <div class="form-group">
                  <input type="checkbox" name="located[]" value="3"> Forvet
                </div>
              </div>
			  
      <div class="form-group">
          <select class="form-control" name="team">
            <option value="not_selected_team">Lütfen takım seçin</option>
              <?php if ($data) {
                    foreach ($data as $row) {?>
                      <option value="<?=$row['teamname']; ?>"><?=$row['teamname']; ?></option>
                    <?php } } else {
                      echo "<option value='not_found_team'>Takım Bulunamadı!</option>";
                    } ?>
          </select>
      </div>
     <div class="form-group">
          <select class="form-control" name="skill">
            <option value="not_selected_skill">Level 1 Skill</option>
              <?php if ($data2) {
                    foreach ($data2 as $row) {?>
                      <option value="<?=$row['name']; ?>"><?=$row['name']; ?></option>

                    <?php } } else {
                      echo "<option value='not_found_skill'>Skill Bulunamadı!</option>";
                    } ?>
          </select>
      </div>
	  
	       <div class="form-group">
          <select class="form-control" name="skill2">
            <option value="not_selected_skill">Level 2 Skill</option>
              <?php if ($data3) {
                    foreach ($data3 as $row) {?>
                      <option value="<?=$row['name']; ?>"><?=$row['name']; ?></option>

                    <?php } } else {
                      echo "<option value='not_found_skill'>Level 2 Skill'i Yok</option>";
                    } ?>
          </select>
      </div>

	       <div class="form-group">
          <select class="form-control" name="skill3">
            <option value="not_selected_skill">Level 3 Skill</option>
              <?php if ($data4) {
                    foreach ($data4 as $row) {?>
                      <option value="<?=$row['name']; ?>"><?=$row['name']; ?></option>

                    <?php } } else {
                      echo "<option value='not_found_skill3'>Level 3 Skill'i Yok</option>";
                    } ?>
          </select>
      </div>


      <div class="form-group">
          <input type="text" name="disease" placeholder="Hastalığı" autocomplete="on" class="form-control" autocomplete="off">
      </div>
      <div class="form-group">
          <input type="text" name="neet" placeholder="NEET" autocomplete="on" class="form-control" autocomplete="off">
      </div>
	          <div class="form-group">
          <button type="submit" name="create_footballer" class="btn btn-success">Oluştur</button>
      </div>
    </form>
  </div>
</div>
