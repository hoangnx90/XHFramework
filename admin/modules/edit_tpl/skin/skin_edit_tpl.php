<?php
	//check access
	if (!defined('ROOT_ACCESS')) {
		echo "Access denies!";exit;
	}
	$CMS->skin_edit_tpl = new Skin_EditTpl();
	class Skin_EditTpl{
		public function __construct(){
			return true;
		}
		public function ListTpl(){
			global $CMS, $DB;
			$CMS->admin['system']->LoadLanguage('admin_edit_tpl');
			$custom_style = <<<CSS
			<!-- Theme style -->
			<link href="{$CMS->admin['style_dir']}/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
			<!-- AdminLTE Skins. Choose a skin from the css/skins
				 folder instead of downloading all of them to reduce the load. -->
			<link href="{$CMS->admin['style_dir']}/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
			<link href="{$CMS->admin['style_dir']}/plugins/bootstrap-switch/bootstrap-toggle.min.css" rel="stylesheet" type="text/css" />
			<link href="{$CMS->admin['style_dir']}/list_tpl.css" rel="stylesheet" type="text/css" />
CSS;
			$plugin = <<<CSS
			<!-- SlimScroll -->
			<script src="{$CMS->admin['style_dir']}/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
			<!-- FastClick -->
			<script src="{$CMS->admin['style_dir']}/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
			<!-- AdminLTE App -->
			<script src="{$CMS->admin['style_dir']}/dist/js/app.min.js" type="text/javascript"></script>
			<script src="{$CMS->admin['style_dir']}/plugins/jQueryUI/jquery-ui.js" type="text/javascript"></script>
			<script src="{$CMS->admin['style_dir']}/plugins/bootstrap-switch/bootstrap-toggle.min.js" type="text/javascript"></script>
			<script src="{$CMS->admin['style_dir']}/js/list_tpl.js" type="text/javascript"></script>
			<!-- AdminLTE for demo purposes -->
			<!--<script src="{$CMS->admin['style_dir']}/dist/js/demo.js" type="text/javascript"></script>-->
			<script src="{$CMS->admin['style_dir']}/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
CSS;
			$title = $CMS->vars['lang']['acp_main_page_title'];
			$output = "";
			$output .=<<<HERE
				{$CMS->admin['skin_global']->header($title, $custom_style)}
				<body class="skin-green fixed sidebar-mini">
					<!-- Site wrapper -->
					<div class="wrapper">
						{$CMS->admin['skin_global']->top_bar()}
						
						{$CMS->admin['skin_global']->left_bar()}

						{$this->ListAllTpl()}

						{$CMS->admin['skin_global']->footer_nav()}

						{$CMS->admin['skin_global']->control_nav()}
					</div><!-- ./wrapper -->
				</body>
				{$CMS->admin['skin_global']->footer($plugin)}
HERE;
			return $output;
		}
		public function ListMenu(){
			global $CMS, $DB;
			$CMS->admin['system']->LoadLanguage('admin_edit_tpl');
			$custom_style = <<<CSS
			<!-- Theme style -->
			<link href="{$CMS->admin['style_dir']}/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
			<!-- AdminLTE Skins. Choose a skin from the css/skins
				 folder instead of downloading all of them to reduce the load. -->
			<link href="{$CMS->admin['style_dir']}/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
			<link href="{$CMS->admin['style_dir']}/plugins/bootstrap-switch/bootstrap-toggle.min.css" rel="stylesheet" type="text/css" />
			<link href="{$CMS->admin['style_dir']}/list_tpl.css" rel="stylesheet" type="text/css" />
CSS;
			$plugin = <<<CSS
			<!-- SlimScroll -->
			<script src="{$CMS->admin['style_dir']}/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
			<!-- FastClick -->
			<script src="{$CMS->admin['style_dir']}/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
			<!-- AdminLTE App -->
			<script src="{$CMS->admin['style_dir']}/dist/js/app.min.js" type="text/javascript"></script>
			<script src="{$CMS->admin['style_dir']}/plugins/jQueryUI/jquery-ui.js" type="text/javascript"></script>
			<script src="{$CMS->admin['style_dir']}/plugins/bootstrap-switch/bootstrap-toggle.min.js" type="text/javascript"></script>
			<script src="{$CMS->admin['style_dir']}/js/list_tpl.js" type="text/javascript"></script>
			<!-- AdminLTE for demo purposes -->
			<!--<script src="{$CMS->admin['style_dir']}/dist/js/demo.js" type="text/javascript"></script>-->
			<script src="{$CMS->admin['style_dir']}/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
CSS;
			$title = $CMS->vars['lang']['acp_main_page_title'];
			$output = "";
			$output .=<<<HERE
				{$CMS->admin['skin_global']->header($title, $custom_style)}
				<body class="skin-green fixed sidebar-mini">
					<!-- Site wrapper -->
					<div class="wrapper">
						{$CMS->admin['skin_global']->top_bar()}
						
						{$CMS->admin['skin_global']->left_bar()}

						{$this->ListAllMenu()}

						{$CMS->admin['skin_global']->footer_nav()}

						{$CMS->admin['skin_global']->control_nav()}
					</div><!-- ./wrapper -->
				</body>
				{$CMS->admin['skin_global']->footer($plugin)}
HERE;
			return $output;
		}
		public function EditMainMenu(){
			global $CMS, $DB;
			$CMS->admin['system']->LoadLanguage('admin_edit_tpl');
			$custom_style = <<<CSS
			<!-- Theme style -->
			<link href="{$CMS->admin['style_dir']}/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
			<!-- AdminLTE Skins. Choose a skin from the css/skins
				 folder instead of downloading all of them to reduce the load. -->
			<link href="{$CMS->admin['style_dir']}/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
			<link href="{$CMS->admin['style_dir']}/plugins/bootstrap-switch/bootstrap-toggle.min.css" rel="stylesheet" type="text/css" />
			<link href="{$CMS->admin['style_dir']}/main_menu.css" rel="stylesheet" type="text/css" />
			<link href="{$CMS->admin['style_dir']}/checkbox.css" rel="stylesheet" type="text/css" />
			<link href="{$CMS->admin['style_dir']}/w_object_insert.css" rel="stylesheet" type="text/css" />
CSS;
			$plugin = <<<CSS
			<!-- SlimScroll -->
			<script src="{$CMS->admin['style_dir']}/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
			<!-- FastClick -->
			<script src="{$CMS->admin['style_dir']}/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
			<!-- AdminLTE App -->
			<script src="{$CMS->admin['style_dir']}/dist/js/app.min.js" type="text/javascript"></script>
			<script src="{$CMS->admin['style_dir']}/plugins/jQueryUI/jquery-ui.js" type="text/javascript"></script>
			<script src="{$CMS->admin['style_dir']}/plugins/bootstrap-switch/bootstrap-toggle.min.js" type="text/javascript"></script>
			<script src="{$CMS->admin['style_dir']}/js/main_menu.js" type="text/javascript"></script>
			<script src="{$CMS->admin['style_dir']}/js/jquery.nicescroll.js" type="text/javascript"></script>
			<script src="{$CMS->admin['style_dir']}/js/w_object_insert.js" type="text/javascript"></script>
			<!-- AdminLTE for demo purposes -->
			<!--<script src="{$CMS->admin['style_dir']}/dist/js/demo.js" type="text/javascript"></script>-->
			<script src="{$CMS->admin['style_dir']}/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
CSS;
			$title = $CMS->vars['lang']['acp_main_page_title'];
			$output = "";
			$output .=<<<HERE
				{$CMS->admin['skin_global']->header($title, $custom_style)}
				<body class="skin-green fixed sidebar-mini">
					<!-- Site wrapper -->
					<div class="wrapper">
						{$CMS->admin['skin_global']->top_bar()}
						
						{$CMS->admin['skin_global']->left_bar()}

						{$this->LoadMainMenu()}

						{$CMS->admin['skin_global']->footer_nav()}

						{$CMS->admin['skin_global']->control_nav()}
					</div><!-- ./wrapper -->
					{$this->WindowAddItemNormal()}
					{$this->WindowAddItemMega()}
					{$this->WindowSelectItemType()}
					{$CMS->admin['skin_global']->ObjectInsert()}
				</body>
				{$CMS->admin['skin_global']->footer($plugin)}
HERE;
			return $output;
		}
		public function LoadMainMenu(){
			global $CMS, $DB;
			//$PageData = $this->LoadPageData($id);
			$output = "";
			$output =<<<HERE
					<!-- Content Wrapper. Contains page content -->
						<div class="content-wrapper">
							<!-- Content Header (Page header) -->
							<section class="content-header">
								<h1>
									{$CMS->vars['lang']['acp_main_master_title']}
									<small>{$CMS->vars['lang']['acp_main_page_name_menu_edit']}</small>
								</h1>
								<ol class="breadcrumb">
									<li><a href="#"><i class="fa fa-dashboard"></i> {$CMS->vars['lang']['acp_main_master_title']}</a></li>
									<li class="active"><a href="#">{$CMS->vars['lang']['acp_main_page_name_menu_edit']}</a></li>
								</ol>
							</section>

							<!-- Main content -->
							<section class="content">
								<div class="row">
									<div class="col-xs-12 col-md-8 contain-edit-mainmenu">
										<div class="sortable">
											<span class="add-item-master disabled"><i class="fa fa-plus fa-2x"></i></span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="custom-menu-btn-act">
										<a class="imp-act save"><i class="fa fa-check"></i>Save</a>
										<a class="imp-act preview"><i class="fa fa-eye"></i>Preview</a>
										<a class="imp-act backtohome"><i class="fa fa-arrow-circle-o-left"></i>Back to home</a>
									</div>
								</div>
							</section><!-- /.content -->
						</div><!-- /.content-wrapper -->
HERE;
			return $output;
		}
		public function ListAllTpl(){
			global $CMS, $DB;
			$output = "";
			$output =<<<HERE
					<!-- Content Wrapper. Contains page content -->
						<div class="content-wrapper">
							<!-- Content Header (Page header) -->
							<section class="content-header">
								<h1>
									{$CMS->vars['lang']['acp_main_master_title']}
									<small>{$CMS->vars['lang']['acp_main_page_viewlist']}</small>
								</h1>
								<ol class="breadcrumb">
									<li><a href="#"><i class="fa fa-dashboard"></i> {$CMS->vars['lang']['acp_main_master_title']}</a></li>
									<li class="active"><a href="#">{$CMS->vars['lang']['acp_main_page_viewlist']}</a></li>
								</ol>
							</section>

							<!-- Main content -->
							<section class="content">
								<div class="row">
									<div class="col-xs-12 contain-change-tpl">
									
										<div class="box">
											<div class="box-header with-border">
												<h3 class="box-title">{$CMS->vars['lang']['acp_main_page_viewlist']}</h3>
											</div><!-- /.box-header -->
											<div class="box-body">
												<table class="table table-bordered">
													<tbody>
														<tr class="theader">
															<th width="5%">ID</th>
															<th>Page</th>
															<th width="20%">Action</th>
															<th width="15%">Status</th>
														</tr>
HERE;
													$PageList = $this->GetPageListData();
													foreach($PageList as $onePage){
														//check status
														if($onePage['status'] == "1"){
															$checked = "checked";
														}else{
															$checked = "";
														}
														$output .=<<<HERE
														<tr>
															<td>{$onePage['id']}</td>
															<td><p class="pagename"><i class='fa {$onePage['icon']}'></i> {$onePage['name']}</p></td>
															<td>
																<a class="act edit" target="_blank" href="{$CMS->vars['root_domain']}/?site=admin&page=edit_tpl&action=viewlist&id={$onePage['id']}"><i class='fa fa-edit'></i> Edit</a>
																<a class="act view" target="_blank" href="{$CMS->vars['root_domain']}/{$onePage['nice_url']}"><i class='fa fa-eye'></i> Preview</a>
															</td>
															<td>
																<input type="checkbox" {$checked} data-toggle="toggle" data-on="<i class='fa fa-eye'></i> Enable" data-off="<i class='fa fa-eye-slash'></i> Disable">
															</td>
														</tr>
HERE;
													}
													if(!$PageList){
														$output .=<<<HERE
														<tr>
															<td colspan="5">Empty</td>
														</tr>
HERE;
													}
													$output .=<<<HERE
													</tbody>
												</table>
											</div><!-- /.box-body -->
											<!--<div class="box-footer clearfix">
												<ul class="pagination pagination-sm no-margin pull-right">
													<li><a href="#">«</a></li>
													<li><a href="#">1</a></li>
													<li><a href="#">»</a></li>
												</ul>
											</div>-->
										</div><!-- /.box -->
										
									</div>
								</div>
							</section><!-- /.content -->
						</div><!-- /.content-wrapper -->
HERE;
			return $output;
		}
		public function QuickAction(){
			global $CMS, $DB;
			$output = "";
			$output =<<<HERE
				<div class="quickaccess">
					<a class="add action" href="{$CMS->vars['root_domain']}?site=admin&page=edit_tpl&action=editmenu"><i class="fa fa-plus"></i></a>
				</div>
HERE;
			return $output;
		}
		public function ListAllMenu(){
			global $CMS, $DB;
			$output = "";
			$output =<<<HERE
					<!-- Content Wrapper. Contains page content -->
						<div class="content-wrapper">
							<!-- Content Header (Page header) -->
							<section class="content-header">
								<h1>
									{$CMS->vars['lang']['acp_main_master_title']}
									<small>{$CMS->vars['lang']['acp_main_menu_viewlist']}</small>
								</h1>
								<ol class="breadcrumb">
									<li><a href="#"><i class="fa fa-dashboard"></i> {$CMS->vars['lang']['acp_main_master_title']}</a></li>
									<li class="active"><a href="#">{$CMS->vars['lang']['acp_main_menu_viewlist']}</a></li>
								</ol>
							</section>

							<!-- Main content -->
							<section class="content">
								<div class="row">
									<div class="col-xs-12 contain-change-tpl">
									
										<div class="box">
											<div class="box-header with-border">
												<h3 class="box-title">{$CMS->vars['lang']['acp_main_menu_viewlist']}</h3>
											</div><!-- /.box-header -->
											<div class="box-body">
												<table class="table table-bordered">
													<tbody>
														<tr class="theader">
															<th width="5%">ID</th>
															<th>Menu</th>
															<th width="20%">Action</th>
															<th width="15%">Status</th>
														</tr>
HERE;
													$MenuList = $this->GetMenuListData();
													foreach($MenuList as $oneMenu){
														//check status
														if($oneMenu['status'] == "1"){
															$checked = "checked";
														}else{
															$checked = "";
														}
														$output .=<<<HERE
														<tr>
															<td>{$oneMenu['id']}</td>
															<td><p class="pagename"><i class='fa {$oneMenu['icon']}'></i> {$oneMenu['name']}</p></td>
															<td>
																<a class="act edit" target="_blank" href="{$CMS->vars['root_domain']}/?site=admin&page=edit_tpl&action=editmenu&id={$oneMenu['id']}"><i class='fa fa-edit'></i> Edit</a>
																<a class="act edit" target="_blank" href="{$CMS->vars['root_domain']}/?site=admin&page=edit_tpl&action=deletemenu&id={$oneMenu['id']}"><i class='fa fa-trash'></i> Delete</a>
															</td>
															<td>
																<input type="checkbox" {$checked} data-toggle="toggle" data-on="<i class='fa fa-eye'></i> Enable" data-off="<i class='fa fa-eye-slash'></i> Disable">
															</td>
														</tr>
HERE;
													}
													if(!$MenuList){
														$output .=<<<HERE
														<tr>
															<td colspan="5">Empty</td>
														</tr>
HERE;
													}
													$output .=<<<HERE
													</tbody>
												</table>
											</div><!-- /.box-body -->
											<!--<div class="box-footer clearfix">
												<ul class="pagination pagination-sm no-margin pull-right">
													<li><a href="#">«</a></li>
													<li><a href="#">1</a></li>
													<li><a href="#">»</a></li>
												</ul>
											</div>-->
										</div><!-- /.box -->
										
									</div>
								</div>
							</section><!-- /.content -->
						</div><!-- /.content-wrapper -->
						{$this->QuickAction()}
HERE;
			return $output;
		}
		public function PageDefault(){
			global $CMS, $DB;
			$CMS->admin['system']->LoadLanguage('admin_edit_tpl');
			$custom_style = <<<CSS
			<!-- Theme style -->
			<link href="{$CMS->admin['style_dir']}/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
			<!-- AdminLTE Skins. Choose a skin from the css/skins
				 folder instead of downloading all of them to reduce the load. -->
			<link href="{$CMS->admin['style_dir']}/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
			<link href="{$CMS->admin['style_dir']}/edit_tpl.css" rel="stylesheet" type="text/css" />
			<link href="{$CMS->vars['root_domain']}/themes/{$CMS->vars['tpl_name']}/css/style.css" rel="stylesheet" type="text/css" />
			<link href="{$CMS->admin['style_dir']}/plugins/bootstrap-switch/bootstrap-toggle.min.css" rel="stylesheet" type="text/css" />
			<link href="{$CMS->admin['style_dir']}/checkbox.css" rel="stylesheet" type="text/css" />
			<link href="{$CMS->admin['style_dir']}/plugins/selectpicker/css/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
			<link href="{$CMS->admin['style_dir']}/plugins/fileupload/css/jquery.filer.css" type="text/css" rel="stylesheet" />
			<link href="{$CMS->admin['style_dir']}/plugins/fileupload/css/themes/jquery.filer-dragdropbox-theme.css" type="text/css" rel="stylesheet" />
			<link href="{$CMS->admin['style_dir']}/plugins/spectrum/spectrum.css" type="text/css" rel="stylesheet" />
CSS;
			$plugin = <<<CSS
			<!-- SlimScroll -->
			<script src="{$CMS->admin['style_dir']}/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
			<!-- FastClick -->
			<script src="{$CMS->admin['style_dir']}/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
			<!-- AdminLTE App -->
			<script src="{$CMS->admin['style_dir']}/dist/js/app.min.js" type="text/javascript"></script>
			<script src="{$CMS->admin['style_dir']}/plugins/jQueryUI/jquery-ui.js" type="text/javascript"></script>
			<script src="{$CMS->admin['style_dir']}/js/edit_tpl.js" type="text/javascript"></script>
			<!-- AdminLTE for demo purposes -->
			<!--<script src="{$CMS->admin['style_dir']}/dist/js/demo.js" type="text/javascript"></script>-->
			<script src="{$CMS->admin['style_dir']}/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
			<script src="{$CMS->admin['style_dir']}/plugins/bootstrap-switch/bootstrap-toggle.min.js" type="text/javascript"></script>
			<script src="{$CMS->admin['style_dir']}/plugins/fileupload/js/jquery.filer.min.js" type="text/javascript" ></script>
			<script src="{$CMS->admin['style_dir']}/plugins/fileupload/js/setup.js" type="text/javascript" ></script>
			<script src="{$CMS->admin['style_dir']}/plugins/spectrum/spectrum.js" type="text/javascript" ></script>
CSS;
			$title = $CMS->vars['lang']['acp_main_page_title'];
			$output = "";
			$output .=<<<HERE
				{$CMS->admin['skin_global']->header($title, $custom_style)}
				<body class="skin-green fixed sidebar-mini">
					<!-- Site wrapper -->
					<div class="wrapper">
						{$CMS->admin['skin_global']->top_bar()}
						
						{$CMS->admin['skin_global']->left_bar()}

						{$this->MainContent($CMS->input['id'])}

						{$CMS->admin['skin_global']->footer_nav()}

						{$CMS->admin['skin_global']->control_nav()}
					</div><!-- ./wrapper -->
				</body>
				{$CMS->admin['skin_global']->footer($plugin)}
HERE;
			return $output;
		}
		public function MainContent($id = false){
			global $CMS, $DB;
			if($id){
				$PageData = $this->LoadPageData($id);
			}else{
				header("Location: {$CMS->vars['root_domain']}/?site=admin&page=edit_tpl&action=viewlist");exit;
			}
			$output = "";
			$output =<<<HERE
					<!-- Content Wrapper. Contains page content -->
						<div class="content-wrapper">
							<!-- Content Header (Page header) -->
							<section class="content-header">
								<h1>
									{$CMS->vars['lang']['acp_main_master_title']}
									<small>{$CMS->vars['lang']['acp_main_page_name']}</small>
								</h1>
								<ol class="breadcrumb">
									<li><a href="#"><i class="fa fa-dashboard"></i> {$CMS->vars['lang']['acp_main_master_title']}</a></li>
									<li class="active"><a href="#">{$CMS->vars['lang']['acp_main_page_name']}</a></li>
								</ol>
							</section>

							<!-- Main content -->
							<section class="content">
								<div class="row">
									<div class="col-xs-12 contain-change-tpl">
										<div class="sortable containpageid" data="{$id}">
											{$this->LoadPageLayout($PageData)}
											<span class="addsubrow disabled"><i class="fa fa-plus fa-2x"></i></span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="setting-tpl-btn-act">
										<a class="imp-act save"><i class="fa fa-check"></i>Save</a>
										<a class="imp-act preview"><i class="fa fa-eye"></i>Preview</a>
										<a class="imp-act backtohome"><i class="fa fa-arrow-circle-o-left"></i>Back to home</a>
									</div>
								</div>
							</section><!-- /.content -->
						</div><!-- /.content-wrapper -->
						{$this->WindowAddrowLayout()}
						{$this->WindowSettingLayout()}
						{$this->WindowBlockConfig()}
						{$this->WindowFrameConfig()}
						{$this->WindowMainRowChange()}
						{$CMS->admin['skin_global']->AttachmentImage()}
HERE;
			return $output;
		}
		public function WindowBlockConfig(){
			global $CMS, $DB;
			$output = "";
			$output =<<<HERE
						<div id="blockconfig">
							<div class="contain">
								<div class="header">
									<div class="title">
										<p><i class="fa fa-cogs"></i></li> {$CMS->vars['lang']['window_settingblock_title']}</p>
									</div>
									<div class="act-btn">
										<p class="close-this">Close <i class="fa fa-close"></i></li></p>
									</div>
								</div>
								<div class="body">
									<div class="setting-block">
										<div class="primary row-data form-horizontal">
											<div class="block-title row">
												<label class="control-label col-md-3" for="block_title">Title: </label>
												<div class="col-md-9">
													<input type="text" class="form-control edit-block-title" name="block_title" placeholder="Title" value="" />
												</div>
											</div>
											<div class="module-type row">
												<label class="control-label col-md-3" for="block_title">Module type: </label>
												<div class="col-md-9">
													<select name="module-type" class="form-control edit-module-type" data="{$CMS->vars['root_domain']}">
														<option value="default">--Select--</option>
														{$CMS->admin['skin_global']->CustomModuleType()}
													</select>
												</div>
											</div>
										</div>
										<div class="extend-custome-module-type row-data editor" data="">
											<p>Select module type</p>
										</div>
									</div>
								</div>
								<div class="footer">
									<div class="act-btn">
										<p class="apply-selected"><i class="fa fa-check"></i> Apply</p>
										<p class="close-this"><i class="fa fa-circle-o"></i> Cancel</p>
									</div>
								</div>
							</div>
						</div>
HERE;
			return $output;
		}
		public function WindowFrameConfig(){
			global $CMS, $DB;
			$output = "";
			$output =<<<HERE
						<div id="frameconfig">
							<div class="contain">
								<div class="header">
									<div class="title">
										<p><i class="fa fa-cogs"></i></li> {$CMS->vars['lang']['window_settingframe_title']}</p>
									</div>
									<div class="act-btn">
										<p class="close-this">Close <i class="fa fa-close"></i></li></p>
									</div>
								</div>
								<div class="body">
									<div class="setting-block">
										<div class="primary row-data form-horizontal">
											<div class="block-title row">
												<label class="control-label col-md-3" for="block_title">Title: </label>
												<div class="col-md-9">
													<input type="text" class="form-control edit-block-title" name="block_title" placeholder="Title" value="" />
												</div>
											</div>
											<div class="module-type row">
												<label class="control-label col-md-3" for="block_title">Module type: </label>
												<div class="col-md-9">
													<select name="module-type" class="form-control edit-module-type" data="{$CMS->vars['root_domain']}">
														<option value="default">--Select--</option>
														{$CMS->admin['skin_global']->CustomModuleType()}
													</select>
												</div>
											</div>
										</div>
										<div class="extend-custome-module-type row-data editor" data="">
											<p>Select module type</p>
										</div>
									</div>
								</div>
								<div class="footer">
									<div class="act-btn">
										<p class="apply-selected"><i class="fa fa-check"></i> Apply</p>
										<p class="close-this"><i class="fa fa-circle-o"></i> Cancel</p>
									</div>
								</div>
							</div>
						</div>
HERE;
			return $output;
		}
		public function LoadPageLayout($data){
			global $CMS, $DB;
			$output = "";
			if($data['data'] != ""){
				$RowData = unserialize($data['data']);
				//loop row
				if(is_array($RowData)){
					foreach($RowData as $Row){
						$rowTitle = "";
						$sortthis = "justsortthis";
						if($Row['required'] == "1"){
							$required = "mainrow";
							$rowTitle = "#Content";
						}else{
							$required = "";
						}
						if($Row['important'] == "1"){
							$impt = "row-impt";
							$sortthis = "";
						}else{
							$impt = "";
						}
						if($Row['header'] == "1"){
							$rowTitle = "#Header";
							$header = "row-header";
						}else{
							$header = "";
						}
						if($Row['footer'] == "1"){
							$rowTitle = "#Footer";
							$footer = "row-footer";
						}else{
							$footer = "";
						}
						if($Row['setting']){
							$rowSetting = json_encode($Row['setting']);
						}else{
							$rowSetting = "";
						}
						//open row
						$output .=<<<HERE
						<div class='row-layout has-child-level-1 row {$required} {$impt} {$header} {$footer} {$sortthis}' data='{$rowSetting}'>
							<div class='config config-lvl-1 col-md-12'>
								<p class="row-x-title">{$rowTitle}</p>
								<i class='fa fa-close'></i>
								<i class='fa fa-cog'></i>
							</div>
HERE;
							//loop subrow
							if(is_array($Row['data'])){
								foreach($Row['data'] as $Subrow){
									if($Subrow['required'] == "1"){
										$required = "mainsubrow";
									}else{
										$required = "";
									}
									//open subrow
									$output .=<<<HERE
									<div class='row-layout has-child-level-2 col-xs-12 col-md-12 {$required}'>
										<div class='config config-lvl-2 col-md-12'>
											<i class='fa fa-close'></i>
										</div>
HERE;
										//loop columb
										if(is_array($Subrow['data'])){
											foreach($Subrow['data'] as $Col){
												$size = $Col['size'];
												//open columb
												$output .=<<<HERE
													<div class='col-layout size-{$size} has-child-level-3 col-xs-{$size} col-md-{$size}' data='{$size}'>
														<div class='config config-lvl-3 col-md-12'>
															<i class='fa fa-code'></i>
														</div>
HERE;
													//loop block
													if(is_array($Col['data'])){
														foreach($Col['data'] as $Block){
															$title = $Block['title'];
															if($Block['data']){
																//print_r($Block['data']);exit;
																$data = json_encode($Block['data']);
															}else{
																$data = "";
															}
															if($Block['required'] == "1"){
																$required = "mainblock";
																$title = "Required";
																$data = "";
															}else{
																$required = "";
															}
															//echo $data;exit;
															//open block content
															$output .=<<<HERE
															<div class='block-layout col-xs-12 {$required}' data='{$data}'>
																<div class='config config-lvl-4 col-md-12'>
																	<a class='block-title'>{$title}</a>
																	<i class='fa fa-close'></i>
																	<i class='fa fa-cog'></i>
																</div>
																<div class='block-content'>
HERE;
																//load block data
																if($required != ""){
																	//main
																	//load main frame by page nice url
																	//$output .= $CMS->unit[$Block['data']['moduleType']]->ReloadBlock($Block['data']);
																	$output .= "";
																}else{
																	//unit
																	if($Block['data']['moduleType'] != ""){
																		$output .= $CMS->unit[$Block['data']['moduleType']]->ReloadBlock($Block['data']);
																	}
																}
															//close block content
															$output .=<<<HERE
																</div>
															</div>
HERE;
														}
													}
													
												//close columb
												$output .=<<<HERE
														<div class='add add-lvl-3 col-xs-12'>
															<i class='fa fa-plus'></i>
														</div>
													</div>
HERE;
											}
										}
										
									//close subrow
									$output .=<<<HERE
									</div>
HERE;
								}
							}
						//close row
						$output .=<<<HERE
							<div class='add add-lvl-1 col-md-12'>
								<i class='fa fa-plus'></i>
							</div>
						</div>
HERE;
					}
				}
			}
			return $output;
		}
		public function WindowAddrowLayout(){
			global $CMS, $DB;
			$output = "";
			$output =<<<HERE
						<div id="addrowlayout">
							<div class="contain">
								<div class="header">
									<div class="title">
										<p><i class="fa fa-cogs"></i></li> {$CMS->vars['lang']['window_addrowlayout_title']}</p>
									</div>
									<div class="act-btn">
										<p class="close-this">Close <i class="fa fa-close"></i></li></p>
									</div>
								</div>
								<div class="body">
									<div class="row list-row">
										<div class="row-layout data-12">
											<div class="col-layout size-12 col-xs-12">
												<p>Full width</p>
											</div>
										</div>
										<div class="row-layout data-9-3">
											<div class="col-layout size-9 col-xs-9">
												<p>Columb 1</p>
											</div>
											<div class="col-layout size-3 col-xs-3">
												<p>Columb 2</p>
											</div>
										</div>
										<div class="row-layout data-3-9">
											<div class="col-layout size-3 col-xs-3">
												<p>Columb 1</p>
											</div>
											<div class="col-layout size-9 col-xs-9">
												<p>Columb 2</p>
											</div>
										</div>
										<div class="row-layout data-3-6-3">
											<div class="col-layout size-3 col-xs-3">
												<p>Columb 1</p>
											</div>
											<div class="col-layout size-6 col-xs-6">
												<p>Columb 2</p>
											</div>
											<div class="col-layout size-3 col-xs-3">
												<p>Columb 3</p>
											</div>
										</div>
										<div class="row-layout data-8-4">
											<div class="col-layout size-8 col-xs-8">
												<p>Columb 1</p>
											</div>
											<div class="col-layout size-4 col-xs-4">
												<p>Columb 2</p>
											</div>
										</div>
										<div class="row-layout data-4-8">
											<div class="col-layout size-4 col-xs-4">
												<p>Columb 1</p>
											</div>
											<div class="col-layout size-8 col-xs-8">
												<p>Columb 2</p>
											</div>
										</div>
										<div class="row-layout data-6-6">
											<div class="col-layout size-6 col-xs-6">
												<p>Columb 1</p>
											</div>
											<div class="col-layout size-6 col-xs-6">
												<p>Columb 2</p>
											</div>
										</div>
										<div class="row-layout data-4-4-4">
											<div class="col-layout size-4 col-xs-4">
												<p>Columb 1</p>
											</div>
											<div class="col-layout size-4 col-xs-4">
												<p>Columb 2</p>
											</div>
											<div class="col-layout size-4 col-xs-4">
												<p>Columb 3</p>
											</div>
										</div>
										<div class="row-layout data-3-3-3-3">
											<div class="col-layout size-3 col-xs-3">
												<p>Columb 1</p>
											</div>
											<div class="col-layout size-3 col-xs-3">
												<p>Columb 2</p>
											</div>
											<div class="col-layout size-3 col-xs-3">
												<p>Columb 3</p>
											</div>
											<div class="col-layout size-3 col-xs-3">
												<p>Columb 4</p>
											</div>
										</div>
									</div>
								</div>
								<div class="footer">
									<div class="act-btn">
										<p class="apply-selected"><i class="fa fa-check"></i> Apply</p>
										<p class="close-this"><i class="fa fa-circle-o"></i> Cancel</p>
									</div>
								</div>
							</div>
						</div>
HERE;
			return $output;
		}
		public function WindowSettingLayout(){
			global $CMS, $DB;
			$output = "";
			$output =<<<HERE
						<div id="settinglayout">
							<div class="contain">
								<div class="header">
									<div class="title">
										<p><i class="fa fa-cogs"></i></li> {$CMS->vars['lang']['window_settingframe_title']}</p>
									</div>
									<div class="act-btn">
										<p class="close-this">Close <i class="fa fa-close"></i></li></p>
									</div>
								</div>
								<div class="body">
									<div class="row setting-frame">
										<div class="primary row-data form-horizontal">
											<div class="preview">
												<div class="target">
													<p>Content</p>
												</div>
												<input type="hidden" class="background-image" name="background" value="" />
											</div>
											<div class="one-set">
												<label class="control-label col-md-6" for="block_title">Fullwidth: </label>
												<div class="col-md-6">
													<input class="use-fullwidth" type="checkbox" data-toggle="toggle" data-on="Yes" data-off="No">
												</div>
											</div>
											<div class="one-set">
												<label class="control-label col-md-6" for="block_title">Background: </label>
												<div class="col-md-6">
													<a class="btn btn-primary x-attachment-select-one" data-toggle="modal" data-target="#window-attachment-quickaccess"><i class="fa fa-photo"></i> Select</a>
													<a class="btn btn-primary remove-bgimage">No Image</a>
												</div>
											</div>
											<div class="one-set">
												<label class="control-label col-md-6" for="block_title">Full width background (no repeat): </label>
												<div class="col-md-6">
													<input class="background-fullwidth" type="checkbox" data-toggle="toggle" data-on="Yes" data-off="No">
												</div>
											</div>
											<div class="one-set">
												<label class="control-label col-md-6" for="block_title">Background color: </label>
												<div class="col-md-6">
													<input class="background-color form-control" type='color' name='background_color' />
												</div>
											</div>
											<div class="one-set">
												<label class="control-label col-md-6" for="block_title">Border type: </label>
												<div class="col-md-6">
													<select name="border_type" class="border-type form-control">
														<option value="solid">______ Solid</option>
														<option value="dashed">--------- Dashed</option>
														<option value="dotted">............ Dotted</option>
													</select>
												</div>
											</div>
											<div class="one-set">
												<label class="control-label col-md-6" for="block_title">Border size: </label>
												<div class="col-md-6">
													<input class="border-size form-control" type="number" value="5">
												</div>
											</div>
											<div class="one-set">
												<label class="control-label col-md-6" for="block_title">Border color: </label>
												<div class="col-md-6">
													<input class="border-color form-control" type='color' name='border_color' />
												</div>
											</div>
											<div class="one-set">
												<label class="control-label col-md-6" for="block_title">Border top: </label>
												<div class="col-md-6">
													<input class="border-top" type="checkbox" data-toggle="toggle" data-on="Yes" data-off="No">
												</div>
											</div>
											<div class="one-set">
												<label class="control-label col-md-6" for="block_title">Border left: </label>
												<div class="col-md-6">
													<input class="border-left" type="checkbox" data-toggle="toggle" data-on="Yes" data-off="No">
												</div>
											</div>
											<div class="one-set">
												<label class="control-label col-md-6" for="block_title">Border right: </label>
												<div class="col-md-6">
													<input class="border-right" type="checkbox" data-toggle="toggle" data-on="Yes" data-off="No">
												</div>
											</div>
											<div class="one-set">
												<label class="control-label col-md-6" for="block_title">Border bottom: </label>
												<div class="col-md-6">
													<input class="border-bottom" type="checkbox" data-toggle="toggle" data-on="Yes" data-off="No">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="footer">
									<div class="act-btn">
										<p class="apply-selected"><i class="fa fa-check"></i> Apply</p>
										<p class="close-this"><i class="fa fa-circle-o"></i> Cancel</p>
									</div>
								</div>
							</div>
						</div>
HERE;
			return $output;
		}
		public function WindowAddItemNormal(){
			global $CMS, $DB;
			$output = "";
			$output =<<<HERE
						<div id="AddItemNormal">
							<div class="contain">
								<div class="header">
									<div class="title">
										<p><i class="fa fa-cogs"></i></li> Add menu item (Normal)</p>
									</div>
									<div class="act-btn">
										<p class="close-this">Close <i class="fa fa-close"></i></li></p>
									</div>
								</div>
								<div class="body">
									<div class="row setting-frame">
										<div class="primary row-data form-horizontal">
											<div class="setting-init menu-item-link-input">
												<div class="tab-master">
													<div class='checkbox checkbox-info checkbox-circle'>
														<input type="checkbox" checked="" id="checkbox_link_input" name="item_type" class="item-type-selection"><label for="checkbox_link_input"> Link normal</label>
													</div>
												</div>
												<div class="tab-slaver">
													<div class="form-group">
														<label class="control-label col-md-4" for="menu_label">Label: </label>
														<div class="col-md-8">
															<input class="name form-control" type="text" name="menu_label">
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-4" for="menu_link">Link: </label>
														<div class="col-md-8">
															<input class="link form-control" type="text" name="menu_link">
														</div>
													</div>
												</div>
											</div>
											<div class="setting-init menu-item-post menu-item-object-can-edit">
												<div class="tab-master">
													<div class='checkbox checkbox-info checkbox-circle'>
														<input type="checkbox" checked="" id="checkbox_post" name="item_type" class="item-type-selection"><label for="checkbox_post"> Post</label>
													</div>
												</div>
												<div class="tab-slaver row">
													<div class="col-md-2">
														<img src="{$CMS->vars['root_domain']}/admin/skin/style/images/default_image.png" class="thumb" />
													</div>
													<div class="col-md-8">
														<div class="form-group">
															<input class="name form-control" type="text" name="menu_object_name" placeholder="Object name">
														</div>
														<div class="form-group">
															<input class="link form-control" type="text" name="menu_object_link" placeholder="{$CMS->vars['root_domain']}/object link">
														</div>
													</div>
													<div class="col-md-2">
														<a class="btn btn-primary x-object-select-one" style="margin-top: 5px;" data-toggle="modal" data-target="#window-object-quickaccess"> Change</a>
													</div>
												</div>
											</div>
											<div class="setting-init menu-item-post-category menu-item-object-can-edit">
												<div class="tab-master">
													<div class='checkbox checkbox-info checkbox-circle'>
														<input type="checkbox" checked="" id="checkbox_post" name="item_type" class="item-type-selection"><label for="checkbox_post"> Post category</label>
													</div>
												</div>
												<div class="tab-slaver row">
													<div class="col-md-2">
														<img src="{$CMS->vars['root_domain']}/admin/skin/style/images/default_image.png" class="thumb" />
													</div>
													<div class="col-md-8">
														<div class="form-group">
															<input class="name form-control" type="text" name="menu_object_name" placeholder="Object name">
														</div>
														<div class="form-group">
															<input class="link form-control" type="text" name="menu_object_link" placeholder="{$CMS->vars['root_domain']}/object link">
														</div>
														<div class="form-group tree-append-option">
															<label class="control-label col-md-8" for="menu_tree">Auto append sub menu: </label>
															<div class="col-md-4">
																<input class="append-tree" type="checkbox" data-toggle="toggle" data-on="Yes" data-off="No">
															</div>
														</div>
													</div>
													<div class="col-md-2">
														<a class="btn btn-primary x-object-select-one" style="margin-top: 5px;" data-toggle="modal" data-target="#window-object-quickaccess"> Change</a>
													</div>
												</div>
											</div>
											<div class="setting-init menu-item-product menu-item-object-can-edit">
												<div class="tab-master">
													<div class='checkbox checkbox-info checkbox-circle'>
														<input type="checkbox" checked="" id="checkbox_post" name="item_type" class="item-type-selection"><label for="checkbox_post"> Product</label>
													</div>
												</div>
												<div class="tab-slaver row">
													<div class="col-md-2">
														<img src="{$CMS->vars['root_domain']}/admin/skin/style/images/default_image.png" class="thumb" />
													</div>
													<div class="col-md-8">
														<div class="form-group">
															<input class="name form-control" type="text" name="menu_object_name" placeholder="Object name">
														</div>
														<div class="form-group">
															<input class="link form-control" type="text" name="menu_object_link" placeholder="{$CMS->vars['root_domain']}/object link">
														</div>
													</div>
													<div class="col-md-2">
														<a class="btn btn-primary x-object-select-one" style="margin-top: 5px;" data-toggle="modal" data-target="#window-object-quickaccess"> Change</a>
													</div>
												</div>
											</div>
											<div class="setting-init menu-item-product-category menu-item-object-can-edit">
												<div class="tab-master">
													<div class='checkbox checkbox-info checkbox-circle'>
														<input type="checkbox" checked="" id="checkbox_post" name="item_type" class="item-type-selection"><label for="checkbox_post"> Product category</label>
													</div>
												</div>
												<div class="tab-slaver row">
													<div class="col-md-2">
														<img src="{$CMS->vars['root_domain']}/admin/skin/style/images/default_image.png" class="thumb" />
													</div>
													<div class="col-md-8">
														<div class="form-group">
															<input class="name form-control" type="text" name="menu_object_name" placeholder="Object name">
														</div>
														<div class="form-group">
															<input class="link form-control" type="text" name="menu_object_link" placeholder="{$CMS->vars['root_domain']}/object link">
														</div>
														<div class="form-group tree-append-option">
															<label class="control-label col-md-8" for="menu_tree">Auto append sub menu: </label>
															<div class="col-md-4">
																<input class="append-tree" type="checkbox" data-toggle="toggle" data-on="Yes" data-off="No">
															</div>
														</div>
													</div>
													<div class="col-md-2">
														<a class="btn btn-primary x-object-select-one" style="margin-top: 5px;" data-toggle="modal" data-target="#window-object-quickaccess"> Change</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="footer">
									<div class="act-btn">
										<p class="apply-selected"><i class="fa fa-check"></i> Apply</p>
										<p class="close-this"><i class="fa fa-circle-o"></i> Cancel</p>
									</div>
								</div>
							</div>
						</div>
HERE;
			return $output;
		}
		public function WindowAddItemMega(){
			global $CMS, $DB;
			$output = "";
			$output =<<<HERE
						<div id="AddItemMega">
							<div class="contain">
								<div class="header">
									<div class="title">
										<p><i class="fa fa-cogs"></i></li> Add menu item (Mega)</p>
									</div>
									<div class="act-btn">
										<p class="close-this">Close <i class="fa fa-close"></i></li></p>
									</div>
								</div>
								<div class="body">
									<div class="select-mega-item-type">
										<div class="target-item-form">
											<p><i class="fa fa-dedent"></i> Form</p>
										</div>
										<div class="target-item-tab">
											<p><i class="fa fa-files-o"></i> Multi tab</p>
										</div>
										<div class="target-item-column">
											<p><i class="fa fa-columns"></i> Multi columns</p>
										</div>
										<div class="target-item-slider">
											<p><i class="fa fa-tv"></i> Slider</p>
										</div>
										<div class="target-item-gallery">
											<p><i class="fa fa-th"></i> Gallery</p>
										</div>
										<div class="target-item-html">
											<p><i class="fa fa-code"></i> HTML</p>
										</div>
										<div class="target-item-user">
											<p><i class="fa fa-user"></i> User area</p>
										</div>
										<div class="target-item-search">
											<p><i class="fa fa-search"></i> Search form</p>
										</div>
									</div>
								</div>
								<div class="footer">
									<div class="act-btn">
										<p class="apply-selected"><i class="fa fa-check"></i> Apply</p>
										<p class="close-this"><i class="fa fa-circle-o"></i> Cancel</p>
									</div>
								</div>
							</div>
						</div>
HERE;
			return $output;
		}
		public function WindowSelectItemType(){
			global $CMS, $DB;
			$output = "";
			$output =<<<HERE
						<div id="SelectItemType">
							<div class="contain">
								<div class="header">
									<div class="title">
										<p><i class="fa fa-cogs"></i></li> Select menu item type</p>
									</div>
									<div class="act-btn">
										<p class="close-this">Close <i class="fa fa-close"></i></li></p>
									</div>
								</div>
								<div class="body">
									<div class="select-menu-item-type">
										<div class="target-item-normal">
											<p><i class="fa fa-th-list"></i> Item normal</p>
										</div>
										<div class="target-item-mega">
											<p><i class="fa fa-th-large"></i> Item mega</p>
										</div>
									</div>
								</div>
								<div class="footer">
									<div class="act-btn">
										<p class="apply-selected"><i class="fa fa-check"></i> Apply</p>
										<p class="close-this"><i class="fa fa-circle-o"></i> Cancel</p>
									</div>
								</div>
							</div>
						</div>
HERE;
			return $output;
		}
		public function WindowMainRowChange(){
			global $CMS, $DB;
			$output = "";
			$output =<<<HERE
						<div id="MainRowChange">
							<div class="contain">
								<div class="header">
									<div class="title">
										<p><i class="fa fa-cogs"></i></li> Main row change</p>
									</div>
									<div class="act-btn">
										<p class="close-this">Close <i class="fa fa-close"></i></li></p>
									</div>
								</div>
								<div class="body">
									<div class="row list-row">
										<div class="row-layout data-12">
											<div class="col-layout size-12 col-xs-12 mainframe">
												<p>Main frame</p>
											</div>
										</div>
										<div class="row-layout data-9-3">
											<div class="col-layout size-9 col-xs-9 mainframe">
												<p>Main frame</p>
											</div>
											<div class="col-layout size-3 col-xs-3">
												<p>Side bar</p>
											</div>
										</div>
										<div class="row-layout data-3-6-3">
											<div class="col-layout size-3 col-xs-3">
												<p>Side bar</p>
											</div>
											<div class="col-layout size-6 col-xs-6 mainframe">
												<p>Main frame</p>
											</div>
											<div class="col-layout size-3 col-xs-3">
												<p>Side bar</p>
											</div>
										</div>
										<div class="row-layout data-8-4">
											<div class="col-layout size-8 col-xs-8 mainframe">
												<p>Main frame</p>
											</div>
											<div class="col-layout size-4 col-xs-4">
												<p>Side bar</p>
											</div>
										</div>
										<div class="row-layout data-6-6">
											<div class="col-layout size-6 col-xs-6 mainframe">
												<p>Main frame</p>
											</div>
											<div class="col-layout size-6 col-xs-6">
												<p>Side bar</p>
											</div>
										</div>
									</div>
								</div>
								<div class="footer">
									<div class="act-btn">
										<p class="apply-selected"><i class="fa fa-check"></i> Apply</p>
										<p class="close-this"><i class="fa fa-circle-o"></i> Cancel</p>
									</div>
								</div>
							</div>
						</div>
HERE;
			return $output;
		}
		public function GetBlockSetting(){
			global $CMS, $DB;
			$output = "";
			$output = $CMS->unit[$CMS->input['moduleType']]->GetBlockSetting($CMS->input['defaultData']);
			return $output;
		}
		public function ReloadBlock(){
			global $CMS, $DB;
			if($CMS->input['blockData']){
				$Data = $CMS->input['blockData'];
				$output = $CMS->unit[$Data['moduleType']]->ReloadBlock($CMS->input['blockData']);
			}else{
				$output = "";
			}
			return $output;
		}
		public function GetPageListData(){
			global $CMS, $DB;
			$DB->query("use ".WEBSITE_DBNAME);
			$sql = $DB->query("SELECT p.id, pd.name, pd.nice_url, p.status, p.icon FROM page p,page_description pd WHERE p.id=pd.page_id AND pd.lang_id='1' AND 1=1 ORDER BY p.id");
			if($data = $sql->fetchAll()){
				return $data;
			}else{
				return false;
			}
		}
		public function GetMenuListData(){
			global $CMS, $DB;
			$DB->query("use ".WEBSITE_DBNAME);
			$sql = $DB->query("SELECT * FROM menu WHERE lang_id='1' AND 1=1 ORDER BY id DESC");
			if($data = $sql->fetchAll()){
				return $data;
			}else{
				return false;
			}
		}
		public function LoadPageData($id){
			global $CMS, $DB;
			$DB->query("use ".WEBSITE_DBNAME);
			$sql = $DB->query("SELECT pd.name, pd.nice_url, p.data FROM page p,page_description pd WHERE p.id=pd.page_id AND p.id='{$id}' AND pd.lang_id='1'");
			if($data = $sql->fetchAll()){
				return $data[0];
			}else{
				return false;
			}
		}
	}