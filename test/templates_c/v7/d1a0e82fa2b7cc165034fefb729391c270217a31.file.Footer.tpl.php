<?php /* Smarty version Smarty-3.1.7, created on 2021-02-19 14:46:53
         compiled from "/home/qccrightchoice/public_html/includes/runtime/../../layouts/v7/modules/Vtiger/Footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198968073602fcf5dc61e11-02464069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1a0e82fa2b7cc165034fefb729391c270217a31' => 
    array (
      0 => '/home/qccrightchoice/public_html/includes/runtime/../../layouts/v7/modules/Vtiger/Footer.tpl',
      1 => 1608221416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198968073602fcf5dc61e11-02464069',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANGUAGE_STRINGS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_602fcf5dc72cc',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_602fcf5dc72cc')) {function content_602fcf5dc72cc($_smarty_tpl) {?>

<footer class="app-footer">
	<p>
		Powered by RightChoice© <?php echo date('Y');?>
&nbsp;&nbsp;
		<a href="//www.rightchoice.io" target="_blank">RightChoice</a>&nbsp;
		
	</p>
</footer>
</div>
<div id='overlayPage'>
	<!-- arrow is added to point arrow to the clicked element (Ex:- TaskManagement), 
	any one can use this by adding "show" class to it -->
	<div class='arrow'></div>
	<div class='data'>
	</div>
</div>
<div id='helpPageOverlay'></div>
<div id="js_strings" class="hide noprint"><?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['LANGUAGE_STRINGS']->value);?>
</div>
<div class="modal myModal fade"></div>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('JSResources.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>

</html><?php }} ?>