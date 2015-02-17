<div class = "blog_column">
<?php
    $counter = 0;
    $rows = 2;

	if(have_posts()):
		while(have_posts()):the_post();

        $counter++;
	    echo $counter;


?>

    

	<h2 class="article_title"><?php the_title()?></h2>

	<p class="article_content"><?php the_content() ?></p>


<?php
    if($counter > 1){
    	echo "</div>";
    	echo "<div class='blog_column'>";
    	$counter = 0;
    }

    endwhile;

	else:
		echo "<p>No Content found</p>";
	endif;
?>