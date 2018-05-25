// Callback function to filter the MCE settings
function emersonthis_mce_before_init_insert_formats( $init_array) {  
	$init_array['block_formats'] = 'Paragraph=p;Heading 3=h3;Heading 4=h4;';  	
	return $init_array;  
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'emersonthis_mce_before_init_insert_formats' );  
