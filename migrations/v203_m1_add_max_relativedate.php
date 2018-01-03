<?php
/**
*
* Relative dates extension for the phpBB Forum Software package.
*
* @copyright (c) 2016 Jakub Senko <jakubsenko@gmail.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace senky\relativedates\migrations;

class v203_m1_add_max_relativedate extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return $this->db_tools->sql_column_exists($this->table_prefix . 'users', 'user_relativedates_number');
	}

	static public function depends_on()
	{
		return array('\senky\relativedates\migrations\v100_m1_add_relativedates_to_users');
	}

	public function update_schema()
	{
		return array(
			'add_columns'	=> array(
				$this->table_prefix . 'users'	=> array(
					'user_relativedates_number'	=> array('UINT', 0),
					'user_relativedates_multiplier'	=> array('BINT', 0),
				),
			),
		);
	}

	public function revert_schema()
	{
		return array(
			'drop_columns'	=> array(
				$this->table_prefix . 'users'	=> array(
					'user_relativedates_multiplier',
					'user_relativedates_number',
				),
			),
		);
	}
}
