# GIT configuration

Install your preferred GIT client (if not already setup).

Apart from the basic requirement to configure email and username, some of the below configurations are also suggested (based on experience) 

1. GIT ignore case should be set to *false*. Sometimes it does happen that the case of filename changes, but if git ignores this, then a push to remote will not have the updated character cases in filename. But Drupal's core is case sensitive specifically in the case of Class names, namespaces and its files.
    For global GIT config, run:
    ```
    git config --global core.ignorecase false
    ```
    Alternatively, for repo-only config, run below from repo directory:
    ```
    git config core.ignorecase false
    ```