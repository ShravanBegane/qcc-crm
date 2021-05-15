<?php /* Smarty version Smarty-3.1.7, created on 2021-02-19 14:48:01
         compiled from "/home/qccrightchoice/public_html/includes/runtime/../../layouts/v7/modules/ExtensionStore/Promotions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1178575383602fcfa1b0ce07-91848034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca863745bcb51ab14141851fb703ed1da9ce6b8a' => 
    array (
      0 => '/home/qccrightchoice/public_html/includes/runtime/../../layouts/v7/modules/ExtensionStore/Promotions.tpl',
      1 => 1608219988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1178575383602fcfa1b0ce07-91848034',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HEADER_SCRIPTS' => 0,
    'SCRIPT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_602fcfa1b1d9e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_602fcfa1b1d9e')) {function content_602fcfa1b1d9e($_smarty_tpl) {?>

<?php  $_smarty_tpl->tpl_vars['SCRIPT'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['SCRIPT']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['HEADER_SCRIPTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['SCRIPT']->key => $_smarty_tpl->tpl_vars['SCRIPT']->value){
$_smarty_tpl->tpl_vars['SCRIPT']->_loop = true;
?><script type="<?php echo $_smarty_tpl->tpl_vars['SCRIPT']->value->getType();?>
" src="<?php echo $_smarty_tpl->tpl_vars['SCRIPT']->value->getSrc();?>
" /><?php } ?><div class="banner-container" style="margin: 0px 10px;"><div class="row"></div></div>
<?php }} ?>