<h3>Добавление и редактирование юзеров</h3>
<table>
	<tr><td>Id</td><td>Name</td><td>Level</td><td>Age</td><td>Operation</td></tr>
<?php
	foreach($data as $key) {
		echo "<tr><td>".$key['id'].
			 "</td><td>".$key['name'].
			 "</td><td>".$key['level'].
			 "</td><td>".$key['age'].
			 "</td><td><a href='/user/delete/".$key['id']."'>Delete</a> | <a href='/user/get_user/".$key['id']."'>Edit</a></td>

			 </tr>";
	}
?>
</table>
<br>
<h4>Форма для добавления нового пользователя:</h4>
<table>
	<fieldset>
		<form action="/user/add" method=POST>
          <div class="row">
            <span class="formlabel">Имя</span>
            <span class="forminput"><input type="text" name="name" /></span>
          </div>
          <div class="row">
            <span class="formlabel">Уровень</span>
            <span class="forminput"><input type="text" name="level" /></span>
          </div>
          <div class="row">
            <span class="formlabel">Возраст</span>
            <span class="forminput"><textarea rows="5" cols="18" name="age" class="textarea"></textarea></span>
          </div>
          <div class="row">
            <span class="formlabel">&nbsp;</span>
            <span class="forminput"><input type="submit" value="Добавить" class="submit" /></span>
          </div>
        </form>
    </fieldset>
</table>
