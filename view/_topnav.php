


<div class="navbar navbar-static navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="brand" href="#">Admin:</a>
			<ul class="nav" role="navigation">
				<li class="dropdown">
					<a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Object <b class="caret"></b></a>
					<ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
<?foreach ($model_manifest as $m):?>
						<li tabindex="-1"><a href="index.php?model=<?=$m?>&view=index"><?=$m?></a></li>
<?endforeach;?>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown">Users <b class="caret"></b></a>
					<ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
						<li><a tabindex="-1" href="#">Users</a></li>
						<li><a tabindex="-1" href="#">Groups</a></li>
						<li><a tabindex="-1" href="#">Feeds</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div> <!-- /navbar-example -->