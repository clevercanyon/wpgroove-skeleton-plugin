<?php
/**
 * WP Groove™ {@see https://wpgroove.com}
 *  _       _  ___       ___
 * ( )  _  ( )(  _`\    (  _`\
 * | | ( ) | || |_) )   | ( (_) _ __   _      _    _   _    __  ™
 * | | | | | || ,__/'   | |___ ( '__)/'_`\  /'_`\ ( ) ( ) /'__`\
 * | (_/ \_) || |       | (_, )| |  ( (_) )( (_) )| \_/ |(  ___/
 * `\___x___/'(_)       (____/'(_)  `\___/'`\___/'`\___/'`\____)
 */
// <editor-fold desc="Strict types, namespace, use statements, and other headers.">

/**
 * Declarations & namespace.
 *
 * @since 2021-12-25
 */
declare( strict_types = 1 );
namespace WP_Groove\Skeleton_Plugin;

/**
 * Utilities.
 *
 * @since 2021-12-15
 */
use Clever_Canyon\{Utilities as U};

/**
 * Framework.
 *
 * @since 2021-12-15
 */
use WP_Groove\{Framework as WPG};

/**
 * Plugin.
 *
 * @since 2021-12-15
 */
use WP_Groove\{Skeleton_Plugin as WP};

// </editor-fold>

/**
 * Plugin.
 *
 * @since 2021-12-15
 */
final class Plugin extends WPG\A6t\Plugin {
	/**
	 * Does hook setup on instantiation.
	 *
	 * @since 2021-12-15
	 */
	protected function setup_hooks() : void {
		parent::setup_hooks();
		// Nothing for now.
	}

	/**
	 * Runs on `plugins_loaded` hook.
	 *
	 * @since 2021-12-15
	 */
	public function on_plugins_loaded() : void {
		parent::on_plugins_loaded();
		// Nothing for now.
	}

	/**
	 * Runs on `init` hook.
	 *
	 * @since 2021-12-15
	 */
	public function on_init() : void {
		parent::on_init();
		// Nothing for now.
	}
}
