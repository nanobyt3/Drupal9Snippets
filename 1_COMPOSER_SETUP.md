# Install COMPOSER
#### SOURCE: https://getcomposer.org/download/

## Command-line installation via PHP (UBUNTU)
```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
php -r "unlink('composer-setup.php');"
sudo mv composer.phar /usr/local/bin/composer
```