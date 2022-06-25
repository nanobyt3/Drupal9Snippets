# Install Drupal 9 (via Composer)
#### SOURCE: https://www.drupal.org/docs/develop/using-composer/manage-dependencies
#### With v9.4+, it is recommended to use composer. See notes below.
#### This will also allow for patch-level update of core dependencies.
#
```
composer create-project drupal/recommended-project my_site_name_dir
```

## Install specific version of Drupal
```
composer create-project drupal/recommended-project:9.3.12 my_site_name_dir
```

## Install latest version of a specific release of Drupal
Below command will install latest version of 9.3 release
```
composer create-project drupal/recommended-project:^9.3 my_site_name_dir
```

*Drupal 9.4+ sites built with tarballs will no longer be receiving the same level of security support for core dependencies. Going forward, if core is not known to be exploitable, the core tarballs' dependencies will be updated within a few days (if contrib is known to be vulnerable) to a few weeks (if the vulnerability is uncommon or theoretical).*

*Sites built with tarballs should convert to using drupal/core-recommended in order to be able to apply security updates more promptly than the above timeframe.*