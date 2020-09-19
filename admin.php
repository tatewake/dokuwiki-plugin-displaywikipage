<?php
/**
 * Display Wiki Page for DokuWiki
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Terence J. Grant<tjgrant@tatewake.com>
 */
 
if (!defined('DOKU_INC')) {
    define('DOKU_INC', realpath(dirname(__FILE__).'/../../').'/');
}
if (!defined('DOKU_PLUGIN')) {
    define('DOKU_PLUGIN', DOKU_INC.'lib/plugins/');
}
require_once(DOKU_PLUGIN.'admin.php');

include_once(DOKU_PLUGIN.'displaywikipage/code.php');

class admin_plugin_displaywikipage extends DokuWiki_Admin_Plugin
{
    /** @inheritdoc */
    public function handle()
    {
        global $INPUT;
        if ($INPUT->post->has('pref') && checkSecurityToken()) {
            $this->savePreferences($INPUT->post->arr('pref'));
        }
    }

    /**
     * output appropriate html
     */
    public function html()
    {
        global $INPUT;

        echo '<div class="plugin_displaywikipage">';

        echo $this->locale_xhtml('intro');

        echo '</div>';
    }
}
