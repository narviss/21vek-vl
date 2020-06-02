<?php
/**
 * Default English Lexicon Entries for Collections
 *
 * @package collections
 * @subpackage lexicon
 */
$_lang['collections'] = 'Collections';

$_lang['collections.menu.collection_templates'] = 'Collection views';
$_lang['collections.menu.collection_templates_desc'] = 'Define views for collection\'s children grid.';

// Settings lexicons
$_lang['setting_collections.mgr_date_format'] = 'Grid date format';
$_lang['setting_collections.mgr_date_format_desc'] = 'Placeholders from http://docs.sencha.com/extjs/3.4.0/#!/api/Date-static-method-parseDate can be used here.';
$_lang['setting_collections.mgr_time_format'] = 'Grid time format';
$_lang['setting_collections.mgr_time_format_desc'] = 'Placeholders from http://docs.sencha.com/extjs/3.4.0/#!/api/Date-static-method-parseDate can be used here.';
$_lang['setting_collections.mgr_datetime_format'] = 'Grid date and time format';
$_lang['setting_collections.mgr_datetime_format_desc'] = 'Placeholders from http://docs.sencha.com/extjs/3.4.0/#!/api/Date-static-method-parseDate can be used here.';
$_lang['setting_collections.user_js'] = 'User\'s JS file';
$_lang['setting_collections.user_js_desc'] = 'URL to user\'s defined JS file which can contain custom renderers, etc.';
$_lang['setting_collections.user_css'] = 'User\'s CSS file';
$_lang['setting_collections.user_css_desc'] = 'URL to user\'s defined CSS file which can contain custom styles.';
$_lang['setting_mgr_tree_icon_collectioncontainer'] = 'Collections icon';
$_lang['setting_mgr_tree_icon_collectioncontainer_desc'] = 'CSS class that will be used for Collections';

// System lexicons
$_lang['collections.system.type_name'] = 'Collection';
$_lang['collections.system.text_create'] = 'Collection';
$_lang['collections.system.text_create_here'] = 'Create a Collection here';
$_lang['collections.system.new_container'] = 'New Collection';
$_lang['collections.system.all'] = 'All';

// Global lexicons
$_lang['collections.global.search'] = 'Search';
$_lang['collections.global.change_order'] = 'Change order of: [[+child]]';
$_lang['collections.global.change_parent'] = 'Change parent of: [[+child]]';

// Children
$_lang['collections.children'] = 'Children';
$_lang['collections.children.create'] = 'Create child';
$_lang['collections.children.view'] = 'View child';
$_lang['collections.children.edit'] = 'Update child';
$_lang['collections.children.publish'] = 'Publish child';
$_lang['collections.children.unpublish'] = 'Unpublish child';
$_lang['collections.children.duplicate'] = 'Duplicate child';
$_lang['collections.children.delete'] = 'Delete child';
$_lang['collections.children.undelete'] = 'Undelete child';
$_lang['collections.children.delete_confirm'] = 'Are you sure, that you want to delete this child?';
$_lang['collections.children.publish_multiple'] = 'Publish selected';
$_lang['collections.children.unpublish_multiple'] = 'Unpublish selected';
$_lang['collections.children.delete_multiple'] = 'Delete selected';
$_lang['collections.children.delete_multiple_confirm'] = 'Are you sure, that you want to delete all selected children?';
$_lang['collections.children.undelete_multiple'] = 'Undelete selected';
$_lang['collections.children.none'] = 'This resource doesn\'t have any children.';
$_lang['collections.children.err_ns_multiple'] = 'You have to select at least one children.';
$_lang['collections.children.menuindex'] = 'Menu index';

// Template
$_lang['collections.template.page_title'] = 'Collection views';
$_lang['collections.template.templates'] = 'Views';
$_lang['collections.template.templates_desc'] = 'Configure the list views when users click on a Collection in the site tree. Views can show default fields, Template Variables, and custom TVs like Tagger fields. Collection values can be configured to be individually and bulk editable directly from lists.';
$_lang['collections.template.none'] = 'There are no views yet.';
$_lang['collections.template.name'] = 'Name';
$_lang['collections.template.description'] = 'Description';
$_lang['collections.template.add'] = 'Add view';
$_lang['collections.template.new_template'] = 'New view';
$_lang['collections.template.update_template'] = 'Update view';
$_lang['collections.template.remove'] = 'Remove view';
$_lang['collections.template.remove_confirm'] = 'Are you sure, you want to remove this view?';
$_lang['collections.template.update'] = 'Update view';
$_lang['collections.template.default_for_templates'] = 'Default for templates';
$_lang['collections.template.bulk_actions'] = 'Allow bulk actions';
$_lang['collections.template.allow_dd'] = 'Allow drag & drop';
$_lang['collections.template.page_size'] = 'Page size';
$_lang['collections.template.sort_field'] = 'Sort field';
$_lang['collections.template.sort_dir'] = 'Sort direction';
$_lang['collections.template.set_as_global'] = 'Set as default view';
$_lang['collections.template.global_template'] = 'Default view';
$_lang['collections.template.template'] = 'Collection\'s view';
$_lang['collections.template.empty'] = '(use default view)';
$_lang['collections.template.child_template'] = 'Default children\'s template';
$_lang['collections.template.child_resource_type'] = 'Default children\'s resource type';
$_lang['collections.template.resource_type_selection'] = 'Resource type selection';
$_lang['collections.template.duplicate'] = 'Duplicate view';

$_lang['collections.template.column.none'] = 'This view doesn\'t have columns yet.';
$_lang['collections.template.column.name'] = 'Name';
$_lang['collections.template.column.label'] = 'Label';
$_lang['collections.template.column.add'] = 'Add column';
$_lang['collections.template.column.update'] = 'Update column';
$_lang['collections.template.column.remove'] = 'Remove column';
$_lang['collections.template.column.remove_confirm'] = 'Are you sure, you want to remove this column?';
$_lang['collections.template.column.hidden'] = 'Hidden';
$_lang['collections.template.column.sortable'] = 'Sortable';
$_lang['collections.template.column.width'] = 'Width';
$_lang['collections.template.column.position'] = 'Position';
$_lang['collections.template.column.editor'] = 'Editor';
$_lang['collections.template.column.renderer'] = 'Renderer';

$_lang['collections.err.parent_ns'] = 'Parent is not specified.';
$_lang['collections.err.template_ns'] = 'View is not specified.';
$_lang['collections.err.bad_sort_column'] = 'Sort grid by <strong>[[+column]]</strong> to use drag & drop sorting.';
$_lang['collections.err.clear_filter'] = 'Please clear <strong>filter</strong> and <strong>search</strong> to use drag & drop sorting.';
$_lang['collections.err.common'] = 'Error occurred during the action.';
$_lang['collections.err.template_ns_name'] = 'Name is not specified.';
$_lang['collections.err.column_ns_name'] = 'Name is not specified.';
$_lang['collections.err.column_ae_name'] = 'Column with this name already exists.';
$_lang['collections.err.template_resource_template_aiu_s'] = 'Template <strong>[[+templates]]</strong> already has assigned Collection View.';
$_lang['collections.err.template_resource_template_aiu_p'] = 'Templates <strong>[[+templates]]</strong> already have assigned Collection View.';
$_lang['collections.err.cant_remove_id_column'] = 'You can\'t remove ID columns. This column is required, if you don\'t want to see this column set <strong>hidden</strong> parameter to <strong>true</strong>.';
$_lang['collections.err.column_name_cant_change'] = 'You can\'t change name of ID columns. This column is required, if you don\'t want to see this column set <strong>hidden</strong> parameter to <strong>true</strong>.';
$_lang['collections.err.template_remove_last'] = 'You can\'t remove the last view.';
$_lang['collections.err.template_remove_global'] = 'You can\'t remove global view. Please set different view as a global and repeat this action.';
$_lang['collections.err.template_ae_name'] = 'Template with this name already exists.';