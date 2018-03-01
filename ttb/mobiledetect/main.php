<?php

namespace ttb\mobiledetect;

class main
{
	/** @var string */
	protected $name;

	/** @var bool */
	protected $default;

	/** @var array */
	protected $dependencies;

	/** @var array */
	protected $files;

	/**
	 * Constructor
	 *
	 * @param string $name
	 * @param bool   $default
	 * @param array  $dependencies
	 * @param array  $files
	 */
	public function __construct($name, $default, array $dependencies, array $files)
	{
		$this->name = $name;
		$this->default = $default;
		$this->dependencies = $dependencies;
		$this->files = $files;
	}

	/**
	 * Get name
	 *
	 * @return string
	 */
	public function get_name()
	{
		return $this->name;
	}

	/**
	 * Get default
	 *
	 * @return bool
	 */
	public function get_default()
	{
		return $this->default;
	}

	/**
	 * Get dependencies
	 *
	 * @return array
	 */
	public function get_dependencies()
	{
		return $this->dependencies;
	}

	/**
	 * Get files
	 *
	 * @return array
	 */
	public function get_files()
	{
		return $this->files;
	}
}
