<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

namespace report_insights;

use core_external\external_api;
use core_external\external_value;
use core_external\external_single_structure;
use core_external\external_multiple_structure;
use core_external\external_function_parameters;
use core_external\external_warnings;

/**
 * This is the external API for this component.
 *
 * @package    report_insights
 * @copyright  2017 David Monllao {@link http://www.davidmonllao.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class external extends external_api {
    /**
     * action_executed parameters.
     *
     * @return external_function_parameters
     * @since  Moodle 3.8
     */
    public static function action_executed_parameters() {
        return new external_function_parameters (
            array(
                'actionname' => new external_value(PARAM_ALPHANUMEXT, 'The name of the action', VALUE_REQUIRED),
                'predictionids' => new external_multiple_structure(
                     new external_value(PARAM_INT, 'Prediction id', VALUE_REQUIRED),
                     'Array of prediction ids'
                ),
            )
        );
    }

    /**
     * Stores an action executed over a group of predictions.
     *
     * @param  string   $actionname
     * @param  array    $predictionids
     * @return array an array of warnings and a boolean
     * @since  Moodle 3.8
     */
    public static function action_executed(string $actionname, array $predictionids) {

        $params = self::validate_parameters(self::action_executed_parameters(),
            array('actionname' => $actionname, 'predictionids' => $predictionids));

        foreach ($params['predictionids'] as $predictionid) {
            list($model, $prediction, $context) = self::validate_prediction($predictionid);

            // The method action_executed checks that the provided action is valid.
            $prediction->action_executed($actionname, $model->get_target());
        }

        return array('warnings' => array());
    }

    /**
     * action_executed return
     *
     * @return \core_external\external_description
     * @since  Moodle 3.8
     */
    public static function action_executed_returns() {
        return new external_single_structure(
            array(
                'warnings' => new external_warnings(),
            )
        );
    }

    /**
     * Validates access to the prediction and returns it.
     *
     * @param int $predictionid
     * @return array array($model, $prediction, $context)
     */
    protected static function validate_prediction($predictionid) {

        list($model, $prediction, $context) = \core_analytics\manager::get_prediction($predictionid);

        self::validate_context($context);

        return array($model, $prediction, $context);
    }
}
