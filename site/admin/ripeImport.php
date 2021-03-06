<?php

/**
 * Script to manage sections
 *************************************************/

/* verify that user is admin */
checkAdmin();

?>

<h4><?php print _('Import subnets from RIPE'); ?></h4>
<hr><br>



<div class="alert alert-info alert-absolute"><?php print _('This script imports subnets from RIPE database for specific AS. Enter desired AS to search for subnets'); ?>.</div>


<form name="ripeImport" id="ripeImport" style="margin-top:50px;clear:both;" class="form-inline" role="form">
	<div class="form-group">
		<input class="search form-control input-sm" placeholder="<?php print _('AS number'); ?>" name="as" type="text">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-sm btn-default"><?php print _('Search'); ?></button>
	</div>
</form>


<!-- result -->
<div class="content" style="margin-top:10px;">
	<div class="ripeImportTelnet"></div>
</div>