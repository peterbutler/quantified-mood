<?php
// Frontend
$app->get('/', function ($request, $response, $args) {
	return $this->renderer->render($response, 'index.html', $args);
});

$app->get( '/update', function ($request, $response, $args ) {
	return $this->renderer->render($response, 'update.php', $args);
} );



$app->post( '/update', function ( $request, $response, $args ) use ($app) {
	$params = $request->getParsedBody();
	$timestamp = date( 'Y-m-d H:i:s' );
	foreach( $params['updates'] as $key => $value ){
		$statement = $this->db->prepare( "INSERT INTO `updates` (id, user_id, timestamp, `key`, `value`) VALUES ( null, 0, ?, ?, ?)" );
		$statement->bind_param( 'ssi', $timestamp, $key, $value );
		$statement->execute();
	}
	return $response->withRedirect('/update');

} );

