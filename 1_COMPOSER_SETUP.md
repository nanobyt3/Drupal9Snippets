# Install COMPOSER
#### SOURCE: https://getcomposer.org/download/

## Command-line installation via PHP (UBUNTU)
```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```
#### Composer local/project usage
```
php composer.phar
```
#### Access composer globally via command-line
```
sudo mv composer.phar /usr/local/bin/composer
```

## Useful Links
- Documentation: https://getcomposer.org/doc/
- The composer.json schema: https://getcomposer.org/doc/04-schema.md
- Packages: https://packagist.org/