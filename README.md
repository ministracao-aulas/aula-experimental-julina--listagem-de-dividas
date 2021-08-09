## Projeto criado na aula experimental

### Start do projeto:

* Clone o projeto:

```shell
git clone https://github.com/vendor/repo.git
```

* Instale as dependências do composer

```shell
composer install
```

* Copie o `.env.example` para `.env`

```shell
cp .env.example .env
```

* Crie a chave de ciptografia

```shell
php artisan key:generate
```

* Configure o banco de dados

> No exemplo vamos usar o sqlite
> Crie um arquivo de texto vazio com o nome `database.sqlite` dentro da pasta `database/`;
> Altere o arquivo `.env` e deixe como abaixo

```shell
DB_CONNECTION=sqlite
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=laravel
# DB_USERNAME=root
# DB_PASSWORD=
```

* Execute as migrações da base de dados

```shell
php artisan migrate --seed
```

* Provisione a aplicação

```shell
php artisan serve
```

* Pronto! Pode acessar sua aplicação em http://localhost:8000
