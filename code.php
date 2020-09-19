<?php
/**
 * Display Wiki Page for DokuWiki
 *
 * @license GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author Terence J. Grant<tjgrant@tatewake.com>
 */

function dwp_display_wiki_page($wikipagename)
{
    global $conf, $lang;
    global $auth;
    global $ID, $REV;

    //save status
    $backup['ID']	= $ID;
    $backup['REV']	= $REV;

    $result = '';

    //Check user permissions...
    $perm = auth_quickaclcheck(trim(strtolower($wikipagename), ":"));

    if (@file_exists(wikiFN($wikipagename)) && $perm >= AUTH_READ) {
        if ($perm >= AUTH_READ) {
            $result = p_wiki_xhtml($wikipagename, '', false);

            if ($perm >= AUTH_EDIT) {
                $result .='<div class="secedit2"><a href="' . DOKU_BASE . 'doku.php?id=' . $wikipagename . '&amp;do=edit'
                . '">' . $lang['btn_secedit'] . '</a></div>';
            }
        } else {	//show access denied
            $result = p_locale_xhtml('<b>Access Denied</b>');
        }
    } else {
        if ($perm >= AUTH_CREATE) {
            $result .='<div class="secedit2"><a href="' . DOKU_BASE . 'doku.php?id=' . $wikipagename . '&amp;do=edit'
            . '">' . $lang['btn_create'] . '</a></div>';
        }
    }

    echo $result;

    $ID = $backup['ID'];
    $REV = $backup['REV'];
}
