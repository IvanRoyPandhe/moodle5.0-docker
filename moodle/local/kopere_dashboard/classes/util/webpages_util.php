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

/**
 * webpages_util file
 *
 * introduced 15/12/2023 12:43
 *
 * @package   local_kopere_dashboard
 * @copyright 2017 Eduardo Kraus {@link http://eduardokraus.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_kopere_dashboard\util;

use moodle_url;

/**
 * Class webpages_util
 *
 * @package local_kopere_dashboard\util
 */
class webpages_util {

    /**
     * Function notfound
     *
     * @param $printtext
     *
     * @throws \coding_exception
     * @throws \dml_exception
     * @throws \moodle_exception
     */
    public static function notfound($printtext) {
        global $PAGE, $OUTPUT, $CFG;

        header("HTTP/1.0 404 Not Found");
        $PAGE->set_context(\context_system::instance());
        $PAGE->set_pagelayout(get_config("local_kopere_dashboard", "webpages_theme"));
        $PAGE->set_title(get_string("error"));
        $PAGE->set_heading(get_string("error"));

        $PAGE->navbar->add(get_string("webpages_allpages", "local_kopere_dashboard"), new moodle_url("/local/kopere_dashboard/"));
        $PAGE->navbar->add(get_string("error"));

        echo $OUTPUT->header();

        echo "<div class='element-box text-center page404'>
                  <h2>" . get_string("error") . "</h2>
                  <div>" . get_string($printtext, "local_kopere_dashboard") . "</div>
                  <p><a href='{$CFG->wwwroot}/local/kopere_dashboard/'>" .
            get_string("webpages_allpages", "local_kopere_dashboard") . "</a></p>
              </div>";

        echo $OUTPUT->footer();
        die();
    }

    /**
     * Function analytics
     *
     * @throws \dml_exception
     */
    public static function analytics() {
        $webpagesanalyticsid = get_config("local_kopere_dashboard", "webpages_analytics_id");
        if (strlen($webpagesanalyticsid) > 5 && strlen($webpagesanalyticsid) < 15) {

            echo "
                <script>
                    (function(i,s,o,g,r,a,m){
                        i['GoogleAnalyticsObject']=r;
                        i[r]=i[r]||function(){
                            (i[r].q=i[r].q||[]).push(arguments)
                        },i[r].l=1*new Date();
                        a=s.createElement(o), m=s.getElementsByTagName(o)[0];
                        a.async=1;
                        a.src=g;
                        m.parentNode.insertBefore(a,m)
                    })(window,document,'script','https:// www.google-analytics.com/analytics.js','ga');
                    ga('create', '{$webpagesanalyticsid}', 'auto');
                    ga('send', 'pageview');
                </script>";
        }
    }
}
