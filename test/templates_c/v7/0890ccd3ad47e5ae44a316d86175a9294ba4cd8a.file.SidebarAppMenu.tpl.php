<?php /* Smarty version Smarty-3.1.7, created on 2021-04-05 13:04:12
         compiled from "/home/qccrightchoice/public_html/includes/runtime/../../layouts/v7/modules/Vtiger/partials/SidebarAppMenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18782745602fcf864ab0f9-92821975%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0890ccd3ad47e5ae44a316d86175a9294ba4cd8a' => 
    array (
      0 => '/home/qccrightchoice/public_html/includes/runtime/../../layouts/v7/modules/Vtiger/partials/SidebarAppMenu.tpl',
      1 => 1617627823,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18782745602fcf864ab0f9-92821975',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_602fcf864e3f2',
  'variables' => 
  array (
    'DASHBOARD_MODULE_MODEL' => 0,
    'USER_PRIVILEGES_MODEL' => 0,
    'HOME_MODULE_MODEL' => 0,
    'APP_LIST' => 0,
    'APP_NAME' => 0,
    'APP_GROUPED_MENU' => 0,
    'APP_MENU_MODEL' => 0,
    'APP_IMAGE_MAP' => 0,
    'moduleModel' => 0,
    'moduleName' => 0,
    'translatedModuleLabel' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_602fcf864e3f2')) {function content_602fcf864e3f2($_smarty_tpl) {?>

<div class="app-menu hide" id="app-menu">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2 col-xs-2 cursorPointer app-switcher-container">
				<div class="row app-navigator">
					<span id="menu-toggle-action" class="app-icon fa fa-bars"></span>
				</div>
			</div>
		</div>
		<?php $_smarty_tpl->tpl_vars['USER_PRIVILEGES_MODEL'] = new Smarty_variable(Users_Privileges_Model::getCurrentUserPrivilegesModel(), null, 0);?>
		<?php $_smarty_tpl->tpl_vars['HOME_MODULE_MODEL'] = new Smarty_variable(Vtiger_Module_Model::getInstance('Home'), null, 0);?>
		<?php $_smarty_tpl->tpl_vars['DASHBOARD_MODULE_MODEL'] = new Smarty_variable(Vtiger_Module_Model::getInstance('Dashboard'), null, 0);?>
		<div class="app-list row">
			<?php if ($_smarty_tpl->tpl_vars['USER_PRIVILEGES_MODEL']->value->hasModulePermission($_smarty_tpl->tpl_vars['DASHBOARD_MODULE_MODEL']->value->getId())){?>
				<div class="menu-item app-item dropdown-toggle" data-default-url="<?php echo $_smarty_tpl->tpl_vars['HOME_MODULE_MODEL']->value->getDefaultUrl();?>
">
					<div class="menu-items-wrapper">
						<span class="app-icon-list fa fa-dashboard"></span>
						<span class="app-name textOverflowEllipsis"> Right View </span>
					</div>
				</div>
			<?php }?>
			
			
			
			
			
			
			
			
			<?php $_smarty_tpl->tpl_vars['APP_GROUPED_MENU'] = new Smarty_variable(Settings_MenuEditor_Module_Model::getAllVisibleModules(), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['APP_LIST'] = new Smarty_variable(Vtiger_MenuStructure_Model::getAppMenuList(), null, 0);?>
			<?php  $_smarty_tpl->tpl_vars['APP_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['APP_NAME']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['APP_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['APP_NAME']->key => $_smarty_tpl->tpl_vars['APP_NAME']->value){
$_smarty_tpl->tpl_vars['APP_NAME']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['APP_NAME']->value=='ANALYTICS'){?> <?php continue 1?><?php }?>
				<?php if (!empty($_smarty_tpl->tpl_vars['APP_GROUPED_MENU']->value[$_smarty_tpl->tpl_vars['APP_NAME']->value])){?>
					<div class="dropdown app-modules-dropdown-container">
						<?php  $_smarty_tpl->tpl_vars['APP_MENU_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['APP_MENU_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['APP_GROUPED_MENU']->value[$_smarty_tpl->tpl_vars['APP_NAME']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['APP_MENU_MODEL']->key => $_smarty_tpl->tpl_vars['APP_MENU_MODEL']->value){
$_smarty_tpl->tpl_vars['APP_MENU_MODEL']->_loop = true;
?>
							<?php $_smarty_tpl->tpl_vars['FIRST_MENU_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['APP_MENU_MODEL']->value, null, 0);?>
							<?php if ($_smarty_tpl->tpl_vars['APP_MENU_MODEL']->value){?>
								<?php break 1?>
							<?php }?>
						<?php } ?>
						
						<div class="menu-item app-item dropdown-toggle app-item-color-<?php echo $_smarty_tpl->tpl_vars['APP_NAME']->value;?>
" data-app-name="<?php echo $_smarty_tpl->tpl_vars['APP_NAME']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['APP_NAME']->value;?>
_modules_dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-default-url="#">
							<div class="menu-items-wrapper app-menu-items-wrapper">
								<span class="app-icon-list fa <?php echo $_smarty_tpl->tpl_vars['APP_IMAGE_MAP']->value[$_smarty_tpl->tpl_vars['APP_NAME']->value];?>
"></span>
								<span class="app-name textOverflowEllipsis"> <?php echo vtranslate("LBL_".($_smarty_tpl->tpl_vars['APP_NAME']->value));?>
</span>
								<span class="fa fa-chevron-right pull-right"></span>
							</div>
						</div>
						<ul class="dropdown-menu app-modules-dropdown" aria-labelledby="<?php echo $_smarty_tpl->tpl_vars['APP_NAME']->value;?>
_modules_dropdownMenu">
							<?php  $_smarty_tpl->tpl_vars['moduleModel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['moduleModel']->_loop = false;
 $_smarty_tpl->tpl_vars['moduleName'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['APP_GROUPED_MENU']->value[$_smarty_tpl->tpl_vars['APP_NAME']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['moduleModel']->key => $_smarty_tpl->tpl_vars['moduleModel']->value){
$_smarty_tpl->tpl_vars['moduleModel']->_loop = true;
 $_smarty_tpl->tpl_vars['moduleName']->value = $_smarty_tpl->tpl_vars['moduleModel']->key;
?>
								<?php $_smarty_tpl->tpl_vars['translatedModuleLabel'] = new Smarty_variable(vtranslate($_smarty_tpl->tpl_vars['moduleModel']->value->get('label'),$_smarty_tpl->tpl_vars['moduleName']->value), null, 0);?>
								<li>
								    <?php if ($_smarty_tpl->tpl_vars['moduleName']->value=='Accounts'&&$_smarty_tpl->tpl_vars['APP_NAME']->value=='RIGHTCLEAN'){?>
								    	<a href="index.php?module=Accounts&view=List&app=MARKETING" title="Clients">
								    	<span class="module-icon"><i class="vicon-meeting"></i></span>
										<span class="module-name textOverflowEllipsis"> Clients</span>
								    <?php }elseif($_smarty_tpl->tpl_vars['moduleName']->value=='Users'&&$_smarty_tpl->tpl_vars['APP_NAME']->value=='RIGHTCLEAN'){?>
								    	<a href="index.php?module=Users&parent=Settings&view=List&block=1&fieldid=1" title="Employee Management">
								    	<span class="module-icon"><?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getModuleIcon();?>
</span>
										<span class="module-name textOverflowEllipsis"> Employee Management</span>
								    <?php }else{ ?>
    									<a href="<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getDefaultUrl();?>
&app=<?php echo $_smarty_tpl->tpl_vars['APP_NAME']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['translatedModuleLabel']->value;?>
">
    										<span class="module-icon"><?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getModuleIcon();?>
</span>
    										<span class="module-name textOverflowEllipsis"> <?php echo $_smarty_tpl->tpl_vars['translatedModuleLabel']->value;?>
</span>
    									</a>
    								<?php }?>
								</li>
							<?php } ?>
						</ul>
					</div>
				<?php }?>
			<?php } ?>
			<div class="app-list-divider"></div>
			
			<?php $_smarty_tpl->tpl_vars['DOCUMENTS_MODULE_MODEL'] = new Smarty_variable(Vtiger_Module_Model::getInstance('Documents'), null, 0);?>
			
		</div>
	</div>
</div>
<?php }} ?>