{extends 'file:templates/index.tpl'}

{block 'content'}
    <div class="content">
        <div class="content-text_title">
            Из этого раздела сайта можно узнать, где я учился и какие знания получил
        </div>
        
        {'pdoResources' | snippet : [
            'parent' => 12,
            'tpl' => '@FILE chunks/resources/jobSection.tpl',
            'tplWrapper' => '@INLINE <div class="job">{$output}</div>',
            'includeTVs' => 'year,specialty,images',
            'limit' => 100,
            'includeContent' => true,
            'sortdir' => 'ASC',
        ]}
    </div>
{/block}