<?php

assert_options(ASSERT_ACTIVE, TRUE);
\Drupal\Component\Assertion\Handle::register();

/**
 * Enable local development services.
 */
$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/services.devel.yml';

// Show errors on local environments.
$config['system.logging']['error_level'] = 'verbose';

$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;

#$settings['cache']['bins']['render'] = 'cache.backend.null';
#$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';

$settings['extension_discovery_scan_tests'] = TRUE;
$settings['rebuild_access'] = TRUE;
$settings['skip_permissions_hardening'] = TRUE;

// Load local override configuration, if available.
// This can be used for local overrides not tracked by version control.
if (file_exists(__DIR__ . '/settings.local.php')) {
  include __DIR__ . '/settings.local.php';
}
