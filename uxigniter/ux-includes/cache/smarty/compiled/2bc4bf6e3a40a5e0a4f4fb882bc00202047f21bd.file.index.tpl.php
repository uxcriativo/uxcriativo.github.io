<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-04 22:13:15
         compiled from "X:\xampp\htdocs\_dev\projects\uxigniter\ux-content\electro\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14534572a57dbd4ae61-70410989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bc4bf6e3a40a5e0a4f4fb882bc00202047f21bd' => 
    array (
      0 => 'X:\\xampp\\htdocs\\_dev\\projects\\uxigniter\\ux-content\\electro\\index.tpl',
      1 => 1461129534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14534572a57dbd4ae61-70410989',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'partial' => 0,
    'subview' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_572a57dbdd8577_09421012',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572a57dbdd8577_09421012')) {function content_572a57dbdd8577_09421012($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="pt"  ><!--<![endif]-->
<head>
<?php echo $_smarty_tpl->getSubTemplate ('common/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ('components/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if (isset($_smarty_tpl->tpl_vars['partial']->value)) {
echo $_smarty_tpl->getSubTemplate ((('partials/').($_smarty_tpl->tpl_vars['partial']->value)).('.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
}?>
<?php if (isset($_smarty_tpl->tpl_vars['subview']->value)) {
echo $_smarty_tpl->tpl_vars['subview']->value;
}?>
<?php echo $_smarty_tpl->getSubTemplate ('components/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('common/scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php }} ?>
