#PROJECT_NAME := Hackathon-WarehouseIV
#VERSION := dev
#MAINTAINER := wenwen357951
LARADOCK := laradock

.PHONY: all build start stop

all: start

start:
	docker-compose --env-file ${LARADOCK}/.env -f ${LARADOCK}/docker-compose.yml up -d nginx mysql

stop:
	docker-compose --env-file ${LARADOCK}/.env -f ${LARADOCK}/docker-compose.yml down

bash:
	docker-compose --env-file ${LARADOCK}/.env -f ${LARADOCK}/docker-compose.yml exec workspace bash