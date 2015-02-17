<h1>hi</h1>

<div id = "main">
<div id = "content">
<?php
	if(have_posts()):while(have_posts()):the_post();
?>

<h1><?php the_title(); ?></h1>
</div>
</div>
