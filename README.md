# Bountiful Community

Inspired by 

https://www.smarthomebeginner.com/wordpress-on-docker-traefik
https://www.smarthomebeginner.com/traefik-2-docker-tutorial/#Traefik_2_Setup

---- 

Clone repo

go into folder

get `.env` file from somewhere and place into the project root

Run `docker network create --gateway 192.168.90.1 --subnet 192.168.90.0/24 web`

If in production run `mkdir -p config/production/traefik/certs/ && touch config/production/traefik/certs/acme.json && chmod 600 config/production/traefik/certs/acme.json`

Before running: `docker-compose up -d`, check the below dev and self-signed certificate sections

---

## For development site

### Docker Compose Override

Copy `./config/dev/docker-compose.override.yml` to the root of the project, alongside the main docker-compose.yml file.  This will load the dev config by overriding the main docker-compose file. 

---

### Self Signed Certificate

Inspired by https://www.andrewdixon.co.uk/2020/03/14/using-https-certificates-with-traefik-and-docker-for-a-development-environment/

`brew install mkcert`

`brew install nss`

`cd ./config/dev/traefik/certs`

`mkcert dev.bountiful.land`

---

## Useful Commands

test nginx `docker exec nginx nginx -t`
restart nginx `docker exec nginx nginx -s reload`
restart php: `docker exec php /bin/bash -c "kill -USR2 1"`

clear nginx cache `docker exec nginx sh -c "rm -rf /var/run/nginx-cache/*"`

---

## Git Hooks

To restart php-fpm (which flushes OPcache) and FastCGI Cache 

post-merge:

```
docker exec php /bin/bash -c "kill -USR2 1"
docker exec nginx sh -c "rm -rf /var/run/nginx-cache/*"
```

## WordPress Bountiful Theme

### Updating CSS or JS

The theme uses gulp.  Navigate to the theme folder `npm install`, `gulp watch`
