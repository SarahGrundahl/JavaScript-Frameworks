<?php
/* Smarty version 3.1.32, created on 2018-06-13 11:36:50
  from 'C:\Users\Sarah\Desktop\jQueryFirstRepository-\smarty_php\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b2101d25b6977_49038635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5291af199e333a68bf9b7f00819df008644be90a' => 
    array (
      0 => 'C:\\Users\\Sarah\\Desktop\\jQueryFirstRepository-\\smarty_php\\templates\\index.tpl',
      1 => 1528889804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5b2101d25b6977_49038635 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '17796745365b2101d255f543_56395324';
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <button class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 - :P</button>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
