<div class="container-fluid">
  <div class="row">
<div class="navigation">
	<?php foreach($this->arrCats as $cat){?>
			<a href="index.php?controller=pages&action=eventsInCat&catid=<?=$cat["id"]?>"><?=$cat["Name"]?></a>
		<?php
		}
	?>

</div>
</div>
</div>
