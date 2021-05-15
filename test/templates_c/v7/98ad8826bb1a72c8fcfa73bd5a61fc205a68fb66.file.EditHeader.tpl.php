<?php /* Smarty version Smarty-3.1.7, created on 2021-02-23 14:06:33
         compiled from "/home/qccrightchoice/public_html/includes/runtime/../../layouts/v7/modules/Settings/MailConverter/EditHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179003016060350be9c2b591-62574173%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98ad8826bb1a72c8fcfa73bd5a61fc205a68fb66' => 
    array (
      0 => '/home/qccrightchoice/public_html/includes/runtime/../../layouts/v7/modules/Settings/MailConverter/EditHeader.tpl',
      1 => 1602587794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179003016060350be9c2b591-62574173',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CREATE' => 0,
    'RECORD_ID' => 0,
    'STEP' => 0,
    'QUALIFIED_MODULE' => 0,
    'BREADCRUMB_LABELS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60350be9cd9a2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60350be9cd9a2')) {function content_60350be9cd9a2($_smarty_tpl) {?>

<div class="editViewPageDiv mailBoxEditDiv viewContent"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><input type="hidden" id="create" value="<?php echo $_smarty_tpl->tpl_vars['CREATE']->value;?>
" /><input type="hidden" id="recordId" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" /><input type="hidden" id="step" value="<?php echo $_smarty_tpl->tpl_vars['STEP']->value;?>
" /><h4><?php if ($_smarty_tpl->tpl_vars['CREATE']->value=='new'){?><?php echo vtranslate('LBL_ADDING_NEW_MAILBOX',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }else{ ?><?php echo vtranslate('LBL_EDIT_MAILBOX',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }?></h4><hr><div class="editViewContainer" style="padding-left: 2%;padding-right: 2%"><div class="row"><?php $_smarty_tpl->tpl_vars['BREADCRUMB_LABELS'] = new Smarty_variable(array("step1"=>"MAILBOX_DETAILS","step2"=>"SELECT_FOLDERS"), null, 0);?><?php if ($_smarty_tpl->tpl_vars['CREATE']->value=='new'){?><?php $_smarty_tpl->createLocalArrayVariable('BREADCRUMB_LABELS', null, 0);
$_smarty_tpl->tpl_vars['BREADCRUMB_LABELS']->value['step3'] = 'ADD_RULES';?><?php }?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("BreadCrumbs.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('BREADCRUMB_LABELS'=>$_smarty_tpl->tpl_vars['BREADCRUMB_LABELS']->value,'MODULE'=>$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), 0);?>
</div><div class="clearfix"></div><?php }} ?>