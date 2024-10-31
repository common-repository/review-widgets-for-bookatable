<label class="ti-left-label"><span><?php echo TrustindexPlugin::___("%s Business URL", [ "Bookatable" ]); ?>:</span></label>
<div class="input">
<input class="form-control"
placeholder="<?php echo TrustindexPlugin::___("e.g.:") . ' ' . esc_attr($example_url); ?>"
id="page-link"
type="text" required="required"
/>
<span class="info-text"><?php echo TrustindexPlugin::___("Type your business/company's URL and select from the list"); ?></span>
<img class="loading" src="<?php echo admin_url('images/loading.gif'); ?>" />
<div class="results"
data-errortext="<?php echo TrustindexPlugin::___("Please add your URL again: this is not a valid %s page.", [ "Bookatable" ]); ?>"
></div>
</div>
<button class="btn btn-text btn-check"><?php echo TrustindexPlugin::___("Check") ;?></button>