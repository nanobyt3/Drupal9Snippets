# WSL setup
*Ubuntu 20.04*

## Using a standard LAMP setup via *Sprintcube*
**GIT Repo:** https://github.com/sprintcube/docker-compose-lamp

1. Clone https://github.com/sprintcube/docker-compose-lamp
2. Redis config can be commented/disabled in docker-compose.yml
3. Adjust apache root so that 'www' dir can be used to create additional virtual hosts:
    1. edit docker-compose.yml
    2. update apache doc-root
        ```
        APACHE_DOCUMENT_ROOT: ${APACHE_DOCUMENT_ROOT-/var/www}
        ```
        to 
        ```
        APACHE_DOCUMENT_ROOT: ${APACHE_DOCUMENT_ROOT-/var/www/html}
        ```
    3. Create 'html' directory in 'www' and move default set of file inside it
        ```
        $ cd www
        $ mkdir html
        $ mv ./* ./html
        ```
    4. After completing docker setup (step #4), www can contain virtualhost directories
        - Virtual hosts can be created in config/vhosts via the usual process of creating apache virtual hosts in Ubuntu
4. Follow installation steps in README.md