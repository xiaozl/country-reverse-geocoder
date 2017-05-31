# country-reverse-geocoder
Reverse country names from lat/lon. Project was initiated first for the geokrety.org project.

# Requirements
* A database (mariadb in our case) with GIS support.
* A working php service
* A webserver

# Install
* Copy `geocoder.php` somewhere accessible by php.
* Copy `geocoder.inc.ex.php` as `geocoder.inc.php` next to `geocoder.php`
* Edit `geocoder.inc.php` and fill your database configuration
* Create a database, and import `countries.sql`.

# Data source
All country polygons were extracted from Open Street Map.

# License
Code is released under MIT license.

OSM data apply to © OpenStreetMap contributors
