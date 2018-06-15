<?php
/* Smarty version 3.1.32, created on 2018-06-15 08:34:14
  from 'C:\Users\Sarah\Desktop\jQueryFirstRepository-\smarty_php\www\templates\tasteamazon\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b237a06d21247_40333440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f3fe29e359699ef510bd7388f66024c4a4d2a3c' => 
    array (
      0 => 'C:\\Users\\Sarah\\Desktop\\jQueryFirstRepository-\\smarty_php\\www\\templates\\tasteamazon\\index.tpl',
      1 => 1529048858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../header.tpl' => 1,
    'file:../footer.tpl' => 1,
  ),
),false)) {
function content_5b237a06d21247_40333440 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <button class="btn btn-primary" onclick="Product.HelloWorld()"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 - :P</button>
<?php $_smarty_tpl->_subTemplateRender("file:../footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
