<?php
/**
 * @file plugins/themes/atla-default/AtlaDefaultThemePlugin.inc.php
 *
 * Copyright (c) 2022 Atla
 *
 * @brief Atla Default child theme.
 */

import('lib.pkp.classes.plugins.ThemePlugin');

/**
 * Defines the AtlaDefaultThemePlugin class.
 */
class AtlaDefaultThemePlugin extends ThemePlugin {

	/**
	 * Set the parent theme and merge the child styles into the parent stylesheet.
	 * @return null
	 */
	public function init() {
		$this->setParent('defaultthemeplugin');

//		// Override default styles for the "default" subtheme. Cookie Pro styling handled separately.
//		$subtheme = $this->parent->getOption('bootstrapTheme');
//		if ($subtheme == 'bootstrap3') {
//			$this->addStyle('child-stylesheet', 'styles/atla.less');
//			$this->modifyStyle('bootstrap', ['addLess' => ['styles/cookiepro.less']]);
//		}
//
//		else {
//			$this->modifyStyle("bootstrapTheme-{$subtheme}", ['addLess' => ['styles/cookiepro.less']]);
//		}
	}

	/**
	 * Tack on additional stylesheets for the given subtheme.
	 *
	 * @param string $subtheme
	 *  The subtheme to modify.
	 */
	private function appendStyles($subtheme) {
		// Styling for cookie banner.
		$this->modifyStyle($subtheme, ['addLess' => ['styles/cookiepro.less']]);

		// Styling for dev site banner.
		if (Application::get()->getRequest()->getBaseUrl() !== 'https://books.atla.com') {
			$this->modifyStyle($subtheme, ['addLess' => ['styles/dev-banner.less']]);
		}
	}

	/**
	 * Get the display name of this theme.
	 * @return string
	 */
	function getDisplayName() {
		return 'Default Theme (Atla)';
	}

	/**
	 * Get the description of this plugin.
	 * @return string
	 */
	function getDescription() {
		return 'Atla implementation of the PKP theme.';
	}

}
