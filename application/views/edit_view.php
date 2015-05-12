<h3>Edit user</h3>
<table>
	<?php foreach($data as $key): ?>
	<fieldset>
		<form action='/user/edit/<?php echo $key['id']; ?>' method='POST'>
          <div class='row'>
            <span class='formlabel'>Имя</span>
            <span class='forminput'><input type='text' name='edit_name' value='<?php echo $key['name']; ?>' /></span>
          </div>
          <div class='row'>
            <span class='formlabel'>Уровень</span>
            <span class='forminput'><input type='text' name='edit_level' value='<?php echo $key['level']; ?>'/></span>
          </div>
          <div class='row'>
            <span class='formlabel'>Возраст</span>
            <span class='forminput'><input type='text' name='edit_age' value='<?php echo $key['age']; ?>'></textarea></span>
          </div>
          <div class='row'>
            <span class='formlabel'>&nbsp;</span>
            <span class='forminput'><input type='submit' value='Изменить' class='submit'/></span>
          </div>
        </form>
    </fieldset>
	<?php endforeach; ?>
<table>