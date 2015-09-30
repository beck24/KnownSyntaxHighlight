<?php

$site_url = \Idno\Core\site()->config()->getURL();

$syntax_hg = $site_url . 'IdnoPlugins/KnownSyntaxHighlight/vendor/syntaxhighlighter/';

$tinymce_plugin = $site_url . 'IdnoPlugins/KnownSyntaxHighlight/vendor/sh4tinymce/plugin.min.js';
?>

<link href="<?php echo $syntax_hg ?>styles/shCore.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $syntax_hg ?>styles/shThemeDefault.css" rel="stylesheet" type="text/css" />

<script type='text/javascript' src='<?php echo $syntax_hg?>scripts/shCore.js'></script>
<script type='text/javascript' src='<?php echo $syntax_hg ?>scripts/shLegacy.js'></script>

<script type='text/javascript' src='<?php echo $syntax_hg ?>scripts/shBrushBash.js'></script>
<script type='text/javascript' src='<?php echo $syntax_hg ?>scripts/shBrushCpp.js'></script>
<script type='text/javascript' src='<?php echo $syntax_hg ?>scripts/shBrushCss.js'></script>
<script type='text/javascript' src='<?php echo $syntax_hg ?>scripts/shBrushDiff.js'></script>
<script type='text/javascript' src='<?php echo $syntax_hg ?>scripts/shBrushGroovy.js'></script>
<script type='text/javascript' src='<?php echo $syntax_hg ?>scripts/shBrushJava.js'></script>
<script type='text/javascript' src='<?php echo $syntax_hg ?>scripts/shBrushJScript.js'></script>
<script type='text/javascript' src='<?php echo $syntax_hg ?>scripts/shBrushPerl.js'></script>
<script type='text/javascript' src='<?php echo $syntax_hg ?>scripts/shBrushPhp.js'></script>
<script type='text/javascript' src='<?php echo $syntax_hg ?>scripts/shBrushPlain.js'></script>
<script type='text/javascript' src='<?php echo $syntax_hg ?>scripts/shBrushPowerShell.js'></script>
<script type='text/javascript' src='<?php echo $syntax_hg ?>scripts/shBrushPython.js'></script>
<script type='text/javascript' src='<?php echo $syntax_hg ?>scripts/shBrushRuby.js'></script>
<script type='text/javascript' src='<?php echo $syntax_hg ?>scripts/shBrushSql.js'></script>
<script type='text/javascript' src='<?php echo $syntax_hg ?>scripts/shBrushXml.js'></script>

<script type="text/javascript">
	$(document).ready(function() {
		SyntaxHighlighter.config.bloggerMode = false;
		SyntaxHighlighter.config.stripBrs = true;
		SyntaxHighlighter.all();
		
		tinymce.PluginManager.load('sh4tinymce', '<?php echo $tinymce_plugin; ?>');
	});
</script>