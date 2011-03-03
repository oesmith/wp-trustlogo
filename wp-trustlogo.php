<?php
/*
Plugin Name: wp-trustlogo
Plugin URI: http://github.com/oesmith/wp-trustlogo
Description: Displays a COMODO TrustLogo on your WordPress site.
Version: 0.1
Author: Olly Smith
Author URI: http://github.com/oesmith/
License: BSD
*/

function trustlogo_header() {
?>
<script language="javascript" type="text/javascript">
//<![CDATA[
var cot_loc0=(window.location.protocol == "https:")? "https://secure.comodo.net/trustlogo/javascript/cot.js" :
"http://www.trustlogo.com/trustlogo/javascript/cot.js";
document.writeln('<scr' + 'ipt language="JavaScript" src="'+cot_loc0+'" type="text\/javascript">' + '<\/scr' + 'ipt>');
//]]>
</script>

<?php
}
add_action('wp_head', 'trustlogo_header');


function trustlogo_footer() {
?>
<a href="http://www.instantssl.com" id="comodoTL">High Assurance SSL Certificate</a>
<script language="JavaScript" type="text/javascript">
COT("<?php echo plugins_url('/cot.gif', __FILE__) ?>", "SC2", "none");
</script>
<?php
}
add_action('wp_footer', 'trustlogo_footer', 250);

?>