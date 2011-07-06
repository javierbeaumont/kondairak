<?php

#  Kondairak
#
#  Copyright © 2011 Javier Beaumont <contact@javierbeaumont.org>
#
#  This file is part of Kondairak.
#
#  Kondairak is free software: you can redistribute it and/or modify
#  it under the terms of the GNU Affero General Public License as
#  published by the Free Software Foundation, either version 3 of the
#  License, or (at your option) any later version.
#
#  Kondairak is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
#  GNU Affero General Public License for more details.
#
#  You should have received a copy of the GNU Affero General Public License
#  along with Kondairak. If not, see <http://www.gnu.org/licenses/>.

################################################################################
############################# BASIC CONFIGURATION ##############################
################################################################################

# PRI_DIR -- 'private/' directory location (and name, ending with '/').
#             Absolute or relative path to this configuration file (config.php).
#             The absolute path is best for performance.

define('PRI_DIR', '../private/');

# DB_HOST -- Host where database is located. 'localhost' by default.
# DB_USER -- User of the database.
# DB_PASS -- Password of the database.
# DB_NAME -- Name of the database.

define('DB_HOST', 'localhost');
define('DB_USER', 'kondairakuser');
define('DB_PASS', 'kondairakpass');
define('DB_NAME', 'kondairak');

################################################################################
############################ ADVANCED CONFIGURATION ############################
################################################################################

# DB_PORT -- Port of MySQL database.

define('DB_PORT', 3306);

# PREFIX -- Database tables prefix. For example: define('PREFIX', 'k_');
#           FALSE (none) by default.

define('PREFIX', FALSE);

/**
 * @file config.php
 * @brief Site configuration file.
 *
 * @enum PRI_DIR 'private/' directory location (and name, ending with '/').
 *   Absolute or relative path to this configuration file (config.php). The
 *   absolute path is best for performance.
 * @enum DB_HOST Host where database is located. 'localhost' by default.
 * @enum DB_USER User of the database.
 * @enum DB_PASS Password of the database.
 * @enum DB_NAME Name of the database.
 * @enum DB_PORT Port of MySQL database.
 * @enum PREFIX Database tables prefix. For example: @code define('PREFIX',
 *   'k_'); @endcode. FALSE (none) by default.
 */

?>