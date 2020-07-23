# docker-nginx-php74-mariadb

Inspired by [this tutorial](https://x-team.com/blog/docker-compose-php-environment-from-scratch/) but with some added adjustments.

## Setup

```console
$ cd docker
$ docker-composer up
```

## Updates to docker-composer.yml

When updates to docker-composer.yml are necessary, 

```console
$ docker-composer rm
$ docker-composer build
$ docker-composer up
```

