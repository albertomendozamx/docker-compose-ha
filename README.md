# B) Testing high availability with Docker

This file contains two definitions, the main container with [apache and php](https://gitlab.com/looptalks/docker-apache-php5) installed
and the container with [haproxy](https://hub.docker.com/r/tutum/haproxy/)

### Run

```
# docker-compose up -d
```

### Verify

```
# docker-compose ps
      Name                    Command               State                   Ports
-------------------------------------------------------------------------------------------------
looptalks_ha_1     python /haproxy/main.py          Up      1936/tcp, 443/tcp, 0.0.0.0:80->80/tcp
looptalks_php5_1   /bin/sh -c /usr/sbin/apach ...   Up      0.0.0.0:32773->80/tcp
```

Now run

```
# docker-compose scale php5=n
```

Where **n** is the number of nodes

### Changue the settings on docker-compose.yml

Before load the changues you need run

```
# docker-compose down
```

or only

```
# docker-compose up -d --force-recreate --no-deps ha
```

## Verify and testing

[http://127.0.0.1](http://127.0.0.1)