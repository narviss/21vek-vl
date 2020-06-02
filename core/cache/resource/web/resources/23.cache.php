<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 23,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Хочу сдать',
    'longtitle' => 'Хочу сдать',
    'description' => '',
    'alias' => 'want-to-pass',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 1,
    'introtext' => '',
    'content' => '',
    'richtext' => 1,
    'template' => 1,
    'menuindex' => 5,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1408515328,
    'editedby' => 1,
    'editedon' => 1408515434,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1408515300,
    'publishedby' => 1,
    'menutitle' => 'Хочу сдать',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 1,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'want-to-pass/',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    'tv.Slider' => 
    array (
      0 => 'tv.Slider',
      1 => '',
      2 => 'default',
      3 => NULL,
      4 => 'migx',
    ),
    'tv.SEO.Pagetitle' => 
    array (
      0 => 'tv.SEO.Pagetitle',
      1 => '[[*pagetitle]] - [[++site_name]]',
      2 => 'default',
      3 => NULL,
      4 => 'text',
    ),
    'tv.SEO.Keywords' => 
    array (
      0 => 'tv.SEO.Keywords',
      1 => '',
      2 => 'default',
      3 => NULL,
      4 => 'text',
    ),
    'tv.SEO.Description' => 
    array (
      0 => 'tv.SEO.Description',
      1 => '',
      2 => 'default',
      3 => NULL,
      4 => 'text',
    ),
    '_content' => '<!-- saved from url=(0014)about:internet -->
<!doctype html>
<html lang="ru-RU">
<head>

    <title>Хочу сдать - Агентство недвижимости «XXI Век» во Владивостоке</title>
	<meta name="description" content="">
	<meta name="keywords" content="">

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=1024">
	    
	<base href="http://www.21vek-vl.ru/">
	<link rel="shortcut icon" href="favicon.ico">
	    
	<!--[if lt IE 9]> 
	   <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
	<![endif]-->
	
	<link rel="stylesheet" type="text/css" href="/assets/css/reset.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/layout.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/skitter.styles.css">
	<link rel="stylesheet" type="text/css" href="/assets/js/jquery.ui/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="/assets/js/jquery.ui/jquery-ui.structure.css">
	<link rel="stylesheet" type="text/css" href="/assets/js/jquery.ui/jquery-ui.theme.css">

</head>
<body>

    
[[!FormIt? 
    &hooks=`email,redirect` 
    &submitVar=`modal` 
    &placeholderPrefix=`mw.` 
    &redirectTo=`32` 
    &emailTpl=`tpl.Email.Form.Contact` 
    &emailSubject=`Новое сообщение с вашего сайта 21 ВЕК` 
    &emailTo=`21vek-vl@mail.ru`
    &emailFrom=`21vek-vl@mail.ru`
    &emailFromName=`21 ВЕК`
    &validate=`blank:blank,
               text:required:stripTags,
               name:stripTags,
               phone:required:stripTags,
               email:required:stripTags`]]

<div id="modal-wind"[[!+mw.active:is=`1`:then=` class="active"`]]>
    <div class="mw-container clearfix">
        <div class="mw-windows">
            <form class="apply-form" action="want-to-pass/" method="post">
                <input id="af-blank" type="hidden" name="blank" value="[[!+mw.blank]]">
                <input type="hidden" name="active" value="1">
                
                <div class="af-title-big">Заявка</div>
                <div class="af-title-small">на подбор</div>
                
                <div class="af-form-group">
                    <div class="af-label"><label for="af-text">Текст <em>*</em></label></div>
                    <div class="af-input"><textarea name="text" id="af-text" class="af-inp af-textarea" placeholder="Опишите желаемый объект...">[[!+mw.text]]</textarea></div>
                    [[!+mw.error.text:!empty=`<div class="af-error">[[!+mw.error.text]]</div>`]]
                </div>
                <div class="af-form-group">
                    <div class="af-label"><label for="af-name">Ваше имя</label></div>
                    <div class="af-input"><input type="text" name="name" id="af-name" class="af-inp" value="[[!+mw.name]]"></div>
                    [[!+mw.error.name:!empty=`<div class="af-error">[[!+mw.error.name]]</div>`]]
                </div>
                <div class="af-form-group">
                    <div class="af-label"><label for="af-phone">Телефон <em>*</em></label></div>
                    <div class="af-input"><input type="text" name="phone" id="af-phone" class="af-inp" value="[[!+mw.phone]]"></div>
                    [[!+mw.error.phone:!empty=`<div class="af-error">[[!+mw.error.phone]]</div>`]]
                </div>
                <div class="af-form-group">
                    <div class="af-label"><label for="af-email">E-mail <em>*</em></label></div>
                    <div class="af-input"><input type="text" name="email" id="af-email" class="af-inp" value="[[!+mw.email]]"></div>
                    [[!+mw.error.email:!empty=`<div class="af-error">[[!+mw.error.email]]</div>`]]
                </div>
                <div class="af-form-group af-submit">
                    <input type="submit" name="modal" class="af-sub" value="Отправить">
                </div>
            </form>
        </div>
        <div class="mw-controls clearfix"><a href="#" id="mw-close"></a></div>
    </div>
</div>

    <div id="wrapper">
        
        
<header class="header" role="header">
    <div class="row">
        <div class="h-logo"><a href="http://www.21vek-vl.ru/"><img src="/assets/images/b-logo.png" alt=""></a></div>
        <div class="h-title">
            <span>Агентство недвижимости</span><br>
            <span class="h-t-margin">«XXI Век» во Владивостоке</span>
        </div>
        <div class="h-phone">
            <span class="h-p-small">8 (423)</span>
            <span class="h-p-big">2-90-90-93</span>
        </div>
        <a class="h-request" href="#">Оставить заявку</a>
        <div class="h-social">
            <a class="h-s-vk" href="http://vk.com/publik73520199" target="_blank"></a>
            <a class="h-s-odno" href="#" target="_blank"></a>
            <a class="h-s-facebook" href="#" target="_blank"></a>
        </div>
    </div>
</header>
        
        
<nav class="navigation" role="navigation">
    <div class="row">
        [[!pdoResources? 
            &tpl=`tpl.Menu.Parent` 
            &sortdir=`ASC` 
            &parents=`0`
            &resources=`2,3,4,5`]]
    </div>
</nav>
        
        <div class="main-content row" role="main-content">
            
            
<div class="box_skitter">
    <ul>
        [[!getImageList?
            &tvname=`tv.Slider`
            &tpl=`tpl.Slider`
            &limit=`all`
            &docid=`1`]]
    </ul>
</div>
            
            
<div class="box-action clearfix">
    <div class="ba-leftbar">
        <div class="ba-want ba-want-remove" data-active="false">
            <div class="ba-want-btn">Хочу снять</div>
            <div class="ba-want-container">
                [[!pdoMenu? &level=`1` &parents=`18`]]
            </div>
        </div>
        <div class="ba-want ba-want-pass" data-active="false">
            <div class="ba-want-btn">Хочу сдать</div>
            <div class="ba-want-container">
                [[!pdoMenu? &level=`1` &parents=`23`]]
            </div>
        </div>
    </div>
    <div class="ba-rightbar">
        <form action="database-objects/search-results.html" method="get">
            <div class="ba-s-title">Быстрый поиск объектов</div>
            <div class="ba-s-form-group">
                <div class="ba-s-label"><label for="s-area">Район</label></div>
                <div class="ba-s-input">
                    <select name="area" id="s-area">
                        <option value="0">Не выбрано</option>
                        [[!pdoRegion? &tpl=`<option value="[[+value]]">[[+value]]</option>`]]
                    </select>
                </div>
            </div>
            <div class="ba-s-form-group">
                <div class="ba-s-label"><label for="s-type">Тип объекта</label></div>
                <div class="ba-s-input">
                    <select name="type" id="s-type">
                        <option value="0">Не выбрано</option>
                        [[!pdoResources? 
                            &limit=`all`
                            &depth=`0`
                            &parents=`3` 
                            &sortby=`menuindex`
                            &sortdir=`ASC`
                            &tpl=`@INLINE <option value="[[+id]]">[[+pagetitle]]</option>`
                            &showHidden=`0`]]
                    </select>
                </div>
            </div>
            <div class="ba-s-form-group">
                <div class="ba-s-label"><label for="s-cost-min">Стоимость</label></div>
                <div class="ba-s-input">
                    от
                    <input class="ba-s-range" type="number" id="s-cost-min" name="costmin" value="">
                    до
                    <input class="ba-s-range" type="number" id="s-cost-max" name="costmax" value="">
                </div>
            </div>
            <div id="ba-s-slider" class="ba-s-slider"></div>
            <div class="ba-s-line"></div>
            <button class="ba-s-btn" type="submit">Найти</button>
        </form>
    </div>
</div>
            
            
<div class="hot-deals-box">
    <div class="hdb-title">Горячие предложения</div>
    <div class="hdb-container clearfix">
        [[!pdoResources? 
            &includeTVs=`tv.Obj.Type,tv.Obj.Locm,tv.Obj.Price,tv.Obj.Hot,tv.Obj.Image,tv.Obj.Desc,tv.Obj.Area` 
            &limit=`2` 
            &parents=`27` 
            &processTVs=`1` 
            &tpl=`tpl.Hot` 
            &tvFilters=`tv.Obj.Hot==1` 
            &tvPrefix=``]]
    </div>
    <div class="hdb-link"><a href="want-to-stay/hot-deals.html">Все</a></div>
</div>
            
        </div>
    </div>
    
    
<footer class="footer" role="footer">
    <div class="row clearfix">
        <div class="f-copyright">&copy; Аренда квартир во Владивостоке. Агентство недвижимости «XXIВек». 2014 г.</div>
        <div class="f-pobeda">
            <a href="http://pobeda-ru.ru" target="_blank">
                <img src="/assets/images/b-logo-pobeda.png" alt="">
                Разработка сайта <span>Pobeda-ru</span>
            </a>
        </div>
    </div>
</footer>
	
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="/assets/js/jquery.ui/jquery-ui.min.js"></script>
	<script type="text/javascript" src="/assets/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="/assets/js/jquery.skitter.min.js"></script>
	<script type="text/javascript" src="/assets/js/common.main.js"></script>
	<script type="text/javascript" src="/assets/js/nav.menu.js"></script>
	
</body>
</html>',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[$tmpl.Head]]' => '    <title>Хочу сдать - Агентство недвижимости «XXI Век» во Владивостоке</title>
	<meta name="description" content="">
	<meta name="keywords" content="">

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=1024">
	    
	<base href="http://www.21vek-vl.ru/">
	<link rel="shortcut icon" href="favicon.ico">
	    
	<!--[if lt IE 9]> 
	   <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
	<![endif]-->
	
	<link rel="stylesheet" type="text/css" href="/assets/css/reset.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/layout.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/skitter.styles.css">
	<link rel="stylesheet" type="text/css" href="/assets/js/jquery.ui/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="/assets/js/jquery.ui/jquery-ui.structure.css">
	<link rel="stylesheet" type="text/css" href="/assets/js/jquery.ui/jquery-ui.theme.css">',
    '[[$tmpl.Modal]]' => '
[[!FormIt? 
    &hooks=`email,redirect` 
    &submitVar=`modal` 
    &placeholderPrefix=`mw.` 
    &redirectTo=`32` 
    &emailTpl=`tpl.Email.Form.Contact` 
    &emailSubject=`Новое сообщение с вашего сайта 21 ВЕК` 
    &emailTo=`21vek-vl@mail.ru`
    &emailFrom=`21vek-vl@mail.ru`
    &emailFromName=`21 ВЕК`
    &validate=`blank:blank,
               text:required:stripTags,
               name:stripTags,
               phone:required:stripTags,
               email:required:stripTags`]]

<div id="modal-wind"[[!+mw.active:is=`1`:then=` class="active"`]]>
    <div class="mw-container clearfix">
        <div class="mw-windows">
            <form class="apply-form" action="want-to-pass/" method="post">
                <input id="af-blank" type="hidden" name="blank" value="[[!+mw.blank]]">
                <input type="hidden" name="active" value="1">
                
                <div class="af-title-big">Заявка</div>
                <div class="af-title-small">на подбор</div>
                
                <div class="af-form-group">
                    <div class="af-label"><label for="af-text">Текст <em>*</em></label></div>
                    <div class="af-input"><textarea name="text" id="af-text" class="af-inp af-textarea" placeholder="Опишите желаемый объект...">[[!+mw.text]]</textarea></div>
                    [[!+mw.error.text:!empty=`<div class="af-error">[[!+mw.error.text]]</div>`]]
                </div>
                <div class="af-form-group">
                    <div class="af-label"><label for="af-name">Ваше имя</label></div>
                    <div class="af-input"><input type="text" name="name" id="af-name" class="af-inp" value="[[!+mw.name]]"></div>
                    [[!+mw.error.name:!empty=`<div class="af-error">[[!+mw.error.name]]</div>`]]
                </div>
                <div class="af-form-group">
                    <div class="af-label"><label for="af-phone">Телефон <em>*</em></label></div>
                    <div class="af-input"><input type="text" name="phone" id="af-phone" class="af-inp" value="[[!+mw.phone]]"></div>
                    [[!+mw.error.phone:!empty=`<div class="af-error">[[!+mw.error.phone]]</div>`]]
                </div>
                <div class="af-form-group">
                    <div class="af-label"><label for="af-email">E-mail <em>*</em></label></div>
                    <div class="af-input"><input type="text" name="email" id="af-email" class="af-inp" value="[[!+mw.email]]"></div>
                    [[!+mw.error.email:!empty=`<div class="af-error">[[!+mw.error.email]]</div>`]]
                </div>
                <div class="af-form-group af-submit">
                    <input type="submit" name="modal" class="af-sub" value="Отправить">
                </div>
            </form>
        </div>
        <div class="mw-controls clearfix"><a href="#" id="mw-close"></a></div>
    </div>
</div>',
    '[[$tmpl.Header]]' => '
<header class="header" role="header">
    <div class="row">
        <div class="h-logo"><a href="http://www.21vek-vl.ru/"><img src="/assets/images/b-logo.png" alt=""></a></div>
        <div class="h-title">
            <span>Агентство недвижимости</span><br>
            <span class="h-t-margin">«XXI Век» во Владивостоке</span>
        </div>
        <div class="h-phone">
            <span class="h-p-small">8 (423)</span>
            <span class="h-p-big">2-90-90-93</span>
        </div>
        <a class="h-request" href="#">Оставить заявку</a>
        <div class="h-social">
            <a class="h-s-vk" href="http://vk.com/publik73520199" target="_blank"></a>
            <a class="h-s-odno" href="#" target="_blank"></a>
            <a class="h-s-facebook" href="#" target="_blank"></a>
        </div>
    </div>
</header>',
    '[[$tmpl.Nav]]' => '
<nav class="navigation" role="navigation">
    <div class="row">
        [[!pdoResources? 
            &tpl=`tpl.Menu.Parent` 
            &sortdir=`ASC` 
            &parents=`0`
            &resources=`2,3,4,5`]]
    </div>
</nav>',
    '[[$tmpl.Slider]]' => '
<div class="box_skitter">
    <ul>
        [[!getImageList?
            &tvname=`tv.Slider`
            &tpl=`tpl.Slider`
            &limit=`all`
            &docid=`1`]]
    </ul>
</div>',
    '[[$tmpl.ActionSearch]]' => '
<div class="box-action clearfix">
    <div class="ba-leftbar">
        <div class="ba-want ba-want-remove" data-active="false">
            <div class="ba-want-btn">Хочу снять</div>
            <div class="ba-want-container">
                [[!pdoMenu? &level=`1` &parents=`18`]]
            </div>
        </div>
        <div class="ba-want ba-want-pass" data-active="false">
            <div class="ba-want-btn">Хочу сдать</div>
            <div class="ba-want-container">
                [[!pdoMenu? &level=`1` &parents=`23`]]
            </div>
        </div>
    </div>
    <div class="ba-rightbar">
        <form action="database-objects/search-results.html" method="get">
            <div class="ba-s-title">Быстрый поиск объектов</div>
            <div class="ba-s-form-group">
                <div class="ba-s-label"><label for="s-area">Район</label></div>
                <div class="ba-s-input">
                    <select name="area" id="s-area">
                        <option value="0">Не выбрано</option>
                        [[!pdoRegion? &tpl=`<option value="[[+value]]">[[+value]]</option>`]]
                    </select>
                </div>
            </div>
            <div class="ba-s-form-group">
                <div class="ba-s-label"><label for="s-type">Тип объекта</label></div>
                <div class="ba-s-input">
                    <select name="type" id="s-type">
                        <option value="0">Не выбрано</option>
                        [[!pdoResources? 
                            &limit=`all`
                            &depth=`0`
                            &parents=`3` 
                            &sortby=`menuindex`
                            &sortdir=`ASC`
                            &tpl=`@INLINE <option value="[[+id]]">[[+pagetitle]]</option>`
                            &showHidden=`0`]]
                    </select>
                </div>
            </div>
            <div class="ba-s-form-group">
                <div class="ba-s-label"><label for="s-cost-min">Стоимость</label></div>
                <div class="ba-s-input">
                    от
                    <input class="ba-s-range" type="number" id="s-cost-min" name="costmin" value="">
                    до
                    <input class="ba-s-range" type="number" id="s-cost-max" name="costmax" value="">
                </div>
            </div>
            <div id="ba-s-slider" class="ba-s-slider"></div>
            <div class="ba-s-line"></div>
            <button class="ba-s-btn" type="submit">Найти</button>
        </form>
    </div>
</div>',
    '[[$tmpl.HotDeals]]' => '
<div class="hot-deals-box">
    <div class="hdb-title">Горячие предложения</div>
    <div class="hdb-container clearfix">
        [[!pdoResources? 
            &includeTVs=`tv.Obj.Type,tv.Obj.Locm,tv.Obj.Price,tv.Obj.Hot,tv.Obj.Image,tv.Obj.Desc,tv.Obj.Area` 
            &limit=`2` 
            &parents=`27` 
            &processTVs=`1` 
            &tpl=`tpl.Hot` 
            &tvFilters=`tv.Obj.Hot==1` 
            &tvPrefix=``]]
    </div>
    <div class="hdb-link"><a href="want-to-stay/hot-deals.html">Все</a></div>
</div>',
    '[[$tmpl.Footer]]' => '
<footer class="footer" role="footer">
    <div class="row clearfix">
        <div class="f-copyright">&copy; Аренда квартир во Владивостоке. Агентство недвижимости «XXIВек». 2014 г.</div>
        <div class="f-pobeda">
            <a href="http://pobeda-ru.ru" target="_blank">
                <img src="/assets/images/b-logo-pobeda.png" alt="">
                Разработка сайта <span>Pobeda-ru</span>
            </a>
        </div>
    </div>
</footer>',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'tmpl.Head' => 
      array (
        'fields' => 
        array (
          'id' => 3,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'tmpl.Head',
          'description' => '',
          'editor_type' => 0,
          'category' => 5,
          'cache_type' => 0,
          'snippet' => '    <title>[[*tv.SEO.Pagetitle]]</title>
	<meta name="description" content="[[*tv.SEO.Description]]">
	<meta name="keywords" content="[[*tv.SEO.Keywords]]">

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=1024">
	    
	<base href="[[++site_url]]">
	<link rel="shortcut icon" href="favicon.ico">
	    
	<!--[if lt IE 9]> 
	   <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
	<![endif]-->
	
	<link rel="stylesheet" type="text/css" href="/assets/css/reset.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/layout.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/skitter.styles.css">
	<link rel="stylesheet" type="text/css" href="/assets/js/jquery.ui/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="/assets/js/jquery.ui/jquery-ui.structure.css">
	<link rel="stylesheet" type="text/css" href="/assets/js/jquery.ui/jquery-ui.theme.css">',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '    <title>[[*tv.SEO.Pagetitle]]</title>
	<meta name="description" content="[[*tv.SEO.Description]]">
	<meta name="keywords" content="[[*tv.SEO.Keywords]]">

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=1024">
	    
	<base href="[[++site_url]]">
	<link rel="shortcut icon" href="favicon.ico">
	    
	<!--[if lt IE 9]> 
	   <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
	<![endif]-->
	
	<link rel="stylesheet" type="text/css" href="/assets/css/reset.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/layout.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/skitter.styles.css">
	<link rel="stylesheet" type="text/css" href="/assets/js/jquery.ui/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="/assets/js/jquery.ui/jquery-ui.structure.css">
	<link rel="stylesheet" type="text/css" href="/assets/js/jquery.ui/jquery-ui.theme.css">',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'tmpl.Modal' => 
      array (
        'fields' => 
        array (
          'id' => 48,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'tmpl.Modal',
          'description' => '',
          'editor_type' => 0,
          'category' => 5,
          'cache_type' => 0,
          'snippet' => '
[[!FormIt? 
    &hooks=`email,redirect` 
    &submitVar=`modal` 
    &placeholderPrefix=`mw.` 
    &redirectTo=`32` 
    &emailTpl=`tpl.Email.Form.Contact` 
    &emailSubject=`Новое сообщение с вашего сайта 21 ВЕК` 
    &emailTo=`21vek-vl@mail.ru`
    &emailFrom=`21vek-vl@mail.ru`
    &emailFromName=`21 ВЕК`
    &validate=`blank:blank,
               text:required:stripTags,
               name:stripTags,
               phone:required:stripTags,
               email:required:stripTags`]]

<div id="modal-wind"[[!+mw.active:is=`1`:then=` class="active"`]]>
    <div class="mw-container clearfix">
        <div class="mw-windows">
            <form class="apply-form" action="[[~[[*id]]]]" method="post">
                <input id="af-blank" type="hidden" name="blank" value="[[!+mw.blank]]">
                <input type="hidden" name="active" value="1">
                
                <div class="af-title-big">Заявка</div>
                <div class="af-title-small">на подбор</div>
                
                <div class="af-form-group">
                    <div class="af-label"><label for="af-text">Текст <em>*</em></label></div>
                    <div class="af-input"><textarea name="text" id="af-text" class="af-inp af-textarea" placeholder="Опишите желаемый объект...">[[!+mw.text]]</textarea></div>
                    [[!+mw.error.text:!empty=`<div class="af-error">[[!+mw.error.text]]</div>`]]
                </div>
                <div class="af-form-group">
                    <div class="af-label"><label for="af-name">Ваше имя</label></div>
                    <div class="af-input"><input type="text" name="name" id="af-name" class="af-inp" value="[[!+mw.name]]"></div>
                    [[!+mw.error.name:!empty=`<div class="af-error">[[!+mw.error.name]]</div>`]]
                </div>
                <div class="af-form-group">
                    <div class="af-label"><label for="af-phone">Телефон <em>*</em></label></div>
                    <div class="af-input"><input type="text" name="phone" id="af-phone" class="af-inp" value="[[!+mw.phone]]"></div>
                    [[!+mw.error.phone:!empty=`<div class="af-error">[[!+mw.error.phone]]</div>`]]
                </div>
                <div class="af-form-group">
                    <div class="af-label"><label for="af-email">E-mail <em>*</em></label></div>
                    <div class="af-input"><input type="text" name="email" id="af-email" class="af-inp" value="[[!+mw.email]]"></div>
                    [[!+mw.error.email:!empty=`<div class="af-error">[[!+mw.error.email]]</div>`]]
                </div>
                <div class="af-form-group af-submit">
                    <input type="submit" name="modal" class="af-sub" value="Отправить">
                </div>
            </form>
        </div>
        <div class="mw-controls clearfix"><a href="#" id="mw-close"></a></div>
    </div>
</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '
[[!FormIt? 
    &hooks=`email,redirect` 
    &submitVar=`modal` 
    &placeholderPrefix=`mw.` 
    &redirectTo=`32` 
    &emailTpl=`tpl.Email.Form.Contact` 
    &emailSubject=`Новое сообщение с вашего сайта 21 ВЕК` 
    &emailTo=`21vek-vl@mail.ru`
    &emailFrom=`21vek-vl@mail.ru`
    &emailFromName=`21 ВЕК`
    &validate=`blank:blank,
               text:required:stripTags,
               name:stripTags,
               phone:required:stripTags,
               email:required:stripTags`]]

<div id="modal-wind"[[!+mw.active:is=`1`:then=` class="active"`]]>
    <div class="mw-container clearfix">
        <div class="mw-windows">
            <form class="apply-form" action="[[~[[*id]]]]" method="post">
                <input id="af-blank" type="hidden" name="blank" value="[[!+mw.blank]]">
                <input type="hidden" name="active" value="1">
                
                <div class="af-title-big">Заявка</div>
                <div class="af-title-small">на подбор</div>
                
                <div class="af-form-group">
                    <div class="af-label"><label for="af-text">Текст <em>*</em></label></div>
                    <div class="af-input"><textarea name="text" id="af-text" class="af-inp af-textarea" placeholder="Опишите желаемый объект...">[[!+mw.text]]</textarea></div>
                    [[!+mw.error.text:!empty=`<div class="af-error">[[!+mw.error.text]]</div>`]]
                </div>
                <div class="af-form-group">
                    <div class="af-label"><label for="af-name">Ваше имя</label></div>
                    <div class="af-input"><input type="text" name="name" id="af-name" class="af-inp" value="[[!+mw.name]]"></div>
                    [[!+mw.error.name:!empty=`<div class="af-error">[[!+mw.error.name]]</div>`]]
                </div>
                <div class="af-form-group">
                    <div class="af-label"><label for="af-phone">Телефон <em>*</em></label></div>
                    <div class="af-input"><input type="text" name="phone" id="af-phone" class="af-inp" value="[[!+mw.phone]]"></div>
                    [[!+mw.error.phone:!empty=`<div class="af-error">[[!+mw.error.phone]]</div>`]]
                </div>
                <div class="af-form-group">
                    <div class="af-label"><label for="af-email">E-mail <em>*</em></label></div>
                    <div class="af-input"><input type="text" name="email" id="af-email" class="af-inp" value="[[!+mw.email]]"></div>
                    [[!+mw.error.email:!empty=`<div class="af-error">[[!+mw.error.email]]</div>`]]
                </div>
                <div class="af-form-group af-submit">
                    <input type="submit" name="modal" class="af-sub" value="Отправить">
                </div>
            </form>
        </div>
        <div class="mw-controls clearfix"><a href="#" id="mw-close"></a></div>
    </div>
</div>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'tmpl.Header' => 
      array (
        'fields' => 
        array (
          'id' => 5,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'tmpl.Header',
          'description' => '',
          'editor_type' => 0,
          'category' => 5,
          'cache_type' => 0,
          'snippet' => '
<header class="header" role="header">
    <div class="row">
        <div class="h-logo"><a href="[[~1]]"><img src="/assets/images/b-logo.png" alt=""></a></div>
        <div class="h-title">
            <span>Агентство недвижимости</span><br>
            <span class="h-t-margin">«XXI Век» во Владивостоке</span>
        </div>
        <div class="h-phone">
            <span class="h-p-small">8 (423)</span>
            <span class="h-p-big">2-90-90-93</span>
        </div>
        <a class="h-request" href="#">Оставить заявку</a>
        <div class="h-social">
            <a class="h-s-vk" href="http://vk.com/publik73520199" target="_blank"></a>
            <a class="h-s-odno" href="#" target="_blank"></a>
            <a class="h-s-facebook" href="#" target="_blank"></a>
        </div>
    </div>
</header>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '
<header class="header" role="header">
    <div class="row">
        <div class="h-logo"><a href="[[~1]]"><img src="/assets/images/b-logo.png" alt=""></a></div>
        <div class="h-title">
            <span>Агентство недвижимости</span><br>
            <span class="h-t-margin">«XXI Век» во Владивостоке</span>
        </div>
        <div class="h-phone">
            <span class="h-p-small">8 (423)</span>
            <span class="h-p-big">2-90-90-93</span>
        </div>
        <a class="h-request" href="#">Оставить заявку</a>
        <div class="h-social">
            <a class="h-s-vk" href="http://vk.com/publik73520199" target="_blank"></a>
            <a class="h-s-odno" href="#" target="_blank"></a>
            <a class="h-s-facebook" href="#" target="_blank"></a>
        </div>
    </div>
</header>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'tmpl.Nav' => 
      array (
        'fields' => 
        array (
          'id' => 6,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'tmpl.Nav',
          'description' => '',
          'editor_type' => 0,
          'category' => 5,
          'cache_type' => 0,
          'snippet' => '
<nav class="navigation" role="navigation">
    <div class="row">
        [[!pdoResources? 
            &tpl=`tpl.Menu.Parent` 
            &sortdir=`ASC` 
            &parents=`0`
            &resources=`2,3,4,5`]]
    </div>
</nav>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '
<nav class="navigation" role="navigation">
    <div class="row">
        [[!pdoResources? 
            &tpl=`tpl.Menu.Parent` 
            &sortdir=`ASC` 
            &parents=`0`
            &resources=`2,3,4,5`]]
    </div>
</nav>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'tmpl.Slider' => 
      array (
        'fields' => 
        array (
          'id' => 7,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'tmpl.Slider',
          'description' => '',
          'editor_type' => 0,
          'category' => 5,
          'cache_type' => 0,
          'snippet' => '
<div class="box_skitter">
    <ul>
        [[!getImageList?
            &tvname=`tv.Slider`
            &tpl=`tpl.Slider`
            &limit=`all`
            &docid=`1`]]
    </ul>
</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '
<div class="box_skitter">
    <ul>
        [[!getImageList?
            &tvname=`tv.Slider`
            &tpl=`tpl.Slider`
            &limit=`all`
            &docid=`1`]]
    </ul>
</div>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'tmpl.ActionSearch' => 
      array (
        'fields' => 
        array (
          'id' => 8,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'tmpl.ActionSearch',
          'description' => '',
          'editor_type' => 0,
          'category' => 5,
          'cache_type' => 0,
          'snippet' => '
<div class="box-action clearfix">
    <div class="ba-leftbar">
        <div class="ba-want ba-want-remove" data-active="false">
            <div class="ba-want-btn">Хочу снять</div>
            <div class="ba-want-container">
                [[!pdoMenu? &level=`1` &parents=`18`]]
            </div>
        </div>
        <div class="ba-want ba-want-pass" data-active="false">
            <div class="ba-want-btn">Хочу сдать</div>
            <div class="ba-want-container">
                [[!pdoMenu? &level=`1` &parents=`23`]]
            </div>
        </div>
    </div>
    <div class="ba-rightbar">
        <form action="[[~31]]" method="get">
            <div class="ba-s-title">Быстрый поиск объектов</div>
            <div class="ba-s-form-group">
                <div class="ba-s-label"><label for="s-area">Район</label></div>
                <div class="ba-s-input">
                    <select name="area" id="s-area">
                        <option value="0">Не выбрано</option>
                        [[!pdoRegion? &tpl=`<option value="[[+value]]">[[+value]]</option>`]]
                    </select>
                </div>
            </div>
            <div class="ba-s-form-group">
                <div class="ba-s-label"><label for="s-type">Тип объекта</label></div>
                <div class="ba-s-input">
                    <select name="type" id="s-type">
                        <option value="0">Не выбрано</option>
                        [[!pdoResources? 
                            &limit=`all`
                            &depth=`0`
                            &parents=`3` 
                            &sortby=`menuindex`
                            &sortdir=`ASC`
                            &tpl=`@INLINE <option value="[[+id]]">[[+pagetitle]]</option>`
                            &showHidden=`0`]]
                    </select>
                </div>
            </div>
            <div class="ba-s-form-group">
                <div class="ba-s-label"><label for="s-cost-min">Стоимость</label></div>
                <div class="ba-s-input">
                    от
                    <input class="ba-s-range" type="number" id="s-cost-min" name="costmin" value="">
                    до
                    <input class="ba-s-range" type="number" id="s-cost-max" name="costmax" value="">
                </div>
            </div>
            <div id="ba-s-slider" class="ba-s-slider"></div>
            <div class="ba-s-line"></div>
            <button class="ba-s-btn" type="submit">Найти</button>
        </form>
    </div>
</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '
<div class="box-action clearfix">
    <div class="ba-leftbar">
        <div class="ba-want ba-want-remove" data-active="false">
            <div class="ba-want-btn">Хочу снять</div>
            <div class="ba-want-container">
                [[!pdoMenu? &level=`1` &parents=`18`]]
            </div>
        </div>
        <div class="ba-want ba-want-pass" data-active="false">
            <div class="ba-want-btn">Хочу сдать</div>
            <div class="ba-want-container">
                [[!pdoMenu? &level=`1` &parents=`23`]]
            </div>
        </div>
    </div>
    <div class="ba-rightbar">
        <form action="[[~31]]" method="get">
            <div class="ba-s-title">Быстрый поиск объектов</div>
            <div class="ba-s-form-group">
                <div class="ba-s-label"><label for="s-area">Район</label></div>
                <div class="ba-s-input">
                    <select name="area" id="s-area">
                        <option value="0">Не выбрано</option>
                        [[!pdoRegion? &tpl=`<option value="[[+value]]">[[+value]]</option>`]]
                    </select>
                </div>
            </div>
            <div class="ba-s-form-group">
                <div class="ba-s-label"><label for="s-type">Тип объекта</label></div>
                <div class="ba-s-input">
                    <select name="type" id="s-type">
                        <option value="0">Не выбрано</option>
                        [[!pdoResources? 
                            &limit=`all`
                            &depth=`0`
                            &parents=`3` 
                            &sortby=`menuindex`
                            &sortdir=`ASC`
                            &tpl=`@INLINE <option value="[[+id]]">[[+pagetitle]]</option>`
                            &showHidden=`0`]]
                    </select>
                </div>
            </div>
            <div class="ba-s-form-group">
                <div class="ba-s-label"><label for="s-cost-min">Стоимость</label></div>
                <div class="ba-s-input">
                    от
                    <input class="ba-s-range" type="number" id="s-cost-min" name="costmin" value="">
                    до
                    <input class="ba-s-range" type="number" id="s-cost-max" name="costmax" value="">
                </div>
            </div>
            <div id="ba-s-slider" class="ba-s-slider"></div>
            <div class="ba-s-line"></div>
            <button class="ba-s-btn" type="submit">Найти</button>
        </form>
    </div>
</div>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'tmpl.HotDeals' => 
      array (
        'fields' => 
        array (
          'id' => 9,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'tmpl.HotDeals',
          'description' => '',
          'editor_type' => 0,
          'category' => 5,
          'cache_type' => 0,
          'snippet' => '
<div class="hot-deals-box">
    <div class="hdb-title">Горячие предложения</div>
    <div class="hdb-container clearfix">
        [[!pdoResources? 
            &includeTVs=`tv.Obj.Type,tv.Obj.Locm,tv.Obj.Price,tv.Obj.Hot,tv.Obj.Image,tv.Obj.Desc,tv.Obj.Area` 
            &limit=`2` 
            &parents=`27` 
            &processTVs=`1` 
            &tpl=`tpl.Hot` 
            &tvFilters=`tv.Obj.Hot==1` 
            &tvPrefix=``]]
    </div>
    <div class="hdb-link"><a href="[[~2]]">Все</a></div>
</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '
<div class="hot-deals-box">
    <div class="hdb-title">Горячие предложения</div>
    <div class="hdb-container clearfix">
        [[!pdoResources? 
            &includeTVs=`tv.Obj.Type,tv.Obj.Locm,tv.Obj.Price,tv.Obj.Hot,tv.Obj.Image,tv.Obj.Desc,tv.Obj.Area` 
            &limit=`2` 
            &parents=`27` 
            &processTVs=`1` 
            &tpl=`tpl.Hot` 
            &tvFilters=`tv.Obj.Hot==1` 
            &tvPrefix=``]]
    </div>
    <div class="hdb-link"><a href="[[~2]]">Все</a></div>
</div>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'tmpl.Footer' => 
      array (
        'fields' => 
        array (
          'id' => 4,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'tmpl.Footer',
          'description' => '',
          'editor_type' => 0,
          'category' => 5,
          'cache_type' => 0,
          'snippet' => '
<footer class="footer" role="footer">
    <div class="row clearfix">
        <div class="f-copyright">&copy; Аренда квартир во Владивостоке. Агентство недвижимости «XXIВек». 2014 г.</div>
        <div class="f-pobeda">
            <a href="http://pobeda-ru.ru" target="_blank">
                <img src="/assets/images/b-logo-pobeda.png" alt="">
                Разработка сайта <span>Pobeda-ru</span>
            </a>
        </div>
    </div>
</footer>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '
<footer class="footer" role="footer">
    <div class="row clearfix">
        <div class="f-copyright">&copy; Аренда квартир во Владивостоке. Агентство недвижимости «XXIВек». 2014 г.</div>
        <div class="f-pobeda">
            <a href="http://pobeda-ru.ru" target="_blank">
                <img src="/assets/images/b-logo-pobeda.png" alt="">
                Разработка сайта <span>Pobeda-ru</span>
            </a>
        </div>
    </div>
</footer>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modSnippet' => 
    array (
      'FormIt' => 
      array (
        'fields' => 
        array (
          'id' => 25,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'FormIt',
          'description' => 'A dynamic form processing snippet.',
          'editor_type' => 0,
          'category' => 7,
          'cache_type' => 0,
          'snippet' => '/**
 * FormIt
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * FormIt
 *
 * A dynamic form processing Snippet for MODx Revolution.
 *
 * @package formit
 */
require_once $modx->getOption(\'formit.core_path\',null,$modx->getOption(\'core_path\',null,MODX_CORE_PATH).\'components/formit/\').\'model/formit/formit.class.php\';
$fi = new FormIt($modx,$scriptProperties);
$fi->initialize($modx->context->get(\'key\'));
$fi->loadRequest();

$fields = $fi->request->prepare();
return $fi->request->handle($fields);',
          'locked' => false,
          'properties' => 
          array (
            'hooks' => 
            array (
              'name' => 'hooks',
              'desc' => 'prop_formit.hooks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Разделённый запятыми список хуков которые будут выполнятся по очереди после того как форма пройдёт проверку. Если какой-то из хуков вернёт false, то следующии хуки не будут выполнены. Хук также может быть именем сниппета, этот сниппет будет выполнен как хук.',
              'area_trans' => '',
            ),
            'preHooks' => 
            array (
              'name' => 'preHooks',
              'desc' => 'prop_formit.prehooks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Разделённый запятыми список хуков которые будут выполнятся по очереди после того как форма будет загружена. Если какой-то из хуков вернёт false, то следующие хуки не будут выполнены. Например: можно предварительно устанавливать значения полей формы с помощью $scriptProperties[`hook`]->fields[`fieldname`]. Хук также может быть именем сниппета, этот сниппет будет выполнен как хук.',
              'area_trans' => '',
            ),
            'submitVar' => 
            array (
              'name' => 'submitVar',
              'desc' => 'prop_formit.submitvar_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Если установлено значение, то обработка формы не начнётся пока  POST параметр с этим именем не будет передан.',
              'area_trans' => '',
            ),
            'validate' => 
            array (
              'name' => 'validate',
              'desc' => 'prop_formit.validate_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Разделённый запятыми список полей для проверки, для каждого поля пишется имя:валидатор (т.е.: username:required,email:required). Валидаторы могут быть объединены через двоеточие, например email:email:required. Этот параметр может быть задан на нескольких строках.',
              'area_trans' => '',
            ),
            'errTpl' => 
            array (
              'name' => 'errTpl',
              'desc' => 'prop_formit.errtpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '<span class="error">[[+error]]</span>',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Шаблон сообщения об ошибке.',
              'area_trans' => '',
            ),
            'validationErrorMessage' => 
            array (
              'name' => 'validationErrorMessage',
              'desc' => 'prop_formit.validationerrormessage_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '<p class="error">A form validation error occurred. Please check the values you have entered.</p>',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'A general error message to set to a placeholder if validation fails. Can contain [[+errors]] if you want to display a list of all errors at the top.',
              'area_trans' => '',
            ),
            'validationErrorBulkTpl' => 
            array (
              'name' => 'validationErrorBulkTpl',
              'desc' => 'prop_formit.validationerrorbulktpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li>[[+error]]</li>',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'HTML tpl that is used for each individual error in the generic validation error message value.',
              'area_trans' => '',
            ),
            'trimValuesBeforeValidation' => 
            array (
              'name' => 'trimValuesBeforeValidation',
              'desc' => 'prop_formit.trimvaluesdeforevalidation_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Whether or not to trim spaces from the beginning and end of values before attempting validation. Defaults to true.',
              'area_trans' => '',
            ),
            'customValidators' => 
            array (
              'name' => 'customValidators',
              'desc' => 'prop_formit.customvalidators_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Разделённый запятыми список имён пользовательских валидаторов(сниппетов), которые вы планируете использовать в этой форме. Пользовательские валидаторы должны быть обязательно указаны в этом параметре, иначе они не будут работать.',
              'area_trans' => '',
            ),
            'clearFieldsOnSuccess' => 
            array (
              'name' => 'clearFieldsOnSuccess',
              'desc' => 'prop_formit.clearfieldsonsuccess_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Если установлено значение true, то поля формы будут очищатся после успешной отправки формы.',
              'area_trans' => '',
            ),
            'successMessage' => 
            array (
              'name' => 'successMessage',
              'desc' => 'prop_formit.successmessage_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Значение подстановщика для сообщения об успехе. Имя подстановщика устанавливается в параметре &successMessagePlaceholder, по умолчанию «fi.successMessage».',
              'area_trans' => '',
            ),
            'successMessagePlaceholder' => 
            array (
              'name' => 'successMessagePlaceholder',
              'desc' => 'prop_formit.successmessageplaceholder_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'fi.successMessage',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Подстановщик для сообщения об успехе.',
              'area_trans' => '',
            ),
            'store' => 
            array (
              'name' => 'store',
              'desc' => 'prop_formit.store_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Если установлено true,  данные переданные через форму будет сохранятcя в кэше, для дальнейшего их использования с помощью сниппета FormItRetriever.',
              'area_trans' => '',
            ),
            'placeholderPrefix' => 
            array (
              'name' => 'placeholderPrefix',
              'desc' => 'prop_formit.placeholderprefix_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'fi.',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Префикс который используется всеми подстановщиками установлеными FormIt для полей. По умолчанию «fi.»',
              'area_trans' => '',
            ),
            'storeTime' => 
            array (
              'name' => 'storeTime',
              'desc' => 'prop_formit.storetime_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 300,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Если выбрано `запоминание` данных формы, то этот параметр указывает время(в секундах)  для хранения данных из отправленной формы. По умолчанию пять минут.',
              'area_trans' => '',
            ),
            'allowFiles' => 
            array (
              'name' => 'allowFiles',
              'desc' => 'prop_formit.allowfiles_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If set to 0, will prevent files from being submitted on the form.',
              'area_trans' => '',
            ),
            'spamEmailFields' => 
            array (
              'name' => 'spamEmailFields',
              'desc' => 'prop_formit.spamemailfields_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'email',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «spam». Разделённый запятыми список полей содержащих адреса электронной почты для проверки на причастность к спаму.',
              'area_trans' => '',
            ),
            'spamCheckIp' => 
            array (
              'name' => 'spamCheckIp',
              'desc' => 'prop_formit.spamcheckip_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «spam». Если это параметр установлен в true, то будет проверяться ip-адресс отправителя формы на причастность к спаму.',
              'area_trans' => '',
            ),
            'recaptchaJs' => 
            array (
              'name' => 'recaptchaJs',
              'desc' => 'prop_formit.recaptchajs_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '{}',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «recaptcha».  JSON объект который содержит в себе  настройки для виджета reCaptcha.',
              'area_trans' => '',
            ),
            'recaptchaTheme' => 
            array (
              'name' => 'recaptchaTheme',
              'desc' => 'prop_formit.recaptchatheme_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'formit.opt_red',
                  'value' => 'red',
                  'name' => 'Red',
                ),
                1 => 
                array (
                  'text' => 'formit.opt_white',
                  'value' => 'white',
                  'name' => 'White',
                ),
                2 => 
                array (
                  'text' => 'formit.opt_clean',
                  'value' => 'clean',
                  'name' => 'Clean',
                ),
                3 => 
                array (
                  'text' => 'formit.opt_blackglass',
                  'value' => 'blackglass',
                  'name' => 'Black Glass',
                ),
              ),
              'value' => 'clean',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «recaptcha». Тема оформления для виджета reCaptcha.',
              'area_trans' => '',
            ),
            'redirectTo' => 
            array (
              'name' => 'redirectTo',
              'desc' => 'prop_formit.redirectto_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «redirect». В этом параметре надо указать идентификатор ресурса на который будет происходить редирект после успешной отправки формы.',
              'area_trans' => '',
            ),
            'redirectParams' => 
            array (
              'name' => 'redirectParams',
              'desc' => 'prop_formit.redirectparams_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => ' JSON array of parameters to pass to the redirect hook that will be passed when redirecting.',
              'area_trans' => '',
            ),
            'emailTo' => 
            array (
              'name' => 'emailTo',
              'desc' => 'prop_formit.emailto_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». Разделённый запятыми список адресов электронной почты на которые надо послать письмо.',
              'area_trans' => '',
            ),
            'emailToName' => 
            array (
              'name' => 'emailToName',
              'desc' => 'prop_formit.emailtoname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». Необязательный параметр. Разделённый запятыми список имён владельцев адресов электронной почты указанных в параметре «emailTo».',
              'area_trans' => '',
            ),
            'emailFrom' => 
            array (
              'name' => 'emailFrom',
              'desc' => 'prop_formit.emailfrom_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». Необязательный параметр. Если этот параметр установлен, то он будет определять адрес электронной почты отправителя письма. Если не установлен, то сначала адрес электронной почты будет искаться в данных формы  в поле с именем «email», если это поле не будет найдено, то будет использоваться  адрес электронной почты из системной настройки «emailsender».',
              'area_trans' => '',
            ),
            'emailFromName' => 
            array (
              'name' => 'emailFromName',
              'desc' => 'prop_formit.emailfromname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». Необязательный параметр. Имя отправителя письма.',
              'area_trans' => '',
            ),
            'emailReplyTo' => 
            array (
              'name' => 'emailReplyTo',
              'desc' => 'prop_formit.emailreplyto_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». Необязательный параметр. Адрес электронной почты для ответа на письмо.',
              'area_trans' => '',
            ),
            'emailReplyToName' => 
            array (
              'name' => 'emailReplyToName',
              'desc' => 'prop_formit.emailreplytoname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». Необязательный параметр. Имя владельца адреса электронной почты который используется для ответа на письмо.',
              'area_trans' => '',
            ),
            'emailCC' => 
            array (
              'name' => 'emailCC',
              'desc' => 'prop_formit.emailcc_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». Разделённый запятыми список адресов электронной почты на которые надо послать копию письма.',
              'area_trans' => '',
            ),
            'emailCCName' => 
            array (
              'name' => 'emailCCName',
              'desc' => 'prop_formit.emailccname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». Необязательный параметр. Разделённый запятыми список имён владельцев адресов электронной почты указанных в параметре «emailCC».',
              'area_trans' => '',
            ),
            'emailBCC' => 
            array (
              'name' => 'emailBCC',
              'desc' => 'prop_formit.emailbcc_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email».  Разделённый запятыми список адресов  электронной почты на которые надо послать скрытую копию письма.',
              'area_trans' => '',
            ),
            'emailBCCName' => 
            array (
              'name' => 'emailBCCName',
              'desc' => 'prop_formit.emailbccname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». Необязательный параметр. Разделённый запятыми список имён владельцев адресов электронной почты указанных в параметре «emailBCC».',
              'area_trans' => '',
            ),
            'emailSubject' => 
            array (
              'name' => 'emailSubject',
              'desc' => 'prop_formit.emailsubject_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». В этом параметре можно указать тему электронного письма.',
              'area_trans' => '',
            ),
            'emailUseFieldForSubject' => 
            array (
              'name' => 'emailUseFieldForSubject',
              'desc' => 'prop_formit.emailusefieldforsubject_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Если поле «subject» используется в форме, и это параметр установлен в true,то содержимое этого поля будет использоваться как тема электронного письма.',
              'area_trans' => '',
            ),
            'emailHtml' => 
            array (
              'name' => 'emailHtml',
              'desc' => 'prop_formit.emailhtml_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «email». Необязательный параметр. Этот параметр включает использование html разметки в электронном письме. По умолчанию включено.',
              'area_trans' => '',
            ),
            'emailConvertNewlines' => 
            array (
              'name' => 'emailConvertNewlines',
              'desc' => 'prop_formit.emailconvertnewlines_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If true and emailHtml is set to 1, will convert newlines to BR tags in the email.',
              'area_trans' => '',
            ),
            'emailMultiWrapper' => 
            array (
              'name' => 'emailMultiWrapper',
              'desc' => 'prop_formit.emailmultiwrapper_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '[[+value]]',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Will wrap each item in a collection of fields sent via checkboxes/multi-selects. Defaults to just the value.',
              'area_trans' => '',
            ),
            'emailMultiSeparator' => 
            array (
              'name' => 'emailMultiSeparator',
              'desc' => 'prop_formit.emailmultiseparator_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'prop_formit.emailmultiseparator_desc',
              'area_trans' => '',
            ),
            'fiarTpl' => 
            array (
              'name' => 'fiarTpl',
              'desc' => 'prop_fiar.fiartpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «FormItAutoResponder». Обязательный параметр. Имя чанка который будет использоватся как шаблон письма для автоматического ответа.',
              'area_trans' => '',
            ),
            'fiarToField' => 
            array (
              'name' => 'fiarToField',
              'desc' => 'prop_fiar.fiartofield_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'email',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => ' Хук «FormItAutoResponder».  Поле формы которое будет использовано как адрес на который надо отправить автоматический ответ.',
              'area_trans' => '',
            ),
            'fiarSubject' => 
            array (
              'name' => 'fiarSubject',
              'desc' => 'prop_fiar.fiarsubject_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '[[++site_name]] Auto-Responder',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «FormItAutoResponder». Тема письма.',
              'area_trans' => '',
            ),
            'fiarFrom' => 
            array (
              'name' => 'fiarFrom',
              'desc' => 'prop_fiar.fiarfrom_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «FormItAutoResponder». Необязательный параметр.   Если этот параметр установлен, то он будет определять адрес электронной почты отправителя письма. Если не установлен, то сначала адрес электронной почты будет искаться в данных формы  в поле с именем «email», если это поле не будет найдено, то будет использоваться  адрес электронной почты из системной настройки «emailsender».',
              'area_trans' => '',
            ),
            'fiarFromName' => 
            array (
              'name' => 'fiarFromName',
              'desc' => 'prop_fiar.fiarfromname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «FormItAutoResponder». Необязательный параметр.  Имя отправителя письма.',
              'area_trans' => '',
            ),
            'fiarReplyTo' => 
            array (
              'name' => 'fiarReplyTo',
              'desc' => 'prop_fiar.fiarreplyto_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «FormItAutoResponder». Необязательный параметр.  Адрес электронной почты для ответа на письмо.',
              'area_trans' => '',
            ),
            'fiarReplyToName' => 
            array (
              'name' => 'fiarReplyToName',
              'desc' => 'prop_fiar.fiarreplytoname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «FormItAutoResponder». Необязательный параметр.   Имя владельца адреса электронной почты который используется для ответа на письмо.',
              'area_trans' => '',
            ),
            'fiarCC' => 
            array (
              'name' => 'fiarCC',
              'desc' => 'prop_fiar.fiarcc_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «FormItAutoResponder».  Разделённый запятыми список адресов электронной почты на которые надо послать копию письма.',
              'area_trans' => '',
            ),
            'fiarCCName' => 
            array (
              'name' => 'fiarCCName',
              'desc' => 'prop_fiar.fiarccname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «FormItAutoResponder». Необязательный параметр.  Разделённый запятыми список имён владельцев адресов электронной почты указанных в параметре «emailCC».',
              'area_trans' => '',
            ),
            'fiarBCC' => 
            array (
              'name' => 'fiarBCC',
              'desc' => 'prop_fiar.fiarbcc_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «FormItAutoResponder». Разделённый запятыми список адресов электронной почты на которые надо послать скрытую копию письма.',
              'area_trans' => '',
            ),
            'fiarBCCName' => 
            array (
              'name' => 'fiarBCCName',
              'desc' => 'prop_fiar.fiarbccname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «FormItAutoResponder».  Необязательный параметр.  Разделённый запятыми список имён владельцев адресов электронной почты указанных в параметре «emailBCC».',
              'area_trans' => '',
            ),
            'fiarHtml' => 
            array (
              'name' => 'fiarHtml',
              'desc' => 'prop_fiar.fiarhtml_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «FormItAutoResponder».  Необязательный параметр. Включает или выключает использование html разметки в электронном письме. По умолчанию включено.',
              'area_trans' => '',
            ),
            'mathMinRange' => 
            array (
              'name' => 'mathMinRange',
              'desc' => 'prop_math.mathminrange_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 10,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «math». Минимальный диапазон для каждого числа в примере.',
              'area_trans' => '',
            ),
            'mathMaxRange' => 
            array (
              'name' => 'mathMaxRange',
              'desc' => 'prop_math.mathmaxrange_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 100,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «math». Максимальный диапазон для каждого числа в примере.',
              'area_trans' => '',
            ),
            'mathField' => 
            array (
              'name' => 'mathField',
              'desc' => 'prop_math.mathfield_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'math',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «math». Имя поля ввода для ответа.',
              'area_trans' => '',
            ),
            'mathOp1Field' => 
            array (
              'name' => 'mathOp1Field',
              'desc' => 'prop_math.mathop1field_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'op1',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «math». Имя поля для первого числа в примере.',
              'area_trans' => '',
            ),
            'mathOp2Field' => 
            array (
              'name' => 'mathOp2Field',
              'desc' => 'prop_math.mathop2field_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'op2',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «math». Имя поля для второго числа в примере.',
              'area_trans' => '',
            ),
            'mathOperatorField' => 
            array (
              'name' => 'mathOperatorField',
              'desc' => 'prop_math.mathoperatorfield_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'operator',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Хук «math». Имя поля для оператора в примере.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * FormIt
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * FormIt
 *
 * A dynamic form processing Snippet for MODx Revolution.
 *
 * @package formit
 */
require_once $modx->getOption(\'formit.core_path\',null,$modx->getOption(\'core_path\',null,MODX_CORE_PATH).\'components/formit/\').\'model/formit/formit.class.php\';
$fi = new FormIt($modx,$scriptProperties);
$fi->initialize($modx->context->get(\'key\'));
$fi->loadRequest();

$fields = $fi->request->prepare();
return $fi->request->handle($fields);',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'pdoResources' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'pdoResources',
          'description' => '',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '/* @var array $scriptProperties */
if (isset($parents) && $parents === \'\') {
	$scriptProperties[\'parents\'] = $modx->resource->id;
}
if (!empty($returnIds)) {
	$scriptProperties[\'return\'] = \'ids\';
}

// Adding extra parameters into special place so we can put them in results
/** @var modSnippet $snippet */
$additionalPlaceholders = array();
if ($snippet = $modx->getObject(\'modSnippet\', array(\'name\' => \'pdoResources\'))) {
	$properties = unserialize($snippet->properties);
	foreach ($scriptProperties as $k => $v) {
		if (!isset($properties[$k])) {
			$additionalPlaceholders[$k] = $v;
		}
	}
}
$scriptProperties[\'additionalPlaceholders\'] = $additionalPlaceholders;

/* @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoFetch from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');
$output = $pdoFetch->run();

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$log .= \'<pre class="pdoResourcesLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

// Return output
if (!empty($returnIds)) {
	$modx->setPlaceholder(\'pdoResources.log\', $log);
	if (!empty($toPlaceholder)) {
		$modx->setPlaceholder($toPlaceholder, $output);
	}
	else {
		return $output;
	}
}
elseif (!empty($toSeparatePlaceholders)) {
	$output[\'log\'] = $log;
	$modx->setPlaceholders($output, $toSeparatePlaceholders);
}
else {
	$output .= $log;

	if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
		$output = $pdoFetch->getChunk($tplWrapper, array(\'output\' => $output), $pdoFetch->config[\'fastMode\']);
	}

	if (!empty($toPlaceholder)) {
		$modx->setPlaceholder($toPlaceholder, $output);
	}
	else {
		return $output;
	}
}',
          'locked' => false,
          'properties' => 
          array (
            'conditionalTpls' => 
            array (
              'name' => 'conditionalTpls',
              'desc' => 'pdotools_prop_conditionalTpls',
              'type' => 'textarea',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'JSON строка с массивом, у которого в ключах указано то, с чем будет сравниваться "tplCondition", а в значениях - чанки, которые будут использованы для вывода, если сравнение будет успешно. Оператор сравнения указывается в "tplOperator". Для операторов типа "isempty" можно использовать массив без ключей.',
              'area_trans' => '',
            ),
            'context' => 
            array (
              'name' => 'context',
              'desc' => 'pdotools_prop_context',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение выборки по контексту ресурсов.',
              'area_trans' => '',
            ),
            'depth' => 
            array (
              'name' => 'depth',
              'desc' => 'pdotools_prop_depth',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 1,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Глубина поиска дочерних ресурсов от родителя.',
              'area_trans' => '',
            ),
            'fastMode' => 
            array (
              'name' => 'fastMode',
              'desc' => 'pdotools_prop_fastMode',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Быстрый режим обработки чанков. Все необработанные теги (условия, сниппеты и т.п.) будут вырезаны.',
              'area_trans' => '',
            ),
            'first' => 
            array (
              'name' => 'first',
              'desc' => 'pdotools_prop_first',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Номер первой итерации вывода результатов.',
              'area_trans' => '',
            ),
            'hideContainers' => 
            array (
              'name' => 'hideContainers',
              'desc' => 'pdotools_prop_hideContainers',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Отключает вывод контейнеров, то есть, ресурсов с isfolder = 1.',
              'area_trans' => '',
            ),
            'idx' => 
            array (
              'name' => 'idx',
              'desc' => 'pdotools_prop_idx',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Вы можете указать стартовый номер итерации вывода результатов.',
              'area_trans' => '',
            ),
            'includeContent' => 
            array (
              'name' => 'includeContent',
              'desc' => 'pdotools_prop_includeContent',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включаем поле "content" в выборку.',
              'area_trans' => '',
            ),
            'includeTVs' => 
            array (
              'name' => 'includeTVs',
              'desc' => 'pdotools_prop_includeTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ТВ параметров для выборки, через запятую. Например: "action,time" дадут плейсхолдеры [[+action]] и [[+time]].',
              'area_trans' => '',
            ),
            'last' => 
            array (
              'name' => 'last',
              'desc' => 'pdotools_prop_last',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Номер последней итерации вывода результатов. По умолчанию он рассчитается автоматически, по формуле (total + first - 1).',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'pdotools_prop_limit',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 10,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение количества результатов выборки. Можно использовать "0".',
              'area_trans' => '',
            ),
            'loadModels' => 
            array (
              'name' => 'loadModels',
              'desc' => 'pdotools_prop_loadModels',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список компонентов, через запятую, чьи модели нужно загрузить для построения запроса. Например: "&loadModels=`ms2gallery,msearch2`".',
              'area_trans' => '',
            ),
            'offset' => 
            array (
              'name' => 'offset',
              'desc' => 'pdotools_prop_offset',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Пропуск результатов от начала.',
              'area_trans' => '',
            ),
            'outputSeparator' => 
            array (
              'name' => 'outputSeparator',
              'desc' => 'pdotools_prop_outputSeparator',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '
',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Необязательная строка для разделения результатов работы.',
              'area_trans' => '',
            ),
            'parents' => 
            array (
              'name' => 'parents',
              'desc' => 'pdotools_prop_parents',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список родителей, через запятую, для поиска результатов. По умолчанию выборка ограничена текущим родителем. Если поставить 0 - выборка не ограничивается. Если id родителя начинается с дефиса, он и его потомки исключается из выборки.',
              'area_trans' => '',
            ),
            'prepareTVs' => 
            array (
              'name' => 'prepareTVs',
              'desc' => 'pdotools_prop_prepareTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '1',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ТВ параметров, которые нужно подготовить перед выводом. По умолчанию, установлено в "1", что означает подготовку всех ТВ, указанных в "&includeTVs=``"',
              'area_trans' => '',
            ),
            'processTVs' => 
            array (
              'name' => 'processTVs',
              'desc' => 'pdotools_prop_processTVs',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ТВ параметров, которые нужно обработать перед выводом. Если установить в "1" - будут обработаны все ТВ, указанные в "&includeTVs=``". По умолчанию параметр пуст.',
              'area_trans' => '',
            ),
            'resources' => 
            array (
              'name' => 'resources',
              'desc' => 'pdotools_prop_resources',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ресурсов, через запятую, для вывода в результатах. Если id ресурса начинается с дефиса, этот ресурс исключается из выборки.',
              'area_trans' => '',
            ),
            'returnIds' => 
            array (
              'name' => 'returnIds',
              'desc' => 'pdotools_prop_returnIds',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Возвращать строку со списком id ресурсов, вместо оформленных результатов.',
              'area_trans' => '',
            ),
            'scheme' => 
            array (
              'name' => 'scheme',
              'desc' => 'pdotools_prop_scheme',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => -1,
                  'text' => '-1 (relative to site_url)',
                  'name' => '-1 (relative to site_url)',
                ),
                1 => 
                array (
                  'value' => 'full',
                  'text' => 'full (absolute, prepended with site_url)',
                  'name' => 'full (absolute, prepended with site_url)',
                ),
                2 => 
                array (
                  'value' => 'abs',
                  'text' => 'abs (absolute, prepended with base_url)',
                  'name' => 'abs (absolute, prepended with base_url)',
                ),
                3 => 
                array (
                  'value' => 'http',
                  'text' => 'http (absolute, forced to http scheme)',
                  'name' => 'http (absolute, forced to http scheme)',
                ),
                4 => 
                array (
                  'value' => 'https',
                  'text' => 'https (absolute, forced to https scheme)',
                  'name' => 'https (absolute, forced to https scheme)',
                ),
              ),
              'value' => -1,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Схема формирования url, передаётся в modX::makeUrl().',
              'area_trans' => '',
            ),
            'select' => 
            array (
              'name' => 'select',
              'desc' => 'pdotools_prop_select',
              'type' => 'textarea',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список полей для выборки, через запятую. Можно указывать JSON строку с массивом, например {"modResource":"id,pagetitle,content"}.',
              'area_trans' => '',
            ),
            'showDeleted' => 
            array (
              'name' => 'showDeleted',
              'desc' => 'pdotools_prop_showDeleted',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать удалённые ресурсы.',
              'area_trans' => '',
            ),
            'showHidden' => 
            array (
              'name' => 'showHidden',
              'desc' => 'pdotools_prop_showHidden',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать ресурсы, скрытые в меню.',
              'area_trans' => '',
            ),
            'showLog' => 
            array (
              'name' => 'showLog',
              'desc' => 'pdotools_prop_showLog',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать дополнительную информацию о работе сниппета. Только для авторизованных в контекте "mgr".',
              'area_trans' => '',
            ),
            'showUnpublished' => 
            array (
              'name' => 'showUnpublished',
              'desc' => 'pdotools_prop_showUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать неопубликованные ресурсы.',
              'area_trans' => '',
            ),
            'sortby' => 
            array (
              'name' => 'sortby',
              'desc' => 'pdotools_prop_sortby',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'publishedon',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Любое поле ресурса для сортировки, включая ТВ параметр, если он указан в параметре "includeTVs". Можно указывать JSON строку с массивом нескольких полей. Для случайно сортировки укажите "RAND()"',
              'area_trans' => '',
            ),
            'sortdir' => 
            array (
              'name' => 'sortdir',
              'desc' => 'pdotools_prop_sortdir',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'ASC',
                  'value' => 'ASC',
                  'name' => 'ASC',
                ),
                1 => 
                array (
                  'text' => 'DESC',
                  'value' => 'DESC',
                  'name' => 'DESC',
                ),
              ),
              'value' => 'DESC',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Направление сортировки: по убыванию или возрастанию.',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'pdotools_prop_toPlaceholder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Если не пусто, сниппет сохранит все данные в плейсхолдер с этим именем, вместо вывода не экран.',
              'area_trans' => '',
            ),
            'toSeparatePlaceholders' => 
            array (
              'name' => 'toSeparatePlaceholders',
              'desc' => 'pdotools_prop_toSeparatePlaceholders',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Если вы укажете слово в этом параметре, то ВСЕ результаты будут выставлены в разные плейсхолдеры, начинающиеся с этого слова и заканчивающиеся порядковым номером строки, от нуля. Например, указав в параметре "myPl", вы получите плейсхолдеры [[+myPl0]], [[+myPl1]] и т.д.',
              'area_trans' => '',
            ),
            'totalVar' => 
            array (
              'name' => 'totalVar',
              'desc' => 'pdotools_prop_totalVar',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'total',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя плейсхолдера для сохранения общего количества результатов.',
              'area_trans' => '',
            ),
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'pdotools_prop_tpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя чанка для оформления ресурса. Если не указан, то содержимое полей ресурса будет распечатано на экран.',
              'area_trans' => '',
            ),
            'tplCondition' => 
            array (
              'name' => 'tplCondition',
              'desc' => 'pdotools_prop_tplCondition',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Поле ресурса, из которого будет получено значение для выбора чанка по условию в "conditionalTpls".',
              'area_trans' => '',
            ),
            'tplFirst' => 
            array (
              'name' => 'tplFirst',
              'desc' => 'pdotools_prop_tplFirst',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя чанка для первого ресурса в результатах.',
              'area_trans' => '',
            ),
            'tplLast' => 
            array (
              'name' => 'tplLast',
              'desc' => 'pdotools_prop_tplLast',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя чанка для последнего ресурса в результатах.',
              'area_trans' => '',
            ),
            'tplOdd' => 
            array (
              'name' => 'tplOdd',
              'desc' => 'pdotools_prop_tplOdd',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя чанка для каждого второго ресурса.',
              'area_trans' => '',
            ),
            'tplOperator' => 
            array (
              'name' => 'tplOperator',
              'desc' => 'pdotools_prop_tplOperator',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'is equal to',
                  'value' => '==',
                  'name' => 'is equal to',
                ),
                1 => 
                array (
                  'text' => 'is not equal to',
                  'value' => '!=',
                  'name' => 'is not equal to',
                ),
                2 => 
                array (
                  'text' => 'less than',
                  'value' => '<',
                  'name' => 'less than',
                ),
                3 => 
                array (
                  'text' => 'less than or equal to',
                  'value' => '<=',
                  'name' => 'less than or equal to',
                ),
                4 => 
                array (
                  'text' => 'greater than or equal to',
                  'value' => '>=',
                  'name' => 'greater than or equal to',
                ),
                5 => 
                array (
                  'text' => 'is empty',
                  'value' => 'empty',
                  'name' => 'is empty',
                ),
                6 => 
                array (
                  'text' => 'is not empty',
                  'value' => '!empty',
                  'name' => 'is not empty',
                ),
                7 => 
                array (
                  'text' => 'is null',
                  'value' => 'null',
                  'name' => 'is null',
                ),
                8 => 
                array (
                  'text' => 'is in array',
                  'value' => 'inarray',
                  'name' => 'is in array',
                ),
                9 => 
                array (
                  'text' => 'is between',
                  'value' => 'between',
                  'name' => 'is between',
                ),
              ),
              'value' => '==',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Необязательный оператор для проведения сравнения поля ресурса в "tplCondition" с массивом значений и чанков в "conditionalTpls".',
              'area_trans' => '',
            ),
            'tplWrapper' => 
            array (
              'name' => 'tplWrapper',
              'desc' => 'pdotools_prop_tplWrapper',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка, для заворачивания всех результатов. Понимает один плейсхолдер: [[+output]]. Не работает вместе с параметром "toSeparatePlaceholders".',
              'area_trans' => '',
            ),
            'tvFilters' => 
            array (
              'name' => 'tvFilters',
              'desc' => 'pdotools_prop_tvFilters',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список фильтрова по ТВ, с разделителями AND и OR. Разделитель, указанный в параметре "&tvFiltersOrDelimiter" представляет логическое условие OR и по нему условия группируются в первую очередь.  Внутри каждой группы вы можете задать список значений, разделив их "&tvFiltersAndDelimiter". Поиск значений может проводиться в каком-то конкретном ТВ, если он указан ("myTV==value"), или в любом ("value"). Пример вызова: "&tvFilters=`filter2==one,filter1==bar%||filter1==foo`". <br />Обратите внимание: фильтрация использует оператор LIKE и знак "%" является метасимволом. <br />И еще: Поиск идёт по значениям, которые физически находятся в БД, то есть, сюда не подставляются значения по умолчанию из настроек ТВ.',
              'area_trans' => '',
            ),
            'tvFiltersAndDelimiter' => 
            array (
              'name' => 'tvFiltersAndDelimiter',
              'desc' => 'pdotools_prop_tvFiltersAndDelimiter',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => ',',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Разделитель для условий AND в параметре "&tvFilters". По умолчанию: ",".',
              'area_trans' => '',
            ),
            'tvFiltersOrDelimiter' => 
            array (
              'name' => 'tvFiltersOrDelimiter',
              'desc' => 'pdotools_prop_tvFiltersOrDelimiter',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '||',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Разделитель для условий OR в параметре "&tvFilters". По умолчанию: "||".',
              'area_trans' => '',
            ),
            'tvPrefix' => 
            array (
              'name' => 'tvPrefix',
              'desc' => 'pdotools_prop_tvPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'tv.',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Префикс для ТВ параметров.',
              'area_trans' => '',
            ),
            'useWeblinkUrl' => 
            array (
              'name' => 'useWeblinkUrl',
              'desc' => 'pdotools_prop_useWeblinkUrl',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Генерировать ссылку с учетом класса ресурса.',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'pdotools_prop_where',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Массив дополнительных параметров выборки, закодированный в JSON.',
              'area_trans' => '',
            ),
            'wrapIfEmpty' => 
            array (
              'name' => 'wrapIfEmpty',
              'desc' => 'pdotools_prop_wrapIfEmpty',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включает вывод чанка-обертки (tplWrapper) даже если результатов нет.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdoresources.php',
          'content' => '/* @var array $scriptProperties */
if (isset($parents) && $parents === \'\') {
	$scriptProperties[\'parents\'] = $modx->resource->id;
}
if (!empty($returnIds)) {
	$scriptProperties[\'return\'] = \'ids\';
}

// Adding extra parameters into special place so we can put them in results
/** @var modSnippet $snippet */
$additionalPlaceholders = array();
if ($snippet = $modx->getObject(\'modSnippet\', array(\'name\' => \'pdoResources\'))) {
	$properties = unserialize($snippet->properties);
	foreach ($scriptProperties as $k => $v) {
		if (!isset($properties[$k])) {
			$additionalPlaceholders[$k] = $v;
		}
	}
}
$scriptProperties[\'additionalPlaceholders\'] = $additionalPlaceholders;

/* @var pdoFetch $pdoFetch */
$fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
if ($pdoClass = $modx->loadClass($fqn, \'\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
elseif ($pdoClass = $modx->loadClass($fqn, MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$pdoFetch = new $pdoClass($modx, $scriptProperties);
}
else {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoFetch from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoFetch->addTime(\'pdoTools loaded\');
$output = $pdoFetch->run();

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$log .= \'<pre class="pdoResourcesLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

// Return output
if (!empty($returnIds)) {
	$modx->setPlaceholder(\'pdoResources.log\', $log);
	if (!empty($toPlaceholder)) {
		$modx->setPlaceholder($toPlaceholder, $output);
	}
	else {
		return $output;
	}
}
elseif (!empty($toSeparatePlaceholders)) {
	$output[\'log\'] = $log;
	$modx->setPlaceholders($output, $toSeparatePlaceholders);
}
else {
	$output .= $log;

	if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
		$output = $pdoFetch->getChunk($tplWrapper, array(\'output\' => $output), $pdoFetch->config[\'fastMode\']);
	}

	if (!empty($toPlaceholder)) {
		$modx->setPlaceholder($toPlaceholder, $output);
	}
	else {
		return $output;
	}
}',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'pdoMenu' => 
      array (
        'fields' => 
        array (
          'id' => 8,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'pdoMenu',
          'description' => '',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '/** @var array $scriptProperties */

// Convert parameters from Wayfinder if exists
if (isset($startId)) {
	$scriptProperties[\'parents\'] = $startId;
}
if (!empty($includeDocs)) {
	$tmp = array_map(\'trim\', explode(\',\', $includeDocs));
	foreach ($tmp as $v) {
		if (!empty($scriptProperties[\'resources\'])) {
			$scriptProperties[\'resources\'] .= \',\'.$v;
		}
		else {
			$scriptProperties[\'resources\'] = $v;
		}
	}
}
if (!empty($excludeDocs)) {
	$tmp = array_map(\'trim\', explode(\',\', $excludeDocs));
	foreach ($tmp as $v) {
		if (!empty($scriptProperties[\'resources\'])) {
			$scriptProperties[\'resources\'] .= \',-\'.$v;
		}
		else {
			$scriptProperties[\'resources\'] = \'-\'.$v;
		}
	}
}

if (!empty($previewUnpublished) && $modx->hasPermission(\'view_unpublished\')) {
	$scriptProperties[\'showUnpublished\'] = 1;
}

$scriptProperties[\'depth\'] = empty($level) ? 100 : abs($level) - 1;
if (!empty($contexts)) {$scriptProperties[\'context\'] = $contexts;}
if (empty($scriptProperties[\'context\'])) {$scriptProperties[\'context\'] = $modx->resource->context_key;}

// Save original parents specified by user
$specified_parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));

if ($scriptProperties[\'parents\'] === \'\') {
	$scriptProperties[\'parents\'] = $modx->resource->id;
}
elseif ($scriptProperties[\'parents\'] === 0 || $scriptProperties[\'parents\'] === \'0\') {
	if ($scriptProperties[\'depth\'] !== \'\' && $scriptProperties[\'depth\'] !== 100) {
		$contexts = array_map(\'trim\', explode(\',\', $scriptProperties[\'context\']));
		$parents = array();
		foreach ($contexts as $ctx) {
			$parents = array_merge($parents, $modx->getChildIds(0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
		}
		$scriptProperties[\'parents\'] = !empty($parents) ? implode(\',\', $parents) : \'+0\';
		$scriptProperties[\'depth\'] = 0;
	}
	$scriptProperties[\'includeParents\'] = 1;
	$scriptProperties[\'displayStart\'] = 0;
}
else {
	$parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));
	$parents_in = $parents_out = array();
	foreach ($parents as $v) {
		if (!is_numeric($v)) {continue;}
		if ($v[0] == \'-\') {$parents_out[] = abs($v);}
		else {$parents_in[] = abs($v);}
	}

	if (empty($parents_in)) {
		$scriptProperties[\'includeParents\'] = 1;
		$scriptProperties[\'displayStart\'] = 0;
	}
}

if (!empty($displayStart)) {$scriptProperties[\'includeParents\'] = 1;}
if (!empty($ph)) {$toPlaceholder = $ph;}
if (!empty($sortOrder)) {$scriptProperties[\'sortdir\'] = $sortOrder;}
if (!empty($sortBy)) {$scriptProperties[\'sortby\'] = $sortBy;}
if (!empty($permissions)) {$scriptProperties[\'checkPermissions\'] = $permissions;}
if (!empty($cacheResults)) {$scriptProperties[\'cache\'] = $cacheResults;}
if (!empty($ignoreHidden)) {$scriptProperties[\'showHidden\'] = $ignoreHidden;}

$wfTemplates = array(
	\'outerTpl\' => \'tplOuter\',
	\'rowTpl\' => \'tpl\',
	\'parentRowTpl\' => \'tplParentRow\',
	\'parentRowHereTpl\' => \'tplParentRowHere\',
	\'hereTpl\' => \'tplHere\',
	\'innerTpl\' => \'tplInner\',
	\'innerRowTpl\' => \'tplInnerRow\',
	\'innerHereTpl\' => \'tplInnerHere\',
	\'activeParentRowTpl\' => \'tplParentRowActive\',
	\'categoryFoldersTpl\' => \'tplCategoryFolder\',
	\'startItemTpl\' => \'tplStart\'
);
foreach ($wfTemplates as $k => $v) {
	if (isset(${$k})) {
		$scriptProperties[$v] = ${$k};
	}
}

//---

/** @var pdoMenu $pdoMenu */
if (!$modx->loadClass(\'pdotools.pdoMenu\', MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoMenu from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoMenu = new pdoMenu($modx, $scriptProperties);
$pdoMenu->pdoTools->addTime(\'pdoTools loaded\');

$output = !empty($cache) || !$modx->user->id && !empty($cacheAnonymous)
	? $output = $pdoMenu->pdoTools->getCache($scriptProperties)
	: \'\';

if (empty($output)) {
	$rows = $pdoMenu->pdoTools->run();
	$tmp = $pdoMenu->pdoTools->buildTree($rows);
	$tree = array();
	foreach ($tmp as $k => $v) {
		if (empty($v[\'id\'])) {
			if (!in_array($k, $specified_parents) && !$pdoMenu->checkResource($k)) {
				continue;
			}
			else {
				$tree = array_merge($tree, $v[\'children\']);
			}
		}
		else {
			$tree[$k] = $v;
		}
	}

	$output = $pdoMenu->templateTree($tree);
	if (!empty($cache) || !$modx->user->id && !empty($cacheAnonymous)) {
		$pdoMenu->pdoTools->setCache($output, $scriptProperties);
	}
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$output .= \'<pre class="pdoMenuLog">\' . print_r($pdoMenu->pdoTools->getTime(), 1) . \'</pre>\';
}

if (!empty($toPlaceholder)) {
	$modx->setPlaceholder($toPlaceholder, $output);
}
else {
	return $output;
}',
          'locked' => false,
          'properties' => 
          array (
            'showLog' => 
            array (
              'name' => 'showLog',
              'desc' => 'pdotools_prop_showLog',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать дополнительную информацию о работе сниппета. Только для авторизованных в контекте "mgr".',
              'area_trans' => '',
            ),
            'fastMode' => 
            array (
              'name' => 'fastMode',
              'desc' => 'pdotools_prop_fastMode',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Быстрый режим обработки чанков. Все необработанные теги (условия, сниппеты и т.п.) будут вырезаны.',
              'area_trans' => '',
            ),
            'level' => 
            array (
              'name' => 'level',
              'desc' => 'pdotools_prop_level',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Уровень генерируемого меню.',
              'area_trans' => '',
            ),
            'parents' => 
            array (
              'name' => 'parents',
              'desc' => 'pdotools_prop_parents',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список родителей, через запятую, для поиска результатов. По умолчанию выборка ограничена текущим родителем. Если поставить 0 - выборка не ограничивается. Если id родителя начинается с дефиса, он и его потомки исключается из выборки.',
              'area_trans' => '',
            ),
            'displayStart' => 
            array (
              'name' => 'displayStart',
              'desc' => 'pdotools_prop_displayStart',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить показ начальных узлов меню. Полезно при указании более одного "parents".',
              'area_trans' => '',
            ),
            'resources' => 
            array (
              'name' => 'resources',
              'desc' => 'pdotools_prop_resources',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ресурсов, через запятую, для вывода в результатах. Если id ресурса начинается с дефиса, этот ресурс исключается из выборки.',
              'area_trans' => '',
            ),
            'templates' => 
            array (
              'name' => 'templates',
              'desc' => 'pdotools_prop_templates',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список шаблонов, через запятую, для фильтрации результатов. Если id шаблона начинается с дефиса, ресурсы с ним исключается из выборки.',
              'area_trans' => '',
            ),
            'context' => 
            array (
              'name' => 'context',
              'desc' => 'pdotools_prop_context',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение выборки по контексту ресурсов.',
              'area_trans' => '',
            ),
            'cache' => 
            array (
              'name' => 'cache',
              'desc' => 'pdotools_prop_cache',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Кэширование результатов работы сниппета.',
              'area_trans' => '',
            ),
            'cacheTime' => 
            array (
              'name' => 'cacheTime',
              'desc' => 'pdotools_prop_cacheTime',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 3600,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Время актуальности кэша, в секундах.',
              'area_trans' => '',
            ),
            'cacheAnonymous' => 
            array (
              'name' => 'cacheAnonymous',
              'desc' => 'pdotools_prop_cacheAnonymous',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить кэширование только для неавторизованных посетителей.',
              'area_trans' => '',
            ),
            'plPrefix' => 
            array (
              'name' => 'plPrefix',
              'desc' => 'pdotools_prop_plPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'wf.',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Префикс для выставляемых плейсхолдеров, по умолчанию "wf.".',
              'area_trans' => '',
            ),
            'showHidden' => 
            array (
              'name' => 'showHidden',
              'desc' => 'pdotools_prop_showHidden',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать ресурсы, скрытые в меню.',
              'area_trans' => '',
            ),
            'showUnpublished' => 
            array (
              'name' => 'showUnpublished',
              'desc' => 'pdotools_prop_showUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать неопубликованные ресурсы.',
              'area_trans' => '',
            ),
            'showDeleted' => 
            array (
              'name' => 'showDeleted',
              'desc' => 'pdotools_prop_showDeleted',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать удалённые ресурсы.',
              'area_trans' => '',
            ),
            'previewUnpublished' => 
            array (
              'name' => 'previewUnpublished',
              'desc' => 'pdotools_prop_previewUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить показ неопубликованных документов, если у пользователя есть на это разрешение.',
              'area_trans' => '',
            ),
            'hideSubMenus' => 
            array (
              'name' => 'hideSubMenus',
              'desc' => 'pdotools_prop_hideSubMenus',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Спрятать неактивные ветки меню.',
              'area_trans' => '',
            ),
            'useWeblinkUrl' => 
            array (
              'name' => 'useWeblinkUrl',
              'desc' => 'pdotools_prop_useWeblinkUrl',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Генерировать ссылку с учетом класса ресурса.',
              'area_trans' => '',
            ),
            'sortdir' => 
            array (
              'name' => 'sortdir',
              'desc' => 'pdotools_prop_sortdir',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'ASC',
                  'value' => 'ASC',
                  'name' => 'ASC',
                ),
                1 => 
                array (
                  'text' => 'DESC',
                  'value' => 'DESC',
                  'name' => 'DESC',
                ),
              ),
              'value' => 'ASC',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Направление сортировки: по убыванию или возрастанию.',
              'area_trans' => '',
            ),
            'sortby' => 
            array (
              'name' => 'sortby',
              'desc' => 'pdotools_prop_sortby',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'menuindex',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Любое поле ресурса для сортировки, включая ТВ параметр, если он указан в параметре "includeTVs". Можно указывать JSON строку с массивом нескольких полей. Для случайно сортировки укажите "RAND()"',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'pdotools_prop_limit',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение количества результатов выборки. Можно использовать "0".',
              'area_trans' => '',
            ),
            'offset' => 
            array (
              'name' => 'offset',
              'desc' => 'pdotools_prop_offset',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Пропуск результатов от начала.',
              'area_trans' => '',
            ),
            'rowIdPrefix' => 
            array (
              'name' => 'rowIdPrefix',
              'desc' => 'pdotools_prop_rowIdPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Префикс id="" для выставления идентификатора в чанк.',
              'area_trans' => '',
            ),
            'firstClass' => 
            array (
              'name' => 'firstClass',
              'desc' => 'pdotools_prop_firstClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'first',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс для первого пункта меню.',
              'area_trans' => '',
            ),
            'lastClass' => 
            array (
              'name' => 'lastClass',
              'desc' => 'pdotools_prop_lastClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'last',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс последнего пункта меню.',
              'area_trans' => '',
            ),
            'hereClass' => 
            array (
              'name' => 'hereClass',
              'desc' => 'pdotools_prop_hereClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'active',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс для активного пунтка меню.',
              'area_trans' => '',
            ),
            'parentClass' => 
            array (
              'name' => 'parentClass',
              'desc' => 'pdotools_prop_parentClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс категории меню.',
              'area_trans' => '',
            ),
            'rowClass' => 
            array (
              'name' => 'rowClass',
              'desc' => 'pdotools_prop_rowClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс одной строки меню.',
              'area_trans' => '',
            ),
            'outerClass' => 
            array (
              'name' => 'outerClass',
              'desc' => 'pdotools_prop_outerClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс обертки меню.',
              'area_trans' => '',
            ),
            'innerClass' => 
            array (
              'name' => 'innerClass',
              'desc' => 'pdotools_prop_innerClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс внутренних ссылок меню.',
              'area_trans' => '',
            ),
            'levelClass' => 
            array (
              'name' => 'levelClass',
              'desc' => 'pdotools_prop_levelClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс уровня меню. Например, если укажите "level", то будет "level1", "level2" и т.д.',
              'area_trans' => '',
            ),
            'selfClass' => 
            array (
              'name' => 'selfClass',
              'desc' => 'pdotools_prop_selfClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс текущего документа в меню.',
              'area_trans' => '',
            ),
            'webLinkClass' => 
            array (
              'name' => 'webLinkClass',
              'desc' => 'pdotools_prop_webLinkClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс документа-ссылки.',
              'area_trans' => '',
            ),
            'tplOuter' => 
            array (
              'name' => 'tplOuter',
              'desc' => 'pdotools_prop_tplOuter',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <ul[[+classes]]>[[+wrapper]]</ul>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк обертка всего блока меню.',
              'area_trans' => '',
            ),
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'pdotools_prop_tpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li[[+classes]]><a href="[[+link]]" [[+attributes]]>[[+menutitle]]</a>[[+wrapper]]</li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя чанка для оформления ресурса. Если не указан, то содержимое полей ресурса будет распечатано на экран.',
              'area_trans' => '',
            ),
            'tplParentRow' => 
            array (
              'name' => 'tplParentRow',
              'desc' => 'pdotools_prop_tplParentRow',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления контейнера с потомками.',
              'area_trans' => '',
            ),
            'tplParentRowHere' => 
            array (
              'name' => 'tplParentRowHere',
              'desc' => 'pdotools_prop_tplParentRowHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления текущего контейнера с потомками.',
              'area_trans' => '',
            ),
            'tplHere' => 
            array (
              'name' => 'tplHere',
              'desc' => 'pdotools_prop_tplHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк текущего документа',
              'area_trans' => '',
            ),
            'tplInner' => 
            array (
              'name' => 'tplInner',
              'desc' => 'pdotools_prop_tplInner',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк обертки внутренних пунктов меню. Если пуст - будет использовать "tplInner".',
              'area_trans' => '',
            ),
            'tplInnerRow' => 
            array (
              'name' => 'tplInnerRow',
              'desc' => 'pdotools_prop_tplInnerRow',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк обертка активного пункта меню.',
              'area_trans' => '',
            ),
            'tplInnerHere' => 
            array (
              'name' => 'tplInnerHere',
              'desc' => 'pdotools_prop_tplInnerHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк обертка активного пунка меню.',
              'area_trans' => '',
            ),
            'tplParentRowActive' => 
            array (
              'name' => 'tplParentRowActive',
              'desc' => 'pdotools_prop_tplParentRowActive',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления активного контейнера с потомками.',
              'area_trans' => '',
            ),
            'tplCategoryFolder' => 
            array (
              'name' => 'tplCategoryFolder',
              'desc' => 'pdotools_prop_tplCategoryFolder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Специальный чанк оформления категории. Категория - это документ с потомками и или нулевым шаблоном, или с атрибутом "rel=\\"category\\"".',
              'area_trans' => '',
            ),
            'tplStart' => 
            array (
              'name' => 'tplStart',
              'desc' => 'pdotools_prop_tplStart',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <h2[[+classes]]>[[+menutitle]]</h2>[[+wrapper]]',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления корневого пункта, при условии, что включен "displayStart".',
              'area_trans' => '',
            ),
            'checkPermissions' => 
            array (
              'name' => 'checkPermissions',
              'desc' => 'pdotools_prop_checkPermissions',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Укажите, каеи разрешения нужно проверять у пользователя при выводе документов.',
              'area_trans' => '',
            ),
            'hereId' => 
            array (
              'name' => 'hereId',
              'desc' => 'pdotools_prop_hereId',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Id документа, текущего для генерируемого меню. Нужно указывать только если скрипт сам его неверно определяет, например при выводе меню из чанка другого сниппета.',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'pdotools_prop_where',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Массив дополнительных параметров выборки, закодированный в JSON.',
              'area_trans' => '',
            ),
            'select' => 
            array (
              'name' => 'select',
              'desc' => 'pdotools_prop_select',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список полей для выборки, через запятую. Можно указывать JSON строку с массивом, например {"modResource":"id,pagetitle,content"}.',
              'area_trans' => '',
            ),
            'scheme' => 
            array (
              'name' => 'scheme',
              'desc' => 'pdotools_prop_scheme',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => -1,
                  'text' => '-1 (relative to site_url)',
                  'name' => '-1 (relative to site_url)',
                ),
                1 => 
                array (
                  'value' => 'full',
                  'text' => 'full (absolute, prepended with site_url)',
                  'name' => 'full (absolute, prepended with site_url)',
                ),
                2 => 
                array (
                  'value' => 'abs',
                  'text' => 'abs (absolute, prepended with base_url)',
                  'name' => 'abs (absolute, prepended with base_url)',
                ),
                3 => 
                array (
                  'value' => 'http',
                  'text' => 'http (absolute, forced to http scheme)',
                  'name' => 'http (absolute, forced to http scheme)',
                ),
                4 => 
                array (
                  'value' => 'https',
                  'text' => 'https (absolute, forced to https scheme)',
                  'name' => 'https (absolute, forced to https scheme)',
                ),
              ),
              'value' => -1,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Схема формирования url, передаётся в modX::makeUrl().',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'pdotools_prop_toPlaceholder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Если не пусто, сниппет сохранит все данные в плейсхолдер с этим именем, вместо вывода не экран.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdomenu.php',
          'content' => '/** @var array $scriptProperties */

// Convert parameters from Wayfinder if exists
if (isset($startId)) {
	$scriptProperties[\'parents\'] = $startId;
}
if (!empty($includeDocs)) {
	$tmp = array_map(\'trim\', explode(\',\', $includeDocs));
	foreach ($tmp as $v) {
		if (!empty($scriptProperties[\'resources\'])) {
			$scriptProperties[\'resources\'] .= \',\'.$v;
		}
		else {
			$scriptProperties[\'resources\'] = $v;
		}
	}
}
if (!empty($excludeDocs)) {
	$tmp = array_map(\'trim\', explode(\',\', $excludeDocs));
	foreach ($tmp as $v) {
		if (!empty($scriptProperties[\'resources\'])) {
			$scriptProperties[\'resources\'] .= \',-\'.$v;
		}
		else {
			$scriptProperties[\'resources\'] = \'-\'.$v;
		}
	}
}

if (!empty($previewUnpublished) && $modx->hasPermission(\'view_unpublished\')) {
	$scriptProperties[\'showUnpublished\'] = 1;
}

$scriptProperties[\'depth\'] = empty($level) ? 100 : abs($level) - 1;
if (!empty($contexts)) {$scriptProperties[\'context\'] = $contexts;}
if (empty($scriptProperties[\'context\'])) {$scriptProperties[\'context\'] = $modx->resource->context_key;}

// Save original parents specified by user
$specified_parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));

if ($scriptProperties[\'parents\'] === \'\') {
	$scriptProperties[\'parents\'] = $modx->resource->id;
}
elseif ($scriptProperties[\'parents\'] === 0 || $scriptProperties[\'parents\'] === \'0\') {
	if ($scriptProperties[\'depth\'] !== \'\' && $scriptProperties[\'depth\'] !== 100) {
		$contexts = array_map(\'trim\', explode(\',\', $scriptProperties[\'context\']));
		$parents = array();
		foreach ($contexts as $ctx) {
			$parents = array_merge($parents, $modx->getChildIds(0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
		}
		$scriptProperties[\'parents\'] = !empty($parents) ? implode(\',\', $parents) : \'+0\';
		$scriptProperties[\'depth\'] = 0;
	}
	$scriptProperties[\'includeParents\'] = 1;
	$scriptProperties[\'displayStart\'] = 0;
}
else {
	$parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));
	$parents_in = $parents_out = array();
	foreach ($parents as $v) {
		if (!is_numeric($v)) {continue;}
		if ($v[0] == \'-\') {$parents_out[] = abs($v);}
		else {$parents_in[] = abs($v);}
	}

	if (empty($parents_in)) {
		$scriptProperties[\'includeParents\'] = 1;
		$scriptProperties[\'displayStart\'] = 0;
	}
}

if (!empty($displayStart)) {$scriptProperties[\'includeParents\'] = 1;}
if (!empty($ph)) {$toPlaceholder = $ph;}
if (!empty($sortOrder)) {$scriptProperties[\'sortdir\'] = $sortOrder;}
if (!empty($sortBy)) {$scriptProperties[\'sortby\'] = $sortBy;}
if (!empty($permissions)) {$scriptProperties[\'checkPermissions\'] = $permissions;}
if (!empty($cacheResults)) {$scriptProperties[\'cache\'] = $cacheResults;}
if (!empty($ignoreHidden)) {$scriptProperties[\'showHidden\'] = $ignoreHidden;}

$wfTemplates = array(
	\'outerTpl\' => \'tplOuter\',
	\'rowTpl\' => \'tpl\',
	\'parentRowTpl\' => \'tplParentRow\',
	\'parentRowHereTpl\' => \'tplParentRowHere\',
	\'hereTpl\' => \'tplHere\',
	\'innerTpl\' => \'tplInner\',
	\'innerRowTpl\' => \'tplInnerRow\',
	\'innerHereTpl\' => \'tplInnerHere\',
	\'activeParentRowTpl\' => \'tplParentRowActive\',
	\'categoryFoldersTpl\' => \'tplCategoryFolder\',
	\'startItemTpl\' => \'tplStart\'
);
foreach ($wfTemplates as $k => $v) {
	if (isset(${$k})) {
		$scriptProperties[$v] = ${$k};
	}
}

//---

/** @var pdoMenu $pdoMenu */
if (!$modx->loadClass(\'pdotools.pdoMenu\', MODX_CORE_PATH . \'components/pdotools/model/\', false, true)) {
	$modx->log(modX::LOG_LEVEL_ERROR, \'Could not load pdoMenu from "MODX_CORE_PATH/components/pdotools/model/".\');
	return false;
}
$pdoMenu = new pdoMenu($modx, $scriptProperties);
$pdoMenu->pdoTools->addTime(\'pdoTools loaded\');

$output = !empty($cache) || !$modx->user->id && !empty($cacheAnonymous)
	? $output = $pdoMenu->pdoTools->getCache($scriptProperties)
	: \'\';

if (empty($output)) {
	$rows = $pdoMenu->pdoTools->run();
	$tmp = $pdoMenu->pdoTools->buildTree($rows);
	$tree = array();
	foreach ($tmp as $k => $v) {
		if (empty($v[\'id\'])) {
			if (!in_array($k, $specified_parents) && !$pdoMenu->checkResource($k)) {
				continue;
			}
			else {
				$tree = array_merge($tree, $v[\'children\']);
			}
		}
		else {
			$tree[$k] = $v;
		}
	}

	$output = $pdoMenu->templateTree($tree);
	if (!empty($cache) || !$modx->user->id && !empty($cacheAnonymous)) {
		$pdoMenu->pdoTools->setCache($output, $scriptProperties);
	}
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$output .= \'<pre class="pdoMenuLog">\' . print_r($pdoMenu->pdoTools->getTime(), 1) . \'</pre>\';
}

if (!empty($toPlaceholder)) {
	$modx->setPlaceholder($toPlaceholder, $output);
}
else {
	return $output;
}',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'getImageList' => 
      array (
        'fields' => 
        array (
          'id' => 9,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'getImageList',
          'description' => '',
          'editor_type' => 0,
          'category' => 3,
          'cache_type' => 0,
          'snippet' => '/**
 * getImageList
 *
 * Copyright 2009-2011 by Bruno Perner <b.perner@gmx.de>
 *
 * getImageList is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * getImageList is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * getImageList; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package migx
 */
/**
 * getImageList
 *
 * display Items from outputvalue of TV with custom-TV-input-type MIGX or from other JSON-string for MODx Revolution 
 *
 * @version 1.4
 * @author Bruno Perner <b.perner@gmx.de>
 * @copyright Copyright &copy; 2009-2011
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License
 * version 2 or (at your option) any later version.
 * @package migx
 */

/*example: <ul>[[!getImageList? &tvname=`myTV`&tpl=`@CODE:<li>[[+idx]]<img src="[[+imageURL]]"/><p>[[+imageAlt]]</p></li>`]]</ul>*/
/* get default properties */


$tvname = $modx->getOption(\'tvname\', $scriptProperties, \'\');
$tpl = $modx->getOption(\'tpl\', $scriptProperties, \'\');
$wrapperTpl = $modx->getOption(\'wrapperTpl\', $scriptProperties, \'\');
$limit = $modx->getOption(\'limit\', $scriptProperties, \'0\');
$offset = $modx->getOption(\'offset\', $scriptProperties, 0);
$totalVar = $modx->getOption(\'totalVar\', $scriptProperties, \'total\');
$randomize = $modx->getOption(\'randomize\', $scriptProperties, false);
$preselectLimit = $modx->getOption(\'preselectLimit\', $scriptProperties, 0); // when random preselect important images
$where = $modx->getOption(\'where\', $scriptProperties, \'\');
$where = !empty($where) ? $modx->fromJSON($where) : array();
$sort = $modx->getOption(\'sort\', $scriptProperties, \'\');
$sort = !empty($sort) ? $modx->fromJSON($sort) : array();
$toSeparatePlaceholders = $modx->getOption(\'toSeparatePlaceholders\', $scriptProperties, false);
$toPlaceholder = $modx->getOption(\'toPlaceholder\', $scriptProperties, false);
$outputSeparator = $modx->getOption(\'outputSeparator\', $scriptProperties, \'\');
$splitSeparator = $modx->getOption(\'splitSeparator\', $scriptProperties, \'\');
$placeholdersKeyField = $modx->getOption(\'placeholdersKeyField\', $scriptProperties, \'MIGX_id\');
$toJsonPlaceholder = $modx->getOption(\'toJsonPlaceholder\', $scriptProperties, false);
$jsonVarKey = $modx->getOption(\'jsonVarKey\', $scriptProperties, \'migx_outputvalue\');
$outputvalue = $modx->getOption(\'value\', $scriptProperties, \'\');
$outputvalue = isset($_REQUEST[$jsonVarKey]) ? $_REQUEST[$jsonVarKey] : $outputvalue;
$docidVarKey = $modx->getOption(\'docidVarKey\', $scriptProperties, \'migx_docid\');
$docid = $modx->getOption(\'docid\', $scriptProperties, (isset($modx->resource) ? $modx->resource->get(\'id\') : 1));
$docid = isset($_REQUEST[$docidVarKey]) ? $_REQUEST[$docidVarKey] : $docid;
$processTVs = $modx->getOption(\'processTVs\', $scriptProperties, \'1\');
$reverse = $modx->getOption(\'reverse\', $scriptProperties, \'0\');
$sumFields = $modx->getOption(\'sumFields\', $scriptProperties, \'\');
$sumPrefix = $modx->getOption(\'sumPrefix\', $scriptProperties, \'summary_\');
$addfields = $modx->getOption(\'addfields\', $scriptProperties, \'\');
$addfields = !empty($addfields) ? explode(\',\', $addfields) : null;
//split json into parts
$splits = $modx->fromJson($modx->getOption(\'splits\', $scriptProperties, 0));
$splitTpl = $modx->getOption(\'splitTpl\', $scriptProperties, \'\');
$splitSeparator = $modx->getOption(\'splitSeparator\', $scriptProperties, \'\');

$modx->setPlaceholder(\'docid\', $docid);

$base_path = $modx->getOption(\'base_path\', null, MODX_BASE_PATH);
$base_url = $modx->getOption(\'base_url\', null, MODX_BASE_URL);

$migx = $modx->getService(\'migx\', \'Migx\', $modx->getOption(\'migx.core_path\', null, $modx->getOption(\'core_path\') . \'components/migx/\') . \'model/migx/\', $scriptProperties);
if (!($migx instanceof Migx))
    return \'\';
$migx->working_context = isset($modx->resource) ? $modx->resource->get(\'context_key\') : \'web\';

if (!empty($tvname)) {
    if ($tv = $modx->getObject(\'modTemplateVar\', array(\'name\' => $tvname))) {

        /*
        *   get inputProperties
        */


        $properties = $tv->get(\'input_properties\');
        $properties = isset($properties[\'formtabs\']) ? $properties : $tv->getProperties();

        $migx->config[\'configs\'] = $modx->getOption(\'configs\', $properties, \'\');
        if (!empty($migx->config[\'configs\'])) {
            $migx->loadConfigs();
            // get tabs from file or migx-config-table
            $formtabs = $migx->getTabs();
        }
        if (empty($formtabs) && isset($properties[\'formtabs\'])) {
            //try to get formtabs and its fields from properties
            $formtabs = $modx->fromJSON($properties[\'formtabs\']);
        }

        if (!empty($properties[\'basePath\'])) {
            if ($properties[\'autoResourceFolders\'] == \'true\') {
                $scriptProperties[\'base_path\'] = $base_path . $properties[\'basePath\'] . $docid . \'/\';
                $scriptProperties[\'base_url\'] = $base_url . $properties[\'basePath\'] . $docid . \'/\';
            } else {
                $scriptProperties[\'base_path\'] = $base_path . $properties[\'base_path\'];
                $scriptProperties[\'base_url\'] = $base_url . $properties[\'basePath\'];
            }
        }
        if ($jsonVarKey == \'migx_outputvalue\' && !empty($properties[\'jsonvarkey\'])) {
            $jsonVarKey = $properties[\'jsonvarkey\'];
            $outputvalue = isset($_REQUEST[$jsonVarKey]) ? $_REQUEST[$jsonVarKey] : $outputvalue;
        }
        $outputvalue = empty($outputvalue) ? $tv->renderOutput($docid) : $outputvalue;
        /*
        *   get inputTvs 
        */
        $inputTvs = array();
        if (is_array($formtabs)) {

            //multiple different Forms
            // Note: use same field-names and inputTVs in all forms
            $inputTvs = $migx->extractInputTvs($formtabs);
        }
        $migx->source = $tv->getSource($migx->working_context, false);
    }


}

if (empty($outputvalue)) {
    return \'\';
}

//echo $outputvalue.\'<br/><br/>\';


$items = $modx->fromJSON($outputvalue);

// where filter
if (is_array($where) && count($where) > 0) {
    $items = $migx->filterItems($where, $items);
}
$modx->setPlaceholder($totalVar, count($items));


if (!empty($reverse)) {
    $items = array_reverse($items);
}


// sort items
if (is_array($sort) && count($sort) > 0) {
    $items = $migx->sortDbResult($items, $sort);
}

$summaries = array();
$output = \'\';
$count = count($items);

if ($count > 0) {
    $items = $offset > 0 ? array_slice($items, $offset) : $items;

    $limit = $limit == 0 || $limit > $count ? $count : $limit;
    $preselectLimit = $preselectLimit > $count ? $count : $preselectLimit;
    //preselect important items
    $preitems = array();
    if ($randomize && $preselectLimit > 0) {
        for ($i = 0; $i < $preselectLimit; $i++) {
            $preitems[] = $items[$i];
            unset($items[$i]);
        }
        $limit = $limit - count($preitems);
    }

    //shuffle items
    if ($randomize) {
        shuffle($items);
    }

    //limit items
    $tempitems = array();
    for ($i = 0; $i < $limit; $i++) {
        $tempitems[] = $items[$i];
    }
    $items = $tempitems;

    //add preselected items and schuffle again
    if ($randomize && $preselectLimit > 0) {
        $items = array_merge($preitems, $items);
        shuffle($items);
    }

    $properties = array();
    foreach ($scriptProperties as $property => $value) {
        $properties[\'property.\' . $property] = $value;
    }

    $idx = 0;
    $output = array();
    $template = array();
    $count = count($items);

    foreach ($items as $key => $item) {
        $formname = isset($item[\'MIGX_formname\']) ? $item[\'MIGX_formname\'] . \'_\' : \'\';
        $fields = array();
        foreach ($item as $field => $value) {
            if (is_array($value)) {
                if (is_array($value[0])) {
                    //nested array - convert to json
                    $value = $modx->toJson($value);
                } else {
                    $value = implode(\'||\', $value); //handle arrays (checkboxes, multiselects)
                }
            }


            $inputTVkey = $formname . $field;
            if ($processTVs && isset($inputTvs[$inputTVkey])) {
                if (isset($inputTvs[$inputTVkey][\'inputTV\']) && $tv = $modx->getObject(\'modTemplateVar\', array(\'name\' => $inputTvs[$inputTVkey][\'inputTV\']))) {

                } else {
                    $tv = $modx->newObject(\'modTemplateVar\');
                    $tv->set(\'type\', $inputTvs[$inputTVkey][\'inputTVtype\']);
                }
                $inputTV = $inputTvs[$inputTVkey];

                $mTypes = $modx->getOption(\'manipulatable_url_tv_output_types\', null, \'image,file\');
                //don\'t manipulate any urls here
                $modx->setOption(\'manipulatable_url_tv_output_types\', \'\');
                $tv->set(\'default_text\', $value);
                $value = $tv->renderOutput($docid);
                //set option back
                $modx->setOption(\'manipulatable_url_tv_output_types\', $mTypes);
                //now manipulate urls
                if ($mediasource = $migx->getFieldSource($inputTV, $tv)) {
                    $mTypes = explode(\',\', $mTypes);
                    if (!empty($value) && in_array($tv->get(\'type\'), $mTypes)) {
                        //$value = $mediasource->prepareOutputUrl($value);
                        $value = str_replace(\'/./\', \'/\', $mediasource->prepareOutputUrl($value));
                    }
                }

            }
            $fields[$field] = $value;

        }

        if (!empty($addfields)) {
            foreach ($addfields as $addfield) {
                $addfield = explode(\':\', $addfield);
                $addname = $addfield[0];
                $adddefault = isset($addfield[1]) ? $addfield[1] : \'\';
                $fields[$addname] = $adddefault;
            }
        }

        if (!empty($sumFields)) {
            $sumFields = is_array($sumFields) ? $sumFields : explode(\',\', $sumFields);
            foreach ($sumFields as $sumField) {
                if (isset($fields[$sumField])) {
                    $summaries[$sumPrefix . $sumField] = $summaries[$sumPrefix . $sumField] + $fields[$sumField];
                    $fields[$sumPrefix . $sumField] = $summaries[$sumPrefix . $sumField];
                }
            }
        }


        if ($toJsonPlaceholder) {
            $output[] = $fields;
        } else {
            $fields[\'_alt\'] = $idx % 2;
            $idx++;
            $fields[\'_first\'] = $idx == 1 ? true : \'\';
            $fields[\'_last\'] = $idx == $limit ? true : \'\';
            $fields[\'idx\'] = $idx;
            $rowtpl = \'\';
            //get changing tpls from field
            if (substr($tpl, 0, 7) == "@FIELD:") {
                $tplField = substr($tpl, 7);
                $rowtpl = $fields[$tplField];
            }

            if ($fields[\'_first\'] && !empty($tplFirst)) {
                $rowtpl = $tplFirst;
            }
            if ($fields[\'_last\'] && empty($rowtpl) && !empty($tplLast)) {
                $rowtpl = $tplLast;
            }
            $tplidx = \'tpl_\' . $idx;
            if (empty($rowtpl) && !empty($$tplidx)) {
                $rowtpl = $$tplidx;
            }
            if ($idx > 1 && empty($rowtpl)) {
                $divisors = $migx->getDivisors($idx);
                if (!empty($divisors)) {
                    foreach ($divisors as $divisor) {
                        $tplnth = \'tpl_n\' . $divisor;
                        if (!empty($$tplnth)) {
                            $rowtpl = $$tplnth;
                            if (!empty($rowtpl)) {
                                break;
                            }
                        }
                    }
                }
            }

            if ($count == 1 && isset($tpl_oneresult)) {
                $rowtpl = $tpl_oneresult;
            }

            $fields = array_merge($fields, $properties);

            if (!empty($rowtpl)) {
                $template = $migx->getTemplate($tpl, $template);
                $fields[\'_tpl\'] = $template[$tpl];
            } else {
                $rowtpl = $tpl;

            }
            $template = $migx->getTemplate($rowtpl, $template);


            if ($template[$rowtpl]) {
                $chunk = $modx->newObject(\'modChunk\');
                $chunk->setCacheable(false);
                $chunk->setContent($template[$rowtpl]);


                if (!empty($placeholdersKeyField) && isset($fields[$placeholdersKeyField])) {
                    $output[$fields[$placeholdersKeyField]] = $chunk->process($fields);
                } else {
                    $output[] = $chunk->process($fields);
                }
            } else {
                if (!empty($placeholdersKeyField)) {
                    $output[$fields[$placeholdersKeyField]] = \'<pre>\' . print_r($fields, 1) . \'</pre>\';
                } else {
                    $output[] = \'<pre>\' . print_r($fields, 1) . \'</pre>\';
                }
            }
        }


    }
}

if (count($summaries) > 0) {
    $modx->toPlaceholders($summaries);
}


if ($toJsonPlaceholder) {
    $modx->setPlaceholder($toJsonPlaceholder, $modx->toJson($output));
    return \'\';
}

if (!empty($toSeparatePlaceholders)) {
    $modx->toPlaceholders($output, $toSeparatePlaceholders);
    return \'\';
}
/*
if (!empty($outerTpl))
$o = parseTpl($outerTpl, array(\'output\'=>implode($outputSeparator, $output)));
else 
*/

if ($count > 0 && $splits > 0) {
    $size = ceil($count / $splits);
    $chunks = array_chunk($output, $size);
    $output = array();
    foreach ($chunks as $chunk) {
        $o = implode($outputSeparator, $chunk);
        $output[] = $modx->getChunk($splitTpl, array(\'output\' => $o));
    }
    $outputSeparator = $splitSeparator;
}

if (is_array($output)) {
    $o = implode($outputSeparator, $output);
} else {
    $o = $output;
}

if (!empty($o) && !empty($wrapperTpl)) {
    $template = $migx->getTemplate($wrapperTpl);
    if ($template[$wrapperTpl]) {
        $chunk = $modx->newObject(\'modChunk\');
        $chunk->setCacheable(false);
        $chunk->setContent($template[$wrapperTpl]);
        $properties[\'output\'] = $o;
        $o = $chunk->process($properties);        
    }
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $o);
    return \'\';
}

return $o;',
          'locked' => false,
          'properties' => 
          array (
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * getImageList
 *
 * Copyright 2009-2011 by Bruno Perner <b.perner@gmx.de>
 *
 * getImageList is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * getImageList is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * getImageList; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package migx
 */
/**
 * getImageList
 *
 * display Items from outputvalue of TV with custom-TV-input-type MIGX or from other JSON-string for MODx Revolution 
 *
 * @version 1.4
 * @author Bruno Perner <b.perner@gmx.de>
 * @copyright Copyright &copy; 2009-2011
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License
 * version 2 or (at your option) any later version.
 * @package migx
 */

/*example: <ul>[[!getImageList? &tvname=`myTV`&tpl=`@CODE:<li>[[+idx]]<img src="[[+imageURL]]"/><p>[[+imageAlt]]</p></li>`]]</ul>*/
/* get default properties */


$tvname = $modx->getOption(\'tvname\', $scriptProperties, \'\');
$tpl = $modx->getOption(\'tpl\', $scriptProperties, \'\');
$wrapperTpl = $modx->getOption(\'wrapperTpl\', $scriptProperties, \'\');
$limit = $modx->getOption(\'limit\', $scriptProperties, \'0\');
$offset = $modx->getOption(\'offset\', $scriptProperties, 0);
$totalVar = $modx->getOption(\'totalVar\', $scriptProperties, \'total\');
$randomize = $modx->getOption(\'randomize\', $scriptProperties, false);
$preselectLimit = $modx->getOption(\'preselectLimit\', $scriptProperties, 0); // when random preselect important images
$where = $modx->getOption(\'where\', $scriptProperties, \'\');
$where = !empty($where) ? $modx->fromJSON($where) : array();
$sort = $modx->getOption(\'sort\', $scriptProperties, \'\');
$sort = !empty($sort) ? $modx->fromJSON($sort) : array();
$toSeparatePlaceholders = $modx->getOption(\'toSeparatePlaceholders\', $scriptProperties, false);
$toPlaceholder = $modx->getOption(\'toPlaceholder\', $scriptProperties, false);
$outputSeparator = $modx->getOption(\'outputSeparator\', $scriptProperties, \'\');
$splitSeparator = $modx->getOption(\'splitSeparator\', $scriptProperties, \'\');
$placeholdersKeyField = $modx->getOption(\'placeholdersKeyField\', $scriptProperties, \'MIGX_id\');
$toJsonPlaceholder = $modx->getOption(\'toJsonPlaceholder\', $scriptProperties, false);
$jsonVarKey = $modx->getOption(\'jsonVarKey\', $scriptProperties, \'migx_outputvalue\');
$outputvalue = $modx->getOption(\'value\', $scriptProperties, \'\');
$outputvalue = isset($_REQUEST[$jsonVarKey]) ? $_REQUEST[$jsonVarKey] : $outputvalue;
$docidVarKey = $modx->getOption(\'docidVarKey\', $scriptProperties, \'migx_docid\');
$docid = $modx->getOption(\'docid\', $scriptProperties, (isset($modx->resource) ? $modx->resource->get(\'id\') : 1));
$docid = isset($_REQUEST[$docidVarKey]) ? $_REQUEST[$docidVarKey] : $docid;
$processTVs = $modx->getOption(\'processTVs\', $scriptProperties, \'1\');
$reverse = $modx->getOption(\'reverse\', $scriptProperties, \'0\');
$sumFields = $modx->getOption(\'sumFields\', $scriptProperties, \'\');
$sumPrefix = $modx->getOption(\'sumPrefix\', $scriptProperties, \'summary_\');
$addfields = $modx->getOption(\'addfields\', $scriptProperties, \'\');
$addfields = !empty($addfields) ? explode(\',\', $addfields) : null;
//split json into parts
$splits = $modx->fromJson($modx->getOption(\'splits\', $scriptProperties, 0));
$splitTpl = $modx->getOption(\'splitTpl\', $scriptProperties, \'\');
$splitSeparator = $modx->getOption(\'splitSeparator\', $scriptProperties, \'\');

$modx->setPlaceholder(\'docid\', $docid);

$base_path = $modx->getOption(\'base_path\', null, MODX_BASE_PATH);
$base_url = $modx->getOption(\'base_url\', null, MODX_BASE_URL);

$migx = $modx->getService(\'migx\', \'Migx\', $modx->getOption(\'migx.core_path\', null, $modx->getOption(\'core_path\') . \'components/migx/\') . \'model/migx/\', $scriptProperties);
if (!($migx instanceof Migx))
    return \'\';
$migx->working_context = isset($modx->resource) ? $modx->resource->get(\'context_key\') : \'web\';

if (!empty($tvname)) {
    if ($tv = $modx->getObject(\'modTemplateVar\', array(\'name\' => $tvname))) {

        /*
        *   get inputProperties
        */


        $properties = $tv->get(\'input_properties\');
        $properties = isset($properties[\'formtabs\']) ? $properties : $tv->getProperties();

        $migx->config[\'configs\'] = $modx->getOption(\'configs\', $properties, \'\');
        if (!empty($migx->config[\'configs\'])) {
            $migx->loadConfigs();
            // get tabs from file or migx-config-table
            $formtabs = $migx->getTabs();
        }
        if (empty($formtabs) && isset($properties[\'formtabs\'])) {
            //try to get formtabs and its fields from properties
            $formtabs = $modx->fromJSON($properties[\'formtabs\']);
        }

        if (!empty($properties[\'basePath\'])) {
            if ($properties[\'autoResourceFolders\'] == \'true\') {
                $scriptProperties[\'base_path\'] = $base_path . $properties[\'basePath\'] . $docid . \'/\';
                $scriptProperties[\'base_url\'] = $base_url . $properties[\'basePath\'] . $docid . \'/\';
            } else {
                $scriptProperties[\'base_path\'] = $base_path . $properties[\'base_path\'];
                $scriptProperties[\'base_url\'] = $base_url . $properties[\'basePath\'];
            }
        }
        if ($jsonVarKey == \'migx_outputvalue\' && !empty($properties[\'jsonvarkey\'])) {
            $jsonVarKey = $properties[\'jsonvarkey\'];
            $outputvalue = isset($_REQUEST[$jsonVarKey]) ? $_REQUEST[$jsonVarKey] : $outputvalue;
        }
        $outputvalue = empty($outputvalue) ? $tv->renderOutput($docid) : $outputvalue;
        /*
        *   get inputTvs 
        */
        $inputTvs = array();
        if (is_array($formtabs)) {

            //multiple different Forms
            // Note: use same field-names and inputTVs in all forms
            $inputTvs = $migx->extractInputTvs($formtabs);
        }
        $migx->source = $tv->getSource($migx->working_context, false);
    }


}

if (empty($outputvalue)) {
    return \'\';
}

//echo $outputvalue.\'<br/><br/>\';


$items = $modx->fromJSON($outputvalue);

// where filter
if (is_array($where) && count($where) > 0) {
    $items = $migx->filterItems($where, $items);
}
$modx->setPlaceholder($totalVar, count($items));


if (!empty($reverse)) {
    $items = array_reverse($items);
}


// sort items
if (is_array($sort) && count($sort) > 0) {
    $items = $migx->sortDbResult($items, $sort);
}

$summaries = array();
$output = \'\';
$count = count($items);

if ($count > 0) {
    $items = $offset > 0 ? array_slice($items, $offset) : $items;

    $limit = $limit == 0 || $limit > $count ? $count : $limit;
    $preselectLimit = $preselectLimit > $count ? $count : $preselectLimit;
    //preselect important items
    $preitems = array();
    if ($randomize && $preselectLimit > 0) {
        for ($i = 0; $i < $preselectLimit; $i++) {
            $preitems[] = $items[$i];
            unset($items[$i]);
        }
        $limit = $limit - count($preitems);
    }

    //shuffle items
    if ($randomize) {
        shuffle($items);
    }

    //limit items
    $tempitems = array();
    for ($i = 0; $i < $limit; $i++) {
        $tempitems[] = $items[$i];
    }
    $items = $tempitems;

    //add preselected items and schuffle again
    if ($randomize && $preselectLimit > 0) {
        $items = array_merge($preitems, $items);
        shuffle($items);
    }

    $properties = array();
    foreach ($scriptProperties as $property => $value) {
        $properties[\'property.\' . $property] = $value;
    }

    $idx = 0;
    $output = array();
    $template = array();
    $count = count($items);

    foreach ($items as $key => $item) {
        $formname = isset($item[\'MIGX_formname\']) ? $item[\'MIGX_formname\'] . \'_\' : \'\';
        $fields = array();
        foreach ($item as $field => $value) {
            if (is_array($value)) {
                if (is_array($value[0])) {
                    //nested array - convert to json
                    $value = $modx->toJson($value);
                } else {
                    $value = implode(\'||\', $value); //handle arrays (checkboxes, multiselects)
                }
            }


            $inputTVkey = $formname . $field;
            if ($processTVs && isset($inputTvs[$inputTVkey])) {
                if (isset($inputTvs[$inputTVkey][\'inputTV\']) && $tv = $modx->getObject(\'modTemplateVar\', array(\'name\' => $inputTvs[$inputTVkey][\'inputTV\']))) {

                } else {
                    $tv = $modx->newObject(\'modTemplateVar\');
                    $tv->set(\'type\', $inputTvs[$inputTVkey][\'inputTVtype\']);
                }
                $inputTV = $inputTvs[$inputTVkey];

                $mTypes = $modx->getOption(\'manipulatable_url_tv_output_types\', null, \'image,file\');
                //don\'t manipulate any urls here
                $modx->setOption(\'manipulatable_url_tv_output_types\', \'\');
                $tv->set(\'default_text\', $value);
                $value = $tv->renderOutput($docid);
                //set option back
                $modx->setOption(\'manipulatable_url_tv_output_types\', $mTypes);
                //now manipulate urls
                if ($mediasource = $migx->getFieldSource($inputTV, $tv)) {
                    $mTypes = explode(\',\', $mTypes);
                    if (!empty($value) && in_array($tv->get(\'type\'), $mTypes)) {
                        //$value = $mediasource->prepareOutputUrl($value);
                        $value = str_replace(\'/./\', \'/\', $mediasource->prepareOutputUrl($value));
                    }
                }

            }
            $fields[$field] = $value;

        }

        if (!empty($addfields)) {
            foreach ($addfields as $addfield) {
                $addfield = explode(\':\', $addfield);
                $addname = $addfield[0];
                $adddefault = isset($addfield[1]) ? $addfield[1] : \'\';
                $fields[$addname] = $adddefault;
            }
        }

        if (!empty($sumFields)) {
            $sumFields = is_array($sumFields) ? $sumFields : explode(\',\', $sumFields);
            foreach ($sumFields as $sumField) {
                if (isset($fields[$sumField])) {
                    $summaries[$sumPrefix . $sumField] = $summaries[$sumPrefix . $sumField] + $fields[$sumField];
                    $fields[$sumPrefix . $sumField] = $summaries[$sumPrefix . $sumField];
                }
            }
        }


        if ($toJsonPlaceholder) {
            $output[] = $fields;
        } else {
            $fields[\'_alt\'] = $idx % 2;
            $idx++;
            $fields[\'_first\'] = $idx == 1 ? true : \'\';
            $fields[\'_last\'] = $idx == $limit ? true : \'\';
            $fields[\'idx\'] = $idx;
            $rowtpl = \'\';
            //get changing tpls from field
            if (substr($tpl, 0, 7) == "@FIELD:") {
                $tplField = substr($tpl, 7);
                $rowtpl = $fields[$tplField];
            }

            if ($fields[\'_first\'] && !empty($tplFirst)) {
                $rowtpl = $tplFirst;
            }
            if ($fields[\'_last\'] && empty($rowtpl) && !empty($tplLast)) {
                $rowtpl = $tplLast;
            }
            $tplidx = \'tpl_\' . $idx;
            if (empty($rowtpl) && !empty($$tplidx)) {
                $rowtpl = $$tplidx;
            }
            if ($idx > 1 && empty($rowtpl)) {
                $divisors = $migx->getDivisors($idx);
                if (!empty($divisors)) {
                    foreach ($divisors as $divisor) {
                        $tplnth = \'tpl_n\' . $divisor;
                        if (!empty($$tplnth)) {
                            $rowtpl = $$tplnth;
                            if (!empty($rowtpl)) {
                                break;
                            }
                        }
                    }
                }
            }

            if ($count == 1 && isset($tpl_oneresult)) {
                $rowtpl = $tpl_oneresult;
            }

            $fields = array_merge($fields, $properties);

            if (!empty($rowtpl)) {
                $template = $migx->getTemplate($tpl, $template);
                $fields[\'_tpl\'] = $template[$tpl];
            } else {
                $rowtpl = $tpl;

            }
            $template = $migx->getTemplate($rowtpl, $template);


            if ($template[$rowtpl]) {
                $chunk = $modx->newObject(\'modChunk\');
                $chunk->setCacheable(false);
                $chunk->setContent($template[$rowtpl]);


                if (!empty($placeholdersKeyField) && isset($fields[$placeholdersKeyField])) {
                    $output[$fields[$placeholdersKeyField]] = $chunk->process($fields);
                } else {
                    $output[] = $chunk->process($fields);
                }
            } else {
                if (!empty($placeholdersKeyField)) {
                    $output[$fields[$placeholdersKeyField]] = \'<pre>\' . print_r($fields, 1) . \'</pre>\';
                } else {
                    $output[] = \'<pre>\' . print_r($fields, 1) . \'</pre>\';
                }
            }
        }


    }
}

if (count($summaries) > 0) {
    $modx->toPlaceholders($summaries);
}


if ($toJsonPlaceholder) {
    $modx->setPlaceholder($toJsonPlaceholder, $modx->toJson($output));
    return \'\';
}

if (!empty($toSeparatePlaceholders)) {
    $modx->toPlaceholders($output, $toSeparatePlaceholders);
    return \'\';
}
/*
if (!empty($outerTpl))
$o = parseTpl($outerTpl, array(\'output\'=>implode($outputSeparator, $output)));
else 
*/

if ($count > 0 && $splits > 0) {
    $size = ceil($count / $splits);
    $chunks = array_chunk($output, $size);
    $output = array();
    foreach ($chunks as $chunk) {
        $o = implode($outputSeparator, $chunk);
        $output[] = $modx->getChunk($splitTpl, array(\'output\' => $o));
    }
    $outputSeparator = $splitSeparator;
}

if (is_array($output)) {
    $o = implode($outputSeparator, $output);
} else {
    $o = $output;
}

if (!empty($o) && !empty($wrapperTpl)) {
    $template = $migx->getTemplate($wrapperTpl);
    if ($template[$wrapperTpl]) {
        $chunk = $modx->newObject(\'modChunk\');
        $chunk->setCacheable(false);
        $chunk->setContent($template[$wrapperTpl]);
        $properties[\'output\'] = $o;
        $o = $chunk->process($properties);        
    }
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $o);
    return \'\';
}

return $o;',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'pdoRegion' => 
      array (
        'fields' => 
        array (
          'id' => 45,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'pdoRegion',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '$qrt = $modx->newQuery(\'modResource\');
$qrt->select(array(\'tv1.value\'));
$qrt->leftJoin(\'modTemplateVarResource\', \'tv1\', \'tv1.contentid = modResource.id\');
$qrt->where(array(
    \'modResource.parent\' => 27,
    \'modResource.published\' => true,
    \'modResource.deleted\' => false,
    \'tv1.tmplvarid\' => 12
));

if ($qrt->prepare() && $qrt->stmt->execute()) {
    $rows = $qrt->stmt->fetchAll(PDO::FETCH_ASSOC);
    
    $regions = array();
    
    foreach ($rows as $row) 
    	$regions[] = $row[\'value\'];
    	
    if (count($regions) === 0) return \'<option value="0">Регион отсутствует</option>\';
    
    $regions = array_unique($regions);
	sort($regions, SORT_STRING);
	
	$html = \'\';
	
	foreach ($regions as $region) 
    	$html .= \'<option value="\'.$region.\'">\'.$region.\'</option>\';
    
    return $html;
}',
          'locked' => false,
          'properties' => 
          array (
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '$qrt = $modx->newQuery(\'modResource\');
$qrt->select(array(\'tv1.value\'));
$qrt->leftJoin(\'modTemplateVarResource\', \'tv1\', \'tv1.contentid = modResource.id\');
$qrt->where(array(
    \'modResource.parent\' => 27,
    \'modResource.published\' => true,
    \'modResource.deleted\' => false,
    \'tv1.tmplvarid\' => 12
));

if ($qrt->prepare() && $qrt->stmt->execute()) {
    $rows = $qrt->stmt->fetchAll(PDO::FETCH_ASSOC);
    
    $regions = array();
    
    foreach ($rows as $row) 
    	$regions[] = $row[\'value\'];
    	
    if (count($regions) === 0) return \'<option value="0">Регион отсутствует</option>\';
    
    $regions = array_unique($regions);
	sort($regions, SORT_STRING);
	
	$html = \'\';
	
	foreach ($regions as $region) 
    	$html .= \'<option value="\'.$region.\'">\'.$region.\'</option>\';
    
    return $html;
}',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
      'tv.SEO.Pagetitle' => 
      array (
        'fields' => 
        array (
          'id' => 13,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'text',
          'name' => 'tv.SEO.Pagetitle',
          'caption' => 'Заголовок страницы',
          'description' => '',
          'editor_type' => 0,
          'category' => 12,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '[[*pagetitle]] - [[++site_name]]',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'maxLength' => '',
            'minLength' => '',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '[[*pagetitle]] - [[++site_name]]',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'tv.SEO.Description' => 
      array (
        'fields' => 
        array (
          'id' => 15,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'text',
          'name' => 'tv.SEO.Description',
          'caption' => 'Описание страницы',
          'description' => '',
          'editor_type' => 0,
          'category' => 12,
          'locked' => false,
          'elements' => '',
          'rank' => 2,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'maxLength' => '',
            'minLength' => '',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'tv.SEO.Keywords' => 
      array (
        'fields' => 
        array (
          'id' => 14,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'text',
          'name' => 'tv.SEO.Keywords',
          'caption' => 'Ключевые слова (через запятую)',
          'description' => '',
          'editor_type' => 0,
          'category' => 12,
          'locked' => false,
          'elements' => '',
          'rank' => 1,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'maxLength' => '',
            'minLength' => '',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
  ),
);