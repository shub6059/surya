<div class="search-form">
	<form id="searchform" method="get" action="<?php echo home_url(); ?>" accept-charset="utf-8">
		<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" class="search-form_it">
		<button type="submit" id="search-submit" class="search-form_is btn btn-primary"><i class="fa fa-search"></i></button>	</form>
</div>