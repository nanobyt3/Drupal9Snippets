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

## Comman usage
### *v9.2.1*
### Additional reading: https://drushcommands.com/drush-9x/

Run `drush help [command]` to view command-specific help.

Run `drush topic` to read even more documentation.

### **_global:** 
|||
| ------------- | ------------- |
|help | Display usage details for a command. |
|list  | List available commands.|
|generate (gen) | Generate boilerplate code for modules/plugins/services etc.|
|version  | Show Drush version.|
|runserver (rs, serve) | Runs PHP's built-in http server for development.|
|browse  | Display a link to a given path or open link in a browser.|
|updatedb (updb) | Apply any database updates required (as with running update.php).|
|updatedb:status (updbst) | List any pending database updates.|
|drupal:directory (dd) | Return the filesystem path for modules/themes and other key folders.|
|twig:compile (twigc) | Compile all Twig template(s).|

---
### **cache:**
|||
| ------------- | ------------- |
|cache:get (cg) | Fetch a cached object and display it.|
|cache:clear (cc) | Clear a specific cache, or all Drupal caches.|
|cache:set (cs) | Cache an object expressed in JSON or var_export() format.|
|cache:rebuild (cr, rebuild) | Rebuild a Drupal 8 site.|

---
### **config:**
|||
| ------------- | ------------- |
| config:pull (cpull) | Export and transfer config from one environment to another.|
| config:get (cget) | Display a config value, or a whole configuration object.|
| config:set (cset) | Set config value directly. Does not perform a config import.|
| config:edit (cedit) | Open a config file in a text editor. Edits are imported after closing editor.|
| config:delete (cdel) | Delete a configuration key, or a whole object.|
| config:status (cst) | Display status of configuration (differences between the filesystem configuration and database configuration). |
| config:export (cex) | Export Drupal configuration to a directory.|
| config:import (cim) | Import config from a config directory.|

---
### **core:**
|||
| ------------- | ------------- |                                            
| core:rsync (rsync) | Rsync Drupal code or files to/from another server using ssh.|
| core:status (status, st) | An overview of the environment - Drush and Drupal.|
| core:topic (topic) | Read detailed documentation on a given topic.|
| core:edit (conf, config) | Edit drushrc, site alias, and Drupal settings.php files.|
| core:execute (exec, execute) | Execute a shell command. Usually used with a site alias.|
| core:init (init) | Enrich the bash startup file with bash aliases and a smart command prompt.|
| core:cron (cron) | Run all cron hooks in all active modules for specified site.|
| core:requirements (status-report, rq) | Information about things that may be wrong in your Drupal installation.|

---
### **entity:**
|||
| ------------- | ------------- |            
| entity:updates (entup) | Apply pending entity schema updates.|
| entity:delete (edel) | Delete content entities.|

---
### **image:**
|||
| ------------- | ------------- |
| image:flush (if) | Flush all derived images for a given style. |
| image:derive (id) | Create an image derivative. |

---
### **locale:**
|||
| ------------- | ------------- |                                                        
| locale:check | Checks for available translation updates. |
| locale:update | Imports the available translation updates. |

---
### **php:**
|||
| ------------- | ------------- |
| php:eval (eval, ev) | Evaluate arbitrary php code after bootstrapping Drupal (if available). |
| php:script (scr) | Run php a script after a full Drupal bootstrap. |
| php:cli (php, core:cli, core-cli) | Open an interactive shell on a Drupal site. |

---
### **pm:**
|||
| ------------- | ------------- |
| pm:security (sec) | Check Drupal Composer packages for pending security updates.|
| pm:enable (en) | Enable one or more modules.|
| pm:uninstall (pmu) | Uninstall one or more modules and their dependent modules.|
| pm:list (pml) | Show a list of available extensions (modules and themes).|

---
### **queue:**
|||
| ------------- | ------------- |
| queue:run | Run a specific queue by name. |
| queue:list | Returns a list of all defined queues. |
| queue:delete | Delete all items in a specific queue. |

---
### **role:**
|||
| ------------- | ------------- |
| role:create (rcrt) | Create a new role. |
| role:delete (rdel) | Delete a new role. |
| role:perm:add (rap, role-add-perm) | Grant specified permission(s) to a role. |
| role:perm:remove (rmp, role-remove-perm) | Remove specified permission(s) from a role. |
| role:list (rls) | Display a list of all roles defined on the system. |

---
### **site:**
|||
| ------------- | ------------- |
| site:set (use) | Set a site alias that will persist for the current session. |
| site:alias (sa) | Show site alias details, or a list of available site aliases. |
| site:alias-convert (sa-convert, sac) | Convert legacy site alias files to the new yml format. |
| site:ssh (ssh) | Connect to a Drupal site's server via SSH. |
| site:install (si, sin) | Install Drupal along with modules/themes/configuration/profile. |

---
### **sql:**
|||
| ------------- | ------------- |
| sql:connect | A string for connecting to the DB.|
| sql:create | Create a database.|
| sql:drop | Drop all tables in a given database.|
| sql:cli (sqlc)| Open a SQL command-line interface using Drupal's credentials.|
| sql:query (sqlq)| Execute a query against a database.|
| sql:dump | Exports the Drupal DB as SQL using mysqldump or equivalent.|
| sql:sync | Copy DB data from a source site to a target site. Transfers data via rsync.|
| sql:sanitize (sqlsan)| Sanitize the database by removing or obfuscating user data.|

---
### **state:**
|||
| ------------- | ------------- |
| state:get (sget) | Display a state value. |
| state:set (sset) | Set a state value. |
| state:delete (sdel) | Delete a state entry. |

---
### **theme:**
|||
| ------------- | ------------- |
| theme:enable (then) | Enable one or more themes. |
| theme:uninstall (thun) | Uninstall theme. |

---
### **user:**
|||
| ------------- | ------------- |
| user:login (uli) |   Display a one time login link for user ID 1, or another user. |
| user:information (uinf) |    Print information about the specified user(s). |
| user:block (ublk) |  Block the specified user(s). |
| user:unblock (uublk) |   UnBlock the specified user(s). |
| user:role:add (urol, user-add-role) |    Add a role to the specified user accounts. |
| user:role:remove (urrol, user-remove-role) | Remove a role from the specified user accounts. |
| user:create (ucrt) | Create a user account. |
| user:cancel (ucan) | Cancel user account(s) with the specified name(s). |
| user:password (upwd) |   Set the password for the user account with the specified name. |

---
### **views:**
|||
| ------------- | ------------- |
| views:dev (vd) | Set several Views settings to more developer-oriented values. |
| views:list (vl) | Get a list of all views in the system. |
| views:execute (vex) | Execute a view and show a count of the results, or the rendered HTML. |
| views:analyze (va) | Get a list of all Views and analyze warnings. |
| views:enable (ven) | Enable the specified views. |
| views:disable (vdis) | Disable the specified views. |

---
### **watchdog:**
|||
| ------------- | ------------- |
| watchdog:show (wd-show, ws) | Show watchdog messages. |
| watchdog:list (wd-list) | Interactively filter the watchdog message listing. |
| watchdog:delete (wd-del, wd-delete, wd) | Delete watchdog log records. |
| watchdog:show-one (wd-one) | Show one log record by ID. |
