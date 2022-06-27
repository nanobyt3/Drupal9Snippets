# Managing Drupal updates via Composer
#### Reference: https://www.drupal.org/docs/updating-drupal/updating-drupal-core-via-composer

## Check for outdated packages/modules
```
composer outdated "drupal/*"
```

## Update Drupal core
```
composer update "drupal/core-*" --with-all-dependencies
```
*To simulate the update, and show you what would happen, without actually changing anything, add --dry-run*

## Update to the latest patch version of core
For example, if 9.4 is the current minor version and you want to update your site to the latest patch version of 9.3:
```
composer update "drupal/core-*" --with-all-dependencies --with=drupal/core-recommended:~9.3.0 --with=drupal/core-composer-scaffold:~9.3.0
```

## Update to a specific version of core
```
composer require drupal/core-recommended:9.3.6 drupal/core-composer-scaffold:9.3.6 drupal/core-project-message:9.3.6 --update-with-all-dependencies
```

## Check for security updates
```
drush pm:security
```

## Module updates
```
composer update drupal/modulename --with-all-dependencies
```
OR a specific version (e.g. 2.0) of the module
```
composer require drupal/modulename:^2.0
```

## After core/module updates, run database updates
Either use drush:
```
drush updatedb
drush cache:rebuild
```
OR 
visit [Website base URL]/update.php in a browser.

*I prefer web approach over drush, as I have faced some rare issues with Drush.*

## Production, Staging or Dev environment updates
Copy the composer.json and composer.lock files on to Dev/Staging/Prod environments and run:
```
composer install
```
OR with  ---no-dev to ignore dev packages (useful for production)
```
composer install --no-dev
```