<?php /* Smarty version Smarty-3.1.7, created on 2020-12-17 08:58:07
         compiled from "/home/newcrmrightchoic/public_html/includes/runtime/../../layouts/v7/modules/Users/uitypes/UserRoleFieldSearchView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14462543615fdb1d9fbc95b9-27738127%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27a043e3235aeed920e2e93f89e61ad3cc33d889' => 
    array (
      0 => '/home/newcrmrightchoic/public_html/includes/runtime/../../layouts/v7/modules/Users/uitypes/UserRoleFieldSearchView.tpl',
      1 => 1602587794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14462543615fdb1d9fbc95b9-27738127',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FIELD_MODEL' => 0,
    'SEARCH_INFO' => 0,
    'FIELD_INFO' => 0,
    'ROLES' => 0,
    'ROLE_NAME' => 0,
    'SEARCH_VALUES' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fdb1d9fbef02',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fdb1d9fbef02')) {function content_5fdb1d9fbef02($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars["FIELD_INFO"] = new Smarty_variable(Zend_Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()), null, 0);?>
<?php $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name'), null, 0);?>
<?php $_smarty_tpl->tpl_vars['ROLES'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getAllRoles(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['SEARCH_VALUES'] = new Smarty_variable(explode(',',$_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue']), null, 0);?>
<div class="select2_search_div">
	<input type="text" class="listSearchContributor inputElement select2_input_element"/>
	<select class="select2 listSearchContributor" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name');?>
" multiple data-fieldinfo='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['FIELD_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
' style="display:none;">
		<?php  $_smarty_tpl->tpl_vars['ROLE_ID'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ROLE_ID']->_loop = false;
 $_smarty_tpl->tpl_vars['ROLE_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ROLES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ROLE_ID']->key => $_smarty_tpl->tpl_vars['ROLE_ID']->value){
$_smarty_tpl->tpl_vars['ROLE_ID']->_loop = true;
 $_smarty_tpl->tpl_vars['ROLE_NAME']->value = $_smarty_tpl->tpl_vars['ROLE_ID']->key;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['ROLE_NAME']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['ROLE_NAME']->value,$_smarty_tpl->tpl_vars['SEARCH_VALUES']->value)&&($_smarty_tpl->tpl_vars['ROLE_NAME']->value!='')){?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['ROLE_NAME']->value;?>
</option>
		<?php } ?>
	</select>
</div>
<?php }} ?>