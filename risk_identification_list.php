<?php
require 'vendor/autoload.php';
$client = new MongoDB\Client("mongodb://139.59.177.80:27017");
$db = $client->selectDatabase('test');

?>
                    <?php
    $collection = $db->risk_identification;
    $cursor = $collection->find(); 
    foreach ($cursor as $r) {
?>
                                        <tr id="<?php echo $r['_id'];?>">
                                            <td><?php echo $r['_id']; // $r['risk_id'];?></td>
                                            <td><?php echo $r['risk_definition'];?></td>
                                            <td><?php echo $r['risk_category'];?></td>
                                            <td>
                                                <a href="#"><?php echo $r['business_unit'];?></a>
                                            </td>
                                            <td><span class="label label-info"><?php echo $r['risk_status'];?></span></td>
                                            <td>
                                                <ul class="icons-list text-center">
                                                    <li>
                                                        <button id="view" onclick="view_risk('<?php echo $r['_id'];?>')" type="button" class="btn btn-default btn-xs">
                                                            <i class="icon-eye2"></i>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button id="edit" onclick="edit_risk('<?php echo $r['_id'];?>')" type="button" class="btn btn-default btn-xs">
                                                            <i class="icon-database-edit2"></i>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button id="copy" onclick="copy_risk('<?php echo $r['_id'];?>')" type="button" class="btn btn-default btn-xs">
                                                            <i class="icon-copy3"></i>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button id="delete" onclick="delete_risk('<?php echo $r['_id'];?>')" type="button" class="btn btn-danger btn-xs">
                                                            <i class="icon-cross"></i>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
<?php } ?>         