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
 * @package   theme_e_learning
 * @copyright 2013 Moodle, moodle.org
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Parses CSS before it is cached.
 *
 * This function can make alterations and replace patterns within the CSS.
 *
 * @param string $css The CSS
 * @param theme_config $theme The theme config object.
 * @return string The parsed CSS The parsed CSS.
 */
function theme_e_learning_process_css($css, $theme) {

    // Set the background image for the logo.
    $logo = $theme->setting_file_url('logo', 'logo');
    $css = theme_e_learning_set_logo($css, $logo);

    // Set the background image for the banner.
    $banner = $theme->setting_file_url('banner', 'banner');
    $css = theme_e_learning_set_banner($css, $banner);

    // Set the background image for the navibarimg.
    $navibarimg = $theme->setting_file_url('navibarimg', 'navibarimg');
    $css = theme_e_learning_set_navibarimg($css, $navibarimg);

    // Set the background image for the backgndbanner.
    $backgndbanner = $theme->setting_file_url('backgndbanner', 'backgndbanner');
    $css = theme_e_learning_set_backgndbanner($css, $backgndbanner);

    // Set the background image for the backgndbanner.
    $backgndbanner = $theme->setting_file_url('backgndbanner', 'backgndbanner');
    $css = theme_e_learning_set_backgndbanner($css, $backgndbanner);

    // Set the background image for the switchminus.
    $switchminus = $theme->setting_file_url('switchminus', 'switchminus');
    $css = theme_e_learning_set_switchminus($css, $switchminus);

    // Set the background image for the switchplus.
    $switchplus = $theme->setting_file_url('switchplus', 'switchplus');
    $css = theme_e_learning_set_switchplus($css, $switchplus);

    // Set the background image for the blocktodock.
    $blocktodock = $theme->setting_file_url('blocktodock', 'blocktodock');
    $css = theme_e_learning_set_blocktodock($css, $blocktodock);
    
    // Set custom CSS.
    if (!empty($theme->settings->customcss)) {
        $customcss = $theme->settings->customcss;
    } else {
        $customcss = null;
    }
    $css = theme_e_learning_set_customcss($css, $customcss);

    return $css;
}

/**
 * Adds the logo to CSS.
 *
 * @param string $css The CSS.
 * @param string $logo The URL of the logo.
 * @return string The parsed CSS
 */
function theme_e_learning_set_logo($css, $logo) {
    global $OUTPUT;
    $tag = '[[setting:logo]]';
    $replacement = $logo;
    if (is_null($replacement)) {
        $replacement = $OUTPUT->pix_url('logo','theme');
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

/**
 * Adds the banner to CSS.
 *
 * @param string $css The CSS.
 * @param string $banner The URL of the banner.
 * @return string The parsed CSS
 */
function theme_e_learning_set_banner($css, $banner) {
    global $OUTPUT;
    $tag = '[[setting:banner]]';
    $replacement = $banner;
    if (is_null($replacement)) {
        $replacement = $OUTPUT->pix_url('banner','theme');
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

/**
 * Adds the banner to CSS.
 *
 * @param string $css The CSS.
 * @param string $banner The URL of the banner.
 * @return string The parsed CSS
 */
function theme_e_learning_set_navibarimg($css, $navibarimg) {
    global $OUTPUT;
    $tag = '[[setting:navibarimg]]';
    $replacement = $navibarimg;
    if (is_null($replacement)) {
        $replacement = $OUTPUT->pix_url('navbar','theme');
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}


/**
 * Adds the banner to CSS.
 *
 * @param string $css The CSS.
 * @param string $banner The URL of the banner.
 * @return string The parsed CSS
 */
function theme_e_learning_set_backgndbanner($css, $backgndbanner) {
    global $OUTPUT;
    $tag = '[[setting:backgndbanner]]';
    $replacement = $backgndbanner;
    if (is_null($replacement)) {
        $replacement = $OUTPUT->pix_url('backgroundbanner','theme');
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}


function theme_e_learning_set_switchminus($css, $switchminus) {
    global $OUTPUT;
    $tag = '[[setting:switchminus]]';
    $replacement = $switchminus;
    if (is_null($replacement)) {
        $replacement = $OUTPUT->pix_url('switchminus','theme');
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

function theme_e_learning_set_switchplus($css, $switchplus) {
    global $OUTPUT;
    $tag = '[[setting:switchplus]]';
    $replacement = $switchplus;
    if (is_null($replacement)) {
        $replacement = $OUTPUT->pix_url('switchplus','theme');
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

function theme_e_learning_set_blocktodock($css, $blocktodock) {
    global $OUTPUT;
    $tag = '[[setting:blocktodock]]';
    $replacement = $blocktodock;
    if (is_null($replacement)) {
        $replacement = $OUTPUT->pix_url('blocktodock','theme');
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

/**
 * Serves any files associated with the theme settings.
 *
 * @param stdClass $course
 * @param stdClass $cm
 * @param context $context
 * @param string $filearea
 * @param array $args
 * @param bool $forcedownload
 * @param array $options
 * @return bool
 */
function theme_e_learning_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options = array()) {
    if ($context->contextlevel == CONTEXT_SYSTEM) {
        $theme = theme_config::load('e_learning');
        // By default, theme files must be cache-able by both browsers and proxies.
        if (!array_key_exists('cacheability', $options)) {
            $options['cacheability'] = 'public';
        }
        return $theme->setting_file_serve($filearea, $args, $forcedownload, $options);
    } else {
        send_file_not_found();
    }
}

/**
 * Adds any custom CSS to the CSS before it is cached.
 *
 * @param string $css The original CSS.
 * @param string $customcss The custom CSS to add.
 * @return string The CSS which now contains our custom CSS.
 */
function theme_e_learning_set_customcss($css, $customcss) {
    $tag = '[[setting:customcss]]';
    $replacement = $customcss;
    if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

/**
 * Returns an object containing HTML for the areas affected by settings.
 *
 * Do not add e_learning specific logic in here, child themes should be able to
 * rely on that function just by declaring settings with similar names.
 *
 * @param renderer_base $output Pass in $OUTPUT.
 * @param moodle_page $page Pass in $PAGE.
 * @return stdClass An object with the following properties:
 *      - navbarclass A CSS class to use on the navbar. By default ''.
 *      - heading HTML to use for the heading. A logo if one is selected or the default heading.
 *      - footnote HTML to use as a footnote. By default ''.
 */
function theme_e_learning_get_html_for_settings(renderer_base $output, moodle_page $page) {
    global $CFG;
    $return = new stdClass;

    $return->navbarclass = '';
    if (!empty($page->theme->settings->invert)) {
        $return->navbarclass .= ' navbar-inverse';
    }

    // Only display the logo on the front page and login page, if one is defined.
    // if (!empty($page->theme->settings->banner) &&
    //         ($page->pagelayout == 'frontpage' || $page->pagelayout == 'login')) {
    //     $return->heading = html_writer::tag('div', '', array('class' => 'banner'));
    // } else {
        $return->heading = $output->page_heading();
    // }

    $return->footnote = '';
    if (!empty($page->theme->settings->footnote)) {
        $return->footnote = '<div class="footnote text-center">'.format_text($page->theme->settings->footnote).'</div>';
    }

    return $return;
}

/**
 * All theme functions should start with theme_e_learning_
 * @deprecated since 2.5.1
 */
function e_learning_process_css() {
    throw new coding_exception('Please call theme_'.__FUNCTION__.' instead of '.__FUNCTION__);
}

/**
 * All theme functions should start with theme_e_learning_
 * @deprecated since 2.5.1
 */
function e_learning_set_logo() {
    throw new coding_exception('Please call theme_'.__FUNCTION__.' instead of '.__FUNCTION__);
}

/**
 * All theme functions should start with theme_e_learning_
 * @deprecated since 2.5.1
 */
function e_learning_set_customcss() {
    throw new coding_exception('Please call theme_'.__FUNCTION__.' instead of '.__FUNCTION__);
}
