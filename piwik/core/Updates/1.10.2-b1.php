<?php
/**
 * Piwik - Open source web analytics
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 * @category Piwik
 * @package Updates
 */

/**
 * @package Updates
 */
class Piwik_Updates_1_10_2_b1 extends Piwik_Updates
{
	static function getSql($schema = 'Myisam')
	{
		return array(
			// ignore existing column name error (1060)
			'ALTER TABLE '.Piwik_Common::prefixTable('report')
				. " ADD COLUMN hour tinyint NOT NULL default 0 AFTER period" => 1060,
		);
	}
	
	static function update()
	{
		Piwik_Updater::updateDatabase(__FILE__, self::getSql());
	}
}
