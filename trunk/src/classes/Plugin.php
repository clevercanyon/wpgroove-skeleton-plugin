<?php
/** WP Groove™ <https://wpgroove.com>
 *  _       _  ___       ___
 * ( )  _  ( )(  _`\    (  _`\
 * | | ( ) | || |_) )   | ( (_) _ __   _      _    _   _    __  ™
 * | | | | | || ,__/'   | |___ ( '__)/'_`\  /'_`\ ( ) ( ) /'__`\
 * | (_/ \_) || |       | (_, )| |  ( (_) )( (_) )| \_/ |(  ___/
 * `\___x___/'(_)       (____/'(_)  `\___/'`\___/'`\___/'`\____)
 */
namespace WP_Groove\Skeleton_Plugin;

/**
 * Dependencies.
 *
 * @since 1.0.0
 */
use Clever_Canyon\Utilities\OOPs\Version_1_0_0 as U;
use WP_Groove\Framework\Utilities\OOPs\Version_1_0_0 as UU;
use WP_Groove\Framework\Plugin\Version_1_0_0\{ Base };

/**
 * Plugin.
 *
 * @since 1.0.0
 */
class Plugin extends Base {
	/**
	 * On `plugins_loaded` hook.
	 *
	 * @since 1.0.0
	 */
	public function on_plugins_loaded() : void {
		// Nothing for now.
	}

	/**
	 * On `init` hook.
	 *
	 * @since 1.0.0
	 */
	public function on_init() : void {
		// Nothing for now.
	}
}
