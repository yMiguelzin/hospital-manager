# Sistema de Gestão Hospitalar

🏥 **Sistema de Gestão Hospitalar com PHP | Projeto**

<p>
  <img src="https://img.shields.io/badge/made%20by-MIGUEL%20PRETO-FE251B?style=flat-square">
  <img alt="GitHub language count" src="https://img.shields.io/github/languages/count/yMiguelzin/hospital-manager?color=FE251B&style=flat-square">
  <img alt="GitHub Top Language" src="https://img.shields.io/github/languages/top/yMiguelzin/hospital-manager?color=FE251B&style=flat-square">
  <a href="https://opensource.org/licenses/MIT">
    <img alt="License" src="https://img.shields.io/badge/license-MIT-FE251B?style=flat-square">
  </a>
</p>

## Tópicos

- [Sobre o Projeto](#sobre-o-projeto)  
- [Funcionalidades](#funcionalidades)  
- [Tecnologias e Ferramentas](#tecnologias-e-ferramentas)  
- [Instalação e uso](#instalação-e-uso)  
- [Licença](#licença)

<br>

## Sobre o Projeto

Este projeto é um **sistema de gestão hospitalar**, desenvolvido com PHP, que permite aos médicos se cadastrarem, fazerem login e gerenciarem as consultas dos pacientes de forma eficaz. Com funcionalidades para criar, consultar, editar e excluir consultas, além de um banco de dados MySQL para persistência dos dados.

<br>

## Funcionalidades

- [X] Cadastro de médicos.
- [X] Sistema de login para médicos.
- [X] CRUD de consultas (Criar, Ler, Atualizar e Deletar).
- [X] Cadastro de pacientes com informações como telefone, endereço e histórico médico.
- [X] Relacionamento entre médicos e pacientes.

<br>

## Tecnologias e Ferramentas

As seguintes tecnologias foram utilizadas no desenvolvimento do projeto:

- [HTML](https://devdocs.io/html/)
- [CSS](https://devdocs.io/css/)
- [JavaScript](https://devdocs.io/javascript/)
- [MySQL](https://www.mysql.com/)
- [PHP](https://www.php.net/)
- [XAMPP](https://www.apachefriends.org/pt_br/index.html)

<br>

## Instalação e Uso

Para rodar a aplicação, você precisa ter o **XAMPP** ou algum outro servidor MySQL instalado.

### 1. Instale o XAMPP

- Baixe o XAMPP em [https://www.apachefriends.org/pt_br/index.html](https://www.apachefriends.org/pt_br/index.html) e siga as instruções para instalar em sua máquina.
- Após a instalação, abra o painel de controle do XAMPP e inicie os módulos **Apache** e **MySQL**.

### 2. Criação do Banco de Dados

1. Abra o navegador e acesse o PHPMyAdmin no endereço [http://localhost/phpmyadmin/](http://localhost/phpmyadmin/).
2. No PHPMyAdmin, crie o banco de dados com o nome **projeto_js_php**.
   - No painel esquerdo, clique em **Novo**.
   - Dê o nome ao banco de dados como `projeto_js_php` e clique em **Criar**.

3. Após criar o banco de dados, selecione o banco **projeto_js_php** e crie as tabelas necessárias. Execute os seguintes comandos SQL na aba **SQL**:

```sql
-- Criação da tabela de usuários (médicos)
CREATE TABLE usuarios (
    usu_id INT PRIMARY KEY AUTO_INCREMENT,
    usu_nome VARCHAR(255) NOT NULL,
    usu_email VARCHAR(255) NOT NULL,
    usu_senha VARCHAR(255) NOT NULL
);

-- Criação da tabela de clientes (pacientes)
CREATE TABLE clientes (
    cli_id INT PRIMARY KEY AUTO_INCREMENT,
    cli_nome VARCHAR(255) NOT NULL,
    cli_email VARCHAR(255) NOT NULL,
    cli_telefone VARCHAR(15) NOT NULL,
    cli_endereco VARCHAR(255) NOT NULL,
    cli_nascimento DATE NOT NULL,
    cli_convenio VARCHAR(255) NOT NULL
);

INSERT INTO usuarios (usu_nome, usu_email, usu_senha)
VALUES ('Dr. João', 'joao@example.com', 'senha123');
```

<br>

## Licença
<a href="https://opensource.org/licenses/MIT">
    <img alt="License" src="https://img.shields.io/badge/license-MIT-FE251B?style=flat-square">
</a>

<br>

Esse projeto está sob a licença MIT. Veja o arquivo [LICENSE](/LICENSE) para mais detalhes.

---

Feito com ❤️ por [Miguel Preto](https://github.com/yMiguelzin)

