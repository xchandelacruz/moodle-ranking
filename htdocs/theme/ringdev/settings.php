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
 * Moodle's Clean theme, an example of how to make a Bootstrap theme
 *
 * DO NOT MODIFY THIS THEME!
 * COPY IT FIRST, THEN RENAME THE COPY AND MODIFY IT INSTEAD.
 *
 * For full information about creating Moodle themes, see:
 * http://docs.moodle.org/dev/Themes_2.0
 *
 * @package   theme_ringdev
 * @copyright 2013 Moodle, moodle.org
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    // Invert Navbar to dark background.
    $name = 'theme_ringdev/invert';
    $title = get_string('invert', 'theme_ringdev');
    $description = get_string('invertdesc', 'theme_ringdev');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Logo file setting.
    $name = 'theme_ringdev/logo';
    $title = get_string('logo','theme_ringdev');
    $description = get_string('logodesc', 'theme_ringdev');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Banner file setting.
    $name = 'theme_ringdev/banner';
    $title = get_string('banner','theme_ringdev');
    $description = get_string('bannerdesc', 'theme_ringdev');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'banner');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Navigation Bar file setting.
    $name = 'theme_ringdev/navibarimg';
    $title = get_string('navibarimg','theme_ringdev');
    $description = get_string('navibarimgdesc', 'theme_ringdev');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'navibarimg');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Background Banner file setting.
    $name = 'theme_ringdev/backgndbanner';
    $title = get_string('backgndbanner','theme_ringdev');
    $description = get_string('backgndbannerdesc', 'theme_ringdev');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'backgndbanner');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Custom CSS file.
    $name = 'theme_ringdev/customcss';
    $title = get_string('customcss', 'theme_ringdev');
    $description = get_string('customcssdesc', 'theme_ringdev');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Footnote setting.
    $name = 'theme_ringdev/footnote';
    $title = get_string('footnote', 'theme_ringdev');
    $description = get_string('footnotedesc', 'theme_ringdev');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
}
