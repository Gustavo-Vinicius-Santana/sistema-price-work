# Sistema de Gerenciamento de Orçamentos
Este projeto é um sistema para escolher um serviço e digitar um orçamento. Desenvolvido em PHP e MySQL, ele pode ser executado localmente utilizando XAMPP.

## Funcionalidades
- Escolher serviços
- Definir orçamento
- Receber mensagem no e-mail (apenas em hosts web)
- Cadastro e login

## Pré-requisitos
- [XAMPP](https://www.apachefriends.org/index.html) instalado
- Navegador Web

## Passo a Passo para Rodar o Sistema Localmente
1. Clonar o Repositório
    - Clone o repositório do projeto para o seu ambiente local:
        ```bash
        git clone https://github.com/Gustavo-Vinicius-Santana/sistema-price-work
        cd sistema-price-work
        ```

2. Configurar o Banco de Dados
    - Abra o painel de controle do XAMPP e inicie os serviços Apache e MySQL.
    - Acesse o phpMyAdmin no navegador através de [http://localhost/phpmyadmin](http://localhost/phpmyadmin).

4. Importar o Banco de Dados
    - No phpMyAdmin, importe o arquivo SQL que está na raiz do projeto (`db_sistema_price_work.sql`) para criar as tabelas necessárias.

5. Executar o Projeto
    - Coloque todos os arquivos do projeto na pasta `htdocs` do XAMPP (geralmente localizada em `C:\xampp\htdocs`).
    - Acesse o sistema no navegador através de [http://localhost/sistema-price-work](http://localhost/sistema-price-work).

6. Usar o Sistema
    - Utilize a interface web para cadastrar, editar e deletar orçamentos.
    - Navegue pelas diferentes funcionalidades através dos links disponíveis na página inicial.