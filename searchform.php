<div class="secondary-nav-right">
	<form role="search" method='get' action="<?php echo home_url('/')?>">
		<input placeholder="Search for posts..." name="s" type="text" class="secondary-nav-search search-hidden" value="<?php echo get_search_query();?>"/>
		<i class="fas fa-times search-times search-times-hidden"></i>
		<i class="fas fa-search search-icon"></i>

	</form>
</div>