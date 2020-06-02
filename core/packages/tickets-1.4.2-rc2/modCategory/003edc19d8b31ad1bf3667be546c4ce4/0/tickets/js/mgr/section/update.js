Tickets.page.UpdateTicketsSection = function(config) {
	config = config || {record:{}};
	config.record = config.record || {};
	Ext.applyIf(config,{
		panelXType: 'tickets-panel-section'
		,actions: {
			'new': MODx.action ? MODx.action['resource/create'] : 'resource/create'
			,edit: MODx.action ? MODx.action['resource/update'] : 'resource/update'
			,preview: MODx.action ? MODx.action['resource/preview'] : 'resource/preview'
		}
	});
	config.canDuplicate = false;
	config.canDelete = false;
	Tickets.page.UpdateTicketsSection.superclass.constructor.call(this,config);
};
Ext.extend(Tickets.page.UpdateTicketsSection,MODx.page.UpdateResource);
Ext.reg('tickets-page-section-update',Tickets.page.UpdateTicketsSection);



Tickets.panel.Section = function(config) {
	config = config || {};
	Tickets.panel.Section.superclass.constructor.call(this,config);
};
Ext.extend(Tickets.panel.Section,MODx.panel.Resource,{

	getFields: function(config) {
		var it = [];
		it.push({
			title: _('tickets_section')
			,id: 'modx-resource-settings'
			,cls: 'modx-resource-tab'
			,layout: 'form'
			,labelAlign: 'top'
			,labelSeparator: ''
			,bodyCssClass: 'tab-panel-wrapper main-wrapper'
			,autoHeight: true
			,defaults: {
				border: false
				,msgTarget: 'side'
				,width: 400
			}
			,items: this.getMainFields(config)
		});
		 it.push({
			 title: _('tickets_section_settings')
			 ,id: 'modx-tickets-template'
			 ,cls: 'modx-resource-tab'
			 ,bodyCssClass: 'tab-panel-wrapper form-with-labels'
			 ,autoHeight: true
			 //,layout: 'form'
			 ,labelAlign: 'top'
			 ,labelSeparator: ''
		 	,items: this.getSectionSettings(config)
		 });
		 it.push({
			 title: _('comments')
			 ,id: 'modx-tickets-comments'
			 ,cls: 'modx-resource-tab'
			 ,layout: 'form'
			 ,labelAlign: 'top'
			 ,labelSeparator: ''
			 ,bodyCssClass: 'tab-panel-wrapper main-wrapper'
			 ,autoHeight: true
		 	,items: this.getComments(config)
		 });

		if (config.show_tvs && MODx.config.tvs_below_content != 1) {
			it.push(this.getTemplateVariablesPanel(config));
		}
		if (MODx.perm.resourcegroup_resource_list == 1) {
			it.push(this.getAccessPermissionsTab(config));
		}
		var its = [];
		its.push(this.getPageHeader(config),{
			id:'modx-resource-tabs'
			,xtype: 'modx-tabs'
			,forceLayout: true
			,deferredRender: false
			,collapsible: true
			,itemId: 'tabs'
			,stateful: true
			,stateId: 'tickets-section-upd-tabpanel'
			,stateEvents: ['tabchange']
			,getState:function() {return { activeTab:this.items.indexOf(this.getActiveTab())};}
			,items: it
		});

		var ct = this.getTickets(config);
		if (ct) {
			its.push(Tickets.PanelSpacer);
			its.push(ct);
			its.push(Tickets.PanelSpacer);
		}
		if (MODx.config.tvs_below_content == 1) {
			var tvs = this.getTemplateVariablesPanel(config);
			tvs.style = 'margin-top: 10px';
			its.push(tvs);
		}
		return its;
	}

	,getTickets: function(config) {
		return [{
			xtype: 'tickets-grid-section'
			,resource: config.resource
			,border: false
		}];
	}

	 ,getSectionSettings: function(config) {
		 return [{
		 	xtype: 'tickets-section-tab-settings'
		 	,record: config.record
		 }];
	 }

	 ,getComments: function(config) {
		 return [{
		 	xtype: 'tickets-tab-comments'
		 	,record: config.record
			,section: config.record.id
			,layout: 'form'
		 }];
	 }

	,getMainFields: function(config) {
		var fields = MODx.panel.Resource.prototype.getMainFields.apply(this, [config]);
		fields.push({xtype: 'hidden',name: 'class_key',id: 'modx-resource-class-key',value: 'TicketsSection'});
		fields.push({xtype: 'hidden',name: 'content_type',id: 'modx-resource-content-type', value: MODx.config.default_content_type || 1});

		return fields;
	}
});
Ext.reg('tickets-panel-section',Tickets.panel.Section);
