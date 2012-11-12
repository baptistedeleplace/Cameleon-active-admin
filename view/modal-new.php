<div id="new" class="modal hide fade">
	<div class="modal-header">
		<a href="#" class="close">&times;</a>
		<h3>New <?=$model?></h3>
	</div>

	<form method="post" action="?page=places&create">
			<div class="modal-body">
				<table class="table">

<?foreach($fields as $field_name => $field_type):?>
					<tr><td><?=$field_name?></td>
						<td><input class="xlarge span2" name="<?=$field_name?>" size="30" type="text" /></td></tr>
<?endforeach;?>
				</table>
			</div>
			<div class="modal-footer">
				<input type="submit" value="Ajouter" class="btn primary">
			</div>
	</form>

</div>
