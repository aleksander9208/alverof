{extends 'file:templates/index.tpl'}

{block 'content'}
    <div class="content">
         <div class="content-text_title">
            Достичь результата можно самым разным способом, моя задача найти оптимальный
        </div>
        {'pdoResources' | snippet : [
            'parents' => 13,
            'tpl' => '@FILE chunks/resources/servicesSection.tpl',
            'includeTVs' => 'images',
            'sortdir' => 'ASC',
            'includeContent' => 1,
            'limit' => 1000,
        ]}
    </div>
{/block}