<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 16,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Частные дома',
    'longtitle' => 'Частные дома',
    'description' => '',
    'alias' => 'private-homes',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 3,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '',
    'richtext' => 1,
    'template' => 5,
    'menuindex' => 7,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1408427040,
    'editedby' => 1,
    'editedon' => 1408930826,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1408427040,
    'publishedby' => 1,
    'menutitle' => 'Частные дома',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'database-objects/private-homes.html',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
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

    <title>Частные дома - Агентство недвижимости «XXI Век» во Владивостоке</title>
	<meta name="description" content="">
	<meta name="keywords" content="">

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=1024">
	    
	<base href="http://21vek-vl.ru/">
	<link rel="shortcut icon" href="favicon.ico">
	    
	<!--[if lt IE 9]> 
	   <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
	<![endif]-->
	
	<link rel="stylesheet" type="text/css" href="/assets/css/reset.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/layout.css">

<link rel="stylesheet" type="text/css" href="/assets/css/lightbox.css">

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
            <form class="apply-form" action="database-objects/private-homes.html" method="post">
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
        <div class="h-logo"><a href="http://21vek-vl.ru/"><img src="/assets/images/b-logo.png" alt=""></a></div>
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
        
        <div class="main-content employees-page row clearfix" role="main-content">
            
            
<div class="mc-leftbar">
    [[!pdoCrumbs? 
        &outputSeparator=`<span>/</span>` 
        &showHidden=`1` 
        &tpl=`@INLINE <span>[[+menutitle]]</span>` 
        &tplCurrent=`@INLINE <span>[[+menutitle]]</span>` 
        &tplWrapper=`@INLINE <div class="breadcrumbs">[[+output]]</div>` 
        &showCurrent=`1`
        &exclude=`1`]]
        
    <div class="mc-inner-menu">
        [[!getParent:is=`3`:then=`<div>Квартиры:</div>`]]
        [[!getParent:is=`4`:then=`<div class="lbar-thanks">
            <div class="lbar-thanks-1">«Спасибо всем нашим клиентам за взаимовыгодное сотрудничество!»</div>
            <div class="lbar-thanks-2">Коллектив «21 Века»</div>
        </div>`]]
        [[!pdoMenu? 
            &level=`1` 
            &parents=`[[!getParent]]`
            &outerClass=`menu-[[!pdoField? &id=`[[!getParent]]` &field=`alias`]]`]]
    </div>
                
    <div class="mc-hot-deals">
        <div class="hdb-title">Горячие предложения</div>
        <div class="hdb-mini-container">
            [[!pdoResources? 
                &includeTVs=`tv.Obj.Type,tv.Obj.Locm,tv.Obj.Price,tv.Obj.Hot,tv.Obj.Image` 
                &limit=`3` 
                &parents=`27` 
                &processTVs=`1` 
                &tpl=`tpl.LBar.Hot` 
                &toPlaceholder=`place.Hot` 
                &tvFilters=`tv.Obj.Hot==1,tv.Obj.Type==16` 
                &tvPrefix=``]]
                
            [[+place.Hot:default=`
                [[!pdoResources? 
                    &includeTVs=`tv.Obj.Type,tv.Obj.Locm,tv.Obj.Price,tv.Obj.Hot,tv.Obj.Image` 
                    &limit=`3` 
                    &parents=`27` 
                    &processTVs=`1` 
                    &tpl=`tpl.LBar.Hot` 
                    &tvFilters=`tv.Obj.Hot==1` 
                    &tvPrefix=``]]
            `]]
        
        </div>
        <div class="hdb-link"><a href="want-to-stay/hot-deals.html">Все</a></div>
    </div>
</div>
            
            <div class="mc-content-box type-obj-page">
                
                <h1>Частные дома</h1>
                <div class="obj-page-box">
                    [[!pdoResources:default=`<div class="obj-nofound">Извините, в данном разделе ничего нет.</div>`? 
                        &includeTVs=`tv.Obj.Type,tv.Obj.Locb,tv.Obj.Area,tv.Obj.Price,tv.Obj.Image,tv.Obj.Desc` 
                        &limit=`all` 
                        &parents=`27` 
                        &processTVs=`1` 
                        &sortby=`publishedon` 
                        &tpl=`tpl.Obj` 
                        &tvFilters=`tv.Obj.Type==16` 
                        &tvPrefix=``]]
                </div>
                    
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
	<script type="text/javascript" src="/assets/js/nav.menu.js"></script>
	<script type="text/javascript" src="/assets/js/lightbox.min.js"></script>
	
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
    '[[$tmpl.Head.Other]]' => '    <title>Частные дома - Агентство недвижимости «XXI Век» во Владивостоке</title>
	<meta name="description" content="">
	<meta name="keywords" content="">

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=1024">
	    
	<base href="http://21vek-vl.ru/">
	<link rel="shortcut icon" href="favicon.ico">
	    
	<!--[if lt IE 9]> 
	   <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
	<![endif]-->
	
	<link rel="stylesheet" type="text/css" href="/assets/css/reset.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/layout.css">',
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
            <form class="apply-form" action="database-objects/private-homes.html" method="post">
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
        <div class="h-logo"><a href="http://21vek-vl.ru/"><img src="/assets/images/b-logo.png" alt=""></a></div>
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
    '[[$tmpl.LBar]]' => '
<div class="mc-leftbar">
    [[!pdoCrumbs? 
        &outputSeparator=`<span>/</span>` 
        &showHidden=`1` 
        &tpl=`@INLINE <span>[[+menutitle]]</span>` 
        &tplCurrent=`@INLINE <span>[[+menutitle]]</span>` 
        &tplWrapper=`@INLINE <div class="breadcrumbs">[[+output]]</div>` 
        &showCurrent=`1`
        &exclude=`1`]]
        
    <div class="mc-inner-menu">
        [[!getParent:is=`3`:then=`<div>Квартиры:</div>`]]
        [[!getParent:is=`4`:then=`<div class="lbar-thanks">
            <div class="lbar-thanks-1">«Спасибо всем нашим клиентам за взаимовыгодное сотрудничество!»</div>
            <div class="lbar-thanks-2">Коллектив «21 Века»</div>
        </div>`]]
        [[!pdoMenu? 
            &level=`1` 
            &parents=`[[!getParent]]`
            &outerClass=`menu-[[!pdoField? &id=`[[!getParent]]` &field=`alias`]]`]]
    </div>
                
    <div class="mc-hot-deals">
        <div class="hdb-title">Горячие предложения</div>
        <div class="hdb-mini-container">
            [[!pdoResources? 
                &includeTVs=`tv.Obj.Type,tv.Obj.Locm,tv.Obj.Price,tv.Obj.Hot,tv.Obj.Image` 
                &limit=`3` 
                &parents=`27` 
                &processTVs=`1` 
                &tpl=`tpl.LBar.Hot` 
                &toPlaceholder=`place.Hot` 
                &tvFilters=`tv.Obj.Hot==1,tv.Obj.Type==16` 
                &tvPrefix=``]]
                
            [[+place.Hot:default=`
                [[!pdoResources? 
                    &includeTVs=`tv.Obj.Type,tv.Obj.Locm,tv.Obj.Price,tv.Obj.Hot,tv.Obj.Image` 
                    &limit=`3` 
                    &parents=`27` 
                    &processTVs=`1` 
                    &tpl=`tpl.LBar.Hot` 
                    &tvFilters=`tv.Obj.Hot==1` 
                    &tvPrefix=``]]
            `]]
        
        </div>
        <div class="hdb-link"><a href="want-to-stay/hot-deals.html">Все</a></div>
    </div>
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
      'tmpl.Head.Other' => 
      array (
        'fields' => 
        array (
          'id' => 10,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'tmpl.Head.Other',
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
	<link rel="stylesheet" type="text/css" href="/assets/css/layout.css">',
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
	<link rel="stylesheet" type="text/css" href="/assets/css/layout.css">',
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
      'tmpl.LBar' => 
      array (
        'fields' => 
        array (
          'id' => 12,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'tmpl.LBar',
          'description' => '',
          'editor_type' => 0,
          'category' => 5,
          'cache_type' => 0,
          'snippet' => '
<div class="mc-leftbar">
    [[!pdoCrumbs? 
        &outputSeparator=`<span>/</span>` 
        &showHidden=`1` 
        &tpl=`@INLINE <span>[[+menutitle]]</span>` 
        &tplCurrent=`@INLINE <span>[[+menutitle]]</span>` 
        &tplWrapper=`@INLINE <div class="breadcrumbs">[[+output]]</div>` 
        &showCurrent=`1`
        &exclude=`1`]]
        
    <div class="mc-inner-menu">
        [[!getParent:is=`3`:then=`<div>Квартиры:</div>`]]
        [[!getParent:is=`4`:then=`<div class="lbar-thanks">
            <div class="lbar-thanks-1">«Спасибо всем нашим клиентам за взаимовыгодное сотрудничество!»</div>
            <div class="lbar-thanks-2">Коллектив «21 Века»</div>
        </div>`]]
        [[!pdoMenu? 
            &level=`1` 
            &parents=`[[!getParent]]`
            &outerClass=`menu-[[!pdoField? &id=`[[!getParent]]` &field=`alias`]]`]]
    </div>
                
    <div class="mc-hot-deals">
        <div class="hdb-title">Горячие предложения</div>
        <div class="hdb-mini-container">
            [[!pdoResources? 
                &includeTVs=`tv.Obj.Type,tv.Obj.Locm,tv.Obj.Price,tv.Obj.Hot,tv.Obj.Image` 
                &limit=`3` 
                &parents=`27` 
                &processTVs=`1` 
                &tpl=`tpl.LBar.Hot` 
                &toPlaceholder=`place.Hot` 
                &tvFilters=`tv.Obj.Hot==1,tv.Obj.Type==[[*id]]` 
                &tvPrefix=``]]
                
            [[+place.Hot:default=`
                [[!pdoResources? 
                    &includeTVs=`tv.Obj.Type,tv.Obj.Locm,tv.Obj.Price,tv.Obj.Hot,tv.Obj.Image` 
                    &limit=`3` 
                    &parents=`27` 
                    &processTVs=`1` 
                    &tpl=`tpl.LBar.Hot` 
                    &tvFilters=`tv.Obj.Hot==1` 
                    &tvPrefix=``]]
            `]]
        
        </div>
        <div class="hdb-link"><a href="[[~2]]">Все</a></div>
    </div>
</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '
<div class="mc-leftbar">
    [[!pdoCrumbs? 
        &outputSeparator=`<span>/</span>` 
        &showHidden=`1` 
        &tpl=`@INLINE <span>[[+menutitle]]</span>` 
        &tplCurrent=`@INLINE <span>[[+menutitle]]</span>` 
        &tplWrapper=`@INLINE <div class="breadcrumbs">[[+output]]</div>` 
        &showCurrent=`1`
        &exclude=`1`]]
        
    <div class="mc-inner-menu">
        [[!getParent:is=`3`:then=`<div>Квартиры:</div>`]]
        [[!getParent:is=`4`:then=`<div class="lbar-thanks">
            <div class="lbar-thanks-1">«Спасибо всем нашим клиентам за взаимовыгодное сотрудничество!»</div>
            <div class="lbar-thanks-2">Коллектив «21 Века»</div>
        </div>`]]
        [[!pdoMenu? 
            &level=`1` 
            &parents=`[[!getParent]]`
            &outerClass=`menu-[[!pdoField? &id=`[[!getParent]]` &field=`alias`]]`]]
    </div>
                
    <div class="mc-hot-deals">
        <div class="hdb-title">Горячие предложения</div>
        <div class="hdb-mini-container">
            [[!pdoResources? 
                &includeTVs=`tv.Obj.Type,tv.Obj.Locm,tv.Obj.Price,tv.Obj.Hot,tv.Obj.Image` 
                &limit=`3` 
                &parents=`27` 
                &processTVs=`1` 
                &tpl=`tpl.LBar.Hot` 
                &toPlaceholder=`place.Hot` 
                &tvFilters=`tv.Obj.Hot==1,tv.Obj.Type==[[*id]]` 
                &tvPrefix=``]]
                
            [[+place.Hot:default=`
                [[!pdoResources? 
                    &includeTVs=`tv.Obj.Type,tv.Obj.Locm,tv.Obj.Price,tv.Obj.Hot,tv.Obj.Image` 
                    &limit=`3` 
                    &parents=`27` 
                    &processTVs=`1` 
                    &tpl=`tpl.LBar.Hot` 
                    &tvFilters=`tv.Obj.Hot==1` 
                    &tvPrefix=``]]
            `]]
        
        </div>
        <div class="hdb-link"><a href="[[~2]]">Все</a></div>
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
      'pdoCrumbs' => 
      array (
        'fields' => 
        array (
          'id' => 3,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'pdoCrumbs',
          'description' => '',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '/* @var array $scriptProperties */
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

if (!isset($from) || $from == \'\') {$from = 0;}
if (empty($to)) {$to = $modx->resource->id;}
if (empty($scheme)) {$scheme = $modx->getOption(\'link_tag_scheme\');}
if (empty($direction)) {$direction = \'ltr\';}
if ($outputSeparator == \'&nbsp;&rarr;&nbsp;\' && $direction == \'rtl\') {$outputSeparator = \'&nbsp;&larr;&nbsp;\';}
if ($limit == \'\') {$limit = 10;}
if (isset($scheme) && is_numeric($scheme)) {$scheme = (integer) $scheme;}
// For compatibility with BreadCrumb
if (!empty($maxCrumbs)) {$limit = $maxCrumbs;}
if (!empty($containerTpl)) {$tplWrapper = $containerTpl;}
if (!empty($currentCrumbTpl)) {$tplCurrent = $currentCrumbTpl;}
if (!empty($linkCrumbTpl)) {$scriptProperties[\'tpl\'] = $linkCrumbTpl;}
if (!empty($maxCrumbTpl)) {$tplMax = $maxCrumbTpl;}
if (isset($showBreadCrumbsAtHome)) {$showAtHome = $showBreadCrumbsAtHome;}
if (isset($showHomeCrumb)) {$showHome = $showHomeCrumb;}
if (isset($showCurrentCrumb)) {$showCurrent = $showCurrentCrumb;}
// --
$fastMode = !empty($fastMode);
$siteStart = $modx->getOption(\'siteStart\', $scriptProperties, $modx->getOption(\'site_start\'));

if (empty($showAtHome) && $modx->resource->id == $siteStart) {
	return \'\';
}

$class = $modx->getOption(\'class\', $scriptProperties, \'modResource\');
// Start building "Where" expression
$where = array();
if (empty($showUnpublished) && empty($showUnPub)) {$where[\'published\'] = 1;}
if (empty($showHidden)) {$where[\'hidemenu\'] = 0;}
if (empty($showDeleted)) {$where[\'deleted\'] = 0;}
if (!empty($hideContainers) && empty($showContainer)) {$where[\'isfolder\'] = 0;}

$resource = ($to == $modx->resource->id)
	? $modx->resource
	: $modx->getObject($class, $to);

if (!$resource) {
	$message = \'Could not build breadcrumbs to resource "\'.$to.\'"\';
	return \'\';
}

$parents = $modx->getParentIds($resource->id, $limit, array(\'context\' => $resource->get(\'context_key\')));
if (!empty($showHome)) {
	$parents[] = $siteStart;
}

$ids = array($resource->id);
foreach ($parents as $parent) {
	if (!empty($parent)) {
		$ids[] = $parent;
	}
	if (!empty($from) && $parent == $from) {
		break;
	}
}
$where[\'id:IN\'] = $ids;

if (!empty($exclude)) {
	$where[\'id:NOT IN\'] = array_map(\'trim\', explode(\',\', $exclude));
}

// Fields to select
$resourceColumns = array_keys($modx->getFieldMeta($class));
$select = array($class => implode(\',\',$resourceColumns));

// Add custom parameters
foreach (array(\'where\',\'select\') as $v) {
	if (!empty($scriptProperties[$v])) {
		$tmp = $modx->fromJSON($scriptProperties[$v]);
		if (is_array($tmp)) {
			$$v = array_merge($$v, $tmp);
		}
	}
	unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

// Default parameters
$default = array(
	\'class\' => $class,
	\'where\' => $modx->toJSON($where),
	\'select\' => $modx->toJSON($select),
	\'groupby\' => $class.\'.id\',
	\'sortby\' => "find_in_set(`$class`.`id`,\'".implode(\',\', $ids)."\')",
	\'sortdir\' => \'\',
	\'return\' => \'data\',
	\'totalVar\' => \'pdocrumbs.total\',
	\'disableConditions\' => true
);

// Merge all properties and run!
$pdoFetch->addTime(\'Query parameters ready\');
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$rows = $pdoFetch->run();

$output = array();
if (!empty($rows) && is_array($rows)) {
	if (strtolower($direction) == \'ltr\') {
		$rows = array_reverse($rows);
	}

	foreach ($rows as $row) {
		if (!empty($useWeblinkUrl) && $row[\'class_key\'] == \'modWebLink\') {
			$row[\'link\'] = is_numeric(trim($row[\'content\'], \'[]~ \'))
				? $modx->makeUrl(intval(trim($row[\'content\'], \'[]~ \')), $row[\'context_key\'], \'\', $scheme)
				: $row[\'content\'];
		}
		else {
			$row[\'link\'] = $modx->makeUrl($row[\'id\'], $row[\'context_key\'], \'\', $scheme);
		}

		$row = array_merge(
			$scriptProperties
			,$row
			,array(\'idx\' => $pdoFetch->idx++)
		);
		if (empty($row[\'menutitle\'])) {$row[\'menutitle\'] = $row[\'pagetitle\'];}

		if ($row[\'id\'] == $resource->id && empty($showCurrent)) {
			continue;
		}
		elseif ($row[\'id\'] == $resource->id && !empty($tplCurrent)) {
			$tpl = $tplCurrent;
		}
		elseif ($row[\'id\'] == $siteStart && !empty($tplHome)) {
			$tpl = $tplHome;
		}
		else {
			$tpl = $pdoFetch->defineChunk($row);
		}
		$output[] = empty($tpl)
			? \'<pre>\'.$pdoFetch->getChunk(\'\', $row).\'</pre>\'
			: $pdoFetch->getChunk($tpl, $row, $fastMode);
	}
}
$pdoFetch->addTime(\'Chunks processed\');

if (count($output) == 1 && !empty($hideSingle)) {
	$pdoFetch->addTime(\'The only result was hidden, because the parameter "hideSingle" activated\');
	$output = array();
}

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$log .= \'<pre class="pdoCrumbsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

if (!empty($toSeparatePlaceholders)) {
	$output[\'log\'] = $log;
	$modx->setPlaceholders($output, $toSeparatePlaceholders);
}
else {
	$output = implode($outputSeparator, $output);
	if ($pdoFetch->idx >= $limit && !empty($tplMax) && !empty($output)) {
		$output = ($direction == \'ltr\')
			? $pdoFetch->getChunk($tplMax, array(), $fastMode) . $output
			: $output . $pdoFetch->getChunk($tplMax, array(), $fastMode);
	}
	$output .= $log;

	if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
		$output = $pdoFetch->getChunk($tplWrapper, array(\'output\' => $output, \'crumbs\' => $output), $fastMode);
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
            'from' => 
            array (
              'name' => 'from',
              'desc' => 'pdotools_prop_from',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Id ресурса, от которого строить хлебные крошки. Обычно это корень сайта, то есть "0".',
              'area_trans' => '',
            ),
            'to' => 
            array (
              'name' => 'to',
              'desc' => 'pdotools_prop_to',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Id ресурса для которого строятся хлебные крошки. По умолчанию это id текущей страницы.',
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
            'exclude' => 
            array (
              'name' => 'exclude',
              'desc' => 'pdotools_prop_exclude',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список id ресурсов, которые нужно исключить из выборки.',
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
              'value' => '&nbsp;&rarr;&nbsp;',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Необязательная строка для разделения результатов работы.',
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
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'pdotools_prop_tpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <a href="[[+link]]">[[+menutitle]]</a>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя чанка для оформления ресурса. Если не указан, то содержимое полей ресурса будет распечатано на экран.',
              'area_trans' => '',
            ),
            'tplCurrent' => 
            array (
              'name' => 'tplCurrent',
              'desc' => 'pdotools_prop_tplCurrent',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <span>[[+menutitle]]</span>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления текущего документа в навигации.',
              'area_trans' => '',
            ),
            'tplMax' => 
            array (
              'name' => 'tplMax',
              'desc' => 'pdotools_prop_tplMax',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <span>&nbsp;...&nbsp;</span>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк, который добавляется в начало результатов, если их больше чем "&limit".',
              'area_trans' => '',
            ),
            'tplHome' => 
            array (
              'name' => 'tplHome',
              'desc' => 'pdotools_prop_tplHome',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления ссылки на главную страницу.',
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
              'value' => '@INLINE <div class="breadcrumbs">[[+output]]</div>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка, для заворачивания всех результатов. Понимает один плейсхолдер: [[+output]]. Не работает вместе с параметром "toSeparatePlaceholders".',
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
            'showCurrent' => 
            array (
              'name' => 'showCurrent',
              'desc' => 'pdotools_prop_showCurrent',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Выводить текущий документ в навигации.',
              'area_trans' => '',
            ),
            'showHome' => 
            array (
              'name' => 'showHome',
              'desc' => 'pdotools_prop_showHome',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Выводить ссылку на главную в начале навигации.',
              'area_trans' => '',
            ),
            'showAtHome' => 
            array (
              'name' => 'showAtHome',
              'desc' => 'pdotools_prop_showAtHome',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать хлебные крошки на главной странице сайта.',
              'area_trans' => '',
            ),
            'hideSingle' => 
            array (
              'name' => 'hideSingle',
              'desc' => 'pdotools_prop_hideSingle',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Не выводить результат, если он один единственный.',
              'area_trans' => '',
            ),
            'direction' => 
            array (
              'name' => 'direction',
              'desc' => 'pdotools_prop_direction',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => 'ltr',
                  'text' => 'Left To Right (ltr)',
                  'name' => 'Left To Right (ltr)',
                ),
                1 => 
                array (
                  'value' => 'rtl',
                  'text' => 'Right To Left (rtl)',
                  'name' => 'Right To Left (rtl)',
                ),
              ),
              'value' => 'ltr',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Направление навигации: слева направо (ltr) или справа налево (rtl), например для Арабского языка.',
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
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdocrumbs.php',
          'content' => '/* @var array $scriptProperties */
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

if (!isset($from) || $from == \'\') {$from = 0;}
if (empty($to)) {$to = $modx->resource->id;}
if (empty($scheme)) {$scheme = $modx->getOption(\'link_tag_scheme\');}
if (empty($direction)) {$direction = \'ltr\';}
if ($outputSeparator == \'&nbsp;&rarr;&nbsp;\' && $direction == \'rtl\') {$outputSeparator = \'&nbsp;&larr;&nbsp;\';}
if ($limit == \'\') {$limit = 10;}
if (isset($scheme) && is_numeric($scheme)) {$scheme = (integer) $scheme;}
// For compatibility with BreadCrumb
if (!empty($maxCrumbs)) {$limit = $maxCrumbs;}
if (!empty($containerTpl)) {$tplWrapper = $containerTpl;}
if (!empty($currentCrumbTpl)) {$tplCurrent = $currentCrumbTpl;}
if (!empty($linkCrumbTpl)) {$scriptProperties[\'tpl\'] = $linkCrumbTpl;}
if (!empty($maxCrumbTpl)) {$tplMax = $maxCrumbTpl;}
if (isset($showBreadCrumbsAtHome)) {$showAtHome = $showBreadCrumbsAtHome;}
if (isset($showHomeCrumb)) {$showHome = $showHomeCrumb;}
if (isset($showCurrentCrumb)) {$showCurrent = $showCurrentCrumb;}
// --
$fastMode = !empty($fastMode);
$siteStart = $modx->getOption(\'siteStart\', $scriptProperties, $modx->getOption(\'site_start\'));

if (empty($showAtHome) && $modx->resource->id == $siteStart) {
	return \'\';
}

$class = $modx->getOption(\'class\', $scriptProperties, \'modResource\');
// Start building "Where" expression
$where = array();
if (empty($showUnpublished) && empty($showUnPub)) {$where[\'published\'] = 1;}
if (empty($showHidden)) {$where[\'hidemenu\'] = 0;}
if (empty($showDeleted)) {$where[\'deleted\'] = 0;}
if (!empty($hideContainers) && empty($showContainer)) {$where[\'isfolder\'] = 0;}

$resource = ($to == $modx->resource->id)
	? $modx->resource
	: $modx->getObject($class, $to);

if (!$resource) {
	$message = \'Could not build breadcrumbs to resource "\'.$to.\'"\';
	return \'\';
}

$parents = $modx->getParentIds($resource->id, $limit, array(\'context\' => $resource->get(\'context_key\')));
if (!empty($showHome)) {
	$parents[] = $siteStart;
}

$ids = array($resource->id);
foreach ($parents as $parent) {
	if (!empty($parent)) {
		$ids[] = $parent;
	}
	if (!empty($from) && $parent == $from) {
		break;
	}
}
$where[\'id:IN\'] = $ids;

if (!empty($exclude)) {
	$where[\'id:NOT IN\'] = array_map(\'trim\', explode(\',\', $exclude));
}

// Fields to select
$resourceColumns = array_keys($modx->getFieldMeta($class));
$select = array($class => implode(\',\',$resourceColumns));

// Add custom parameters
foreach (array(\'where\',\'select\') as $v) {
	if (!empty($scriptProperties[$v])) {
		$tmp = $modx->fromJSON($scriptProperties[$v]);
		if (is_array($tmp)) {
			$$v = array_merge($$v, $tmp);
		}
	}
	unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

// Default parameters
$default = array(
	\'class\' => $class,
	\'where\' => $modx->toJSON($where),
	\'select\' => $modx->toJSON($select),
	\'groupby\' => $class.\'.id\',
	\'sortby\' => "find_in_set(`$class`.`id`,\'".implode(\',\', $ids)."\')",
	\'sortdir\' => \'\',
	\'return\' => \'data\',
	\'totalVar\' => \'pdocrumbs.total\',
	\'disableConditions\' => true
);

// Merge all properties and run!
$pdoFetch->addTime(\'Query parameters ready\');
$pdoFetch->setConfig(array_merge($default, $scriptProperties), false);
$rows = $pdoFetch->run();

$output = array();
if (!empty($rows) && is_array($rows)) {
	if (strtolower($direction) == \'ltr\') {
		$rows = array_reverse($rows);
	}

	foreach ($rows as $row) {
		if (!empty($useWeblinkUrl) && $row[\'class_key\'] == \'modWebLink\') {
			$row[\'link\'] = is_numeric(trim($row[\'content\'], \'[]~ \'))
				? $modx->makeUrl(intval(trim($row[\'content\'], \'[]~ \')), $row[\'context_key\'], \'\', $scheme)
				: $row[\'content\'];
		}
		else {
			$row[\'link\'] = $modx->makeUrl($row[\'id\'], $row[\'context_key\'], \'\', $scheme);
		}

		$row = array_merge(
			$scriptProperties
			,$row
			,array(\'idx\' => $pdoFetch->idx++)
		);
		if (empty($row[\'menutitle\'])) {$row[\'menutitle\'] = $row[\'pagetitle\'];}

		if ($row[\'id\'] == $resource->id && empty($showCurrent)) {
			continue;
		}
		elseif ($row[\'id\'] == $resource->id && !empty($tplCurrent)) {
			$tpl = $tplCurrent;
		}
		elseif ($row[\'id\'] == $siteStart && !empty($tplHome)) {
			$tpl = $tplHome;
		}
		else {
			$tpl = $pdoFetch->defineChunk($row);
		}
		$output[] = empty($tpl)
			? \'<pre>\'.$pdoFetch->getChunk(\'\', $row).\'</pre>\'
			: $pdoFetch->getChunk($tpl, $row, $fastMode);
	}
}
$pdoFetch->addTime(\'Chunks processed\');

if (count($output) == 1 && !empty($hideSingle)) {
	$pdoFetch->addTime(\'The only result was hidden, because the parameter "hideSingle" activated\');
	$output = array();
}

$log = \'\';
if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
	$log .= \'<pre class="pdoCrumbsLog">\' . print_r($pdoFetch->getTime(), 1) . \'</pre>\';
}

if (!empty($toSeparatePlaceholders)) {
	$output[\'log\'] = $log;
	$modx->setPlaceholders($output, $toSeparatePlaceholders);
}
else {
	$output = implode($outputSeparator, $output);
	if ($pdoFetch->idx >= $limit && !empty($tplMax) && !empty($output)) {
		$output = ($direction == \'ltr\')
			? $pdoFetch->getChunk($tplMax, array(), $fastMode) . $output
			: $output . $pdoFetch->getChunk($tplMax, array(), $fastMode);
	}
	$output .= $log;

	if (!empty($tplWrapper) && (!empty($wrapIfEmpty) || !empty($output))) {
		$output = $pdoFetch->getChunk($tplWrapper, array(\'output\' => $output, \'crumbs\' => $output), $fastMode);
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
      'getParent' => 
      array (
        'fields' => 
        array (
          'id' => 24,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'getParent',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '$parent = 0;
$id = $modx->resource->get(\'id\');
$terminate = false;

while (!$terminate) {
    $c = $modx->newQuery(\'modResource\');
    $c->where(array(\'id\' => $id));
    $c->select(array(\'id\',\'parent\'));
    if ($c->prepare() && $c->stmt->execute()) {
        while ($row = $c->stmt->fetch(PDO::FETCH_ASSOC)) {
            if($parent == $row[\'parent\']) $terminate = true;
            else $id = $row[\'parent\'];
        }
    } else $terminate = true;
}

return $id;',
          'locked' => false,
          'properties' => 
          array (
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '$parent = 0;
$id = $modx->resource->get(\'id\');
$terminate = false;

while (!$terminate) {
    $c = $modx->newQuery(\'modResource\');
    $c->where(array(\'id\' => $id));
    $c->select(array(\'id\',\'parent\'));
    if ($c->prepare() && $c->stmt->execute()) {
        while ($row = $c->stmt->fetch(PDO::FETCH_ASSOC)) {
            if($parent == $row[\'parent\']) $terminate = true;
            else $id = $row[\'parent\'];
        }
    } else $terminate = true;
}

return $id;',
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
      'pdoField' => 
      array (
        'fields' => 
        array (
          'id' => 4,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'pdoField',
          'description' => '',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '/* @var array $scriptProperties */
if (!empty($input)) {$id = $input;}
if (!isset($default)) {$default = \'\';}
if (!isset($output)) {$output = \'\';}
$class = $modx->getOption(\'class\', $scriptProperties, \'modResource\', true);
$isResource = $class == \'modResource\' || in_array($class, $modx->getDescendants(\'modResource\'));

if (empty($field)) {$field = \'pagetitle\';}
$top = isset($top) ? intval($top) : 0;
$topLevel = isset($topLevel) ? intval($topLevel) : 0;
if (!empty($options)) {
	$options = trim($options);
	if ($options[0] == \'{\') {
		$tmp = $modx->fromJSON($options);
		if (is_array($tmp)) {
			extract($tmp);
			$scriptProperties = array_merge($scriptProperties, $tmp);
		}
	}
	else {
		$field = $options;
	}
}
if (empty($id)) {
	if (!empty($modx->resource)) {
		$id = $modx->resource->id;
	}
	else {
		return \'You must specify an id of \'.$class;
	}
}
if (!isset($context)) {$context = \'\';}

// Gets the parent from root of context, if specified
if ($isResource && $id && ($top || $topLevel)) {
	// Select needed context for parents functionality
	if (empty($context)) {
		$q = $modx->newQuery($class, $id);
		$q->select(\'context_key\');
		$tstart = microtime(true);
		if ($q->prepare() && $q->stmt->execute()) {
			$modx->queryTime += microtime(true) - $tstart;
			$modx->executedQueries++;
			$context = $q->stmt->fetch(PDO::FETCH_COLUMN);
		}
	}
	// Original pdoField logic
	if (empty($ultimate)) {
		if ($topLevel) {
			$pids = $modx->getChildIds(0, $topLevel, array(\'context\' => $context));
			$pid = $id;
			while (true) {
				$tmp = $modx->getParentIds($pid, 1, array(\'context\' => $context));
				if (!$pid = current($tmp)) {
					break;
				}
				elseif (in_array($pid, $pids)) {
					$id = $pid;
					break;
				}
			}
		}
		elseif ($top) {
			$pid = $id;
			for ($i = 1; $i <= $top; $i++) {
				$tmp = $modx->getParentIds($pid, 1, array(\'context\' => $context));
				if (!$pid = current($tmp)) {
					break;
				}
				$id = $pid;
			}
		}
	}
	// UltimateParent logic
	// https://github.com/splittingred/UltimateParent/blob/develop/core/components/ultimateparent/snippet.ultimateparent.php
	elseif ($id != $top) {
		$pid = $id;
		$pids = $modx->getParentIds($id, 10, array(\'context\' => $context));
		if (!$topLevel || count($pids) >= $topLevel) {
			while ($parentIds= $modx->getParentIds($id, 1, array(\'context\' => $context))) {
				$pid = array_pop($parentIds);
				if ($pid == $top) {
					break;
				}
				$id = $pid;
				$parentIds = $modx->getParentIds($id, 10, array(\'context\' => $context));
				if ($topLevel && count($parentIds) < $topLevel) {
					break;
				}
			}
		}
	}
}

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

$where = array($class.\'.id\' => $id);
// Add custom parameters
foreach (array(\'where\') as $v) {
	if (!empty($scriptProperties[$v])) {
		$tmp = $modx->fromJSON($scriptProperties[$v]);
		if (is_array($tmp)) {
			$$v = array_merge($$v, $tmp);
		}
	}
	unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

// Fields to select
$resourceColumns = array_keys($modx->getFieldMeta($class));
$field = strtolower($field);
if (in_array($field, $resourceColumns)) {
	$scriptProperties[\'select\'] = array($class => $field);
	$scriptProperties[\'includeTVs\'] = \'\';
}
elseif ($isResource) {
	$scriptProperties[\'select\'] = array($class => \'id\');
	$scriptProperties[\'includeTVs\'] = $field;
}
// Additional default field
if (!empty($default)) {
	$default = strtolower($default);
	if (in_array($default, $resourceColumns)) {
		$scriptProperties[\'select\'][$class] .= \',\'.$default;
	}
	elseif ($isResource) {
		$scriptProperties[\'includeTVs\'] = empty($scriptProperties[\'includeTVs\'])
			? $default
			: $scriptProperties[\'includeTVs\'] . \',\' . $default;
	}
}

$scriptProperties[\'disableConditions\'] = true;
if ($row = $pdoFetch->getObject($class, $where, $scriptProperties)) {
	foreach ($row as $k => $v) {
		if (strtolower($k) == $field && $v != \'\') {
			$output = $v;
			break;
		}
	}

	if (empty($output) && !empty($default)) {
		foreach ($row as $k => $v) {
			if (strtolower($k) == $default && $v != \'\') {
				$output = $v;
				break;
			}
		}
	}
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
            'id' => 
            array (
              'name' => 'id',
              'desc' => 'pdotools_prop_id',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Идентификатор ресурса.',
              'area_trans' => '',
            ),
            'field' => 
            array (
              'name' => 'field',
              'desc' => 'pdotools_prop_field',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 'pagetitle',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Поле ресурса.',
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
            'context' => 
            array (
              'name' => 'context',
              'desc' => 'pdotools_prop_field_context',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Контекст ресурса, для выборки его родителей. Нужен для работы параметров "&top" и "&topLevel".',
              'area_trans' => '',
            ),
            'top' => 
            array (
              'name' => 'top',
              'desc' => 'pdotools_prop_top',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Выбирает родителя указанного "&id" на уровне "&top".',
              'area_trans' => '',
            ),
            'topLevel' => 
            array (
              'name' => 'topLevel',
              'desc' => 'pdotools_prop_topLevel',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Выбирает родителя указанного "&id" на уровне "&topLevel" от корня контекста.',
              'area_trans' => '',
            ),
            'default' => 
            array (
              'name' => 'default',
              'desc' => 'pdotools_prop_field_default',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Укажите дополнительное поле ресурса, которое вернётся, если "&field" окажется пуст.',
              'area_trans' => '',
            ),
            'output' => 
            array (
              'name' => 'output',
              'desc' => 'pdotools_prop_field_output',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Указанная здесь строка вернётся, если и "&default" и "&field" оказались пусты.',
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
            'ultimate' => 
            array (
              'name' => 'ultimate',
              'desc' => 'pdotools_prop_ultimate',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Параметры &top и &topLevel работают как в сниппете UltimateParent.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdofield.php',
          'content' => '/* @var array $scriptProperties */
if (!empty($input)) {$id = $input;}
if (!isset($default)) {$default = \'\';}
if (!isset($output)) {$output = \'\';}
$class = $modx->getOption(\'class\', $scriptProperties, \'modResource\', true);
$isResource = $class == \'modResource\' || in_array($class, $modx->getDescendants(\'modResource\'));

if (empty($field)) {$field = \'pagetitle\';}
$top = isset($top) ? intval($top) : 0;
$topLevel = isset($topLevel) ? intval($topLevel) : 0;
if (!empty($options)) {
	$options = trim($options);
	if ($options[0] == \'{\') {
		$tmp = $modx->fromJSON($options);
		if (is_array($tmp)) {
			extract($tmp);
			$scriptProperties = array_merge($scriptProperties, $tmp);
		}
	}
	else {
		$field = $options;
	}
}
if (empty($id)) {
	if (!empty($modx->resource)) {
		$id = $modx->resource->id;
	}
	else {
		return \'You must specify an id of \'.$class;
	}
}
if (!isset($context)) {$context = \'\';}

// Gets the parent from root of context, if specified
if ($isResource && $id && ($top || $topLevel)) {
	// Select needed context for parents functionality
	if (empty($context)) {
		$q = $modx->newQuery($class, $id);
		$q->select(\'context_key\');
		$tstart = microtime(true);
		if ($q->prepare() && $q->stmt->execute()) {
			$modx->queryTime += microtime(true) - $tstart;
			$modx->executedQueries++;
			$context = $q->stmt->fetch(PDO::FETCH_COLUMN);
		}
	}
	// Original pdoField logic
	if (empty($ultimate)) {
		if ($topLevel) {
			$pids = $modx->getChildIds(0, $topLevel, array(\'context\' => $context));
			$pid = $id;
			while (true) {
				$tmp = $modx->getParentIds($pid, 1, array(\'context\' => $context));
				if (!$pid = current($tmp)) {
					break;
				}
				elseif (in_array($pid, $pids)) {
					$id = $pid;
					break;
				}
			}
		}
		elseif ($top) {
			$pid = $id;
			for ($i = 1; $i <= $top; $i++) {
				$tmp = $modx->getParentIds($pid, 1, array(\'context\' => $context));
				if (!$pid = current($tmp)) {
					break;
				}
				$id = $pid;
			}
		}
	}
	// UltimateParent logic
	// https://github.com/splittingred/UltimateParent/blob/develop/core/components/ultimateparent/snippet.ultimateparent.php
	elseif ($id != $top) {
		$pid = $id;
		$pids = $modx->getParentIds($id, 10, array(\'context\' => $context));
		if (!$topLevel || count($pids) >= $topLevel) {
			while ($parentIds= $modx->getParentIds($id, 1, array(\'context\' => $context))) {
				$pid = array_pop($parentIds);
				if ($pid == $top) {
					break;
				}
				$id = $pid;
				$parentIds = $modx->getParentIds($id, 10, array(\'context\' => $context));
				if ($topLevel && count($parentIds) < $topLevel) {
					break;
				}
			}
		}
	}
}

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

$where = array($class.\'.id\' => $id);
// Add custom parameters
foreach (array(\'where\') as $v) {
	if (!empty($scriptProperties[$v])) {
		$tmp = $modx->fromJSON($scriptProperties[$v]);
		if (is_array($tmp)) {
			$$v = array_merge($$v, $tmp);
		}
	}
	unset($scriptProperties[$v]);
}
$pdoFetch->addTime(\'Conditions prepared\');

// Fields to select
$resourceColumns = array_keys($modx->getFieldMeta($class));
$field = strtolower($field);
if (in_array($field, $resourceColumns)) {
	$scriptProperties[\'select\'] = array($class => $field);
	$scriptProperties[\'includeTVs\'] = \'\';
}
elseif ($isResource) {
	$scriptProperties[\'select\'] = array($class => \'id\');
	$scriptProperties[\'includeTVs\'] = $field;
}
// Additional default field
if (!empty($default)) {
	$default = strtolower($default);
	if (in_array($default, $resourceColumns)) {
		$scriptProperties[\'select\'][$class] .= \',\'.$default;
	}
	elseif ($isResource) {
		$scriptProperties[\'includeTVs\'] = empty($scriptProperties[\'includeTVs\'])
			? $default
			: $scriptProperties[\'includeTVs\'] . \',\' . $default;
	}
}

$scriptProperties[\'disableConditions\'] = true;
if ($row = $pdoFetch->getObject($class, $where, $scriptProperties)) {
	foreach ($row as $k => $v) {
		if (strtolower($k) == $field && $v != \'\') {
			$output = $v;
			break;
		}
	}

	if (empty($output) && !empty($default)) {
		foreach ($row as $k => $v) {
			if (strtolower($k) == $default && $v != \'\') {
				$output = $v;
				break;
			}
		}
	}
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