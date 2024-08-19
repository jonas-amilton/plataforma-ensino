# Projeto Plataforma de ensino

### Passo a passo

Clone Repositório

```sh
git clone https://github.com/jonas-amilton/plataforma-ensino.git
```

```sh
cd plataforma-ensino/
```

Crie o Arquivo .env

```sh
cp .env.example .env
```

Atualize as variáveis de ambiente do arquivo .env

```dosini
APP_URL=http://localhost:8989

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=plataforma_ensino_db
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```

Suba os containers do projeto

```sh
docker-compose up -d
```

Acessar o container

```sh
docker-compose exec app bash

ou

docker-compose exec -it plataforma-ensino-app-1 bash
```

Instalar as dependências do projeto

```sh
composer install
```

Gerar a key do projeto Laravel

```sh
php artisan key:generate
```

Acessar o projeto

Aplicação: [http://localhost:8989](http://localhost:8989)

phpMyAdmin: [http://localhost:8080](http://localhost:8080)
