
<?php
 $type = $_GET["type"];
?>



<?php
if($type == "titles"):
    echo "[";
    if(have_posts()):
        while(have_posts()):the_post();


?>


"<?php the_title()?>",





<?php
    /*if(have_posts()):
            echo ",";
    endif;*/
    endwhile;

    echo "\"end\"]";

    else:
        echo "<p>No Content found</p>";
    endif;
endif;
?>

<?php
if($type == "meta"):
    echo "[";
    if(have_posts()):
        while(have_posts()):the_post();


?>


"<?php
 //the_meta()
 //get_post_custom();
 
 echo get_post_meta($post->ID,"pic")[0];
 ?>",





<?php
    /*if(have_posts()):
            echo ",";
    endif;*/

    endwhile;

    echo "\"end\"]";    

    else:
        echo "<p>No Content found</p>";
    endif;
endif;
?>


<?php
if($type == "all"):
    echo "[[";
    if(have_posts()):
        while(have_posts()):the_post();


?>

"<?php the_title()?>",
"<?php echo get_post_meta($post->ID,"pic")[0];?>",
"<?php echo get_the_ID(); ?>"],



<?php
    /*if(have_posts()):
            echo ",";
    endif;*/
    echo "[";

    endwhile;

    echo "\"end\"]]";    

    else:
        echo "<p>No Content found</p>";
    endif;
endif;
?>

<?php
    if($type == "postID"):
        $id = $_GET["pID"];
        //echo $id;
        $postObj = get_post($id);
?>

<?php echo $postObj->post_content; ?>

!@#

[
"<?php echo $postObj->post_title; ?>",
"<?php echo get_post_meta($id,"pic")[0]; ?>"
]

<?php
    endif;
?>