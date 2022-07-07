# File system permissions

## Linux
The entire Drupal directory should have 'www-data' as the owner & group. At least the group should be 'www-data'.
The webserver should not be albe to write anything to the Drupal directory, except for files directory
Depending on the server configuration, below should be changed.
```
$ cd <drupal-installation-directory>
$ sudo chown -R www-data:www-data ./
```

Permissions:
```
$ sudo chmod -R 744 ./
$ cd <files-directory>
$ sudo chmod -R 744 ./
```
If www-data is not the owner but only group then files folder perms should be
```
$ sudo chmod -R 774
```
