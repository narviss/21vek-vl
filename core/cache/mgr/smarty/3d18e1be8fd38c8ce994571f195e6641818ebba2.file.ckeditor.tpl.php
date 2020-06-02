<?php /* Smarty version Smarty-3.0.4, created on 2014-09-07 03:11:09
         compiled from "/home/u162118/21vek-vlru/www/core/components/migx/elements/tv/ckeditor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3871422540b948dc247b6-05077220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d18e1be8fd38c8ce994571f195e6641818ebba2' => 
    array (
      0 => '/home/u162118/21vek-vlru/www/core/components/migx/elements/tv/ckeditor.tpl',
      1 => 1408589346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3871422540b948dc247b6-05077220',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/home/u162118/21vek-vlru/www/core/model/smarty/plugins/modifier.escape.php';
?><textarea id="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" style="heigth:200;" name="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" class="rtf-ckeditor tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" onchange="MODx.fireResourceFormChange();"><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('tv')->value->get('value'));?>
</textarea>

<script type="text/javascript">

Ext.onReady(function() {
    
    MODx.makeDroppable(Ext.get('tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
'));
    var tvid = 'tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
';
    
    var field = (Ext.get('tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
'));
   
    
    field.onLoad = function(){
        //console.log('we load');
                var textArea = Ext.get('tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
').dom;
                field.htmlEditor = MODx.load({
                    xtype: 'modx-htmleditor',
                    width: 'auto',
                    height: parseInt(textArea.style.height) || 200,
                    name: textArea.name,
                    value: textArea.value || '<p></p>'
                });

                textArea.name = '';
                textArea.style.display = 'none';

                field.htmlEditor.render(textArea.parentNode);
                field.htmlEditor.editor.on('key', function(e){ MODx.fireResourceFormChange() });
            
		
    };
        
    field.onHide = function(){
        //console.log('we hide');
        field.htmlEditor.destroy();
   
    };
        
    field.onBeforeSubmit = function(){
        //console.log('we submit');
        field.htmlEditor.getValue();
   
    };        


});

</script>
