<?php /* Smarty version Smarty-3.1.7, created on 2020-12-17 08:33:47
         compiled from "/home/newcrmrightchoic/public_html/includes/runtime/../../layouts/v7/modules/Calendar/CalendarViewTypes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1898574765fdb17ebea3547-26694446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1de5da5f89455a798f2e2fde710542151d54fec8' => 
    array (
      0 => '/home/newcrmrightchoic/public_html/includes/runtime/../../layouts/v7/modules/Calendar/CalendarViewTypes.tpl',
      1 => 1602587794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1898574765fdb17ebea3547-26694446',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'VIEWTYPES' => 0,
    'VIEWINFO' => 0,
    'MODULE' => 0,
    'ADDVIEWS' => 0,
    'INVISIBLE_CALENDAR_VIEWS_EXISTS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5fdb17ebed33e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fdb17ebed33e')) {function content_5fdb17ebed33e($_smarty_tpl) {?>

<div class="sidebar-widget-contents" name='calendarViewTypes'><div id="calendarview-feeds"><ul class="list-group feedslist"><?php  $_smarty_tpl->tpl_vars['VIEWINFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['VIEWINFO']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['VIEWTYPES']->value['visible']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['VIEWINFO']->key => $_smarty_tpl->tpl_vars['VIEWINFO']->value){
$_smarty_tpl->tpl_vars['VIEWINFO']->_loop = true;
?><li class="activitytype-indicator calendar-feed-indicator container-fluid" style="background-color: <?php echo $_smarty_tpl->tpl_vars['VIEWINFO']->value['color'];?>
;"><span><?php echo vtranslate($_smarty_tpl->tpl_vars['VIEWINFO']->value['module'],$_smarty_tpl->tpl_vars['VIEWINFO']->value['module']);?>
<?php if ($_smarty_tpl->tpl_vars['VIEWINFO']->value['conditions']['name']!=''){?> (<?php echo vtranslate($_smarty_tpl->tpl_vars['VIEWINFO']->value['conditions']['name'],$_smarty_tpl->tpl_vars['MODULE']->value);?>
) <?php }?>-<?php echo vtranslate($_smarty_tpl->tpl_vars['VIEWINFO']->value['fieldlabel'],$_smarty_tpl->tpl_vars['VIEWINFO']->value['module']);?>
</span><span class="activitytype-actions pull-right"><input class="toggleCalendarFeed cursorPointer" type="checkbox" data-calendar-sourcekey="<?php echo $_smarty_tpl->tpl_vars['VIEWINFO']->value['module'];?>
_<?php echo $_smarty_tpl->tpl_vars['VIEWINFO']->value['fieldname'];?>
<?php if ($_smarty_tpl->tpl_vars['VIEWINFO']->value['conditions']['name']!=''){?>_<?php echo $_smarty_tpl->tpl_vars['VIEWINFO']->value['conditions']['name'];?>
<?php }?>" data-calendar-feed="<?php echo $_smarty_tpl->tpl_vars['VIEWINFO']->value['module'];?>
"data-calendar-feed-color="<?php echo $_smarty_tpl->tpl_vars['VIEWINFO']->value['color'];?>
" data-calendar-fieldlabel="<?php echo vtranslate($_smarty_tpl->tpl_vars['VIEWINFO']->value['fieldlabel'],$_smarty_tpl->tpl_vars['VIEWINFO']->value['module']);?>
"data-calendar-fieldname="<?php echo $_smarty_tpl->tpl_vars['VIEWINFO']->value['fieldname'];?>
" title="<?php echo vtranslate($_smarty_tpl->tpl_vars['VIEWINFO']->value['module'],$_smarty_tpl->tpl_vars['VIEWINFO']->value['module']);?>
" data-calendar-type="<?php echo $_smarty_tpl->tpl_vars['VIEWINFO']->value['type'];?>
"data-calendar-feed-textcolor="white" data-calendar-feed-conditions='<?php echo $_smarty_tpl->tpl_vars['VIEWINFO']->value['conditions']['rules'];?>
' />&nbsp;&nbsp;<i class="fa fa-pencil editCalendarFeedColor cursorPointer"></i>&nbsp;&nbsp;<i class="fa fa-trash deleteCalendarFeed cursorPointer"></i></span></li><?php } ?></ul><?php $_smarty_tpl->tpl_vars['INVISIBLE_CALENDAR_VIEWS_EXISTS'] = new Smarty_variable('false', null, 0);?><?php if ($_smarty_tpl->tpl_vars['ADDVIEWS']->value){?><?php $_smarty_tpl->tpl_vars['INVISIBLE_CALENDAR_VIEWS_EXISTS'] = new Smarty_variable('true', null, 0);?><?php }?><input type="hidden" class="invisibleCalendarViews" value="<?php echo $_smarty_tpl->tpl_vars['INVISIBLE_CALENDAR_VIEWS_EXISTS']->value;?>
" /><ul class="hide dummy"><li class="activitytype-indicator calendar-feed-indicator feed-indicator-template container-fluid"><span></span><span class="activitytype-actions pull-right"><input class="toggleCalendarFeed cursorPointer" type="checkbox" data-calendar-sourcekey="" data-calendar-feed=""data-calendar-feed-color="" data-calendar-fieldlabel=""data-calendar-fieldname="" title="" data-calendar-type=""data-calendar-feed-textcolor="white">&nbsp;&nbsp;<i class="fa fa-pencil editCalendarFeedColor cursorPointer"></i>&nbsp;&nbsp;<i class="fa fa-trash deleteCalendarFeed cursorPointer"></i></span></li></ul></div></div><?php }} ?>