<?php
$enable_gmap = userpro_gmap_get_option('enable_gmap');
if($enable_gmap){
?>
	<div class="userpro-section userpro-column userpro-collapsible-1 userpro-collapsed-0 up-google-map" ><?php _e('Map','userpro');?></div>
	<div id="map" class="up-google-map-holder"></div>
<?php
}