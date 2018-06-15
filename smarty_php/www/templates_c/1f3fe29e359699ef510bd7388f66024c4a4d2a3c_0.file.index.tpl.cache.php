<?php
/* Smarty version 3.1.32, created on 2018-06-15 07:29:18
  from 'C:\Users\Sarah\Desktop\jQueryFirstRepository-\smarty_php\www\templates\tasteamazon\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b236ace5275b1_75860659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f3fe29e359699ef510bd7388f66024c4a4d2a3c' => 
    array (
      0 => 'C:\\Users\\Sarah\\Desktop\\jQueryFirstRepository-\\smarty_php\\www\\templates\\tasteamazon\\index.tpl',
      1 => 1529047699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../header.tpl' => 1,
    'file:../footer.tpl' => 1,
  ),
),false)) {
function content_5b236ace5275b1_75860659 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2684192845b236ace3c2a17_49749077';
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <button class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 - :P</button>
<?php $_smarty_tpl->_subTemplateRender("file:../footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
