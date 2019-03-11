<?php
/**
 * Shaarli urlextern Plugin
 *
 * @author Jeff Sacco 
 * @link 
 */

/**
 * Hook render_footer.
 * Executed on every page redering.
 *
 * Template placeholders:
 *   - text
 *   - endofpage
 *   - js_files
 *
 * Data:
 *   - _PAGE_: current page
 *   - _LOGGEDIN_: true/false
 *
 * @param array $data data passed to plugin
 *
 * @return array altered $data.
 */
function hook_url_externe_render_footer($data)
{
    // List of plugin's JS files.
    // Note that you just need to specify CSS path.
    $data['js_files'][] = PluginManager::$PLUGINS_PATH . '/url_externe/url_externe.js';
    return $data;
}

/**
 * This function is never called, but contains translation calls for GNU gettext extraction.
 */
function url_externe_translation()
{
    // meta
    t('Ouverture des liens dans un nouvel onglet');
}
