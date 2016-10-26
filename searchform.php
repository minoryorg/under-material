<form action="<?php echo home_url( '/' ); ?>" method="get" class="form-inline panel-body bs-component">
    <fieldset>
		<div class="form-group label-floating">
			<div class="input-group">
				<span class="input-group-addon"><?php echo esc_attr__( 'Search' ); ?>:</span>
				<label class="control-label" for="addon3a"><?php echo esc_attr__( 'Keywords' ); ?></label>
				<input class="form-control" type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
				<span class="input-group-btn">
					<button type="submit" class="btn btn-fab btn-fab-mini">
						<i class="fa fa-search"></i>
					</button>
				</span>
			</div>
		</div>
    </fieldset>
</form>
