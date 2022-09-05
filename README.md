# path-traversal-ccsep
Just a place to store our stuff

After installing apache on your system:

  - Add the pathtraversal folder into /var/www
  - Add pathtraversal.com.conf to /etc/apache2/sites-available
  - Type a2ensite pathtraversal.com.conf into the terminal
  - Type a2dissite 000-default.conf into the terminal
  - Type systemctl restart apache2
  - You should now be able to access the website
 
 I have just made a very basic website that takes an input, exploiting hasn't been implemented as of 05/09/2022.
