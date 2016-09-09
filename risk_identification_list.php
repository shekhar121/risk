<?php
require 'vendor/autoload.php';
$client = new MongoDB\Client("mongodb://139.59.177.80:27017");
$db = $client->selectDatabase('test');
    $collection = $db->risk_identification;
    $data['data'] = array();
    $cursor = $collection->find(); 

    foreach ($cursor as $r) {
        $btns = '<ul id="risk_action" class="icons-list text-center"><li><button rid="'.$r->{'_id'}->__toString().'"  type="button" class="risk_view btn btn-default btn-xs" >View</button></li><li><button rid="'.$r->{'_id'}->__toString().'" type="button"  class="risk_edit btn btn-default btn-xs">Edit</button></li><li><button  rid="'.$r->{'_id'}->__toString().'" type="button" class="risk_copy btn btn-default btn-xs">Copy</button></li><li><button rid="'.$r->{'_id'}->__toString().'" type="button" class="risk_delete btn btn-danger btn-xs">Delete</button ></li></ul>';
        $btns = str_replace('\r\n', '', $btns);
        $data['data'][] = array($r->{'_id'}->__toString(), $r['risk_definition'], $r['risk_category'], $r['business_unit'], $r['risk_status'],  $btns);
    }
    echo json_encode($data);

?>

