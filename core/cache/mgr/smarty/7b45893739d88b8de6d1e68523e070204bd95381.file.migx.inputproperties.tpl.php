<?php /* Smarty version Smarty-3.0.4, created on 2014-09-05 08:11:59
         compiled from "/home/u162118/21vek-vlru/www/core/components/migx/elements/tv/migx.inputproperties.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20052080895409380f5b3d76-94713373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b45893739d88b8de6d1e68523e070204bd95381' => 
    array (
      0 => '/home/u162118/21vek-vlru/www/core/components/migx/elements/tv/migx.inputproperties.tpl',
      1 => 1408589346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20052080895409380f5b3d76-94713373',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/home/u162118/21vek-vlru/www/core/model/smarty/plugins/modifier.escape.php';
?><div id="tv-input-properties-form<?php echo $_smarty_tpl->getVariable('tv')->value;?>
"></div>


<script type="text/javascript">
// <![CDATA[
var params = {
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('params')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['v']->iteration=0;
if ($_smarty_tpl->tpl_vars['v']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
 $_smarty_tpl->tpl_vars['v']->last = $_smarty_tpl->tpl_vars['v']->iteration === $_smarty_tpl->tpl_vars['v']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['p']['last'] = $_smarty_tpl->tpl_vars['v']->last;
?>
 '<?php echo (isset($_smarty_tpl->tpl_vars['k']->value) ? $_smarty_tpl->tpl_vars['k']->value : null);?>
': '<?php echo smarty_modifier_escape((isset($_smarty_tpl->tpl_vars['v']->value) ? $_smarty_tpl->tpl_vars['v']->value : null),"javascript");?>
'<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['p']['last']){?>,<?php }?>
<?php }} ?>
};
var oc = {'change':{fn:function(){Ext.getCmp('modx-panel-tv').markDirty();},scope:this}};
MODx.load({
    xtype: 'panel'
    ,layout: 'form'
    ,autoHeight: true
    ,labelWidth: 150
    ,border: false
    ,items: [{
        xtype: 'textfield'
        ,fieldLabel: '<?php echo (isset($_smarty_tpl->getVariable('mig')->value['configs']) ? $_smarty_tpl->getVariable('mig')->value['configs'] : null);?>
'
        ,description: '<?php echo (isset($_smarty_tpl->getVariable('mig')->value['configs_desc']) ? $_smarty_tpl->getVariable('mig')->value['configs_desc'] : null);?>
'
        ,name: 'inopt_configs'
        ,hiddenName: 'inopt_configs'
        ,id: 'inopt_configs<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,value: params['configs']
        ,width: 600
        ,listeners: oc
    },{
        xtype: 'textarea'
        ,fieldLabel: '<?php echo (isset($_smarty_tpl->getVariable('mig')->value['tabs']) ? $_smarty_tpl->getVariable('mig')->value['tabs'] : null);?>
'
        ,description: '<?php echo (isset($_smarty_tpl->getVariable('mig')->value['tabs_desc']) ? $_smarty_tpl->getVariable('mig')->value['tabs_desc'] : null);?>
'
        ,name: 'inopt_formtabs'
        ,hiddenName: 'inopt_formtabs'
        ,id: 'inopt_formtabs<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,value: params['formtabs']
        ,width: 600
        ,height: 150
        ,listeners: oc
    },{
        xtype: 'textarea'
        ,fieldLabel: '<?php echo (isset($_smarty_tpl->getVariable('mig')->value['columns']) ? $_smarty_tpl->getVariable('mig')->value['columns'] : null);?>
'
        ,description: '<?php echo (isset($_smarty_tpl->getVariable('mig')->value['columns_desc']) ? $_smarty_tpl->getVariable('mig')->value['columns_desc'] : null);?>
'
        ,name: 'inopt_columns'
        ,hiddenName: 'inopt_columns'
        ,id: 'inopt_columns<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,value: params['columns']
        ,width: 600
        ,height: 150
        ,listeners: oc
    },{
        xtype: 'textfield'
        ,fieldLabel: '<?php echo (isset($_smarty_tpl->getVariable('mig')->value['btntext']) ? $_smarty_tpl->getVariable('mig')->value['btntext'] : null);?>
'
        ,description: '<?php echo (isset($_smarty_tpl->getVariable('mig')->value['btntext_desc']) ? $_smarty_tpl->getVariable('mig')->value['btntext_desc'] : null);?>
'
        ,name: 'inopt_btntext'
        ,hiddenName: 'inopt_btntext'
        ,id: 'inopt_btntext<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,value: params['btntext']
        ,width: 600
        ,listeners: oc
    },{
        xtype: 'textfield'
        ,fieldLabel: '<?php echo (isset($_smarty_tpl->getVariable('mig')->value['previewurl']) ? $_smarty_tpl->getVariable('mig')->value['previewurl'] : null);?>
'
        ,description: '<?php echo (isset($_smarty_tpl->getVariable('mig')->value['previewurl_desc']) ? $_smarty_tpl->getVariable('mig')->value['previewurl_desc'] : null);?>
'
        ,name: 'inopt_previewurl'
        ,hiddenName: 'inopt_previewurl'
        ,id: 'inopt_previewurl<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,value: params['previewurl']
        ,width: 600
        ,listeners: oc
    },{
        xtype: 'textfield'
        ,fieldLabel: '<?php echo (isset($_smarty_tpl->getVariable('mig')->value['jsonvarkey']) ? $_smarty_tpl->getVariable('mig')->value['jsonvarkey'] : null);?>
'
        ,description: '<?php echo (isset($_smarty_tpl->getVariable('mig')->value['jsonvarkey_desc']) ? $_smarty_tpl->getVariable('mig')->value['jsonvarkey_desc'] : null);?>
'
        ,name: 'inopt_jsonvarkey'
        ,hiddenName: 'inopt_jsonvarkey'
        ,id: 'inopt_jsonvarkey<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,value: params['jsonvarkey']
        ,width: 600
        ,listeners: oc
    },{
        xtype: 'combo-boolean'
        ,fieldLabel: '<?php echo (isset($_smarty_tpl->getVariable('mig')->value['autoResourceFolders']) ? $_smarty_tpl->getVariable('mig')->value['autoResourceFolders'] : null);?>
'
        ,name: 'inopt_autoResourceFolders'
        ,hiddenName: 'inopt_autoResourceFolders'
        ,id: 'inopt_autoResourceFolders<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,value: params['autoResourceFolders'] == 0 || params['autoResourceFolders'] == 'true' ? true : false
        ,width: 300
        ,listeners: oc
    }]
    ,renderTo: 'tv-input-properties-form<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
});
// ]]>
</script>
