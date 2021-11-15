<?php
/* Smarty version 3.1.40, created on 2021-11-15 11:20:09
  from '/var/www/html/Chapter7/templates/smarty_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_61924269ef5d66_78355295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35d6efe228fdd3d8943af2f045a7b4fb7e701624' => 
    array (
      0 => '/var/www/html/Chapter7/templates/smarty_list.tpl',
      1 => 1636975202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61924269ef5d66_78355295 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Smarty</title>
</head>
<body>
<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['books']->value, 'book');
$_smarty_tpl->tpl_vars['book']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['book']->value) {
$_smarty_tpl->tpl_vars['book']->do_else = false;
?>
<li
	<?php if ($_smarty_tpl->tpl_vars['book']->value['price'] > 3500) {?>style="color:Red;"<?php }?>>
	<a href="http://www.wings.msn.to/index.php/-/A-03/<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['book']->value['isbn'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['book']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>
	(<?php echo mb_convert_encoding(htmlspecialchars(number_format($_smarty_tpl->tpl_vars['book']->value['price'],1), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
円／<?php echo mb_convert_encoding(htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['book']->value['published'],'%Y/%m/%d'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
刊行)
</li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
</body>
</html>
<?php }
}
