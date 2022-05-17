<h3><?php echo get_comments_number() ?> comment<?php if (get_comments_number() > 1) {echo 's';}; ?></h3>
<?php $comments_query = new WP_Comment_Query;
    $comments = $comments_query->query( array(
        'status' => 'approve',
        'post_id' => get_the_ID(),
    ));

    // Comment Loop
    if ( have_comments() ):
        foreach ( $comments as $comment ):
        
?>
    <div class="author-box d-nlock d-sm-flex">
        <div class="author-img mb-4 mb-md-0">
        <?php echo get_avatar($comment, $size = 110, $default = '', $alt = get_comment_author(), $args = [
                    // 'class' => 'img-responsive'
                ]) ?>
        </div>
        <div class="author-info">
            <h3><?php comment_author() ?><span>Site Engineer</span></h3>
            <p class="mb-2"><?php echo $comment->comment_content ; ?></p>
            <p class="author-url mb-0">Website: <span><a href="<?php comment_author_url()?>"><?php comment_author_url()?></a></span></p>
        </div>
    </div>
<?php endforeach; else: echo "Frankly, no comment..."; endif; ?>