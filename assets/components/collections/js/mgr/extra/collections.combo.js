Collections.combo.FilterStatus = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        store: [
            ['',_('collections.system.all')]
            ,['published',_('published')]
            ,['unpublished',_('unpublished')]
            ,['deleted',_('deleted')]
        ]
        ,name: 'filter'
        ,hiddenName: 'filter'
        ,triggerAction: 'all'
        ,editable: false
        ,selectOnFocus: false
        ,preventRender: true
        ,forceSelection: true
        ,enableKeyEvents: true
    });
    Collections.combo.FilterStatus.superclass.constructor.call(this,config);
};
Ext.extend(Collections.combo.FilterStatus,MODx.combo.ComboBox);
Ext.reg('collections-combo-filter-status',Collections.combo.FilterStatus);

Collections.combo.Template = function(config, getStore) {
    config = config || {};
    Ext.applyIf(config,{
        name: 'fake_templates'
        ,hiddenName: 'fake_templates'
        ,displayField: 'templatename'
        ,valueField: 'id'
        ,fields: ['templatename','id']
        ,mode: 'remote'
        ,triggerAction: 'all'
        ,typeAhead: true
        ,editable: true
        ,forceSelection: false
        ,clearBtnCls: 'x-form-trigger'
        ,expandBtnCls: 'x-form-trigger'
        ,pageSize: 20
        ,url: Collections.config.connectorUrl
        ,baseParams: {
            action: 'mgr/extra/gettemplates'
            ,template: (MODx.request.id != undefined) ? MODx.request.id : 0
        }
    });
    Ext.applyIf(config,{
        store: new Ext.data.JsonStore({
            url: config.url
            ,root: 'results'
            ,totalProperty: 'total'
            ,fields: config.fields
            ,errorReader: MODx.util.JSONReader
            ,baseParams: config.baseParams || {}
            ,remoteSort: config.remoteSort || false
            ,autoDestroy: true
        })
    });
    if (getStore === true) {
        config.store.load();
        return config.store;
    }
    Collections.combo.Template.superclass.constructor.call(this,config);
    this.config = config;
    return this;
};
Ext.extend(Collections.combo.Template,Ext.ux.form.SuperBoxSelect);
Ext.reg('collections-combo-template',Collections.combo.Template);

Collections.combo.SortDir = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        store: [
            ['asc',_('sort_asc')]
            ,['desc',_('sort_desc')]
        ]
        ,name: 'sortdir'
        ,hiddenName: 'sortdir'
        ,editable: false
        ,selectOnFocus: false
        ,preventRender: true
        ,forceSelection: true
        ,enableKeyEvents: true
    });
    Collections.combo.SortDir.superclass.constructor.call(this,config);
};
Ext.extend(Collections.combo.SortDir,MODx.combo.ComboBox);
Ext.reg('collections-combo-sort-dir',Collections.combo.SortDir);

Collections.combo.CollectionsTemplate = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        name: 'collections_template'
        ,hiddenName: 'collections_template'
        ,displayField: 'name'
        ,valueField: 'id'
        ,fields: ['name','id']
        ,pageSize: 20
        ,url: Collections.config.connectorUrl
        ,baseParams:{
            action: 'mgr/template/getlist'
        }
    });
    Collections.combo.CollectionsTemplate.superclass.constructor.call(this,config);
};
Ext.extend(Collections.combo.CollectionsTemplate,MODx.combo.ComboBox);
Ext.reg('collections-combo-collections-template',Collections.combo.CollectionsTemplate);

Collections.combo.SingleTemplate = function(config) {
    config = config || {};
    Ext.applyIf(config,{
        name: 'resource_template'
        ,hiddenName: 'resource_template'
        ,displayField: 'templatename'
        ,valueField: 'id'
        ,fields: ['templatename','id']
        ,pageSize: 20
        ,url: Collections.config.connectorUrl
        ,baseParams:{
            action: 'mgr/extra/gettemplates'
        }
    });
    Collections.combo.SingleTemplate.superclass.constructor.call(this,config);
};
Ext.extend(Collections.combo.SingleTemplate,MODx.combo.ComboBox);
Ext.reg('collections-combo-single-template',Collections.combo.SingleTemplate);