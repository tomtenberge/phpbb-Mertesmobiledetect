<?php
namespace ttb\mobiledetect;

class ext extends \phpbb\extension\base
{
	/**
	 * Check whether or not the extension can be enabled.
	 *
	 * @return bool
	 */
	public function is_enableable()
	{
		return $this->php_requirements() && ($this->phpbb_31x_compatible() || $this->phpbb_current_compatible());
	}

	/**
	 * Check PHP requirements
	 *
	 * Requires PHP 5.4.0 or greater
	 * Requires PHP ZipArchive binary
	 *
	 * @return bool
	 */
	protected function php_requirements()
	{
		return phpbb_version_compare(PHP_VERSION, '5.4.0', '>=');
	}

	/**
	 * Check phpBB 3.2 (and later) compatibility
	 *
	 * Requires phpBB 3.2.0-b3 or greater
	 *
	 * @return bool
	 */
	protected function phpbb_current_compatible()
	{
		return phpbb_version_compare(PHPBB_VERSION, '3.2.0-b3', '>=');
	}

	/**
	 * Check phpBB 3.1 compatibility
	 *
	 * Requires phpBB 3.1.4 or greater
	 *
	 * @return bool
	 */
	protected function phpbb_31x_compatible()
	{
		return phpbb_version_compare(PHPBB_VERSION, '3.1.4', '>=') && phpbb_version_compare(PHPBB_VERSION, '3.2.0-dev', '<');
	}
}

