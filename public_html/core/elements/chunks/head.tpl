<meta name="viewport" content="width=device-width, initial-scale=1">
<title>[[pdoTitle]]</title>
<meta name="keywords" content="[[*keywords]]">
<meta name="description" content="[[*meta-desc]]">
    {$_modx->runSnippet('MinifyX', [
        'minifyCss' => 1, 
        'minifyJs' => 1,
        'registerCss' => 'default',
        'registerJs' => 'default',
        'cssSources' => 'assets/templates/alferov/css/styles.less',
                        
        'jsSources' => '
            assets/templates/alferov/uikit/js/uikit.min.js,
            assets/templates/alferov/uikit/js/components/grid.min.js,
            assets/templates/alferov/uikit/js/core/modal.min.js,
            assets/templates/alferov/uikit/js/components/slideshow.min.js,
            assets/templates/alferov/uikit/js/components/slideshow-fx.min.js,
            assets/templates/alferov/uikit/js/core/scrollspy.min.js,
            assets/templates/alferov/uikit/js/core/smooth-scroll.min.js,
            assets/templates/alferov/uikit/js/core/toggle.min.js,
            assets/templates/alferov/uikit/js/components/sticky.min.js,
            assets/templates/alferov/uikit/js/components/lightbox.min.js,
            
            assets/templates/alferov/js/main.js
        '
    ])}
<base href="[[++site_url]]" />
<link rel="icon" href="assets/templates/alferov/images/favicon-tk.png" type="image/png" />
<script src="assets/templates/alferov/js/jquery-1.11.3.min.js"></script>
