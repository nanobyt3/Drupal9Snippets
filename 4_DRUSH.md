# Drush Setup
Starting with Drupal 9, it seems that Drush needs to be installed as a local dependency of a Drupal project (via composer.json)
```
composer require drush/drush
```
A better way would be to install Drush as a --dev dependency only
```
composer require --dev drush/drush
```

## Usage
From inside a Drupal project's root directory (not web-root or docroot)
```
vendor/bin/drush
```
### To access Drush from anywhere, install Drush Launcher
Reference: https://github.com/drush-ops/drush-launcher

Linux/WSL:
```
wget -O drush.phar https://github.com/drush-ops/drush-launcher/releases/latest/download/drush.phar
chmod +x drush.phar
sudo mv drush.phar /usr/local/bin/drush
```

## Verify
```
drush --version
```