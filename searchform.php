<form role="search" method="get" class="search-form card-body" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="input-group">

        <input type="search" name="s" class="search-field form-control" placeholder="<?php echo esc_attr_x( 'Pesquisar...', 'placeholder', 'bb' ); ?>" value="<?php echo get_search_query(); ?>" required >
       
        <span class="input-group-append">

            <button class="btn btn-secondary" type="button">
                <i class="fas fa-search"></i>
            </button>

        </span>

    </div>
</form>