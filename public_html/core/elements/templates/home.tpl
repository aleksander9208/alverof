{extends 'file:templates/index.tpl'}

{block 'content'}
    <div class="content">
        <div class="content-ava">
            <img src="/assets/templates/alferov/images/ava-home.png">
        </div>
        {$_modx->resource.content}
    </div>
{/block}