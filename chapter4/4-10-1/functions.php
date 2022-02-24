<?php
$query = new WP_Query( 'year=2012&monthnum=12&day=12' );


$args = array(
'date_query' => array(
  array(
   'year' => 2012,
   'month' => 12,
   'day' => 12,
    ),
  ),
);

$query = new WP_Query( $args );
?>
