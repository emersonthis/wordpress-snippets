# disable captions
function caption_off() {
  return true;
}
add_filter( 'disable_captions', 'caption_off' );
