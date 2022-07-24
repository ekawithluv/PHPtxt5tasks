<form action='index.php' method='post'>    
<select class='form-control' name='d'>
<?php for($i = 1; $i <= 31; $i++): ?>
	<option value='<?=$i?>'><?=$i?></option>
<?php endfor; ?>
</select>
<select class='form-control' name='m'>
<?php for($i = 1; $i <= 12; $i++): ?>
	<option value='<?=$i?>'><?=$i?></option>
<?php endfor; ?>
</select> 
<select class='form-control' name='y'>
<?php for($i = 1990; $i <= 2025; $i++): ?>
	<option value='<?=$i?>'><?=$i?></option>
<?php endfor; ?>
</select> 
    <input type='submit' value='ok'>
</form>