<?php
// Routes
$app->get('/', function ($request, $response, $args) {
	return $this->renderer->render($response, 'index.phtml', $args);
});

$app->post( '/update', function ( $request, $response, $args ){
	$params = $request->getParsedBody();
	$timestamp = date( 'Y-m-d H:i:s' );
	$key = $params['key'];
	$value = $params['value'];
	$statement = $this->db->prepare( "INSERT INTO `updates` (id, user_id, timestamp, `key`, `value`) VALUES ( null, 0, ?, ?, ?)" );
	$statement->bind_param( 'ssi', $timestamp, $key, $value );
	$statement->execute();
} );