<?php

namespace WPWaniKani\Plugin;

/**
 * Class Loader
 * @package WPWaniKani\Plugin
 */
class Loader
{

	/**
	 * @var array
	 */
	protected $actions;

	/**
	 * @var array
	 */
	protected $filters;

	/**
	 * Loader constructor.
	 */
	public function __construct()
	{
		$this->actions = array();
		$this->filters = array();
	}

	/**
	 * Add an action to the actions array variable.
	 *
	 * @param string $hook Name of the WordPress action hook.
	 * @param object $component Class where the callback is registered
	 * @param string $callback Name of the callback function
	 */
	public function addAction($hook, $component, $callback)
	{
		$this->actions = $this->add($this->actions, $hook, $component, $callback);
	}

	/**
	 * Add a filter to the filters array variable.
	 *
	 * @param string $hook Name of the WordPress action hook.
	 * @param object $component Class where the callback is registered
	 * @param string $callback Name of the callback function
	 */
	public function addFilter($hook, $component, $callback)
	{
		$this->filters = $this->add($this->filters, $hook, $component, $callback);
	}

	/**
	 * Add a hook to an array of hooks
	 *
	 * @param array $hooks Either the $actions or $filters array
	 * @param string $hook Name of the hook
	 * @param object $component Class of the callback function
	 * @param string $callback Name of the callback function
	 *
	 * @return array
	 */
	private function add($hooks, $hook, $component, $callback)
	{
		$hooks[] = array(
			'hook'      => $hook,
			'component' => $component,
			'callback'  => $callback
		);
		return $hooks;
	}

	/**
	 *  Add all filters and actions to WordPress
	 */
	public function run()
	{
		foreach ($this->filters as $hook) {
			add_filter($hook['hook'], array( $hook['component'], $hook['callback']));
		}

		foreach ($this->actions as $hook) {
			add_action($hook['hook'], array( $hook['component'], $hook['callback']));
		}
	}
}
