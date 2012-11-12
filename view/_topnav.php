<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="brand" href="#">Admin:</a>
			<div class="nav-collapse collapse">
				<ul class="nav">
<?foreach ($model_manifest as $m):?>
					<li><a href="index.php?model=<?=$m?>&view=index"><?=$m?></a></li>
<?endforeach;?>
				</ul>
			</div>
		</div>
	</div>
</div>

