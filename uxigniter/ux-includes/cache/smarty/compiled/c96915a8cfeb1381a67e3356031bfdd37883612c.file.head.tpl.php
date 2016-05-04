<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-04 22:13:15
         compiled from "X:\xampp\htdocs\_dev\projects\uxigniter\ux-content\electro\common\head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12423572a57dbf1fbb7-44259473%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c96915a8cfeb1381a67e3356031bfdd37883612c' => 
    array (
      0 => 'X:\\xampp\\htdocs\\_dev\\projects\\uxigniter\\ux-content\\electro\\common\\head.tpl',
      1 => 1461147759,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12423572a57dbf1fbb7-44259473',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
    'project' => 0,
    'favicon' => 0,
    'styles' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_572a57dc015214_15336256',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572a57dc015214_15336256')) {function content_572a57dc015214_15336256($_smarty_tpl) {?>   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title><?php echo strtoupper($_smarty_tpl->tpl_vars['content']->value->title);
echo $_smarty_tpl->tpl_vars['content']->value->pagesTITLE;?>
 - <?php echo $_smarty_tpl->tpl_vars['project']->value['title'];?>
 </title>
     <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['content']->value->subtitle;?>
 <?php echo $_smarty_tpl->tpl_vars['project']->value['description'];?>
">
     <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['content']->value->keywords;?>
">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="icon" href="data:image/x-icon;base64,<?php echo $_smarty_tpl->tpl_vars['favicon']->value;?>
" type="image/x-icon" />
   	 <link rel="stylesheet" href="https://uxcdn.firebaseapp.com/css/nuclear.css"> 
   	 <style><?php echo $_smarty_tpl->tpl_vars['styles']->value;?>
.zoom:after { background:url(<?php echo base_url();?>
nc-content/uploads/icon.png);}#ex1 img:hover { cursor: url(<?php echo base_url();?>
nc-content/uploads/grab.cur), default;}</style>
   <?php echo '<script'; ?>
 src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"><?php echo '</script'; ?>
>
   <?php echo '<script'; ?>
>window.jQuery || document.write('<?php echo '<script'; ?>
 src="https://uxcdn.firebaseapp.com/jquery-1.11.2.min"><\/script>')<?php echo '</script'; ?>
>
   <?php echo '<script'; ?>
>window.jQuery || document.write('<?php echo '<script'; ?>
 src="<?php echo base_url();?>
nc-content/static/js/jquery-1.11.2.min.js"><\/script>')<?php echo '</script'; ?>
>

   
         <?php }} ?>
