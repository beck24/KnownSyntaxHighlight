<?php

namespace IdnoPlugins\KnownSyntaxHighlight {

	class Main extends \Idno\Common\Plugin {

		function registerPages() {
			\Idno\Core\site()->template()->extendTemplate('shell/footer', 'syntaxhighlight/footer');
		}

	}

}