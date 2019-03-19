<?php
/**
 * @file nprogress.addon.php
 * @author BJRambo (sosifam@070805.co.kr)
 * @brief nprogress
 **/

if (!defined("__XE__"))
{
	exit();
}

if ($addon_info->only_admin != 'Y')
{
	if ($this->module == "admin")
	{
		return;
	}
}


if ($called_position == 'before_module_init')
{

	Context::addCSSFile("./addons/sakura/css/sakura.css", false);
	Context::addJSFile("./addons/sakura/js/sakura.js", false);

	$NProgress = "
	<script>
	jQuery(function($){
		$('body').sakura();
	});
	</script>";
	Context::addHtmlHeader($NProgress);
}
