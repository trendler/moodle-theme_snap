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
 * Test strings lang pack.
 *
 * @package   theme_snap
 * @author    Rafael Monterroza <rafael.monterroza@openlms.net>
 * @copyright Copyright (c) 2020 Open LMS (https://www.openlms.net)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

class theme_snap_urls_and_strings_check_test extends advanced_testcase  {

    /**
     * Setup for each test.
     */
    protected function setUp() {
        $this->resetAfterTest();
    }

    /**
     * @dataProvider geturls
     *
     * @param string $language
     * @param string $snapstring
     * @param string $url
     */
    public function test_strings_specific_url_correct($language, $snapstring, $url) {

        $stringcontent = get_string_manager()->get_string($snapstring, 'theme_snap', null, $language);
        $containsstring = strpos($stringcontent, $url);
        $message = 'This language pack has a specific redirection URL, please double check and fix it. ';
        $message .= 'String key = ' . $snapstring . '. Language pack = ' . $language;
        $this->assertNotFalse($containsstring, $message);
    }

    public function geturls() {
        return [
            // Follow the pattern [language, string key, URL].
            ['es', 'poweredbyrunby', 'es.openlms.net'],
            ['fr', 'poweredbyrunby', 'fr.openlms.net'],
            ['ja', 'poweredbyrunby', 'jp.openlms.net'],
            ['pt_br', 'poweredbyrunby', 'br.openlms.net'],
        ];
    }

    /**
     * @dataProvider gettranslations
     *
     * @param string $language
     * @param string $snapstring
     */
    public function test_strings_check_lang_pack_correct($language, $snapstring) {

        $stringcontent = get_string_manager()->get_string($snapstring, 'theme_snap', null, $language);
        $containsstring = strpos($stringcontent, 'lackboard');
        $message = 'The word blackboard was found in a language pack. ';
        $message .= 'String key = ' . $snapstring . '. Language pack = ' . $language;
        $this->assertFalse($containsstring, $message);
    }

    public function gettranslations() {
        return [
            // Follow the pattern [language, string key].
            ['ar', 'poweredbyrunby'],
            ['ca', 'poweredbyrunby'],
            ['cs', 'poweredbyrunby'],
            ['da', 'poweredbyrunby'],
            ['de', 'poweredbyrunby'],
            ['en', 'poweredbyrunby'],
            ['es', 'poweredbyrunby'],
            ['fi', 'poweredbyrunby'],
            ['fr', 'poweredbyrunby'],
            ['it', 'poweredbyrunby'],
            ['ja', 'poweredbyrunby'],
            ['nl', 'poweredbyrunby'],
            ['pl', 'poweredbyrunby'],
            ['pt_br', 'poweredbyrunby'],
            ['th', 'poweredbyrunby'],
            ['tr', 'poweredbyrunby'],
            ['zh_tw', 'poweredbyrunby'],
        ];
    }
}