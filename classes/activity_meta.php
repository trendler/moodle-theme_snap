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

namespace theme_snap;

class activity_meta {

    // Strings.
    public $submittedstr;
    public $notsubmittedstr;
    public $submitstrkey;
    public $draftstr;
    public $reopenedstr;

    // General meta data.
    public $timeopen;
    public $timeclose;
    public $isteacher = false;
    public $submissionnotrequired = false;

    // Student meta data.
    public $submitted = false; // Consider collapsing this variable + draft variable into one 'status' variable?
    public $draft = false;
    public $reopened = false;
    public $timesubmitted;
    public $grade;

    // Teacher meta data.
    public $numsubmissions = false;
    public $numrequiregrading = false;
}
