<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-04 22:14:27
         compiled from "X:\xampp\htdocs\_dev\projects\uxigniter\ux-content\themes\electro\components\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29579572a58239b4ab8-78020455%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1adf4b9a0cff9493ab8dc57dd277e951a61ff9e' => 
    array (
      0 => 'X:\\xampp\\htdocs\\_dev\\projects\\uxigniter\\ux-content\\themes\\electro\\components\\footer.tpl',
      1 => 1462000905,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29579572a58239b4ab8-78020455',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'assets' => 0,
    'project' => 0,
    'categories' => 0,
    'a' => 0,
    't' => 0,
    'val' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_572a5823a4a181_91437050',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572a5823a4a181_91437050')) {function content_572a5823a4a181_91437050($_smarty_tpl) {?><section style="padding:25px;0px;text-align:center;background:#fff;border-top:1px solid #000">
	<div style="color:#140b04"> <div style="text-align: center; line-height: 1.8;"><span style="font-size: 36px;">Tem alguma dúvida?</span></div></div>
	<a class="btn btn-default bg1 color0  bgtitle " data-toggle="modal" data-target="#myModal" >Contactar Agora</a>
	

</section>
<section class="footer" >
    <div class="container" >
		<div class="row">         
			<div class="col-sm-3 md-margin-bottom-40" >
				<a  href="<?php echo base_url();?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['assets']->value;?>
/uploads/logo.png" width="100%" alt=""></a>
        		<address class="md-margin-bottom-40 color0" style="clear:both"><br/>
	        		<b><?php echo $_smarty_tpl->tpl_vars['project']->value['title'];?>
</b><br/>
					<?php echo $_smarty_tpl->tpl_vars['project']->value['description'];?>
<br/>
					<br/>
                   <?php echo $_smarty_tpl->tpl_vars['project']->value['address'];?>
<br/>	
				   <?php echo $_smarty_tpl->tpl_vars['project']->value['CEP'];?>
 - <?php echo $_smarty_tpl->tpl_vars['project']->value['city'];?>
<br/> 
				   <?php echo $_smarty_tpl->tpl_vars['project']->value['country'];?>
<br/>								
				   <b>Telefone:</b> <?php echo $_smarty_tpl->tpl_vars['project']->value['phone1'];?>
<br/>
				   <b>Telemóvel:</b> <?php echo $_smarty_tpl->tpl_vars['project']->value['phone2'];?>
<br/>
				   <b>Fax:</b> <?php echo $_smarty_tpl->tpl_vars['project']->value['fax'];?>
<br/>
				   <b>Email:</b> <?php echo $_smarty_tpl->tpl_vars['project']->value['email'];?>

               
				</address>
            </div>
			<div class="col-sm-5 color0"  >
				<h5 >Catálogo</h5>
				<hr class="break"/>
                <div class="col-md-6 md-margin-bottom-40" style="padding:0" >
                   			<?php $_smarty_tpl->tpl_vars['categories'] = new Smarty_variable(get_categories(), null, 0);?>
                <?php if (isset($_smarty_tpl->tpl_vars['categories']->value)) {?>
					<?php $_smarty_tpl->tpl_vars['a'] = new Smarty_variable(0, null, 0);?> <?php $_smarty_tpl->tpl_vars['t'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['categories']->value), null, 0);?>
						<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['fokey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['fokey']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
							<?php $_smarty_tpl->tpl_vars['a'] = new Smarty_variable($_smarty_tpl->tpl_vars['a']->value+1, null, 0);?>
						<?php if ($_smarty_tpl->tpl_vars['a']->value>$_smarty_tpl->tpl_vars['t']->value/2) {?>
							</div><div class="col-md-6 md-margin-bottom-40" style="padding:0">
						<?php }?>
						<a href="<?php echo base_url();?>
catalogo/<?php echo $_smarty_tpl->tpl_vars['val']->value->groupsSLUG;?>
" style="color:#fff;font-size:14px" >
            			<?php echo $_smarty_tpl->tpl_vars['val']->value->groupsTITLE;?>
</a><br>
					<?php } ?>
				
				<?php }?>
						</div>
			</div>
			<div class="col-sm-4 color0" >
				
					<h5>Links-rápidos</h5>
				<hr class="break"/>
				<div class="col-md-12 nowrap md-margin-bottom-40"   >
				<div class="col-md-12 nowrap md-margin-bottom-40" >
                <a href="<?php echo base_url();?>
catalogo/" class="color0">
			            	Catálogo</a>
			            	<br>
	                <?php if (isset($_smarty_tpl->tpl_vars['pages']->value)) {?>
	                	<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['fokey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['fokey']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
							<a href="<?php echo base_url();?>
page/<?php echo $_smarty_tpl->tpl_vars['val']->value->pagesSLUG;?>
"  class="color0">
			            	<?php echo $_smarty_tpl->tpl_vars['val']->value->pagesTITLE;?>
</a>
			            	<br>
						<?php } ?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['project']->value['facebook'];?>
" ><?php echo $_smarty_tpl->tpl_vars['project']->value['facebook'];?>
</a><br>
					<?php }?>              
				</div>
			</div>
         </div>
      </div>
</section>      
<footer class="copyright">
     <div class="container">
         <div class="row">
              <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
	                <p style="text-align:center" >
	                	<?php echo $_smarty_tpl->tpl_vars['project']->value['title'];?>
 &copy;<?php echo date("Y",time());?>

	                	<b>Developed by: </b>
	                	<a href="http:///www.joelferreira.eu" target="_blank" style="color:rgba(255,255,255,0.5)">Joel Ferreira</a> 
	                 </p>
              </div>
         </div>
    </div>
    <p id="back-top2" >
		<a href="#top">
			<span  class="shadow"><i class="fa fa-arrow-up" style="margin-bottom:6px"></i> <br/>TOP</span>
		</a>
	</p>
</footer>
    
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Solicitar Informações</h4>
      </div>
      <div class="modal-body">
      <div class="row">
	      <div class="col-sm-4"><b>nome:</b></div>
	      	<div class="col-sm-8"><input type="text" class="form-control"/></div>
      </div>
       <div class="row">
	      <div class="col-sm-4"><b>morada:</b></div>
	      	<div class="col-sm-8"><input type="text" class="form-control"/></div>
	    </div>
       <div class="row">
	      <div class="col-sm-4"><b>telefone:</b></div>
      	<div class="col-sm-8"><input type="text" class="form-control"/></div>
       </div>
       <div class="row">
      <div class="col-sm-4"><b>email:</b></div>
      	<div class="col-sm-8"><input type="text" class="form-control"/></div>
      	 </div>
       <div class="row">
      <div class="col-sm-4"><b>anexar imagem:</b></div>
      	<div class="col-sm-8"><input type="file" class="form-control"/></div>
      	 </div>
       <div class="row">
      <div class="col-sm-4"><b>mensagem:</b></div>
      	<div class="col-sm-8"><textarea  class="form-control"></textarea></div>
      	 </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">cancelar</button>
        <button type="button" class="btn btn-success btn-sm" style="padding:6px 12px">Enviar pedido</button>
      </div>
    </div>
  </div>
</div>
<style>
td, th{
padding:2px;}
</style>
    <?php }} ?>
