<div id="new" class="modal hide fade">
	<div class="modal-header">
		<a href="#" class="close">&times;</a>
		<h3>New <?=$model?></h3>
	</div>

	<form method="post" action="?page=places&create">
			<div class="modal-body">
				<table class="table">

<?php
foreach($new_fields as $field_name => $field_type):
?>
					<tr>
						<td><?=$field_name?></td>
						<td>
<?php
	if(is_array($field_type)){ // enum
?>
				<select name="<?=$field_name?>">
					<option value="1">yes</option>
					<option value="0">no</option>
				</select>
<?php
	}else{
		switch ($field_type) {
			case 'boolean':
?>
				<select name="<?=$field_name?>">
					<option value="1">yes</option>
					<option value="0">no</option>
				</select>
<?php
				break;

			case 'html':
?>
<?php
				break;

			case 'date':
?>
<?php
				break;

			default:
?>
						<input class="xlarge span2" name="<?=$field_name?>" size="30" type="text" />
<?php
				break;
		}
	}

?>
					</td>
				</tr>
<?endforeach;?>
				</table>
			</div>
			<div class="modal-footer">
				<input type="submit" value="Ajouter" class="btn primary">
			</div>
	</form>

</div>
