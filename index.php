<?php
    get_header();
?>
<?php
/* Template Name: main */
?>
<section class="card">
   

<div class="card-image">
    <?php 
        if (has_post_thumbnail( $post->ID ) ) {
         $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail' );
    ?>
        <div class="card-image_bcg" style=" background-image: url('<?php echo $image[0];?>')"></div>
    <?php
                    // echo '<img src="'. $image[0] .'" alt="'. get_the_title() .'" "card-image" />';
                }
            ?>


</div>

<div class="card-content">
<a href="<?php the_permalink();?>" class="button">Lerning</a>
<p>Published <?php echo get_the_date('j M Y ');?></p>
<?php 
    $author = get_the_author_meta('display_name', $post->post_author); 
    $avatar = get_avatar($post->post_author);
?>
<h1><?php the_title();?></h1>
<div class="content"><?php the_content();?></div>
</div>
<div class="card-autor">
    <a  href="<?php the_permalink();?>">
    
<div class="card-autor_info"><?php echo get_avatar( $post->post_author, 32 );
 ?>
 <?php
    $user = get_userdata( $post->post_author );
    // setup_postdata($post);
    // the_author();
    // exit();
 ?>
 <p>    
    <?php 
        // the_author();
        echo $user->display_name; 
    ?>
</p>

</div>
 

 </a>


</div>


</section>


<?php
get_footer();

?>