<?php  return array (
  'area_tickets.main' => 'Main',
  'area_tickets.section' => 'Tickets section',
  'area_tickets.ticket' => 'Ticket',
  'area_tickets.comment' => 'Comment',
  'area_tickets.mail' => 'Email notices',
  'setting_tickets.frontend_css' => 'Frontend styles',
  'setting_tickets.frontend_css_desc' => 'Path to file with styles of the shop. If you want to use your own styles - specify them here, or clean this parameter and load them in site template.',
  'setting_tickets.frontend_js' => 'Frontend scripts',
  'setting_tickets.frontend_js_desc' => 'Path to file with scripts of the shop. If you want to use your own sscripts - specify them here, or clean this parameter and load them in site template.',
  'setting_tickets.default_template' => 'Default template for new tickets',
  'setting_tickets.default_template_desc' => 'Default template for new tickets. Using in manager and when creating tickets on frontend.',
  'setting_tickets.ticket_isfolder_force' => 'Force "isfolder"',
  'setting_tickets.ticket_isfolder_force_desc' => 'Force parameter "isfolder" for tickets.',
  'setting_tickets.ticket_hidemenu_force' => 'Force "hidemenu"',
  'setting_tickets.ticket_hidemenu_force_desc' => 'Force parameter "hidemenu" for tickets.',
  'setting_tickets.ticket_show_in_tree_default' => 'Show in the tree default',
  'setting_tickets.ticket_show_in_tree_default_desc' => 'Enable this option and all the tickets were visible in the resource tree.',
  'setting_tickets.section_content_default' => 'Default content for new tickets section',
  'setting_tickets.section_content_default_desc' => ' Here you can specify the default content of new tickets section. By default it lists children tickets.',
  'setting_tickets.enable_editor' => 'Editor "markItUp"',
  'setting_tickets.enable_editor_desc' => 'If true, enables "markItUp" on frontend, for handy work with tickets and comments.',
  'setting_tickets.editor_config.ticket' => 'Settings of tickets editor',
  'setting_tickets.editor_config.ticket_desc' => 'JSON encoded array of settings for "markItUp". See more details - http://markitup.jaysalvat.com/documentation/',
  'setting_tickets.editor_config.comment' => 'Settings of comments editor',
  'setting_tickets.editor_config.comment_desc' => 'JSON encoded array of settings for "markItUp". See more details - http://markitup.jaysalvat.com/documentation/',
  'setting_tickets.disable_jevix_default' => 'Disable Jevix by default',
  'setting_tickets.disable_jevix_default_desc' => 'If true, setting "Disable Jevix" will be disabled for all new tickets by default.',
  'setting_tickets.process_tags_default' => 'Process tags by default',
  'setting_tickets.process_tags_default_desc' => 'If true, setting "Process MODX tags" will be disabled for all new tickets by default.',
  'setting_tickets.private_ticket_page' => 'Redirect from private ticket',
  'setting_tickets.private_ticket_page_desc' => 'Id of existing MODX resource for redirect user without needed permissions for viewing private tickets to.',
  'setting_tickets.unpublished_ticket_page' => 'Forward from unpublished ticket',
  'setting_tickets.unpublished_ticket_page_desc' => 'Id of existing MODX resource for forward user if requested ticket is not published.',
  'setting_tickets.ticket_max_cut' => 'The maximum size of the text without cut',
  'setting_tickets.ticket_max_cut_desc' => 'Максимальное количество символов без тегов, которые можно сохранить без тега cut.',
  'setting_tickets.snippet_prepare_comment' => 'Snippet for comment prepare',
  'setting_tickets.snippet_prepare_comment_desc' => 'Special snippet, that will prepare all comments before returning to frontend. It will be called in class "Tickets" and will be able to use all it methods and variables.',
  'setting_tickets.comment_edit_time' => 'Time to edit',
  'setting_tickets.comment_edit_time_desc' => 'Time in seconds for editing own comment.',
  'setting_tickets.clear_cache_on_comment_save' => 'Clear cache on commenting',
  'setting_tickets.clear_cache_on_comment_save_desc' => 'If true, cache of ticket will be cleared on any action with comment: create\\update\\remove. It needed only if you call snippet "TicketComments" uncached.',
  'setting_tickets.mail_from' => 'Mailbox outgoing mail',
  'setting_tickets.mail_from_desc' => 'Address to send the notifications. If not full - will be used system setting "emailsender".',
  'setting_tickets.mail_from_name' => 'The name of the sender',
  'setting_tickets.mail_from_name_desc' => 'Name of sender of all notifications. If empty - will be used systen setting "site_name".',
  'setting_tickets.mail_queue' => 'Messages queue',
  'setting_tickets.mail_queue_desc' => 'Whether to use a message queue or send letters immediately. If you activate this option, you need to add to the cron file "/core/components/tickets/cron/mail_queue.php"',
  'setting_tickets.mail_bcc' => 'Admin notifications',
  'setting_tickets.mail_bcc_desc' => 'Specify a comma-separated list of <b>id</b> of administrators you want to send messages about new ticket and comments.',
  'setting_tickets.mail_bcc_level' => 'Level of admin notifications',
  'setting_tickets.mail_bcc_level_desc' => 'There are 3 possible levels of admin notifications: 0 - disabled, 1 - send only messages about new tickets, 2 - tickets + comments. Recommended level is 1.',
  'setting_tickets.section_id_as_alias' => 'Use id of section as alias',
  'setting_tickets.section_id_as_alias_desc' => 'If true, aliases for friendly urls of sections will don`t be generated. Id will be set as alias.',
  'setting_tickets.ticket_id_as_alias' => 'Use id of ticket as alias',
  'setting_tickets.ticket_id_as_alias_desc' => 'If true, aliases for friendly urls of tickets will don`t be generated. Id will be set as alias.',
  'tickets.source_thumbnail_desc' => 'JSON encoded array of options for generating thumbnail.',
  'tickets.source_maxUploadWidth_desc' => 'Maximum width of image for upload. All images, that exceeds this parameter, will be resized to fit..',
  'tickets.source_maxUploadHeight_desc' => 'Maximum height of image for upload. All images, that exceeds this parameter, will be resized to fit.',
  'tickets.source_maxUploadSize_desc' => 'Maximum size of file for upload (in bytes).',
  'tickets.source_imageNameType_desc' => 'This setting specifies how to rename a file after upload. Hash is the generation of a unique name depending on the contents of the file. Friendly - generation behalf of the algorithm friendly URLs of pages of the site (they are managed by system settings).',
  'tickets' => 'Tickets',
  'comments' => 'Comments',
  'threads' => 'Comments threads',
  'tickets_section' => 'Section',
  'ticket' => 'Ticket',
  'ticket_all' => 'All tickets',
  'ticket_menu_desc' => 'Comments management and more.',
  'comments_all' => 'All comments',
  'tickets_section_create_here' => 'Section with tickets',
  'tickets_section_new' => 'New ticket',
  'tickets_section_management' => 'Tickets management',
  'tickets_section_duplicate' => 'Duplicate section',
  'tickets_section_unpublish' => 'Unpublish section',
  'tickets_section_publish' => 'Publish section',
  'tickets_section_undelete' => 'Undelete section',
  'tickets_section_delete' => 'Delete section',
  'tickets_section_view' => 'View on site',
  'tickets_section_settings' => 'Settings',
  'tickets_section_tab_main' => 'Main',
  'tickets_section_tab_tickets' => 'Children tickets',
  'tickets_section_tab_tickets_intro' => 'All settings on this page apply only to new tickets.',
  'tickets_section_settings_template' => 'The template of children',
  'tickets_section_settings_template_desc' => 'Select the template that will be assigned to all new tickets that are created in this section. If template is not specified, it will be taken from the system settings <b>tickets.default_template</b>.',
  'tickets_section_settings_uri' => 'URI scheme',
  'tickets_section_settings_uri_desc' => 'You can use <b>%y</b> - the year in two digits, <b>%m</b> is the month <b>%d</b> - the day <b>%alias</b> - alias <b>%id</b> - the identifier and <b>%ext</b> - the document extension.',
  'tickets_section_settings_show_in_tree' => 'Display in the tree',
  'tickets_section_settings_show_in_tree_desc' => 'default tickets are not shown in the document tree, to reduce the load on the admin panel, but you can enable it for new documents.',
  'tickets_section_settings_hidemenu' => 'Hide in menu',
  'tickets_section_settings_hidemenu_desc' => 'You can specify configuration display the new ticket in the menu.',
  'tickets_section_settings_disable_jevix' => 'Disable Jevix',
  'tickets_section_settings_disable_jevix_desc' => 'By default, for security purposes, all tickets are processed snippet Jevix. You can disable this processing for new tickets current topic.',
  'tickets_section_settings_process_tags' => 'Process MODX tags',
  'tickets_section_settings_process_tags_desc' => 'By default, for security purposes, in the tickets are not run MODX tags. You can include progress in new tickets current topic.',
  'tickets_section_notify' => 'Notify about new tickets',
  'tickets_section_subscribed' => 'You will no longer receive notifications about new tickets in this section.',
  'tickets_section_email_subscription' => 'New ticket in the section "[[+section.pagetitle]]"',
  'ticket_create_here' => 'Create ticket',
  'ticket_no_comments' => 'This page has no comments. You can be a trailblazer.',
  'tickets_message_close_all' => 'close all',
  'err_no_jevix' => 'Snippet Jevix is required for proper work. You need to install it from MODX repository.',
  'tickets_err_unknown' => 'An unknown error occurred.',
  'ticket_err_id' => 'The ticket with specified id = [[+id]] not found.',
  'ticket_err_wrong_user' => 'You trying to update a ticket that is not yours.',
  'ticket_err_no_auth' => 'You need to login to create a ticket.',
  'ticket_err_wrong_parent' => 'Invalid section for this ticket was specified.',
  'ticket_err_wrong_resource' => 'Wrong ticket specified.',
  'ticket_err_wrong_thread' => 'Wrong comments thread specified.',
  'ticket_err_wrong_section' => 'Wrong tickets section specified.',
  'ticket_err_access_denied' => 'Access denied',
  'ticket_err_form' => 'Form contains errors. Please, fix it.',
  'ticket_err_deleted_comment' => 'You trying to edit the deleted comment.',
  'ticket_err_unpublished_comment' => 'This comment was not published.',
  'ticket_err_ticket' => 'The specified ticket does not exist.',
  'ticket_err_vote_own' => 'You cannot vote for your ticket.',
  'ticket_err_vote_already' => 'You have already voted for this ticket.',
  'ticket_err_empty' => 'You forgot to write the text of the ticket.',
  'ticket_err_publish' => 'You are not allowed to publish tickets.',
  'ticket_err_cut' => 'The length of text is [[+length]] symbols. You must specify tag &lt;cut/&gt if text longer than [[+max_cut]] symbols.',
  'ticket_unpublished_comment' => 'Your comment will be published after moderation.',
  'permission_denied' => 'You do not have permissions for this action.',
  'field_required' => 'This field is required.',
  'ticket_clear' => 'Clear',
  'ticket_comment_intro' => '',
  'ticket_comment_all_intro' => 'Here are comments from the entire site.',
  'ticket_comment_deleted_text' => 'This comment was deleted.',
  'ticket_comment_update' => 'Update this comment',
  'ticket_comment_remove' => 'Remove with children',
  'ticket_comment_remove_confirm' => 'Are you sure you want to permanently remove <b>comments thread</b>, starting with this? This operation is irreversible!',
  'ticket_comment_delete' => 'Delete this comment',
  'ticket_comment_undelete' => 'Restore this comment',
  'ticket_comment_publish' => 'Publish this comment',
  'ticket_comment_unpublish' => 'Unpublish this comment',
  'ticket_comment_viewauthor' => 'Open authors page',
  'ticket_comment_name' => 'Author',
  'ticket_comment_text' => 'Comment',
  'ticket_comment_createdon' => 'Created on',
  'ticket_comment_editedon' => 'Edited on',
  'ticket_comment_deletedon' => 'Deleted on',
  'ticket_comment_parent' => 'Parent',
  'ticket_comment_email' => 'Email',
  'ticket_comment_view' => 'View comment on site',
  'ticket_comment_reply' => 'reply',
  'ticket_comment_edit' => 'edit',
  'ticket_comment_create' => 'Write comment',
  'ticket_comment_preview' => 'Preview',
  'ticket_comment_save' => 'Write',
  'ticket_comment_was_edited' => 'Comment was edited',
  'ticket_comment_guest' => 'Guest',
  'ticket_comment_deleted' => 'Deleted',
  'ticket_comment_captcha' => 'Enter the amount [[+a]] + [[+b]]',
  'ticket_comment_notify' => 'Notify about new comments',
  'ticket_comment_err_id' => 'The comment with specified id = [[+id]] not found.',
  'ticket_comment_err_no_auth' => 'You need to login to create comments.',
  'ticket_comment_err_wrong_user' => 'You trying to update a comment that is not yours.',
  'ticket_comment_err_no_time' => 'Time for editing a comment is ended.',
  'ticket_comment_err_has_replies' => 'This comment already has replies, so you cannot change it.',
  'ticket_comment_err_parent' => 'You are trying to reply to not existing comment.',
  'ticket_comment_err_comment' => 'This comment does not exist.',
  'ticket_comment_err_vote_own' => 'You cannot vote for your own comment.',
  'ticket_comment_err_vote_already' => 'You have already voted for this comment.',
  'ticket_comment_err_wrong_guest_ip' => 'You are not authorized and your ip is not the same as the ip of the author of this comment.',
  'ticket_comment_err_empty' => 'You forgot to write a comment.',
  'ticket_comment_err_email' => 'You have specified an invalid email.',
  'ticket_comment_err_guest_edit' => 'You are not allowed to edit comments.',
  'ticket_comment_err_captcha' => 'Invalid code of protection against spam.',
  'ticket_comment_err_no_email' => 'You need to specify the email in your account settings..',
  'ticket_publishedon' => 'Published On',
  'ticket_pagetitle' => 'Title',
  'ticket_author' => 'Author',
  'ticket_delete' => 'Delete ticket',
  'ticket_delete_text' => 'Are you sure you want to delete this ticket?',
  'ticket_create' => 'Create ticket?',
  'ticket_disable_jevix' => 'Disable Jevix',
  'ticket_disable_jevix_help' => 'Display content of this page without Jevix sanitization. It is dangerous, any user, that creates the page can attack your site (XSS, LFI etc.).',
  'ticket_process_tags' => 'Process MODX tags',
  'ticket_process_tags_help' => 'By default tags in bracket displaying as is, without processing by parser. If you enable it - on this page can be run various snippets, chunks, etc.',
  'ticket_private' => 'Private ticket',
  'ticket_private_help' => 'If true, users will must be have permission "ticket_view_private" for reading this ticket.',
  'ticket_show_in_tree' => 'Show in the tree',
  'ticket_show_in_tree_help' => 'default they are not displayed in the resource tree MODX, so as not to burden him.',
  'ticket_content' => 'Content',
  'ticket_publish' => 'Publish',
  'ticket_preview' => 'Preview',
  'ticket_save' => 'Save',
  'ticket_draft' => 'Into drafts',
  'ticket_open' => 'Open',
  'ticket_read_more' => 'Read more',
  'ticket_saved' => 'Saved!',
  'ticket_thread' => 'Comments thread',
  'ticket_thread_name' => 'Thread name',
  'ticket_thread_intro' => 'Comments that are grouped on threads. Usually, one thread is the all comments of the one page.',
  'ticket_thread_createdon' => 'Created on',
  'ticket_thread_editedon' => 'Edited on',
  'ticket_thread_deletedon' => 'Deleted on',
  'ticket_thread_comments' => 'Comments',
  'ticket_thread_resource' => 'Ticket id',
  'ticket_thread_delete' => 'Disable thread',
  'ticket_thread_undelete' => 'Enable thread',
  'ticket_thread_close' => 'Close thread',
  'ticket_thread_open' => 'Open thread',
  'ticket_thread_remove' => 'Remove with comments',
  'ticket_thread_remove_confirm' => 'Are you sure you want to totally remove <b>all</b> this thread? This operation is irreversible!',
  'ticket_thread_view' => 'View on site',
  'ticket_thread_err_deleted' => 'Commenting is disabled.',
  'ticket_thread_err_closed' => 'Adding new comments is disabled.',
  'ticket_thread_manage_comments' => 'Manage comments',
  'ticket_thread_subscribed' => 'You will no longer receive notifications about new comments in this thread.',
  'ticket_date_now' => 'Just now',
  'ticket_date_today' => 'Today at',
  'ticket_date_yesterday' => 'Yesterday at',
  'ticket_date_tomorrow' => 'Tomorrow at',
  'ticket_date_minutes_back' => '["[[+minutes]] minutes ago","[[+minutes]] minutes ago","[[+minutes]] minutes ago"]',
  'ticket_date_minutes_back_less' => 'Less than a minute ago',
  'ticket_date_hours_back' => '["[[+hours]] hours ago","[[+hours]] hours ago","[[+hours]] hours ago"]',
  'ticket_date_hours_back_less' => 'Less than an hour ago',
  'ticket_date_months' => '["january","february","march","april","may","june","july","august","september","october","november","december"]',
  'ticket_comment_email_owner' => 'New comment for your ticket "[[+pagetitle]]"',
  'ticket_comment_email_reply' => 'Reply to your comment for ticket "[[+pagetitle]]"',
  'ticket_comment_email_subscription' => 'New comment for ticket "[[+pagetitle]]"',
  'ticket_comment_email_bcc' => 'New comment for ticket "[[+pagetitle]]"',
  'ticket_comment_email_unpublished_bcc' => 'Unpublished comment for ticket "[[+pagetitle]]"',
  'ticket_email_bcc' => 'New ticket on site - "[[+pagetitle]]"',
  'ticket_like' => 'Like',
  'ticket_dislike' => 'Dislike',
  'ticket_refrain' => 'See ratings',
  'ticket_rating_total' => 'Total',
  'ticket_rating_and' => 'and',
  'ticket_file_select' => 'Select files',
  'ticket_file_delete' => 'Delete',
  'ticket_file_restore' => 'Restore',
  'ticket_file_insert' => 'Insert link',
  'ticket_err_source_initialize' => 'Could not initialize media source',
  'ticket_err_file_ns' => 'Could not process specified file',
  'ticket_err_file_ext' => 'Wrong file extension',
  'ticket_err_file_save' => 'Could not upload file',
  'ticket_err_file_owner' => 'This file not belongs to you',
  'ticket_err_file_exists' => 'File with the same name or content is already exists: "[[+file]]"',
  'ticket_uploaded_files' => 'Uploaded files',
);