<?php /* Smarty version Smarty-3.1.7, created on 2021-03-30 12:33:02
         compiled from "/home/qccrightchoice/public_html/includes/runtime/../../layouts/v7/modules/Vtiger/partials/Menubar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1478912686030a93a930915-33876712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74106c8299781430c7d44b0828955ca43e7e06f6' => 
    array (
      0 => '/home/qccrightchoice/public_html/includes/runtime/../../layouts/v7/modules/Vtiger/partials/Menubar.tpl',
      1 => 1617107579,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1478912686030a93a930915-33876712',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_6030a93a96430',
  'variables' => 
  array (
    'MENU_STRUCTURE' => 0,
    'SELECTED_CATEGORY_MENU_LIST' => 0,
    'moduleModel' => 0,
    'moduleName' => 0,
    'translatedModuleLabel' => 0,
    'MODULE' => 0,
    'SELECTED_MENU_CATEGORY' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6030a93a96430')) {function content_6030a93a96430($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['MENU_STRUCTURE']->value){?>
<?php $_smarty_tpl->tpl_vars["topMenus"] = new Smarty_variable($_smarty_tpl->tpl_vars['MENU_STRUCTURE']->value->getTop(), null, 0);?>
<?php $_smarty_tpl->tpl_vars["moreMenus"] = new Smarty_variable($_smarty_tpl->tpl_vars['MENU_STRUCTURE']->value->getMore(), null, 0);?>

<div id="modules-menu" class="modules-menu">
	<?php  $_smarty_tpl->tpl_vars['moduleModel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['moduleModel']->_loop = false;
 $_smarty_tpl->tpl_vars['moduleName'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SELECTED_CATEGORY_MENU_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['moduleModel']->key => $_smarty_tpl->tpl_vars['moduleModel']->value){
$_smarty_tpl->tpl_vars['moduleModel']->_loop = true;
 $_smarty_tpl->tpl_vars['moduleName']->value = $_smarty_tpl->tpl_vars['moduleModel']->key;
?>
		<?php $_smarty_tpl->tpl_vars['translatedModuleLabel'] = new Smarty_variable(vtranslate($_smarty_tpl->tpl_vars['moduleModel']->value->get('label'),$_smarty_tpl->tpl_vars['moduleName']->value), null, 0);?>
		<ul title="<?php echo $_smarty_tpl->tpl_vars['translatedModuleLabel']->value;?>
" class="module-qtip">
			<li <?php if ($_smarty_tpl->tpl_vars['MODULE']->value==$_smarty_tpl->tpl_vars['moduleName']->value){?>class="active"<?php }else{ ?>class=""<?php }?>>
			    <?php if ($_smarty_tpl->tpl_vars['moduleName']->value=='Accounts'){?>
								    	<a href="index.php?module=Accounts&view=List&app=MARKETING" title="Clients">
								    	<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getModuleIcon();?>

                            			<span>Client</span>
			<?php }elseif($_smarty_tpl->tpl_vars['moduleName']->value=='Users'){?>
								    	<a href="index.php?module=Users&parent=Settings&view=List&block=1&fieldid=1" title="Employee Management">
								    	<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getModuleIcon();?>

                            			<span><?php echo $_smarty_tpl->tpl_vars['translatedModuleLabel']->value;?>
</span>
			<?php }else{ ?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getDefaultUrl();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
">
					<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getModuleIcon();?>

					<span><?php echo $_smarty_tpl->tpl_vars['translatedModuleLabel']->value;?>
</span>
					<?php }?>
				</a>
			</li>
		</ul>
	<?php } ?>
</div>
<?php }?>
<?php }} ?>