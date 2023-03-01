# Projeto de CRUD de Usuários e Produtos usando Laravel

# Projeto de CRUD de Usuários e Produtos usando Laravel com Vite

Este é um projeto de exemplo que demonstra como construir um aplicativo de CRUD (Create, Read, Update, Delete) de usuários e produtos usando Laravel, com arquitetura MVC e autenticação Jetstream. O front-end foi construído usando Blade, Bootstrap e Vite.

## Instalação

Para executar este projeto em sua máquina, siga as instruções abaixo:

1. Clone o repositório:
    
    ```
    git clone https://github.com/Francielefernandes06/sistema-produto.git
    
    ```
    

- Navegue até o diretório do projeto:
    
    ```
    cd sistema-produto
    
    ```
    

- Instale as dependências do Composer:
    
    ```
    composer install
    ```
    

- Copie o arquivo `.env.example` para `.env`:
    
    ```
   cp .env.example .env
    
    ```
    

- Gere uma nova chave de aplicativo:
    
    ```
    php artisan key:generate
    
    ```
    

- Configure as informações do banco de dados no arquivo `.env`.

- Execute as migrações do banco de dados:
    
    ```
    php artisan migrate
    ```
    

- Instale as dependências do Node.js usando o NPM:
    
    ```
    npm install
    ```
    

2. Inicie o servidor de desenvolvimento do Vite:



```
npm run dev

```

3. Inicie o servidor de desenvolvimento do Laravel:


```
php artisan serve

```

4. Acesse o aplicativo no navegador em `http://localhost:8000`.

## Uso

Este aplicativo permite que você gerencie usuários e produtos. Você pode criar, visualizar, atualizar e excluir registros de usuários e produtos. Para usar o aplicativo, você precisará se autenticar usando as credenciais fornecidas pela autenticação Jetstream.

## Tecnologias utilizadas

- Laravel
- Blade
- Bootstrap
- Vite
- Jetstream

## Autor

<a href="https://github.com/Francielefernandes06">
 <img style="border-radius: 50%;" src="https://avatars.githubusercontent.com/u/76757362?s=400&u=684d36af428031c5325f144e85574faa68f9b60f&v=4" width="100px;" alt="Franciele Fernandes"/>
 <br />
 <sub><b>Franciele Fernandes</b></sub></a> <a href="https://github.com/Francielefernandes06" title="GitHub">☕</a>


Feito com ❤️ por Franciele Fernandes 👋🏽 Entre em contato!

<a href="https://instagram.com/franciele_fernandes06" target="_blank"><img style="border-radius: 50px;" src="https://img.shields.io/badge/-Instagram-%23b6008b?style=for-the-badge&logo=instagram&logoColor=white" target="_blank"></a>
<a href = "mailto:francielefernandes126@gmail.com"><img style="border-radius: 50px;" src="https://img.shields.io/badge/-Gmail-%23d3403a?style=for-the-badge&logo=gmail&logoColor=white" target="_blank"></a>
 <a href="https://www.linkedin.com/in/franciele-fernandes-92556b1a7/" target="_blank"><img style="border-radius: 50px;" src="https://img.shields.io/badge/-LinkedIn-%230077B5?style=for-the-badge&logo=linkedin&logoColor=white" target="_blank"></a> 
 <a href="https://wa.me/5584994285704?text=Olá,%20Franciele%20Fernandes.%20Tudo%20bem?" target="_blank"><img style="border-radius: 50px;" src="https://img.shields.io/badge/-WhatsApp-%2325c862?style=for-the-badge&logo=whatsapp&logoColor=white" target="_blank"></a>

 <hr>
