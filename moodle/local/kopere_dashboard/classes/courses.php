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
 * couses file
 *
 * introduced 31/01/17 05:32
 *
 * @package   local_kopere_dashboard
 * @copyright 2017 Eduardo Kraus {@link http://eduardokraus.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_kopere_dashboard;

use local_kopere_dashboard\html\button;
use local_kopere_dashboard\html\data_table;
use local_kopere_dashboard\html\form;
use local_kopere_dashboard\html\inputs\input_base;
use local_kopere_dashboard\html\inputs\input_email;
use local_kopere_dashboard\html\inputs\input_select;
use local_kopere_dashboard\html\inputs\input_text;
use local_kopere_dashboard\html\table_header_item;
use local_kopere_dashboard\util\config;
use local_kopere_dashboard\util\dashboard_util;
use local_kopere_dashboard\util\enroll_util;
use local_kopere_dashboard\util\header;
use local_kopere_dashboard\util\html;
use local_kopere_dashboard\util\json;
use local_kopere_dashboard\util\message;
use local_kopere_dashboard\util\url_util;
use local_kopere_dashboard\util\user_util;
use local_kopere_dashboard\util\string_util;
use local_kopere_dashboard\util\title_util;
use local_kopere_dashboard\vo\local_kopere_dashboard_pages;

/**
 * Class courses
 *
 * @package local_kopere_dashboard
 */
class courses {

    /**
     * Function dashboard
     *
     * @throws \coding_exception
     * @throws \dml_exception
     */
    public function dashboard() {
        dashboard_util::add_breadcrumb(get_string("courses_title", "local_kopere_dashboard"));
        dashboard_util::add_breadcrumb(get_string("courses_title1", "local_kopere_dashboard"));
        dashboard_util::start_page();

        echo '<div class="element-box">';

        $table = new data_table();
        $table->add_header("#", "id", table_header_item::TYPE_INT, null, "width: 20px");
        $table->add_header(get_string("courses_name", "local_kopere_dashboard"), "fullname");
        $table->add_header(get_string("courses_shortname", "local_kopere_dashboard"), "shortname");
        $table->add_header(get_string("visible", "local_kopere_dashboard"), "visible", table_header_item::RENDERER_VISIBLE);
        $table->add_header(get_string("courses_enrol", "local_kopere_dashboard"), "enrolments",
            table_header_item::TYPE_INT, null, "width:50px;white-space:nowrap;");

        $table->set_ajax_url(url_util::makeurl("courses", "load_all_courses"));
        $table->set_click_redirect(url_util::makeurl("courses", "details", ["courseid" => "{id}"]), "id");
        $table->print_header();
        $table->close();

        echo "</div>";
        dashboard_util::end_page();
    }

    /**
     * Function load_all_courses
     *
     * @throws \coding_exception
     * @throws \dml_exception
     */
    public function load_all_courses() {
        global $DB;

        $mycourses = optional_param("mycourses", false, PARAM_INT);

        $cache = \cache::make("local_kopere_dashboard", "courses_all_courses");
        $cachekey = "load_all_courses";
        if (!$mycourses && $cache->has($cachekey)) {
            $courses = $cache->get($cachekey);
        } else {
            $courses = $DB->get_records_sql("
                SELECT c.id, c.fullname, c.shortname, c.visible, COUNT(DISTINCT ue.id) AS enrolments
                  FROM {course}           c
                  JOIN {enrol}            e ON e.courseid = c.id
                  JOIN {user_enrolments} ue ON ue.enrolid = e.id
                 WHERE c.id > 1
              GROUP BY c.id, c.fullname, c.shortname, c.visible"
            );

            if ($mycourses) {
                $returncourses = [];
                foreach ($courses as $course) {
                    $coursecontext = \context_course::instance($course->id);
                    if (has_capability("moodle/course:view", $coursecontext)) {
                        $returncourses[] = $course;
                    }
                }

                $courses = $returncourses;
            } else {
                $cache->set($cachekey, $courses);
            }
        }

        json::encode($courses);
    }

    /**
     * Function count_all
     *
     * @param $format
     *
     * @return string
     * @throws \coding_exception
     * @throws \dml_exception
     */
    public static function count_all($format) {
        global $DB;

        $count = $DB->get_record_sql("SELECT count(*) as num FROM {course} WHERE id > 1");

        if ($format) {
            return number_format($count->num, 0, get_string("decsep", "langconfig"),
                get_string("thousandssep", "langconfig"));
        }

        return $count->num;
    }

    /**
     * Function count_all_visibles
     *
     * @param $format
     *
     * @return string
     * @throws \coding_exception
     * @throws \dml_exception
     */
    public static function count_all_visibles($format) {
        global $DB;

        $count = $DB->get_record_sql("SELECT count(*) as num FROM {course} WHERE id > 1 AND visible = 1");

        if ($format) {
            return number_format($count->num, 0, get_string("decsep", "langconfig"),
                get_string("thousandssep", "langconfig"));
        }

        return $count->num;
    }

    /**
     * Function details
     *
     * @throws \coding_exception
     * @throws \dml_exception
     */
    public function details() {
        global $DB, $CFG, $PAGE;

        $courseid = optional_param("courseid", 0, PARAM_INT);
        if ($courseid == 0) {
            header::notfound(get_string("courses_invalid", "local_kopere_dashboard"));
        }

        $course = $DB->get_record("course", ["id" => $courseid]);
        header::notfound_null($course, get_string("courses_notound", "local_kopere_dashboard"));

        dashboard_util::add_breadcrumb(get_string("courses_title", "local_kopere_dashboard"),
            url_util::makeurl("courses", "dashboard"));
        dashboard_util::add_breadcrumb($course->fullname);
        dashboard_util::start_page();

        echo '<div class="element-box">
                  <h3>' . get_string("courses_sumary", "local_kopere_dashboard") . ' ' .
            button::info(get_string("courses_edit", "local_kopere_dashboard"),
                "{$CFG->wwwroot}/course/edit.php?id={$course->id}#id_summary_editor", "btn-xs", false, true) . ' ' .
            button::primary(get_string("courses_access", "local_kopere_dashboard"),
                "{$CFG->wwwroot}/course/view.php?id={$course->id}", "btn-xs", false, true) . '
                  </h3>
                  <div class="panel panel-default">
                      <div class="panel-body">' . $course->summary . '</div>';
        $this->create_static_page($course);
        echo '    </div>
              </div>';

        echo '<div class="element-box table-responsive table-new-enrol" style="display:none">';
        title_util::print_h3("courses_enrol_new");
        $form = new form(url_util::makeurl("courses", "enrol_new",
            ["courseid" => $course->id, "sesskey" => sesskey()]));
        $form->add_input(
            input_email::new_instance()
                ->set_name("usuario-email")
                ->set_title(get_string("courses_student_email", "local_kopere_dashboard"))
                ->set_required()
        );
        $form->create_submit_input(get_string("courses_validate_user", "local_kopere_dashboard"));
        $form->close();

        echo "</div>";

        echo '<div class="element-box table-responsive table-list-enrol">';
        echo
            "<h3>" .
            get_string("courses_titleenrol", "local_kopere_dashboard") .
            ' <span class="btn btn-primary bt-courses_enrol_new">' .
            get_string("courses_enrol_new", "local_kopere_dashboard") . "</span>" .
            "</h3>";

        $table = new data_table();
        $table->add_header("#", "id", table_header_item::TYPE_INT);
        $table->add_header(get_string("courses_student_name", "local_kopere_dashboard"), "nome");
        $table->add_header(get_string("courses_student_email", "local_kopere_dashboard"), "email");
        $table->add_header(get_string("courses_student_status", "local_kopere_dashboard"),
            "status", table_header_item::RENDERER_STATUS);

        $table->set_ajax_url(url_util::makeurl("enroll", "ajax_dashboard", ["courseid" => "{$courseid}"]));
        $table->set_click_redirect(url_util::makeurl("users", "details", ["userid" => "{id}"]), "id");
        $table->print_header();
        $table->close();

        echo "</div>";
        $PAGE->requires->js_call_amd("local_kopere_dashboard/course", "courses_enrol_new");

        dashboard_util::end_page();
    }

    /**
     * Function enrol_new
     *
     * @throws \coding_exception
     * @throws \dml_exception
     * @throws \moodle_exception
     */
    public function enrol_new() {
        global $DB, $CFG, $PAGE, $USER;

        $courseid = optional_param("courseid", 0, PARAM_INT);
        if ($courseid == 0) {
            header::notfound(get_string("courses_invalid", "local_kopere_dashboard"));
        }

        $course = $DB->get_record("course", ["id" => $courseid]);
        header::notfound_null($course, get_string("courses_notound", "local_kopere_dashboard"));

        dashboard_util::add_breadcrumb(get_string("courses_title", "local_kopere_dashboard"),
            url_util::makeurl("courses", "dashboard"));
        dashboard_util::add_breadcrumb($course->fullname);
        dashboard_util::add_breadcrumb(get_string("courses_enrol_new", "local_kopere_dashboard"));
        dashboard_util::start_page();

        echo '<div class="element-box table-responsive table-new-enrol">';

        require_sesskey();

        $userid = optional_param("userid", 0, PARAM_INT);
        $email = optional_param("usuario-email", "", PARAM_EMAIL);
        $user = $DB->get_record_select("user", "email = '{$email}' OR id = '{$userid}'");

        if ($user) {
            title_util::print_h3("courses_validate_user");

            echo "<div class='d-flex'>";
            echo profile::user_data($user, 50);
            echo "</div>";

            $tifirst = strtoupper(substr($user->firstname, 0, 1));
            $tilast = strtoupper(substr($user->lastname, 0, 1));
            $linkenrol = "{$CFG->wwwroot}/user/index.php?id={$course->id}&tifirst={$tifirst}&tilast={$tilast}";
            if (enroll_util::enrolled($course, $user)) {
                message::print_info(get_string("courses_student_cadastrado", "local_kopere_dashboard", $linkenrol));
            } else {

                $matricular = optional_param("matricular", false, PARAM_INT);
                if ($matricular) {
                    enroll_util::enrol($course, $user, time(), 0);

                    redirect($linkenrol, get_string("courses_student_cadastrar_ok", "local_kopere_dashboard"));
                }

                button::add(get_string("courses_student_cadastrar", "local_kopere_dashboard"),
                    url_util::makeurl("courses", "enrol_new",
                        ["courseid" => $course->id, "userid" => $user->id, "matricular" => 1, "sesskey" => sesskey()]));
            }

        } else {

            $nome = optional_param("usuario-nome", false, PARAM_TEXT);
            $password = optional_param("usuario-senha", string_util::generate_random_password(), PARAM_TEXT);
            $address = optional_param("address", "", PARAM_TEXT);
            $city = optional_param("city", "", PARAM_TEXT);
            $phone1 = optional_param("phone1", "", PARAM_TEXT);

            if ($nome) {

                $newuser = new \stdClass();

                $newuser->idnumber = "";
                $newuser->firstname = $nome;
                $newuser->lastname = null;
                $newuser->username = strtolower($email);
                $newuser->email = strtolower($email);
                $newuser->password = $password;
                $newuser->address = $address;
                $newuser->city = $city;
                $newuser->country = $USER->country;
                $newuser->phone1 = $phone1;
                $newuser->phone2 = "";
                $newuser->auth = "manual";
                $newuser->confirmed = 1;
                $newuser->mnethostid = $CFG->mnet_localhost_id;

                $newuser = user_util::explode_name($newuser);

                $errors = user_util::validate_new_user($newuser);
                if ($errors) {
                    message::print_danger($errors);
                } else {
                    try {
                        require_once("{$CFG->dirroot}/user/lib.php");
                        $newuser->id = user_create_user($newuser);

                        $a = [
                            "login" => $newuser->username,
                            "password" => $password,
                        ];
                        message::schedule_message_success(get_string("courses_student_ok", "local_kopere_dashboard", $a));
                        header::location(
                            url_util::makeurl("courses", "enrol_new",
                                ["courseid" => $course->id, "userid" => $newuser->id, "sesskey" => sesskey()]));
                    } catch (\moodle_exception $e) {
                        message::print_danger($e->getMessage());
                    }
                }
            }

            title_util::print_h3("courses_enrol_new_form");
            $form = new form(url_util::makeurl("courses", "enrol_new", ["courseid" => $course->id, "sesskey" => sesskey()]));

            $form->add_input(
                input_text::new_instance()
                    ->set_name("usuario-nome")
                    ->set_value($nome)
                    ->set_title(get_string("courses_student_name", "local_kopere_dashboard"))
                    ->set_class(input_base::VAL_NOME)
                    ->set_required()
            );
            $form->add_input(
                input_email::new_instance()
                    ->set_name("usuario-email")
                    ->set_title(get_string("courses_student_email", "local_kopere_dashboard"))
                    ->set_value($email)
                    ->set_required()
            );
            $form->add_input(
                input_text::new_instance()
                    ->set_name("usuario-senha")
                    ->set_title(get_string("courses_student_password", "local_kopere_dashboard"))
                    ->set_value($password)
                    ->set_required()
            );

            echo "<div class='form-group'>
                      <label>" . get_string("optional", "form") . "</label>
                      <div class='panel panel-default'>
                          <div class='panel-body'>";
            $form->add_input(
                input_text::new_instance()
                    ->set_name("address")
                    ->set_title(get_string("address"))
                    ->set_value($address)
            );
            $form->add_input(
                input_text::new_instance()
                    ->set_name("city")
                    ->set_title(get_string("city"))
                    ->set_value($city)
            );
            $form->add_input(
                input_text::new_instance()
                    ->set_name("phone1")
                    ->set_title(get_string("phone1"))
                    ->set_value($phone1)
            );
            echo "</div></div></div>";

            $form->create_submit_input(get_string("courses_user_create", "local_kopere_dashboard"));
            $form->close();
        }
        echo "</div>";

        $PAGE->requires->js_call_amd("local_kopere_dashboard/course", "courses_enrol_new");
    }

    /**
     * Function create_static_page
     *
     * @param $course
     *
     * @throws \coding_exception
     * @throws \dml_exception
     */
    public function create_static_page($course) {
        global $DB;

        $menus = webpages::list_menus();
        if ($menus) {
            echo '<div class="panel-footer">';

            $webpagess = $DB->get_records("local_kopere_dashboard_pages", ["courseid" => $course->id]);

            if ($webpagess) {
                title_util::print_h4("courses_page_title");

                /** @var local_kopere_dashboard_pages $webpages */
                foreach ($webpagess as $webpages) {
                    echo "<p><a href='" . url_util::makeurl("webpages", "page_details", ["id" => $webpages->id]) .
                        "{'>&nbsp;&nbsp;&nbsp;&nbsp;}" .
                        $webpages->title . "</a></p>";
                }
            }

            $form = new form(url_util::makeurl("webpages", "page_edit_save"), "form-inline");
            $form->create_hidden_input("id", 0);
            $form->create_hidden_input("courseid", $course->id);
            $form->create_hidden_input("title", $course->fullname);
            $form->create_hidden_input("link", html::link($course->fullname));
            $form->add_input(
                input_select::new_instance()
                    ->set_title(get_string("webpages_table_menutitle", "local_kopere_dashboard"))
                    ->set_name("menuid")
                    ->set_values($menus)
            );
            $form->create_hidden_input("theme", config::get_key("webpages_theme"));
            $form->create_hidden_input("text", $course->summary);
            $form->create_hidden_input("visible", 1);
            $form->create_submit_input(get_string("courses_page_create", "local_kopere_dashboard"), "margin-left-15");
            $form->close();
            echo "</div>";
        }
    }
}
