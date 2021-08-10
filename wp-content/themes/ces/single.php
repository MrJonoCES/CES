[php]<?php
$post = $wp_query->post;
if ( in_category(‘44’) ) {
include(TEMPLATEPATH . ‘/single2.php’);
} else {
include(TEMPLATEPATH . ‘/single1.php’);
}
?>[/php]