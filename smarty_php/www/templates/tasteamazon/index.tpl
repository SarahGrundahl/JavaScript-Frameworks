{config_load file="test.conf" section="setup"}
{include file="../header.tpl"}
    <button class="btn btn-primary" onclick="Product.helloWorld();">{$name} - :P</button>
{include file="../footer.tpl"}
