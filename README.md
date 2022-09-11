# path-traversal-ccsep
Just a place to store our stuff

IF you don't want to overwrite existing files:
After installing apache on your system:

  - Add the pathtraversal folder into /var/www
  - Add pathtraversal.com.conf to /etc/apache2/sites-available
  - Type a2ensite pathtraversal.com.conf into the terminal
  - Type a2dissite 000-default.conf into the terminal
  - Type systemctl restart apache2
  - You should now be able to access the website
  -
===========================
For a quicker installation
===========================
Add the contents of the zip folder www into /var/www
Add the contents of the zip folder apache2 into /etc/apache2, overwriting any exisiting files
This installation is a newer version of the website using PHP instead of html
 
 PHP Exploitation is now working under http://localhost/pathtraversal/html/index.php?file=""
