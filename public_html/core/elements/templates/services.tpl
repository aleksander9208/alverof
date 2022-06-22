{extends 'file:templates/index.tpl'}

{block 'content'}
    <div class="content">
        <div class="content-text_title">
            Я устраняю причины заболевания, а не их следствия 
        </div>
        
        {'pdoResources' | snippet : [
            'parents' => 3,
            'tpl' => '@FILE chunks/resources/servicesSection.tpl',
            'sortdir' => 'ASC',
            'includeTVs' => 'images',
            'includeContent' => 1,
            'limit' => 1000,
        ]}
    </div>
{/block}