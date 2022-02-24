<?php
$args = array(
 'meta_query' => array(
  array(
  'key' => 'country',
  'value' => 'Taiwan',
  'compare' => '='
  ),
 )
);
$user_query = new WP_User_Query( $args );
?>
