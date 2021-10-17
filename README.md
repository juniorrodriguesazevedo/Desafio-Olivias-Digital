## Desafio Olivias Digital

Projeto feito para fins de um emprego pra passa os finais de semana bem e comendo lanche.

### Bibliotecas usadas:
* [Laravel pt-BR Localization](https://github.com/lucascudo/laravel-pt-BR-localization)
* [Bootstrap 4 forms for Laravel 5/6/7/8](https://github.com/netojose/laravel-bootstrap-4-forms)
* [JWT Auth Laravel](https://github.com/tymondesigns/jwt-auth)

### Instalação: 

* Você precisará do PHP instalado em seu computador, [BAIXE AQUI](https://www.php.net/downloads). 
* Na raiz do projeto use o comando `composer install`. 
* No arquivo `.ENV` edite o campo `DB_CONNECTION` e coloque os dados do seu banco de dados.
* Também dentro do arquivo `.ENV`, edite o campo `MAIL_MAILER` e coloque os dados do seu servidor de e-mail ([Recomendo o Mailtrap](https://mailtrap.io)).
* Use o comando `php artisan jwt:secret` para criar um token no seu ENV.
* Use o comando `php artisan migrate:refresh --seed` para fazer as migrações e propagar o banco.
* Use o comando `php artisan storage:link` para criar um link simbólico para as imagens.
* Use o comando `php artisan serve` para rodar em seu servidor.
* Navegue para `http://127.0.0.1:8000/`. O aplicativo será carregado automaticamente.

#### O que consegui fazer:
* Criação do CRUD de clientes 
* Relacionamentos e vinculação de cliente/telefone
* Disparo de e-mails
* Criação de API
* Uso do JWT
* Uso de logs
* Uso do UI Auth Bootstrap
* Validações dos formulários
* Organização de código e do projeto.

#### Observações:
* Ao propagar o banco ele já vem com um usuário cadastrado (`email: admin@gmail.com senha: admin`) e alguns telefones cadastrados pra salvar sua vida e a minha.
* Ao cadastrar o cliente você pode ir em VINCULAR TELEFONE para fazer a vinculação.
* Para ver os telefones vinculados ao usuário é só clicar em VER na página inicial do site.
* A documentação da API está localizada no menu do site.
* Não foquei no front-end pois não foi o meu foco (por isso tá mais feio que eu esse visual ai kkkk).
* Do mais como dizia Léo Magalhaẽs: Porque homem não chora, Estou indo embora agora.

### Mô sono
![Sono](https://i.pinimg.com/originals/63/c7/c9/63c7c90d12d4277f3daa671a3f828adb.gif)
