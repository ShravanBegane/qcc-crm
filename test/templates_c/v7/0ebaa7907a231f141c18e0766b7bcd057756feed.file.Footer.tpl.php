<?php /* Smarty version Smarty-3.1.7, created on 2020-12-17 16:10:19
         compiled from "/home/newcrmrightchoic/public_html/includes/runtime/../../layouts/v7/modules/Vtiger/Footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8934547685fdb170439a2e5-08425516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ebaa7907a231f141c18e0766b7bcd057756feed' => 
    array (
      0 => '/home/newcrmrightchoic/public_html/includes/runtime/../../layouts/v7/modules/Vtiger/Footer.tpl',
      1 => 1608221416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8934547685fdb170439a2e5-08425516',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fdb17043b145',
  'variables' => 
  array (
    'LANGUAGE_STRINGS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fdb17043b145')) {function content_5fdb17043b145($_smarty_tpl) {?>

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