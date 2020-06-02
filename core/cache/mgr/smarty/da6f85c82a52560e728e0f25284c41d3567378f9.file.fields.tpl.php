<?php /* Smarty version Smarty-3.0.4, created on 2014-09-04 05:37:40
         compiled from "/home/u162118/21vek-vlru/www/core/components/migx/templates/mgr/fields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2158867795407c26429bd62-90854417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da6f85c82a52560e728e0f25284c41d3567378f9' => 
    array (
      0 => '/home/u162118/21vek-vlru/www/core/components/migx/templates/mgr/fields.tpl',
      1 => 1408589346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2158867795407c26429bd62-90854417',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_cycle')) include '/home/u162118/21vek-vlru/www/core/model/smarty/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_escape')) include '/home/u162118/21vek-vlru/www/core/model/smarty/plugins/modifier.escape.php';
?><?php echo $_smarty_tpl->getVariable('OnResourceTVFormPrerender')->value;?>


<?php if ($_smarty_tpl->getVariable('formcaption')->value!=''){?>
    <h2><?php echo $_smarty_tpl->getVariable('formcaption')->value;?>
</h2>
<?php }?> 

<input type="hidden" class="mulititems_grid_item_fields" name="mulititems_grid_item_fields" value='<?php echo $_smarty_tpl->getVariable('fields')->value;?>
' />
<input type="hidden" class="tvmigxid" name="tvmigxid" value='<?php echo $_smarty_tpl->getVariable('migxid')->value;?>
' />

<div id="modx-window-mi-grid-update-<?php echo $_smarty_tpl->getVariable('win_id')->value;?>
-tabs">
<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('categories')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['category']->index=-1;
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
 $_smarty_tpl->tpl_vars['category']->index++;
 $_smarty_tpl->tpl_vars['category']->first = $_smarty_tpl->tpl_vars['category']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['cat']['first'] = $_smarty_tpl->tpl_vars['category']->first;
?>
<?php if (count((isset($_smarty_tpl->tpl_vars['category']->value['tvs']) ? $_smarty_tpl->tpl_vars['category']->value['tvs'] : null))>0){?>

<?php if (count($_smarty_tpl->getVariable('categories')->value)<2||($_smarty_tpl->getVariable('smarty')->value['foreach']['cat']['first']&&(isset($_smarty_tpl->tpl_vars['category']->value['print_before_tabs']) ? $_smarty_tpl->tpl_vars['category']->value['print_before_tabs'] : null))){?>
    <div id="modx-tv-tab<?php echo (isset($_smarty_tpl->tpl_vars['category']->value['id']) ? $_smarty_tpl->tpl_vars['category']->value['id'] : null);?>
" >
<?php }else{ ?>
    <div id="modx-tv-tab<?php echo (isset($_smarty_tpl->tpl_vars['category']->value['id']) ? $_smarty_tpl->tpl_vars['category']->value['id'] : null);?>
" class="x-tab" title="<?php echo ucfirst((($tmp = @(isset($_smarty_tpl->tpl_vars['category']->value['category']) ? $_smarty_tpl->tpl_vars['category']->value['category'] : null))===null||$tmp==='' ? (isset($_smarty_tpl->getVariable('_lang')->value['uncategorized']) ? $_smarty_tpl->getVariable('_lang')->value['uncategorized'] : null) : $tmp));?>
">
<?php }?>

<?php if (count($_smarty_tpl->getVariable('formnames')->value)>0){?>
<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['cat']['first']){?>
    <div class="x-form-item x-tab-item <?php echo smarty_function_cycle(array('values'=>",alt"),$_smarty_tpl);?>
 modx-tv" id="tvFormname-tr">
        <label for="tvFormname" class="modx-tv-label">
            <span class="modx-tv-caption" id="tvFormname-caption">Formname</span>
            <span class="modx-tv-reset" ></span> 
            <?php if ($_smarty_tpl->getVariable('tv')->value->descriptionX){?><span class="modx-tv-description"><?php echo $_smarty_tpl->getVariable('tv')->value->descriptionX;?>
</span><?php }?>
        </label>
        <div class="x-form-element modx-tv-form-element" style="padding-left: 200px;">
        <select id="tvFormname" name="tvFormname">
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('formnames')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
?>
	            <option value="<?php echo (isset($_smarty_tpl->tpl_vars['item']->value['value']) ? $_smarty_tpl->tpl_vars['item']->value['value'] : null);?>
" <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['selected']) ? $_smarty_tpl->tpl_vars['item']->value['selected'] : null)){?> selected="selected"<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['item']->value['text']) ? $_smarty_tpl->tpl_vars['item']->value['text'] : null);?>
</option>
            <?php }} ?>
        </select>
        </div>

        <br class="clear" />
    </div>
<script type="text/javascript">
// <![CDATA[


MODx.combo.FormnameDropdown = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        transform: 'tvFormname'
        ,id: 'tvFormname'
        ,triggerAction: 'all'
        ,width: 350
        ,allowBlank: true
        ,maxHeight: 300
        ,editable: false
        ,typeAhead: false
        ,forceSelection: false
        ,msgTarget: 'under'
        ,listeners: { 
		    'select': {fn:this.selectForm,scope:this}
		}});

    MODx.combo.FormnameDropdown.superclass.constructor.call(this,config);
    //this.config = config;
    //return this;
};
Ext.extend(MODx.combo.FormnameDropdown,Ext.form.ComboBox,{
	selectForm: function() {
		var win = Ext.getCmp('modx-window-mi-grid-update-<?php echo $_smarty_tpl->getVariable('win_id')->value;?>
');
        //win.fp.autoLoad.params.record_json=this.baseParams.record_json;
        win.switchForm();
		//panel.autoLoad.params['context']=this.getValue();
		//panel.doAutoLoad();
		//MODx.fireResourceFormChange();
	}
});
Ext.reg('modx-combo-formnamedropdown',MODx.combo.FormnameDropdown);

    MODx.load({
        xtype: 'modx-combo-formnamedropdown'

    });
    

// ]]>
</script>    
<?php }?>
<?php }?>
    
<?php  $_smarty_tpl->tpl_vars['tv'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->tpl_vars['category']->value['tvs']) ? $_smarty_tpl->tpl_vars['category']->value['tvs'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['tv']->key => $_smarty_tpl->tpl_vars['tv']->value){
?>

<?php if ($_smarty_tpl->getVariable('tv')->value->type=="description_is_code"){?>

    <?php echo $_smarty_tpl->getVariable('tv')->value->get('formElement');?>

   
<?php }elseif($_smarty_tpl->getVariable('tv')->value->type!="hidden"){?>
    <div class="x-form-item x-tab-item <?php echo smarty_function_cycle(array('values'=>",alt"),$_smarty_tpl);?>
 modx-tv" id="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
-tr" style="padding: 10px 0 0 ;<?php if ($_smarty_tpl->getVariable('tv')->value->display=="none"){?>display:none;<?php }?> ">
        <label for="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" class="x-form-item-label modx-tv-label" style="width: auto;margin-bottom: 10px;">
            <div class="modx-tv-label-title"> 
                <?php if ($_smarty_tpl->getVariable('showCheckbox')->value){?><input type="checkbox" name="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
-checkbox" class="modx-tv-checkbox" value="1" /><?php }?>
                <span class="modx-tv-caption" id="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
-caption"><?php echo $_smarty_tpl->getVariable('tv')->value->caption;?>
</span>
            </div>    
            <a class="modx-tv-reset" id="modx-tv-reset-<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" onclick="MODx.resetTV(<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
);" title="<?php echo (isset($_smarty_tpl->getVariable('_lang')->value['set_to_default']) ? $_smarty_tpl->getVariable('_lang')->value['set_to_default'] : null);?>
"></a>
            
            <?php if ($_smarty_tpl->getVariable('tv')->value->description){?><span class="modx-tv-label-description"><?php echo $_smarty_tpl->getVariable('tv')->value->description;?>
</span><?php }?>
        </label>
        <?php if ($_smarty_tpl->getVariable('tv')->value->inherited){?><br /><span class="modx-tv-inherited"><?php echo (isset($_smarty_tpl->getVariable('_lang')->value['tv_value_inherited']) ? $_smarty_tpl->getVariable('_lang')->value['tv_value_inherited'] : null);?>
</span><?php }?>
        <div class="x-form-clear-left"></div>
        <div class="x-form-element modx-tv-form-element" style="padding-left: 0px;">
            <input type="hidden" id="tvdef<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('tv')->value->default_text);?>
" />
            <?php echo $_smarty_tpl->getVariable('tv')->value->get('formElement');?>

        </div>

        <br class="clear" />
    </div>
    <script type="text/javascript">Ext.onReady(function() { new Ext.ToolTip({target: 'tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
-caption',html: '[[*<?php echo $_smarty_tpl->getVariable('tv')->value->name;?>
]]'});});</script>
<?php }else{ ?>
    <input type="hidden" id="tvdef<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('tv')->value->default_text);?>
" />
    <?php echo $_smarty_tpl->getVariable('tv')->value->get('formElement');?>

<?php }?>
    <?php }} ?>

    </div>
    
<?php }?>
<?php }} ?>
</div>

<?php if (count($_smarty_tpl->getVariable('categories')->value)>1){?>

<script type="text/javascript">
// <![CDATA[
Ext.onReady(function() {    

    MODx.load({
        xtype: 'modx-tabs'
        ,applyTo: 'modx-window-mi-grid-update-<?php echo $_smarty_tpl->getVariable('win_id')->value;?>
-tabs'
        ,activeTab: 0
        ,autoTabs: true
        ,border: false
        ,plain: true
        ,width: '98%'
        ,hideMode: 'offsets'
        ,defaults: {
            bodyStyle: 'padding: 5px;'
            ,autoHeight: true
        }
        ,deferredRender: false
    });
	<?php if ($_smarty_tpl->getVariable('tvcount')->value>0){?>
    <?php }?>
});    
// ]]>
</script>

<?php }?>
<?php echo $_smarty_tpl->getVariable('OnResourceTVFormRender')->value;?>


<br class="clear" />