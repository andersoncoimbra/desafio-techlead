##  Analista Desenvolvedor PHP (Júnior) - Linguagem PHP
Sistema de Gerenciamente de Biblioteca<br>
Sistema criado para  uma das fases de teste de conhecimentos para a vaga de Desenvolvedor PHP da TECHLEAD, nesse desafio é usado Laravel como framework principal pois fornece recursos que reduzem o tempo de desenolvimento.
***

### Tecnologias
Lista de Tecnologias usadas durante o desafio:
* [PHP](https://php.com/): Versão 7.2
* [Laravel](https://laravel.com/): Versão 5.8
* [Laravel-AdminLTE](https://adminlte.io/): Versão 1.27
* [Composer](composer.io): Versão 1

### Instalação 
```Via terminal```
```
$ git clone https://github.com/andersoncoimbra/desafio-techlead
```

#### Instale as bibliotecas necessarias 
```Via terminal```
```
$ cd desafio-techlead
$ composer install 
```

#### Banco de dados 

* Crie o baco de dados chamado **desafio**
* Crie um aquivo .env na raiz com base no arquivo .env.example (copie e cole)
* Edite o arquivo .env alterando as seguinte variaveis com os dados do banco

````TXT
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=desafio
    DB_USERNAME=root
    DB_PASSWORD=
````
* Com o banco configurado na aplicação realize a migração da estrutura do banco <br>
```Via terminal```
```
$ php artisan migrate
```
* Registro de dados iniciais de acesso<br>
Registra um usuario do tipo administrador e outro do tipo cliente<br> 
```Via terminal```
```
$ php artisan db:seed
```

Dados iniciais de acesso:

Administrador: email: ***admin@email.com*** senha: ***12345678*** <br>
Cliente: email: ***cliente@email.com*** senha: ***12345678*** <br>



