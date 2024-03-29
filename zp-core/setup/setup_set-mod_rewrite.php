<?php
/**
 * Used to set the mod_rewrite option.
 * This script is accessed via a /page/setup_set-mod_rewrite?z=setup.
 * It will not be found unless mod_rewrite is working.
 *
 * @package setup
 *
 */
require_once(dirname(dirname(__FILE__)).'/functions-basic.php');
require_once(dirname(__FILE__).'/setup-functions.php');
$mod_rewrite = MOD_REWRITE;
if (is_null($mod_rewrite)) {
	$msg = gettext('The Zenphoto option "mod_rewrite" will be set to "enabled".');
	setOption('mod_rewrite', 1);
} else if ($mod_rewrite) {
	$msg = gettext('The Zenphoto option "mod_rewrite" is "enabled".');
} else {
	$msg = gettext('The Zenphoto option "mod_rewrite" is "disabled".');
}
setupLog(gettext('Notice: "Module mod_rewrite" is working.').' '.$msg,true);
?>