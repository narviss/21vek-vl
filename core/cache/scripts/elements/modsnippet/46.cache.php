<?php  return 'function str_parse($str) { return (htmlspecialchars(trim(strip_tags($str)))); }

$params = array(
    \'area\'  => str_parse($_GET[\'area\'])
    ,\'type\' => str_parse($_GET[\'type\'])
    ,\'min\'  => str_parse($_GET[\'costmin\'])
    ,\'max\'  => str_parse($_GET[\'costmax\'])
);

if (!$params[\'area\'] && !$params[\'type\'] && !$params[\'min\'] && !$params[\'max\']) return;

$qrt = $modx->newQuery(\'modResource\');
$qrt->select(array(\'modResource.id as value\'));

if ($params[\'area\']) $qrt->leftJoin(\'modTemplateVarResource\', \'tv1\', \'tv1.contentid = modResource.id\');
if ($params[\'type\']) $qrt->leftJoin(\'modTemplateVarResource\', \'tv2\', \'tv2.contentid = modResource.id\');
$qrt->leftJoin(\'modTemplateVarResource\', \'tv3\', \'tv3.contentid = modResource.id\');

if ($params[\'area\'] && $params[\'type\']) {
    $qrt->where(array(
        \'modResource.parent\'        => 27
        ,\'modResource.published\'    => true
        ,\'modResource.deleted\'      => false
        ,\'tv1.tmplvarid\'            => 12 // район
        ,\'tv1.value\'                => $params[\'area\']
        ,\'tv2.tmplvarid\'            => 3  // тип объекта
        ,\'tv2.value\'                => $params[\'type\']
        ,\'tv3.tmplvarid\'            => 7  // цена
        ,\'tv3.value:>=\'             => $params[\'min\']
        ,\'tv3.value:<=\'             => $params[\'max\']
    ));
} else if (!$params[\'area\'] && $params[\'type\']) {
    $qrt->where(array(
        \'modResource.parent\'        => 27
        ,\'modResource.published\'    => true
        ,\'modResource.deleted\'      => false
        ,\'tv2.tmplvarid\'            => 3  // тип объекта
        ,\'tv2.value\'                => $params[\'type\']
        ,\'tv3.tmplvarid\'            => 7  // цена
        ,\'tv3.value:>=\'             => $params[\'min\']
        ,\'tv3.value:<=\'             => $params[\'max\']
    ));
} else if ($params[\'area\'] && !$params[\'type\']) {
    $qrt->where(array(
        \'modResource.parent\'        => 27
        ,\'modResource.published\'    => true
        ,\'modResource.deleted\'      => false
        ,\'tv1.tmplvarid\'            => 12  // тип объекта
        ,\'tv1.value\'                => $params[\'area\']
        ,\'tv3.tmplvarid\'            => 7  // цена
        ,\'tv3.value:>=\'             => $params[\'min\']
        ,\'tv3.value:<=\'             => $params[\'max\']
    ));
} else if (!$params[\'area\'] && !$params[\'type\']) {
    $qrt->where(array(
        \'modResource.parent\'        => 27
        ,\'modResource.published\'    => true
        ,\'modResource.deleted\'      => false
        ,\'tv3.tmplvarid\'            => 7  // цена
        ,\'tv3.value:>=\'             => $params[\'min\']
        ,\'tv3.value:<=\'             => $params[\'max\']
    ));
}

if ($qrt->prepare() && $qrt->stmt->execute()) {
    $rows = $qrt->stmt->fetchAll(PDO::FETCH_ASSOC);
    
    $temp = array();
    
    foreach ($rows as $row) 
    	$temp[] = $row[\'value\'];
    	
    $idx = implode(\',\', $temp);
    
    if(!$idx) return;
    
    return $modx->runSnippet(\'pdoResources\', array(
        \'includeTVs\'    => \'tv.Obj.Type,tv.Obj.Locb,tv.Obj.Area,tv.Obj.Price,tv.Obj.Image,tv.Obj.Desc\'
        ,\'limit\'        => \'all\'
        ,\'parents\'      => 27
        ,\'resources\'    => $idx
        ,\'processTVs\'   => 1
        ,\'tvPrefix\'     => \'\'
        ,\'sortby\'       => \'publishedon\'
        ,\'sortdir\'      => \'DESC\'
        ,\'tpl\'          => \'tpl.Obj\'
    ));
}
return;
';