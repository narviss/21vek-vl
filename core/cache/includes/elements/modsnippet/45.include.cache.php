<?php
$qrt = $modx->newQuery('modResource');
$qrt->select(array('tv1.value'));
$qrt->leftJoin('modTemplateVarResource', 'tv1', 'tv1.contentid = modResource.id');
$qrt->where(array(
    'modResource.parent' => 27,
    'modResource.published' => true,
    'modResource.deleted' => false,
    'tv1.tmplvarid' => 12
));

if ($qrt->prepare() && $qrt->stmt->execute()) {
    $rows = $qrt->stmt->fetchAll(PDO::FETCH_ASSOC);
    
    $regions = array();
    
    foreach ($rows as $row) 
    	$regions[] = $row['value'];
    	
    if (count($regions) === 0) return '<option value="0">Регион отсутствует</option>';
    
    $regions = array_unique($regions);
	sort($regions, SORT_STRING);
	
	$html = '';
	
	foreach ($regions as $region) 
    	$html .= '<option value="'.$region.'">'.$region.'</option>';
    
    return $html;
}
return;
