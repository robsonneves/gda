# Gda Versao 5.0.0 - Sistema Funciona com framework Larave V5

## Instalação

#### 1 - Dependências do Projeto

Requisitos

    node.js / npm
    bower

Instalação
1 - Dependências do Frontend

Após instalar o node.js, na raiz do projeto, execute o seguinte comando:

npm install

Feito isso, só instalar as dependências do bower

bower install #no public

2 - Dependências do Projeto

Para instalar as dependências do projeto, execute o seguinte comando:

composer install

3 - Migrações

Para criar as tabelas necessárias, basta rodar o comando:

php artisan migrate

4 - Assets

Por ultimo, precismos gerar os arquivos compilados do frontend, você pode fazer isso com o comando:

gulp
