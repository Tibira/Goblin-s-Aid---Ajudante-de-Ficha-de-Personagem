# Goblin's Aid

###  Ajudante pessoal de ficha de RPG.

Para fazer o projeto funcionar de forma local, primeiro precisa-se das seguintes ferramentas.

* [GitBash](https://git-scm.com/downloads)
* [Composer](https://getcomposer.org/)
* [Xampp](https://www.apachefriends.org/pt_br/index.html)

Após a instalação dos componentes, faça download do projeto e coloque a pasta no diretório do xampp, que por padrão é:

`C:/xampp/htdocs`

Em seguida execute o xampp e ative as opções do Apache e do MySQL.

Logo após, vá ao [servidor local do banco de dados ](http://localhost/phpmyadmin/)e crie um banco de dados com o nome de `goblins_aid`.

Em seguida, abra o GitBash e navegue até a pasta do projeto.

Logo após, digite os seguintes comandos:

`git checkout local` - Muda para a branch adaptada para a execução local

`php artisan migrate` - Cria as tabelas no banco de dados

`php artisan db:seed` - Popula as tabelas do banco

`php artisan serve` - Inicia o servidor local

Após esses comandos, o projeto está pronto para ser [acessado de forma local](http://localhost:8000/).

### Acesso ao site do projeto

Caso queira acessar o site atualizado do projeto, clique [aqui](https://goblinsaid.herokuapp.com/).

Qualquer duvida ou sujestão, crie uma nova issue ou envie um email para `goblins.aid.help@gmail.com`.