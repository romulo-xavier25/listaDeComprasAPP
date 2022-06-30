# listaDeComprasAPP

### Coleção do postman com as chamadas dos endpoints
Segue o link do <a href="https://drive.google.com/file/d/1EMVIgz1FCRHBA6SYuFkeqbn7QR_Ci9Kz/view?usp=sharing" target="_blank"> endpoints. </a>

A API foi desenvolvido usando o framework Laravel.

### Versão do framewok Laravel
A versão do Laravel a qual foi instalada, foi a versão 8.x.

### Pré-requisito do Laravel

<ul>
  <li>PHP na versão 7.3 ou superior</li>
  <li>BCMath PHP Extensão ativa</li>
  <li>Ctype PHP Extensão ativa</li>
  <li>Fileinfo PHP Extensão ativa</li>
  <li>JSON PHP Extensão ativa</li>
  <li>Mbstring PHP Extensão ativa</li>
  <li>OpenSSL PHP Extensão ativa</li>
  <li>PDO PHP Extensão ativa</li>
  <li>Tokenizer PHP Extensão ativa</li>
  <li>XML PHP Extensão ativa</li>
</ul>

### Instalando o Projeto
Passo 1: Clone o projeto -> git clone https://github.com/romulo-xavier25/listaDeComprasAPP.git <br />
Passo 2: coloque o projeto dentro da pasta do servidor <br />
Passo 3: Instale as dependências do projeto com o comando -> composer install <br />
Passo 4: Gere a nova chave do projeto com o comando -> php artisan key:generate <br />
Passo 5: Dentro do arquivo .env(caso não tenha o arquivo, segue link do <a href="https://drive.google.com/file/d/1WesG8zwdoTLpdb_lhHuPk-QC9FTkfVvG/view?usp=sharing" target="_blank">modelo</a>. Basta renomear removendo o env, ficando apenas .env) ficará a configuração do projeto com o banco de dados (DB_CONNECTION=mysql, DB_HOST=127.0.0.1, DB_PORT=3306, DB_DATABASE=nomedobanco, DB_USERNAME=usuariodobanco, DB_PASSWORD=senhadobanco). Esse modelo está mostrando uma conexão com banco mysql. <br />
Passo 6: Ápos configurar a conexão com DB, vamos criar as tabelas com o comando -> php artisan migrate:fresh <br />
Passo 7: Segue o link do DB a qual criei. <a href="https://drive.google.com/file/d/1tcr8xe9g8CHV6C9f1WnhjIk2Wow0XHNM/view?usp=sharing" target="_blank">DB_MYSQL</a> <br />
Passo 8: Por fim, use o comando a seguir para rodar o projeto -> php artisan serve
