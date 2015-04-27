<?php  //Uncomment in WP sites.
        // $excerpt = strip_tags(get_the_excerpt());
        // $post_thumbnail_id = get_post_thumbnail_id($post->ID);
        // $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );

    ?>
<link rel="stylesheet" href="style.css" type="text/css">

<div class="social-buttons">
    <ul>
        <li class="facebook">
            <a target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>&title=<?php the_title() ?>">
            <i class="fa fa-facebook"></i>
            <span class="text">Facebook</span>
            </a>
        </li>
        <li class="linkedin">
            <a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink() ?>&title=<?php the_title(); ?>&source=<?php echo home_url(); ?>">
            <i class="fa fa-linkedin"></i>
            <span class="text">linkedin</span>
        </a>
        </li>
        <li class="twitter">
            <a target="_blank" href="http://twitter.com/intent/tweet?status=<?php the_title(); ?>+<?php the_permalink() ?>+via @PlasticWilko">
            <i class="fa fa-twitter"></i>
            <span class="text">twitter</span>
            </a>
        </li>
        <li class="reddit">
            <a target="_blank" href="http://www.reddit.com/submit?url=<?php the_permalink() ?>&title=<?php the_title() ?>">
            <i class="fa fa-reddit"></i>
            <span class="text">reddit</span>
            </a>
        </li>
        <li class="googleplus">
            <a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink() ?>">
            <i class="fa fa-google-plus"></i>
            <span class="text">google+</span>
            </a>
        </li>
        <li class="pinterest">  
            <a target="_blank" href="http://pinterest.com/pin/create/bookmarklet/?media=<?php echo $thumb_url[0]; ?>&url=<?php the_permalink() ?>&is_video=false&description=<?php the_title() ?>">
            <i class="fa fa-pinterest-p"></i>
            <span class="text">pinterest</span>
            </a>
        </li>
    </ul>
</div>
