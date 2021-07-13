LARADOCK := laradock

.PHONY: all build start stop

all: start

laradock:
	git clone https://github.com/Laradock/laradock.git ${LARADOCK}

start:
	docker-compose --env-file ${LARADOCK}/.env -f ${LARADOCK}/docker-compose.yml up -d nginx mysql phpmyadmin redis workspace

stop:
	docker-compose --env-file ${LARADOCK}/.env -f ${LARADOCK}/docker-compose.yml down

bash:
	docker-compose --env-file ${LARADOCK}/.env -f ${LARADOCK}/docker-compose.yml exec workspace bash