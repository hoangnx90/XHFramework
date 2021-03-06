<?php
	//check access
	if (!defined('ROOT_ACCESS')) {
		echo "Access denies!";exit;
	}
	$language = array(
		'acp_main_page_title' => 'TAKA->Dashboard',
		'acp_main_master_title' => 'Dashboard',
		'acp_main_page_name' => 'Post category',
		'acp_main_page_viewlist' => 'Post category list',
		'acp_main_page_add_post_category' => 'Create new post_category',
		'acp_main_page_edit_post_category' => 'Edit post category',
		'acp_main_object_extend_info' => 'More info',
		'acp_object_itemperpage' => 'Items / page',
		'acp_table_select_btn' => 'Select',
		'acp_table_select_btn_all' => 'Select all',
		'acp_table_select_btn_deselect' => 'De-select',
		'acp_table_th_id' => 'ID',
		'acp_table_th_sort_asc' => 'Increase',
		'acp_table_th_sort_desc' => 'Descrease',
		'acp_table_th_name' => 'Post category name',
		'acp_table_th_sort_az' => 'Sort order: A - Z',
		'acp_table_th_sort_za' => 'Sort order: Z - A',
		'acp_table_th_image' => 'Picture',
		'acp_table_th_category' => 'Category',
		'acp_table_th_action' => 'Action',
		'acp_table_th_status' => 'Statsu',
		'acp_status_noparent' => 'No parent',
		'acp_table_th_action_edit' => 'Edit',
		'acp_table_th_action_preview' => 'View',
		'acp_table_th_action_clone' => 'Clone',
		'acp_table_th_action_delete' => 'Delete',
		'acp_table_th_action_deleteall' => 'Delete all selected',
		'acp_table_th_status_enable' => 'Enable',
		'acp_table_th_status_disable' => 'Disable',
		'acp_object_not_found' => 'Sorry, object no found.',
		'acp_object_save' => 'Save',
		'acp_object_backtohome' => 'Back to home',
		'acp_object_editor_name' => 'Post category name',
		'acp_object_editor_niceurl' => 'Friend URL',
		'acp_object_editor_niceurl_real' => 'Preview URL',
		'acp_object_editor_meta_keyword' => 'SEO keyword',
		'acp_object_editor_shortdescription' => 'Short description',
		'acp_object_editor_content' => 'Content',
		'acp_object_editor_image' => 'Thumbnail',
		'acp_object_editor_categoryselect' => 'Category',
	);