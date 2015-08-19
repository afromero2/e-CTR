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
 * Este archivo reemplaza las declaraciones heredadas de db/install.xml,
 * lib.php/modulename_install() post installation hook and partially defaults.php
 *
 * @package    mod_ectr
 * @copyright  2015 Manuel Fernando
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Procedimiento posterior a la instalacion
 *
 * @see upgrade_plugins_modules()
 */
function xmldb_ectr_install() {
}

/**
 * Procedimiento de recuperacion posterior a la instalacion
 *
 * @see upgrade_plugins_modules()
 */
function xmldb_ectr_install_recovery() {
}
