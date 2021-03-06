<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redissentineltribute it and/or modify
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
 * redissentinel Cache Store - Version information
 *
 * @package   cachestore_redissentinel
 * @copyright 2017 Catalyst IT
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version    = 2016120500;
$plugin->requires   = 2017111300; // Requires 3.4. (contains PHP 7 code.)
$plugin->maturity   = MATURITY_STABLE;
$plugin->component  = 'cachestore_redissentinel';
$plugin->release    = '3.0.4 (Build: 20160509)';
