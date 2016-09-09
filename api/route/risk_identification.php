<?php
//use \Slim\Slim;
//$app = new \Slim\App();
//$app->get('/category/?', 'getCategory');
//$app->get('/category/:id/?', 'getCategory');
/*$app->post('/category/new/?', $authenticate($app), 'createCategory');
$app->put('/category/:id/?', $authenticate($app), 'updateCategory');
$app->delete('/category/:id/?', $authenticate($app), 'deleteCategory');
*/
//array("_id" => new MongoId("50cf7d2841d41f4f35000000"))
//$app->get('/books/{id}', function ($request, $response, $args) {

$app->get('/master_event', function ($request, $response, $args) {
    // Show book identified by $args['id']
    $collection = $this->mongodb->MasterEvent;
	$cursor = $collection->find();  print_r($cursor);
	$data['event'] = array();
	foreach ($cursor as $entry) {
	    $data['event'][]= array($entry->{'_id'}->__toString(), $entry['event-category'], $entry['event-value']);
	}
	//$response->header('Access-Control-Allow-Origin', '*');
	return $response->withJson($data);
});

$app->get('/master_impact', function ($request, $response, $args) {
    // Show book identified by $args['id']
    $collection = $this->mongodb->MasterImpact;
	$cursor = $collection->find(); 
	$data = array();
	foreach ($cursor as $entry) {
	    $data[]= array($entry->{'_id'}->__toString(), $entry['impact-category'], $entry['impact-value']);
	}
	//$response->header('Access-Control-Allow-Origin', '*');
	return $response->withJson($data);
});

$app->get('/master_vulnerability', function ($request, $response, $args) {
    // Show book identified by $args['id']
    $collection = $this->mongodb->MasterVulnerability;
	$cursor = $collection->find(); 
	$data = array();
	foreach ($cursor as $entry) {
	    $data[]= array($entry->{'_id'}->__toString(), $entry['vulnerability-category'], $entry['vulnerability-value']);
	}
	$response->header('Access-Control-Allow-Origin', '*');
	return $response->withJson($data);
});

$app->post('/risk_identification', function ($request, $response, $args) {
    // Show book identified by $args['id']
    $collection = $this->mongodb->risk_identification;
    //print_r($_POST);
    parse_str($_POST['form'], $data);
    $insertOneResult = $collection->insertOne($data); 
    //print_r($_POST);
	/*$cursor = $collection->find(); 
	$data = array();
	foreach ($cursor as $entry) {
	    $data[]= array($entry->{'_id'}->__toString(), $entry['vulnerability-category'], $entry['vulnerability-value']);
	}*/
	//printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());
	//var_dump($insertOneResult->getInsertedId());
	//$data['status'] = 'inserted';
	//$response->header('Access-Control-Allow-Origin', '*');
	return $response->withJson($data);
});

$app->post('/copy_risk_identification', function ($request, $response, $args) {
    // Show book identified by $args['id']
    $collection = $this->mongodb->risk_identification;
    //print_r($_POST);
    //parse_str($_POST['id'], $data);
    $id = $_POST['id'];
    $cursor = $collection->find();
    $cnt = $collection->count() + 1;
    //print_r(new MongoDB\BSON\ObjectId($id));
    //$cursor = $collection->findOne([ '_id' => $id ]); 
    /*$document = $collection->findOne(array('_id' => new MongoId('57cf4f450067b334b0007f02')));
$entry->{'_id'}->__toString()
	var_dump($document);*/
	//$realmongoid = new MongoId($id);
    ///$cursor = $collection->findOne( [ 'risk_id' => 'r1' ] );
    $cursor = $collection->findOne( ['_id' => new MongoDB\BSON\ObjectId($id) ]) ;
    //print_r($cursor); echo $id; exit;
	$data = array();
	//echo $cnt;
	foreach ($cursor as $k => $v) {
		if($k == 'risk_id'){
			$data['risk_id'] =  'R '.$cnt;
		} else {
	    	$data[$k]=  $v;
		}
	}
	//var_dump($data);
    //$insertOneResult = $collection->insertOne($data);
    unset($data['_id']); 
   // print_r($data);
	/*$cursor = $collection->find(); 
	$data = array();
	foreach ($cursor as $entry) {
	    $data[]= array($entry->{'_id'}->__toString(), $entry['vulnerability-category'], $entry['vulnerability-value']);
	}*/
	//printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());
	//var_dump($insertOneResult->getInsertedId());
	//$data['status'] = 'inserted';
	$insertOneResult = $collection->insertOne($data);
	//$response->header('Access-Control-Allow-Origin', '*');
	return $response->withJson($insertOneResult->getInsertedCount());
});

$app->post('/delete_risk_identification', function ($request, $response, $args) {
    // Show book identified by $args['id']
    $collection = $this->mongodb->risk_identification;
    //print_r($_POST);
    //parse_str($_POST['id'], $data);
    $id = $_POST['id'];
    $deleteResult = $collection->deleteOne(['_id' => new MongoDB\BSON\ObjectId($id) ]);

	//printf("Deleted %d document(s)\n", $deleteResult->getDeletedCount());
	//$insertOneResult = $collection->insertOne($data);
	//$response->header('Access-Control-Allow-Origin', '*');
	return $response->withJson($deleteResult->getDeletedCount());
});

$app->post('/view_risk_identification', function ($request, $response, $args) {
    // Show book identified by $args['id']
    $collection = $this->mongodb->risk_identification;

    $id = $_POST['id'];
    $cursor = $collection->find();
    
    $cursor = $collection->findOne( ['_id' => new MongoDB\BSON\ObjectId($id) ]) ;
    
	return $response->withJson($cursor);
});
