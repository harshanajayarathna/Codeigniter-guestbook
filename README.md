# Codeigniter-guestbook
Codeigniter Guest book with Google Recaptcha

# Installation
1. Download the project into your computer
2. import the alphaone database
3. Change the $config['base_url'] in application->config->config.php file , if necessary.
4. Change the database configuration in application->config->database.php file , if necessary.
5. Now run http://localhost/codeigniter-guestbook/guest

# Re-use
For the re-use this, you need to spend 2 minutes
1. create google recaptcha ( go to https://www.google.com/recaptcha/admin)
2. register site
3. get site-key and put it in application->view->yourview.php (Ex: guest.php)
4. get secret and put it in application->libraries->google_recaptcha.php
5. do required configuration in application->controllers->yourcontroller.php (Ex: Guest.php)

# Author
Harshana Jayarathna
