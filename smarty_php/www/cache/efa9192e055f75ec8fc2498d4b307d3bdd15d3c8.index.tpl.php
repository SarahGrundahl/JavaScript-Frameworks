<?php
/* Smarty version 3.1.32, created on 2018-06-15 08:53:49
  from 'C:\Users\Sarah\Desktop\jQueryFirstRepository-\smarty_php\www\templates\tasteamazon\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b237e9d8b7282_00135666',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f3fe29e359699ef510bd7388f66024c4a4d2a3c' => 
    array (
      0 => 'C:\\Users\\Sarah\\Desktop\\jQueryFirstRepository-\\smarty_php\\www\\templates\\tasteamazon\\index.tpl',
      1 => 1529052188,
      2 => 'file',
    ),
    '76c3f6acd8e78f8d7aa31a0fe52a48666c2ad1d6' => 
    array (
      0 => 'C:\\Users\\Sarah\\Desktop\\jQueryFirstRepository-\\smarty_php\\www\\templates\\header.tpl',
      1 => 1529052824,
      2 => 'file',
    ),
    'c785e74d3461940f5e55bb2565784d896d3c1ff1' => 
    array (
      0 => 'C:\\Users\\Sarah\\Desktop\\jQueryFirstRepository-\\smarty_php\\www\\templates\\footer.tpl',
      1 => 1529051639,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_5b237e9d8b7282_00135666 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
    <title>Dette er min test side til tasteamazon.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="../www/javascripts/jsonrpc2.js"></script>
    <script type="text/javascript" src="../www/javascripts/tasteamazon/Product.class.js"></script>
</head>
<body>
    <button class="btn btn-primary" onclick="Product.helloWorld();">Dette er min test side til tasteamazon.com - :P</button>
</body>
</html>
<?php }
}
