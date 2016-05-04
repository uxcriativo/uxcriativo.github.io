<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-04 22:14:27
         compiled from "X:\xampp\htdocs\_dev\projects\uxigniter\ux-content\themes\electro\components\navbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21850572a58238c4f25-56144906%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '906ffb977b9dc8db802b370a5a85e0bdcbc8efbe' => 
    array (
      0 => 'X:\\xampp\\htdocs\\_dev\\projects\\uxigniter\\ux-content\\themes\\electro\\components\\navbar.tpl',
      1 => 1462000890,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21850572a58238c4f25-56144906',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'assets' => 0,
    'navigation' => 0,
    'active' => 0,
    'ncontrol' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_572a5823909343_62218783',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572a5823909343_62218783')) {function content_572a5823909343_62218783($_smarty_tpl) {?><!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top affix-top " data-spy="affix" data-offset-top="100" style="z-index:1000">
        <div class="container" style="background: #fff;">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
          		<a class="navbar-brand" href="<?php echo base_url();?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/uploads/white.png" alt="" ></a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
             <ul class="nav navbar-nav navbar-right">     
                <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_smarty_tpl->tpl_vars['fokey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['navigation']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
 $_smarty_tpl->tpl_vars['fokey']->value = $_smarty_tpl->tpl_vars['foo']->key;
?>
                   <li class="<?php if (($_smarty_tpl->tpl_vars['active']->value).($_smarty_tpl->tpl_vars['ncontrol']->value)==$_smarty_tpl->tpl_vars['foo']->value->menuLINK||($_smarty_tpl->tpl_vars['active']->value).('/')==$_smarty_tpl->tpl_vars['foo']->value->menuLINK||($_smarty_tpl->tpl_vars['foo']->value->menuLINK==''&&$_smarty_tpl->tpl_vars['active']->value=='init')||($_smarty_tpl->tpl_vars['foo']->value->menuLINK==$_smarty_tpl->tpl_vars['active']->value)) {?>active<?php }?>" >
                   		<a href="<?php echo base_url();
echo $_smarty_tpl->tpl_vars['foo']->value->menuLINK;?>
" onclick="closenav();" class="serifa" style="text-transform:capitalize">
                   			<?php echo $_smarty_tpl->tpl_vars['foo']->value->menuNAME;?>

                   		</a>
                   </li>
                 <?php } ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<?php }} ?>
