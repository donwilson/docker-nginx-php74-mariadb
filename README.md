# docker-nginx-php74-mariadb

Inspired by [this tutorial](https://x-team.com/blog/docker-compose-php-environment-from-scratch/) but with some needed adjustments.

Installs various useful PHP 7 extensions and adjusts path to nginx html directory for `src` folder.

## Setup

#### Console

```console
$ cd docker
$ docker-composer up
```

#### Daemon

```console
$ cd docker
$ docker-composer up -d
```


## Working Directory

All web files are stored in `src/`.


## Updates to docker-composer.yml

After making updates to docker-composer.yml, the following commands are necessary to rebuild already-built containers.

```console
$ docker-composer rm
$ docker-composer build
$ docker-composer up
```

