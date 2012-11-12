<html xmlns="http://www.w3.org/1999/xhtml" xmlns:xhtml="http://www.w3.org/1999/xhtml">
	<head>

	<?php // head
	include("view/_head.php"); ?>

	</head>
	<body style="padding-top: 60px;">

		<?php // head
		include("view/_topnav.php"); ?>

		<div class="container">

			<div>
				<a class="btn primary large" style="float:right;" data-controls-modal="new" data-backdrop="static">
					New <?=$model?>
				</a>
				<h1><?=ucfirst($model)?>s</h1>
			</div>

			<table class="table table-striped">

				<tr>
<?foreach($list_fields as $field_name => $field_type):?>
					<th><?=$field_name?></th>
<?endforeach;?>
					<th></th>
				</tr>

<?foreach($data as $item):?>
				<tr>
	<?foreach($list_fields as $field_name => $field_type):?>
					<td><?=$item[$field_name]?></td>
	<?endforeach;?>
					<td style="text-align:right;">
						<a href="?model=<?=$model?>&view=edit&id=<?=$item[$model . '_id']?>" class="btn">Edit</a>
					</td>
				</tr>
<?endforeach;?>

			</table>

		<?php // head
		include("view/modal-new.php"); ?>

		</div>

	</body>
</html>
