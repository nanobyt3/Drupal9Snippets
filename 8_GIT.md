# GIT configuration

Install your preferred GIT client (if not already setup).

Apart from the basic requirement to configure email and username, some of the below configurations are also suggested (based on experience) 
```
$ git config --global user.name "User name"
$ git config --global user.email user@example.com
```

1. GIT ignore case should be set to *false*. Sometimes it does happen that the case of filename changes, but if git ignores this, then a push to remote will not have the updated character cases in filename. But Drupal's core is case sensitive specifically in the case of Class names, namespaces and its files.
    
    For global GIT config, run:
    ```
    git config --global core.ignorecase false
    ```
    Alternatively, for repo-only config, run below from repo directory:
    ```
    git config core.ignorecase false
    ```
    Or via .gitconfig
    ```
    [core]
        ignorecase = false
    ```
2. Line endings should always be Unix-style
    ```
    [core]
        autocrlf = false
        safecrlf = false
    ```
3. Full set of instructions can be found here: https://www.drupal.org/docs/develop/git/setting-up-git-for-drupal