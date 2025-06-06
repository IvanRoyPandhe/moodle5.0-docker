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

namespace block_xp\local\userfilter;

/**
 * User filter.
 *
 * @package    block_xp
 * @copyright  2024 Frédéric Massart
 * @author     Frédéric Massart <fred@branchup.tech>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class group_members implements user_filter {

    /** @var int */
    protected $groupid;

    /**
     * Constructor.
     *
     * @param int $groupid
     */
    public function __construct(int $groupid) {
        $this->groupid = $groupid;
    }

    /**
     * Get the SQL fragment to filter users.
     *
     * @return array
     */
    public function get_sql(string $useridalias): array {
        $paramname = static::generate_param_name();
        $sql = "$useridalias IN (SELECT userid FROM {groups_members} WHERE groupid = :$paramname)";
        $params = [$paramname => (int) $this->groupid];
        return [$sql, $params];
    }

    /**
     * Generate a parameter name.
     *
     * @return string
     */
    protected static function generate_param_name(): string {
        static $i = 0;
        return 'xpufgm' . $i++;
    }

}
