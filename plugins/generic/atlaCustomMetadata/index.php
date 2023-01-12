<?php

/**
 * @defgroup plugins_themes_default Atla Custom Metadata
 */

/**
 * @file plugins/atla/atla-custom-metadata/index.php
 *
 * Copyright (c) 2023
 *
 * @brief Wrapper for Atla custom metadata plugin.
 *
 */

use generic\atlaCustomMetadata\AtlaCustomMetadata;

require_once('AtlaCustomMetadata.inc.php');

return new AtlaCustomMetadata($action, $context);

