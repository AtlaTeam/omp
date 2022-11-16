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
