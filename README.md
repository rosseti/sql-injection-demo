# Projeto suporte para palestra sobre "Seu servidor está realmente seguro?"

## Descrição

Este projeto é um exemplo de como um SQL Injection pode ser explorado em uma aplicação web, criado para dar suporte no modo hands-on da palestra de Andrei Rosseti sobre "Seu servidor está realmente seguro?". O objetivo é demonstrar como um atacante pode injetar código SQL malicioso em uma aplicação e como isso pode ser evitado.

## Tecnologias Utilizadas

* Linguagem de programação: PHP
* Framework: Vanilla PHP
* Bibliotecas: PDO (para conexão com banco de dados)
* Banco de dados: MySQL
* Containerização: Docker

## Estrutura do Projeto

* O projeto consiste em uma aplicação web simples que permite ao usuário realizar consultas em um banco de dados;
* O banco de dados é vulnerável a SQL Injection;
* O projeto inclui um arquivo `docker-compose.yml` para subir o container do banco de dados e da aplicação web.

## Arquivos e Pastas

* `src/`: Pasta que contém os arquivos de código-fonte do projeto;
* `src/config/`: Pasta que contém os arquivos de configuração do projeto;
* `src/index.php`: Arquivo que contém o código de inicialização do projeto;
* `docker/docker-compose.yml`: Arquivo que define a configuração do container do banco de dados e da aplicação web.

## Como Subir o Projeto

1. Clone o repositório para sua máquina local;
2. Entre na pasta `docker`
3. Execute o comando `docker-compose up` para subir o container do banco de dados e da aplicação web;
4. Acesse o endereço `http://localhost:8080/?id=1` no seu navegador para visualizar a aplicação web.

## Como Explorar o SQL Injection

1. Acesse o endereço `http://localhost:8080?id=1` no seu navegador;
2. Troque o valor do parâmetro id para esse conteúdo: `1' UNION ALL SELECT CONCAT(0x717a707a71,0x724a77494a7379746d44484f706f4c586d724b44656b534976426e544466666a6c6677486b486b61,0x7162626a71),NULL,NULL-- -`;
3. Pressione o botão "Buscar" para executar a consulta;
4. Verifique o resultado da consulta para ver se o SQL Injection foi bem-sucedido.

## Como Prevenir o SQL Injection

1. Use prepared statements para evitar a injeção de código SQL malicioso;
2. Use parâmetros para passar valores para a consulta SQL;
3. Verifique os inputs do usuário para evitar a injeção de código SQL malicioso.

## Licença

* O projeto é licenciado sob a licença MIT;
* Você é livre para usar, modificar e distribuir o projeto como desejar.
