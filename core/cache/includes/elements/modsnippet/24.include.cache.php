<?php
$parent = 0;
$id = $modx->resource->get('id');
$terminate = false;

while (!$terminate) {
    $c = $modx->newQuery('modResource');
    $c->where(array('id' => $id));
    $c->select(array('id','parent'));
    if ($c->prepare() && $c->stmt->execute()) {
        while ($row = $c->stmt->fetch(PDO::FETCH_ASSOC)) {
            if($parent == $row['parent']) $terminate = true;
            else $id = $row['parent'];
        }
    } else $terminate = true;
}

return $id;
return;
