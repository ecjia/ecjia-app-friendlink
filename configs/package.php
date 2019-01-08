<?php
/**
 * 友情链接应用
 */
defined('IN_ECJIA') or exit('No permission resources.');

return array(
	'identifier' 	=> 'ecjia.friendlink',
	'directory' 	=> 'friendlink',
	'name'			=> 'friendlink',
	'description' 	=> 'friendlink_desc',			/* 描述对应的语言项 */
	'author' 		=> 'ECJIA TEAM',				/* 作者 */
	'website' 		=> 'http://www.ecjia.com',		/* 网址 */
	'version' 		=> '1.21.0',						/* 版本号 */
	'copyright' 	=> 'ECJIA Copyright 2014 ~ 2019.',
    'namespace'     => 'Ecjia\App\Friendlink',
    'provider'      => 'FriendlinkServiceProvider',
);

// end