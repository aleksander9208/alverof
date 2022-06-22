<?php  return array (
  'config' => 
  array (
  ),
  'aliasMap' => 
  array (
    'index' => 1,
    'uslugi/' => 3,
    'obo-mne/' => 12,
    'ispolzuemyie-texniki/' => 13,
    'uslugi/lechenie-zabolevaniya-oporno-dvigatelnoj-sistemyi' => 8,
    'uslugi/lechenie-zabolevanij-zheludochno-kishechnogo-trakta' => 9,
    'uslugi/reshenie-ginekologicheskix-problem.-vedenie-beremennosti' => 10,
    'uslugi/izbavlenie-ot-nevrologicheskix-problem,-nevrozov-i-posledstvij-stressov' => 11,
    'uslugi/reshenie-kosmetologicheskix-problem' => 27,
    'uslugi/zabolevaniya-mochepolovoj-sistemyi' => 28,
    'uslugi/zabolevaniya-dyixatelnoj-sistemyi' => 29,
    'obo-mne/kislovodskij-mediczinskij-kolledzh-№-2' => 16,
    'obo-mne/v-g.-sankt-peterburg' => 17,
    'obo-mne/«shkola-somaticheskoj-integraczii»-chikurova-yu.v.-g.moskva' => 18,
    'obo-mne/siminar-psixologa-milakovoj-s.a' => 19,
    'obo-mne/«shkola-somaticheskoj-integraczii»-chikurova-yu.v' => 20,
    'obo-mne/seminar-doktora-yudina-m.n' => 21,
    'obo-mne/avtorskij-seminar-doktora-syiromyatnikova-a.e' => 22,
    'obo-mne/seminar-doktora-reabilitologa-kisileva-d.a' => 23,
    'obo-mne/seminaryi-doktora-syiromyatnikova-a.e' => 24,
    'obo-mne/psy2.0' => 25,
    'obo-mne/avtorskij-seminar-doktora-nauk-zhilberna-reno' => 26,
    'ispolzuemyie-texniki/nazvanie-zagolovka-h1' => 14,
    'ispolzuemyie-texniki/nozhi-h2' => 15,
    'ispolzuemyie-texniki/estetika-licza-i-tela' => 30,
    'ispolzuemyie-texniki/prikladnaya-keneziologiya' => 31,
    'ispolzuemyie-texniki/kineziotejpirovanie' => 32,
    'ispolzuemyie-texniki/psixodinamika' => 33,
  ),
  'resourceMap' => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 3,
      2 => 12,
      3 => 13,
    ),
    3 => 
    array (
      0 => 8,
      1 => 9,
      2 => 10,
      3 => 11,
      4 => 27,
      5 => 28,
      6 => 29,
    ),
    12 => 
    array (
      0 => 16,
      1 => 17,
      2 => 18,
      3 => 19,
      4 => 20,
      5 => 21,
      6 => 22,
      7 => 23,
      8 => 24,
      9 => 25,
      10 => 26,
    ),
    13 => 
    array (
      0 => 14,
      1 => 15,
      2 => 30,
      3 => 31,
      4 => 32,
      5 => 33,
    ),
  ),
  'webLinkMap' => 
  array (
  ),
  'eventMap' => 
  array (
    'OnBeforeDocFormSave' => 
    array (
      8 => '8',
    ),
    'OnBeforeEmptyTrash' => 
    array (
      8 => '8',
    ),
    'OnBeforeSaveWebPageCache' => 
    array (
      4 => '4',
    ),
    'OnChunkFormPrerender' => 
    array (
      1 => '1',
    ),
    'OnDocFormPrerender' => 
    array (
      1 => '1',
    ),
    'OnDocFormRender' => 
    array (
      8 => '8',
    ),
    'OnDocFormSave' => 
    array (
      6 => '6',
    ),
    'OnEmptyTrash' => 
    array (
      6 => '6',
    ),
    'OnFileCreateFormPrerender' => 
    array (
      1 => '1',
    ),
    'OnFileEditFormPrerender' => 
    array (
      1 => '1',
    ),
    'OnLoadWebDocument' => 
    array (
      6 => '6',
      8 => '8',
    ),
    'OnMODXInit' => 
    array (
      4 => '4',
      7 => '7',
    ),
    'OnPageNotFound' => 
    array (
      6 => '6',
    ),
    'OnPluginFormPrerender' => 
    array (
      1 => '1',
    ),
    'OnRichTextBrowserInit' => 
    array (
      5 => '5',
    ),
    'OnRichTextEditorInit' => 
    array (
      5 => '5',
    ),
    'OnRichTextEditorRegister' => 
    array (
      5 => '5',
      1 => '1',
    ),
    'OnSiteRefresh' => 
    array (
      3 => '3',
      4 => '4',
      6 => '6',
    ),
    'OnSnipFormPrerender' => 
    array (
      1 => '1',
    ),
    'OnTempFormPrerender' => 
    array (
      1 => '1',
    ),
    'OnUserSave' => 
    array (
      6 => '6',
    ),
    'OnWebPageComplete' => 
    array (
      6 => '6',
    ),
    'OnWebPagePrerender' => 
    array (
      6 => '6',
      3 => '3',
    ),
  ),
  'pluginCache' => 
  array (
    1 => 
    array (
      'id' => '1',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'Ace',
      'description' => 'Ace code editor plugin for MODx Revolution',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '/**
 * Ace Source Editor Plugin
 *
 * Events: OnManagerPageBeforeRender, OnRichTextEditorRegister, OnSnipFormPrerender,
 * OnTempFormPrerender, OnChunkFormPrerender, OnPluginFormPrerender,
 * OnFileCreateFormPrerender, OnFileEditFormPrerender, OnDocFormPrerender
 *
 * @author Danil Kostin <danya.postfactum(at)gmail.com>
 *
 * @package ace
 *
 * @var array $scriptProperties
 * @var Ace $ace
 */
if ($modx->event->name == \'OnRichTextEditorRegister\') {
    $modx->event->output(\'Ace\');
    return;
}

if ($modx->getOption(\'which_element_editor\', null, \'Ace\') !== \'Ace\') {
    return;
}

$ace = $modx->getService(\'ace\', \'Ace\', $modx->getOption(\'ace.core_path\', null, $modx->getOption(\'core_path\').\'components/ace/\').\'model/ace/\');
$ace->initialize();

$extensionMap = array(
    \'tpl\'   => \'text/x-smarty\',
    \'htm\'   => \'text/html\',
    \'html\'  => \'text/html\',
    \'css\'   => \'text/css\',
    \'scss\'  => \'text/x-scss\',
    \'less\'  => \'text/x-less\',
    \'svg\'   => \'image/svg+xml\',
    \'xml\'   => \'application/xml\',
    \'xsl\'   => \'application/xml\',
    \'js\'    => \'application/javascript\',
    \'json\'  => \'application/json\',
    \'php\'   => \'application/x-php\',
    \'sql\'   => \'text/x-sql\',
    \'md\'    => \'text/x-markdown\',
    \'txt\'   => \'text/plain\',
    \'twig\'  => \'text/x-twig\'
);

// Defines wether we should highlight modx tags
$modxTags = false;
switch ($modx->event->name) {
    case \'OnSnipFormPrerender\':
        $field = \'modx-snippet-snippet\';
        $mimeType = \'application/x-php\';
        break;
    case \'OnTempFormPrerender\':
        $field = \'modx-template-content\';
        $modxTags = true;

        switch (true) {
            case $modx->getOption(\'twiggy_class\'):
                $mimeType = \'text/x-twig\';
                break;
            case $modx->getOption(\'pdotools_fenom_parser\'):
                $mimeType = \'text/x-smarty\';
                break;
            default:
                $mimeType = \'text/html\';
                break;
        }

        break;
    case \'OnChunkFormPrerender\':
        $field = \'modx-chunk-snippet\';
        if ($modx->controller->chunk && $modx->controller->chunk->isStatic()) {
            $extension = pathinfo($modx->controller->chunk->getSourceFile(), PATHINFO_EXTENSION);
            $mimeType = isset($extensionMap[$extension]) ? $extensionMap[$extension] : \'text/plain\';
        } else {
            $mimeType = \'text/html\';
        }
        $modxTags = true;

        switch (true) {
            case $modx->getOption(\'twiggy_class\'):
                $mimeType = \'text/x-twig\';
                break;
            case $modx->getOption(\'pdotools_fenom_default\'):
                $mimeType = \'text/x-smarty\';
                break;
            default:
                $mimeType = \'text/html\';
                break;
        }

        break;
    case \'OnPluginFormPrerender\':
        $field = \'modx-plugin-plugincode\';
        $mimeType = \'application/x-php\';
        break;
    case \'OnFileCreateFormPrerender\':
        $field = \'modx-file-content\';
        $mimeType = \'text/plain\';
        break;
    case \'OnFileEditFormPrerender\':
        $field = \'modx-file-content\';
        $extension = pathinfo($scriptProperties[\'file\'], PATHINFO_EXTENSION);
        $mimeType = isset($extensionMap[$extension])
            ? $extensionMap[$extension]
            : \'text/plain\';
        $modxTags = $extension == \'tpl\';
        break;
    case \'OnDocFormPrerender\':
        if (!$modx->controller->resourceArray) {
            return;
        }
        $field = \'ta\';
        $mimeType = $modx->getObject(\'modContentType\', $modx->controller->resourceArray[\'content_type\'])->get(\'mime_type\');

        switch (true) {
            case $mimeType == \'text/html\' && $modx->getOption(\'twiggy_class\'):
                $mimeType = \'text/x-twig\';
                break;
            case $mimeType == \'text/html\' && $modx->getOption(\'pdotools_fenom_parser\'):
                $mimeType = \'text/x-smarty\';
                break;
        }

        if ($modx->getOption(\'use_editor\')){
            $richText = $modx->controller->resourceArray[\'richtext\'];
            $classKey = $modx->controller->resourceArray[\'class_key\'];
            if ($richText || in_array($classKey, array(\'modStaticResource\',\'modSymLink\',\'modWebLink\',\'modXMLRPCResource\'))) {
                $field = false;
            }
        }
        $modxTags = true;
        break;
    default:
        return;
}

$modxTags = (int) $modxTags;
$script = \'\';
if ($field) {
    $script .= "MODx.ux.Ace.replaceComponent(\'$field\', \'$mimeType\', $modxTags);";
}

if ($modx->event->name == \'OnDocFormPrerender\' && !$modx->getOption(\'use_editor\')) {
    $script .= "MODx.ux.Ace.replaceTextAreas(Ext.query(\'.modx-richtext\'));";
}

if ($script) {
    $modx->controller->addHtml(\'<script>Ext.onReady(function() {\' . $script . \'});</script>\');
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'ace/elements/plugins/ace.plugin.php',
    ),
    3 => 
    array (
      'id' => '3',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'MinifyX',
      'description' => '',
      'editor_type' => '0',
      'category' => '4',
      'cache_type' => '0',
      'plugincode' => 'switch ($modx->event->name) {

	case \'OnSiteRefresh\':
		if ($MinifyX = $modx->getService(\'minifyx\',\'MinifyX\', MODX_CORE_PATH.\'components/minifyx/model/minifyx/\')) {
			/** @var MinifyX $MinifyX */
			$MinifyX = new MinifyX($modx, array());
			if ($MinifyX->clearCache()) {
				$modx->log(modX::LOG_LEVEL_INFO, $modx->lexicon(\'refresh_default\').\': MinifyX\');
			}
		}
		break;

	case \'OnWebPagePrerender\':
		$time = microtime(true);
		// Process scripts and styles
		if ($modx->getOption(\'minifyx_process_registered\', null, false, true)) {
			if (!$modx->getService(\'minifyx\',\'MinifyX\', MODX_CORE_PATH.\'components/minifyx/model/minifyx/\')) {return false;}

			$current = array(
				\'head\' => $modx->sjscripts,
				\'body\' => $modx->jscripts,
			);
			$included = $excluded = $prepared = $raw = array(
				\'head\' => array(\'css\' => array(), \'js\' => array(), \'html\' => array()),
				\'body\' => array(\'css\' => array(), \'js\' => array(), \'html\' => array()),
			);
			$exclude = $modx->getOption(\'minifyx_exclude_registered\');

			// Split all scripts and styles by type
			foreach ($current as $key => $value) {
				foreach ($value as $v) {
					if (preg_match(\'/<(?:link|script).*?(?:href|src)=[\\\'|"](.*?)[\\\'|"]/\', $v, $tmp)) {
						if (strpos($tmp[1], \'.css\') !== false) {
							if (!empty($exclude) && preg_match($exclude, $tmp[1])) {
								$excluded[$key][\'css\'][] = $tmp[1];
							}
							else {
								$included[$key][\'css\'][] = $tmp[1];
							}
						}
						if (strpos($tmp[1], \'.js\') !== false) {
							if (!empty($exclude) && preg_match($exclude, $tmp[1])) {
								$excluded[$key][\'js\'][] = $tmp[1];
							}
							else {
								$included[$key][\'js\'][] = $tmp[1];
							}
						}
					}
					elseif (strpos($v, \'<script\') !== false) {
						$raw[$key][\'js\'][] = trim(preg_replace(\'#<!--.*?-->(\\n|)#s\', \'\', $v));
					}
					elseif (strpos($v, \'<style\') !== false) {
						$raw[$key][\'css\'][] = trim(preg_replace(\'#/\\*.*?\\*/(\\n|)#s\', \'\', $v));
					}
					else {
						$excluded[$key][\'html\'][] = $v;
					}
				}
			}

			// Main options for MinifyX
			$scriptProperties = array(
				\'cacheFolder\' => $modx->getOption(\'minifyx_cacheFolder\', null, \'/assets/components/minifyx/cache/\', true),
				\'forceUpdate\' => $modx->getOption(\'minifyx_forceUpdate\', null, false, true),
				\'minifyJs\' => $modx->getOption(\'minifyx_minifyJs\', null, false, true),
				\'minifyCss\' => $modx->getOption(\'minifyx_minifyCss\', null, false, true),
				\'jsFilename\' => $modx->getOption(\'minifyx_jsFilename\', null, \'all\', true),
				\'cssFilename\' => $modx->getOption(\'minifyx_cssFilename\', null, \'all\', true),
			);

			/** @var MinifyX $MinifyX */
			$MinifyX = new MinifyX($modx, $scriptProperties);
			if (!$MinifyX->prepareCacheFolder()) {
				$this->modx->log(modX::LOG_LEVEL_ERROR, \'[MinifyX] Could not create cache dir "\'.$scriptProperties[\'cacheFolder\'].\'"\');
				return;
			}
			$cacheFolderUrl = MODX_BASE_URL . str_replace(MODX_BASE_PATH, \'\', $MinifyX->config[\'cacheFolder\']);

			// Process raw scripts and styles
			$tmp_dir = $MinifyX->getTmpDir() . \'resources/\' . $modx->resource->id . \'/\';
			foreach ($raw as $key => $value) {
				foreach ($value as $type => $rows) {
					$tmp = \'\';
					if ($type == \'css\' && $modx->getOption(\'minifyx_processRawCss\', null, false, true) ||
						$type == \'js\' && $modx->getOption(\'minifyx_processRawJs\', null, false, true)) {

						$text = \'\';
						foreach ($rows as $text) {
							$text = preg_replace(\'#^<(script|style).*?>#\', \'\', $text);
							$text = preg_replace(\'#</(script|style)>$#\', \'\', $text);
							$tmp .= $text;
						}

						if (!empty($tmp)) {
							$file = sha1($tmp) . \'.\' . $type;
							if (!file_exists($tmp_dir . $file)) {
								if (!file_exists($tmp_dir)) {
									$MinifyX->makeDir($tmp_dir);
								}
								file_put_contents($tmp_dir . $file, $tmp);
							}
							$included[$key][$type][] = $tmp_dir . $file;
							$raw[$key][$type] = array();
						}
					}
				}
			}

			// Combine and minify files
			foreach ($included as $key => $value) {
				foreach ($value as $type => $files) {
					if (empty($files)) {continue;}

					$filename = $MinifyX->config[$type.\'Filename\'] . \'_\';
					$extension = $MinifyX->config[$type.\'Ext\'];

					$files = $MinifyX->prepareFiles(implode(\',\', $files));
					$properties = array(
						\'minify\' => $MinifyX->config[\'minify\'.ucfirst($type)]
								? \'true\'
								: \'false\',
					);

					$result = $MinifyX->Munee($files, $properties);
					$file = $MinifyX->saveFile($result, $filename, $extension);
					if (!empty($file)) {
						$prepared[$key][$type][] = $cacheFolderUrl . $file;
					}
				}
			}

			// Combine files by type
			$final = array(
				\'head\' => array_merge(
					$excluded[\'head\'][\'css\'], $prepared[\'head\'][\'css\'], $raw[\'head\'][\'css\'],
					$excluded[\'head\'][\'js\'], $prepared[\'head\'][\'js\'], $raw[\'head\'][\'js\']
				),
				\'body\' => array_merge(
					$excluded[\'body\'][\'css\'], $prepared[\'body\'][\'css\'], $raw[\'body\'][\'css\'],
					$excluded[\'body\'][\'js\'], $prepared[\'body\'][\'js\'], $raw[\'body\'][\'js\']
				),
			);

			// Push files to tags
			foreach ($final as $type => &$value) {
				foreach ($value as &$file) {
					if (strpos($file, \'<script\') === false && strpos($file, \'<style\') === false) {
						$file = preg_match(\'/\\.css$/iu\', $file)
							? \'<link rel="stylesheet" href="\' . $file . \'" type="text/css" />\'
							: \'<script type="text/javascript" src="\' . $file . \'"></script>\';
					}
				}
				if (!empty($excluded[$type][\'html\'])) {
					$value[] = implode("\\n", $excluded[$type][\'html\']);
				}
			}
			unset($value);

			// Replace tags in web page
			$modx->resource->_output = str_replace(
				array($modx->getRegisteredClientStartupScripts() . "\\n</head>", $modx->getRegisteredClientScripts() . "\\n</body>"),
				array(implode("\\n", $final[\'head\']) . "\\n</head>", implode("\\n", $final[\'body\']) . "\\n</body>"),
				$modx->resource->_output
			);
		}

		// Process images
		if ($modx->getOption(\'minifyx_process_images\', null, false, true)) {
			if (!$modx->getService(\'minifyx\',\'MinifyX\', MODX_CORE_PATH.\'components/minifyx/model/minifyx/\')) {return false;}

			$connector = $modx->getOption(\'minifyx_connector\', null, \'/assets/components/minifyx/munee.php\', true);
			$exclude = $modx->getOption(\'minifyx_exclude_images\');
			$replace = array(\'from\' => array(), \'to\' => array());
			$site_url = $modx->getOption(\'site_url\');
			$default = $modx->getOption(\'minifyx_images_filters\', null, \'\', true);

			preg_match_all(\'/<img.*?>/i\', $modx->resource->_output, $tags);
			foreach ($tags[0] as $tag) {
				if (preg_match($exclude, $tag)) {
					continue;
				}
				elseif (preg_match_all(\'/(src|height|width|filters)=[\\\'|"](.*?)[\\\'|"]/i\', $tag, $properties)) {
					if (count($properties[0]) >= 2) {
						$file = $connector . \'?files=\';
						$resize = \'\';
						$filters = \'\';
						$tmp = array(\'from\' => array(), \'to\' => array());

						foreach ($properties[1] as $k => $v) {
							if ($v == \'src\') {
								$src = $properties[2][$k];
								if (strpos($src, \'://\') !== false) {
									if (strpos($src, $site_url) !== false) {
										$src = str_replace($site_url, \'\', $src);
									}
									else {
										// Image from 3rd party domain
										continue;
									}
								}
								$file .= $src;
								$tmp[\'from\'][\'src\'] = $properties[2][$k];
							}
							elseif ($v == \'height\' || $v == \'width\') {
								$resize .=  $v[0] . \'[\'.$properties[2][$k].\']\';
							}
							elseif ($v == \'filters\') {
								$filters .= $properties[2][$k];
								$tmp[\'from\'][\'filters\'] = $properties[0][$k];
								$tmp[\'to\'][\'filters\'] = \'\';
							}
						}

						if (!empty($tmp[\'from\'][\'src\'])) {
							$resize .= isset($tmp[\'from\'][\'filters\'])
								? $filters
								: $default;
							$tmp[\'to\'][\'src\'] = $file . \'?resize=\' . $resize;

							ksort($tmp[\'from\']);
							ksort($tmp[\'to\']);

							$replace[\'from\'][] = $tag;
							$replace[\'to\'][] = str_replace($tmp[\'from\'], $tmp[\'to\'], $tag);
						}
					}
				}
			}

			if (!empty($replace)) {
				$modx->resource->_output = str_replace(
					$replace[\'from\'],
					$replace[\'to\'],
					$modx->resource->_output
				);
			}
		}

		$modx->log(modX::LOG_LEVEL_INFO, \'[MinifyX] Total time for page "\'.$modx->resource->id.\'" = \'.(microtime(true) - $time));
		break;
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/minifyx/elements/plugins/plugin.minifyx.php',
    ),
    4 => 
    array (
      'id' => '4',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'pdoTools',
      'description' => '',
      'editor_type' => '0',
      'category' => '5',
      'cache_type' => '0',
      'plugincode' => '/** @var modX $modx */
switch ($modx->event->name) {

    case \'OnMODXInit\':
        $fqn = $modx->getOption(\'pdoTools.class\', null, \'pdotools.pdotools\', true);
        $path = $modx->getOption(\'pdotools_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
        $modx->loadClass($fqn, $path, false, true);

        $fqn = $modx->getOption(\'pdoFetch.class\', null, \'pdotools.pdofetch\', true);
        $path = $modx->getOption(\'pdofetch_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
        $modx->loadClass($fqn, $path, false, true);
        break;

    case \'OnBeforeSaveWebPageCache\':
        if (!empty($modx->config[\'fenom_jscripts\'])) {
            foreach ($modx->config[\'fenom_jscripts\'] as $key => $value) {
                unset($modx->resource->_jscripts[$key]);
            }
            $modx->resource->_jscripts = array_values($modx->resource->_jscripts);
        }
        if (!empty($modx->config[\'fenom_sjscripts\'])) {
            foreach ($modx->config[\'fenom_sjscripts\'] as $key => $value) {
                unset($modx->resource->_sjscripts[$key]);
            }
            $modx->resource->_sjscripts = array_values($modx->resource->_sjscripts);
        }
        if (!empty($modx->config[\'fenom_loadedscripts\'])) {
            foreach ($modx->config[\'fenom_loadedscripts\'] as $key => $value) {
                unset($modx->resource->_loadedjscripts[$key]);
            }
        }
        break;

    case \'OnSiteRefresh\':
        /** @var pdoTools $pdoTools */
        if ($pdoTools = $modx->getService(\'pdoTools\')) {
            if ($pdoTools->clearFileCache()) {
                $modx->log(modX::LOG_LEVEL_INFO, $modx->lexicon(\'refresh_default\') . \': pdoTools\');
            }
        }
        break;
}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/pdotools/elements/plugins/plugin.pdotools.php',
    ),
    5 => 
    array (
      'id' => '5',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'TinyMCERTE',
      'description' => '',
      'editor_type' => '0',
      'category' => '6',
      'cache_type' => '0',
      'plugincode' => '/**
 * TinyMCE Rich Tech Editor
 *
 */
$corePath = $modx->getOption(\'tinymcerte.core_path\', null, $modx->getOption(\'core_path\', null, MODX_CORE_PATH) . \'components/tinymcerte/\');
/** @var TinyMCERTE $tinymcerte */
$tinymcerte = $modx->getService(
    \'tinymcerte\',
    \'TinyMCERTE\',
    $corePath . \'model/tinymcerte/\',
    array(
        \'core_path\' => $corePath
    )
);

$className = \'TinyMCERTE\' . $modx->event->name;
$modx->loadClass(\'TinyMCERTEPlugin\', $tinymcerte->getOption(\'modelPath\') . \'tinymcerte/events/\', true, true);
$modx->loadClass($className, $tinymcerte->getOption(\'modelPath\') . \'tinymcerte/events/\', true, true);
if (class_exists($className)) {
    /** @var TinyMCERTEPlugin $handler */
    $handler = new $className($modx, $scriptProperties);
    $handler->run();
}
return;',
      'locked' => '0',
      'properties' => 'a:0:{}',
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    6 => 
    array (
      'id' => '6',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'Tickets',
      'description' => '',
      'editor_type' => '0',
      'category' => '7',
      'cache_type' => '0',
      'plugincode' => '/** @var modX $modx */
switch ($modx->event->name) {

    case \'OnSiteRefresh\':
        if ($modx->cacheManager->refresh(array(\'default/tickets\' => array()))) {
            $modx->log(modX::LOG_LEVEL_INFO, $modx->lexicon(\'refresh_default\') . \': Tickets\');
        }
        break;

    case \'OnDocFormSave\':
        /** @var Ticket $resource */
        if ($mode == \'new\' && $resource->class_key == "Ticket") {
            $modx->cacheManager->delete(\'tickets/latest.tickets\');
        }
        break;

    case \'OnWebPagePrerender\':
        $output = &$modx->resource->_output;
        $output = str_replace(
            array(\'*(*(*(*(*(*\', \'*)*)*)*)*)*\', \'~(~(~(~(~(~\', \'~)~)~)~)~)~\'),
            array(\'[\', \']\', \'{\', \'}\'),
            $output
        );
        break;

    case \'OnPageNotFound\':
        // It is working only with friendly urls enabled
        $q = trim(@$_REQUEST[$modx->context->getOption(\'request_param_alias\', \'q\')]);
        $matches = explode(\'/\', rtrim($q, \'/\'));
        if (count($matches) < 2) {
            return;
        }

        $ticket_uri = array_pop($matches);
        $section_uri = implode(\'/\', $matches) . \'/\';

        if ($section_id = $modx->findResource($section_uri)) {
            /** @var TicketsSection $section */
            if ($section = $modx->getObject(\'TicketsSection\', $section_id)) {
                if (is_numeric($ticket_uri)) {
                    $ticket_id = $ticket_uri;
                } elseif (preg_match(\'#^\\d+#\', $ticket_uri, $tmp)) {
                    $ticket_id = $tmp[0];
                } else {
                    $properties = $section->getProperties(\'tickets\');
                    if (!empty($properties[\'uri\']) && strpos($properties[\'uri\'], \'%id\') !== false) {
                        $pcre = str_replace(\'%id\', \'([0-9]+)\', $properties[\'uri\']);
                        $pcre = preg_replace(\'#(\\%[a-z]+)#\', \'(?:.*?)\', $pcre);
                        if (@preg_match(\'#\' . trim($pcre, \'/\') . \'#\', $ticket_uri, $matches)) {
                            $ticket_id = $matches[1];
                        }
                    }
                }
                if (!empty($ticket_id)) {
                    if ($ticket = $modx->getObject(\'Ticket\', array(\'id\' => $ticket_id, \'deleted\' => 0))) {
                        if ($ticket->published) {
                            $modx->sendRedirect($modx->makeUrl($ticket_id),
                                array(\'responseCode\' => \'HTTP/1.1 301 Moved Permanently\'));
                        } elseif ($unp_id = $modx->getOption(\'tickets.unpublished_ticket_page\')) {
                            $modx->sendForward($unp_id);
                        }
                    }
                }
            }
        }
        break;

    case \'OnLoadWebDocument\':
        $authenticated = $modx->user->isAuthenticated($modx->context->get(\'key\'));
        $key = \'Tickets_User\';

        if (!$authenticated && !$modx->getOption(\'tickets.count_guests\')) {
            return;
        }

        if (empty($_COOKIE[$key])) {
            if (!empty($_SESSION[$key])) {
                $guest_key = $_SESSION[$key];
            } else {
                $guest_key = $_SESSION[$key] = md5(rand() . time() . rand());
            }
            setcookie($key, $guest_key, time() + (86400 * 365), \'/\');
        } else {
            $guest_key = $_COOKIE[$key];
        }

        if (empty($_SESSION[$key])) {
            $_SESSION[$key] = $guest_key;
        }

        if ($authenticated) {
            /** @var TicketAuthor $profile */
            if (!$profile = $modx->user->getOne(\'AuthorProfile\')) {
                $profile = $modx->newObject(\'TicketAuthor\');
                $modx->user->addOne($profile);
            }
            $profile->set(\'visitedon\', time());
            $profile->save();
        }
        break;

    case \'OnWebPageComplete\':
        /** @var Tickets $Tickets */
        $Tickets = $modx->getService(\'tickets\');
        $Tickets->logView($modx->resource->get(\'id\'));
        break;

    case \'OnUserSave\':
        /** @var modUser $user */
        if ($mode == \'new\' && $user && !$user->getOne(\'AuthorProfile\')) {
            $profile = $modx->newObject(\'TicketAuthor\');
            $user->addOne($profile);
            $profile->save();
        }
        break;

}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/tickets/elements/plugins/plugin.tickets.php',
    ),
    7 => 
    array (
      'id' => '7',
      'source' => '0',
      'property_preprocess' => '0',
      'name' => 'ClientConfig',
      'description' => 'Sets system settings from the Client Config CMP.',
      'editor_type' => '0',
      'category' => '0',
      'cache_type' => '0',
      'plugincode' => '/**
 * ClientConfig
 *
 * Copyright 2011-2014 by Mark Hamstra <hello@markhamstra.com>
 *
 * ClientConfig is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * ClientConfig is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * ClientConfig; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package clientconfig
 *
 * @var modX $modx
 * @var int $id
 * @var string $mode
 * @var modResource $resource
 * @var modTemplate $template
 * @var modTemplateVar $tv
 * @var modChunk $chunk
 * @var modSnippet $snippet
 * @var modPlugin $plugin
*/

$eventName = $modx->event->name;

switch($eventName) {
    case \'OnMODXInit\':
        /* Grab the class */
        $path = $modx->getOption(\'clientconfig.core_path\', null, $modx->getOption(\'core_path\') . \'components/clientconfig/\');
        $path .= \'model/clientconfig/\';
        $clientConfig = $modx->getService(\'clientconfig\',\'ClientConfig\', $path);

        /* If we got the class (gotta be careful of failed migrations), grab settings and go! */
        if ($clientConfig instanceof ClientConfig) {
            $settings = $clientConfig->getSettings();

            /* Make settings available as [[++tags]] */
            $modx->setPlaceholders($settings, \'+\');

            /* Make settings available for $modx->getOption() */
            foreach ($settings as $key => $value) {
                $modx->setOption($key, $value);
            }
        }
        break;
}

return;',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => '',
    ),
    8 => 
    array (
      'id' => '8',
      'source' => '1',
      'property_preprocess' => '0',
      'name' => 'ms2Gallery',
      'description' => 'Main plugin for ms2Gallery',
      'editor_type' => '0',
      'category' => '10',
      'cache_type' => '0',
      'plugincode' => '/** @var array $scriptProperties */
switch ($modx->event->name) {

	case \'OnDocFormRender\':
		/** @var modResource $resource */
		if ($mode == \'new\' || ($resource->class_key == \'msProduct\' && $modx->getOption(\'ms2gallery_disable_for_ms2\', null, true))) {
			return;
		}
		$template = $resource->get(\'template\');
		$templates = array_map(\'trim\', explode(\',\', $modx->getOption(\'ms2gallery_disable_for_templates\')));
		if ($templates[0] != \'\' && in_array($template, $templates)) {
			return;
		}

		/** @var ms2Gallery $ms2Gallery */
		if ($ms2Gallery = $modx->getService(\'ms2gallery\', \'ms2Gallery\', MODX_CORE_PATH . \'components/ms2gallery/model/ms2gallery/\')) {
			$ms2Gallery->loadManagerFiles($modx->controller, $resource);
		}
		break;


	case \'OnBeforeDocFormSave\':
		if ($source_id = $resource->get(\'media_source\')) {
			$resource->setProperties(array(\'media_source\' => $source_id), \'ms2gallery\');
		}
		break;


	case \'OnLoadWebDocument\':
		$tstart = microtime(true);
		/** @var pdoFetch $pdoFetch */
		if (!$modx->getOption(\'ms2gallery_set_placeholders\', null, false, true) || !$pdoFetch = $modx->getService(\'pdoFetch\')) {
			return;
		}
		$plTemplates = array_map(\'trim\', explode(\',\', $modx->getOption(\'ms2gallery_placeholders_for_templates\')));
		if (!empty($plTemplates[0]) && !in_array($modx->resource->get(\'template\'), $plTemplates)) {
			return;
		}
		$plPrefix = $modx->getOption(\'ms2gallery_placeholders_prefix\', null, \'ms2g.\', true);
		$plThumbs = array_map(\'trim\', explode(\',\', $modx->getOption(\'ms2gallery_placeholders_thumbs\')));
		$tplName = $modx->getOption(\'ms2gallery_placeholders_tpl\');

		// Check for assigned TV
		$q = $modx->newQuery(\'modTemplateVarTemplate\');
		$q->innerJoin(\'modTemplateVar\', \'TemplateVar\');
		$q->innerJoin(\'modTemplate\', \'Template\');
		$q->where(array(
			\'TemplateVar.name\' => $tplName,
			\'Template.id\' => $modx->resource->get(\'template\')
		));
		$q->select(\'TemplateVar.id\');

		$tpl = \'\';
		if ($modx->getCount(\'modTemplateVarTemplate\', $q)) {
			$tpl = $modx->resource->getTVValue($tplName);
		}
		/** @var modChunk $chunk */
		if (empty($tpl) && $chunk = $modx->getObject(\'modChunk\', array(\'name\' => $tplName))) {
			$tpl = $chunk->getContent();
		}

		$options = array(\'loadModels\' => \'ms2gallery\');
		$where = array(\'resource_id\' => $modx->resource->id, \'parent\' => 0);

		$parents = $pdoFetch->getCollection(\'msResourceFile\', $where, $options);
		$options[\'select\'] = \'url\';
		foreach ($parents as &$parent) {
			$where = array(\'parent\' => $parent[\'id\']);
			if (!empty($plThumbs[0])) {
				$where[\'path:IN\'] = array();
				foreach ($plThumbs as $thumb) {
					$where[\'path:IN\'][] = $parent[\'path\'] . $thumb . \'/\';
				}
			}
			if ($children = $pdoFetch->getCollection(\'msResourceFile\', $where, $options)) {
				foreach ($children as $child) {
					if (preg_match(\'/((?:\\d{1,4}|)x(?:\\d{1,4}|))/\', $child[\'url\'], $size)) {
						$parent[$size[0]] = $child[\'url\'];
					}
				}
			}
			$pls = $pdoFetch->makePlaceholders($parent, $plPrefix . $parent[\'rank\'] . \'.\', \'[[+\', \']]\', false);
			$pls[\'vl\'][$plPrefix . $parent[\'rank\']] = !empty($tpl)
				? $pdoFetch->getChunk(\'@INLINE \' . $tpl, $parent)
				: htmlentities(print_r($parent, 1), ENT_QUOTES, \'UTF-8\');
			$modx->setPlaceholders($pls[\'vl\']);
		}

		$modx->log(modX::LOG_LEVEL_INFO, \'[ms2Gallery] Set image placeholders for page id = \' . $modx->resource->id . \' in \' . number_format(microtime(true) - $tstart, 7) . \' sec.\');
		break;


	case \'OnBeforeEmptyTrash\':
		if (empty($scriptProperties[\'ids\']) || !is_array($scriptProperties[\'ids\'])) {
			return;
		}
		if (!$modx->addPackage(\'ms2gallery\', MODX_CORE_PATH . \'components/ms2gallery/model/\')) {
			return;
		}
		$resources = $modx->getIterator(\'modResource\', array(\'id:IN\' => $scriptProperties[\'ids\']));
		/** @var modResource $resource */
		foreach ($resources as $resource) {
			$properties = $resource->getProperties(\'ms2gallery\');
			if (!empty($properties[\'media_source\'])) {
				/** @var modMediaSource $source */
				$source = $modx->getObject(\'modMediaSource\', $properties[\'media_source\']);
				$resource_id = $resource->get(\'id\');
				if ($source) {
					$source->set(\'ctx\', $resource->get(\'context_key\'));
					$source->initialize();
				}
				$images = $modx->getIterator(\'msResourceFile\', array(\'resource_id\' => $resource_id, \'parent\' => 0));
				/** @var msResourceFile $image */
				foreach ($images as $image) {
					$prepare = $image->prepareSource($source);
					if ($prepare === true) {
						$image->remove();
					}
					else {
						$modx->log(modX::LOG_LEVEL_ERROR, "[ms2Gallery] {$prepare}.");
					}
				}
				if ($source) {
					$source->removeContainer($source->getBasePath() . $resource_id);
				}
			}
		}
		break;

}',
      'locked' => '0',
      'properties' => NULL,
      'disabled' => '0',
      'moduleguid' => '',
      'static' => '0',
      'static_file' => 'core/components/ms2gallery/elements/plugins/plugin.ms2gallery.php',
    ),
  ),
  'policies' => 
  array (
    'modAccessContext' => 
    array (
      'web' => 
      array (
        0 => 
        array (
          'principal' => 0,
          'authority' => 9999,
          'policy' => 
          array (
            'load' => true,
          ),
        ),
        1 => 
        array (
          'principal' => 1,
          'authority' => 0,
          'policy' => 
          array (
            'about' => true,
            'access_permissions' => true,
            'actions' => true,
            'change_password' => true,
            'change_profile' => true,
            'charsets' => true,
            'class_map' => true,
            'components' => true,
            'content_types' => true,
            'countries' => true,
            'create' => true,
            'credits' => true,
            'customize_forms' => true,
            'dashboards' => true,
            'database' => true,
            'database_truncate' => true,
            'delete_category' => true,
            'delete_chunk' => true,
            'delete_context' => true,
            'delete_document' => true,
            'delete_eventlog' => true,
            'delete_plugin' => true,
            'delete_propertyset' => true,
            'delete_role' => true,
            'delete_snippet' => true,
            'delete_template' => true,
            'delete_tv' => true,
            'delete_user' => true,
            'directory_chmod' => true,
            'directory_create' => true,
            'directory_list' => true,
            'directory_remove' => true,
            'directory_update' => true,
            'edit_category' => true,
            'edit_chunk' => true,
            'edit_context' => true,
            'edit_document' => true,
            'edit_locked' => true,
            'edit_plugin' => true,
            'edit_propertyset' => true,
            'edit_role' => true,
            'edit_snippet' => true,
            'edit_template' => true,
            'edit_tv' => true,
            'edit_user' => true,
            'element_tree' => true,
            'empty_cache' => true,
            'error_log_erase' => true,
            'error_log_view' => true,
            'export_static' => true,
            'file_create' => true,
            'file_list' => true,
            'file_manager' => true,
            'file_remove' => true,
            'file_tree' => true,
            'file_update' => true,
            'file_upload' => true,
            'file_unpack' => true,
            'file_view' => true,
            'flush_sessions' => true,
            'frames' => true,
            'help' => true,
            'home' => true,
            'import_static' => true,
            'languages' => true,
            'lexicons' => true,
            'list' => true,
            'load' => true,
            'logout' => true,
            'logs' => true,
            'menus' => true,
            'menu_reports' => true,
            'menu_security' => true,
            'menu_site' => true,
            'menu_support' => true,
            'menu_system' => true,
            'menu_tools' => true,
            'menu_user' => true,
            'messages' => true,
            'namespaces' => true,
            'new_category' => true,
            'new_chunk' => true,
            'new_context' => true,
            'new_document' => true,
            'new_document_in_root' => true,
            'new_plugin' => true,
            'new_propertyset' => true,
            'new_role' => true,
            'new_snippet' => true,
            'new_static_resource' => true,
            'new_symlink' => true,
            'new_template' => true,
            'new_tv' => true,
            'new_user' => true,
            'new_weblink' => true,
            'packages' => true,
            'policy_delete' => true,
            'policy_edit' => true,
            'policy_new' => true,
            'policy_save' => true,
            'policy_template_delete' => true,
            'policy_template_edit' => true,
            'policy_template_new' => true,
            'policy_template_save' => true,
            'policy_template_view' => true,
            'policy_view' => true,
            'property_sets' => true,
            'providers' => true,
            'publish_document' => true,
            'purge_deleted' => true,
            'remove' => true,
            'remove_locks' => true,
            'resource_duplicate' => true,
            'resourcegroup_delete' => true,
            'resourcegroup_edit' => true,
            'resourcegroup_new' => true,
            'resourcegroup_resource_edit' => true,
            'resourcegroup_resource_list' => true,
            'resourcegroup_save' => true,
            'resourcegroup_view' => true,
            'resource_quick_create' => true,
            'resource_quick_update' => true,
            'resource_tree' => true,
            'save' => true,
            'save_category' => true,
            'save_chunk' => true,
            'save_context' => true,
            'save_document' => true,
            'save_plugin' => true,
            'save_propertyset' => true,
            'save_role' => true,
            'save_snippet' => true,
            'save_template' => true,
            'save_tv' => true,
            'save_user' => true,
            'search' => true,
            'settings' => true,
            'sources' => true,
            'source_delete' => true,
            'source_edit' => true,
            'source_save' => true,
            'source_view' => true,
            'steal_locks' => true,
            'tree_show_element_ids' => true,
            'tree_show_resource_ids' => true,
            'undelete_document' => true,
            'unlock_element_properties' => true,
            'unpublish_document' => true,
            'usergroup_delete' => true,
            'usergroup_edit' => true,
            'usergroup_new' => true,
            'usergroup_save' => true,
            'usergroup_user_edit' => true,
            'usergroup_user_list' => true,
            'usergroup_view' => true,
            'view' => true,
            'view_category' => true,
            'view_chunk' => true,
            'view_context' => true,
            'view_document' => true,
            'view_element' => true,
            'view_eventlog' => true,
            'view_offline' => true,
            'view_plugin' => true,
            'view_propertyset' => true,
            'view_role' => true,
            'view_snippet' => true,
            'view_sysinfo' => true,
            'view_template' => true,
            'view_tv' => true,
            'view_unpublished' => true,
            'view_user' => true,
            'workspaces' => true,
          ),
        ),
      ),
    ),
  ),
);