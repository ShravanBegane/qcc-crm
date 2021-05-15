<?php /* Smarty version Smarty-3.1.7, created on 2021-02-23 14:23:38
         compiled from "/home/qccrightchoice/public_html/includes/runtime/../../layouts/v7/modules/EmailTemplates/IndexViewPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16799837560350fea8caa46-28840076%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8724d0284966d2f12310277e8edde336c337e6d7' => 
    array (
      0 => '/home/qccrightchoice/public_html/includes/runtime/../../layouts/v7/modules/EmailTemplates/IndexViewPreProcess.tpl',
      1 => 1608193749,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16799837560350fea8caa46-28840076',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'smary' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60350fea94039',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60350fea94039')) {function content_60350fea94039($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/Topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="container-fluid app-nav">
    <div class="row">
        <?php echo $_smarty_tpl->getSubTemplate ("modules/Settings/Vtiger/SidebarHeader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <?php $_smarty_tpl->tpl_vars['ACTIVE_BLOCK'] = new Smarty_variable(array('block'=>'Templates','menu'=>$_smarty_tpl->tpl_vars['smary']->value['request']['module']), null, 0);?>
        <?php echo $_smarty_tpl->getSubTemplate ("modules/Settings/Vtiger/ModuleHeader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
</div>
</nav>
 <div id='overlayPageContent' class='fade modal overlayPageContent content-area overlay-container-60' tabindex='-1' role='dialog' aria-hidden='true'>
        <div class="data">
        </div>
        <div class="modal-dialog">
        </div>
    </div>
<?php }} ?>