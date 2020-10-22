
## Como Usar

* Use algum terminal , o do visual studio code por exemplo é ótimo
 - Use o comando "git clone https://github.com/Lucasnl/CrudReplikante.git" 
 - Use o Comando "composer update" 
 - Gere uma chave com "php artisan key:generate"
 - Renomeie o arquivo .env.example apenas para .env
 - Faça a configuração do banco de dados que preferir , no caso usei assim
 
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=replikante
  DB_USERNAME=root
  DB_PASSWORD=


## Sobre o Crud
* Crud simples de cadastro de usuários com softDelete

* banco de dados está localizado na root do projeto

* Rota principal http://localhost/replikante/public/

* Imagem com os tipos de validações e algumas telas do app

<img src="https://i.imgur.com/c8dcvCW.png" /> 
<img src="https://i.imgur.com/b7KYy3d.png" /> 
<img src="https://i.imgur.com/ZYwOc39.png" /> 
<img src="https://i.imgur.com/ba3LeDe.png" /> 
