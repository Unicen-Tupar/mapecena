<?php /* Smarty version Smarty-3.1.14, created on 2014-11-24 07:35:57
         compiled from ".\templates\eventos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2647154725f85d5c730-49720779%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa5cb7cc04deca18df6072c481defddd058bfce8' => 
    array (
      0 => '.\\templates\\eventos.tpl',
      1 => 1416810951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2647154725f85d5c730-49720779',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54725f85dfb1b0_71008303',
  'variables' => 
  array (
    'eventos' => 0,
    'evento' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54725f85dfb1b0_71008303')) {function content_54725f85dfb1b0_71008303($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
</div>
</div>

<div class="main_bg">
    <div class="wrap">
        <div class="wrapper">
            <div class="main">
                <h2 class="style">Eventos</h2>
            </div>
        </div>
    </div>
</div>

<!-- BUSQUEDA -->
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form class = "busqueda" id="formBusquedaE" method="POST">
            <br>
            <input type="text" name="inputBuscarE" placeholder = 'Buscar...'>
            <button class = "btn btn-default" type = "submit" >
                <i class="fa fa-search"></i>              
            </button>
        </form>
    </div>
</div>

<div id="resEventos">
<?php  $_smarty_tpl->tpl_vars['evento'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['evento']->_loop = false;
 $_smarty_tpl->tpl_vars['id_evento'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['eventos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['evento']->key => $_smarty_tpl->tpl_vars['evento']->value){
$_smarty_tpl->tpl_vars['evento']->_loop = true;
 $_smarty_tpl->tpl_vars['id_evento']->value = $_smarty_tpl->tpl_vars['evento']->key;
?>
<div class="maq">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <img class="img-responsive foto img-rounded" src="<?php echo $_smarty_tpl->tpl_vars['evento']->value['Ruta'];?>
" />
                    
                    <a href="index.php?action=galeriaId&amp;id=<?php echo $_smarty_tpl->tpl_vars['evento']->value['id_Contenido'];?>
" class="fa fa-camera-retro fa-4x iconos"></a>
                </div>
                <div class="col-md-1"></div>
            </div>
            
            <h3 class="style"><?php echo utf8_encode($_smarty_tpl->tpl_vars['evento']->value['Nombre']);?>
</h3>
            <p class="para top"><?php echo utf8_encode($_smarty_tpl->tpl_vars['evento']->value['Texto']);?>
</p>
            <strong><h4>Fecha: <?php echo $_smarty_tpl->tpl_vars['evento']->value['Fecha'];?>
</h4>
            <h4>Ubicación: <?php echo utf8_encode($_smarty_tpl->tpl_vars['evento']->value['Ubicacion']);?>
</h4></strong>

        </div>
        <div class="col-md-3"></div>
    </div>
</div>


<?php } ?>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>