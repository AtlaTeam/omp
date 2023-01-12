<?php
/**
 * @file plugins/atla/atla-custom-metadata/AtlaCustomMetadata.inc.php
 *
 * Copyright (c) 2023 Atla
 *
 * @class AtlaMetadataSettingsForm
 *
 * @brief Adds Atla specific fields to metadata form.
 */

namespace generic\atlaCustomMetadata;

import('PKP.lib.pkp.classes.plugins.GenericPlugin');
import('PKP.lib.pkp.classes.plugins.HookRegistry');

use PKP\lib\pkp\classes\plugins\GenericPlugin;
use PKP\lib\pkp\classes\plugins\HookRegistry;

class AtlaCustomMetadata extends GenericPlugin {

	public function register($category, $path, $mainContextId = null) {
		$success = parent::register($category, $path);
		if ($success && $this->getEnabled()) {

			// Use a hook to extend the context entity's schema
			HookRegistry::register('Schema::get::context', array($this, 'addToSchema'));

			// Use a hook to add a field to the masthead form in the journal/press settings.
			HookRegistry::register('Form::config::before', array($this, 'addToForm'));
		}
		return $success;
	}

}
