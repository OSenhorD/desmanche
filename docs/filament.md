# FilamentPHP

- [FilamentPHP](https://filamentphp.com/docs/5.x/introduction/overview)

## Criar um novo usuário
```sh
$ php artisan make:filament-user
```

## Criar uma nova página
```sh
# 1º Crie a estrutura básica da tabela
$ php artisan make:model Product -m -f -s --pest

# 2º Defina todos os campos e relações da tabela

# 3º Subi a migration
$ php artisan migrate

# 4º Crie uma página simples para a tabela
$ php artisan make:filament-resource Product --simple
```
