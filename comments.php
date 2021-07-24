<div class="card my-4">
    <?php 
        comment_form( array(
            'class_submit' => 'btn btn-secondary',
            'title_reply' => 'Deixe um comentário:',
            'fields' => array(
                'author' => '<input type="text" name="author" placeholder="Seu nome*" class="bb-form-control form-control" required>',
                'email' => '<input type="email" name="email" placeholder="Seu e-mail*"  class="bb-form-control form-control" required>',
                'url' => '<input type="email" name="url" placeholder="Seu site" class="bb-form-control form-control">'
            ),
            'label_submit' => 'Comentar',
            'comment_field' => '<textarea name="comment" rows="4" placeholder="Deixe seu comentário" class="bb-form-control form-control"></textarea>'
        ));
    ?> 
</div>

<?php if ( have_comments() ) { ?>

    <h5 class="bb-comments-title"><?php esc_html_e( 'Comentários:', 'bb' ); ?></h5>

    <?php the_comments_navigation(); ?>

    <ol class="bb-comment-list">
        <?php
        wp_list_comments( array(
            'style'      => 'ol',
            'short_ping' => true,
            'avatar_size' => 50,
            'max_depth' => 2
        ));
        ?>
    </ol>

    <?php
    
    the_comments_navigation();
    
    if ( ! comments_open() ) { ?>
        <p class="bb-no-comments"><?php esc_html_e( 'Área de comentários fechada', 'bb' ); ?></p>
    <?php } ?>

<?php } ?>