<!doctype html>
<html>
    <head>
        {include 'file:chunks/head.tpl'}
    </head>
    
    <body>
    	<div class="wrapper">
    	    {include 'file:chunks/header.tpl'}
            
    	    {block 'content'}
    	        <div class="content">
    	            {$_modx->resource.content}
    	        </div>
    	        
    	    {/block}
    
    	    {include 'file:chunks/footer.tpl'}
        </div>
    </body>
</html>