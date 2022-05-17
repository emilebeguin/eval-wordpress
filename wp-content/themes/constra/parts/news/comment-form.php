<?php comment_form(
    /* on peut modifier tout ce qui est après les flèches
    DOC : https://developer.wordpress.org/reference/functions/comment_form/
    */
    [
        // titre
    'title_reply' => '<h4>Leave a comment</h4>',
    /* champs qui apparaissent quand on n'est pas connecté à WP */
    'fields' => apply_filters('comment_form_default_fields', [
        'author' => '
            <div class="col-xs-12 col-sm-4 col-md-4">
                <input name="" type="text" placeholder="Whats your name *">
            </div>
        ',
        'email'  => '
            <div class="col-xs-12 col-sm-4 col-md-4">
                <input name="" type="email" placeholder="Whats your email *">
            </div>
        ',
        'url' => '
            <div class="col-xs-12 col-sm-4 col-md-4">
                <input name="" type="url" placeholder="Runing a Website">
            </div>
        ',
        // champ message
        'comment_field' => '
            <div class="col-xs-12 col-sm-12 col-md-12">
                <textarea name="" cols="" rows="" placeholder="Whats in your mind"></textarea>
            </div>
        ',
        // champ submit
        'submit_button' => '
        <div class="text-center">
            <input id="submit-comment" name="" type="button" value="Post Comment">
        </div>
    ',
    ]),
    // classe modifiable du conteneur form
    'class_container' => 'commentys-form',
    'comment_notes_before' => '',
    'id_submit' => 'submit-comment'
    ]
); ?>