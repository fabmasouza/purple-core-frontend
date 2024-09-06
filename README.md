# 🚀 Deploy do Laravel na KingHost

Este guia detalha os passos para realizar o deploy de uma aplicação **Laravel** no servidor **KingHost**.

## 🛠️ Tecnologias Utilizadas

- ![Laravel](https://img.shields.io/badge/-Laravel-F55247?logo=laravel&logoColor=white&style=flat) **Laravel**
- ![PHP](https://img.shields.io/badge/-PHP-777BB4?logo=php&logoColor=white&style=flat) **PHP**
- ![Composer](https://img.shields.io/badge/-Composer-885630?logo=composer&logoColor=white&style=flat) **Composer**
- ![Git](https://img.shields.io/badge/-Git-F05032?logo=git&logoColor=white&style=flat) **Git**
- ![PostgreSQL](https://img.shields.io/badge/-PostgreSQL-316192?logo=postgresql&logoColor=white&style=flat) **PostgreSQL**
- ![KingHost](https://img.shields.io/badge/-KingHost-FFDD00?style=flat&color=green) **KingHost**

## 📋 Pré-requisitos

- Acesso **SSH** ao servidor **KingHost**.
- Repositório **Git** do projeto **Laravel**.
- **Composer** instalado.

## 📦 Passo a Passo

### 1. Acessar o servidor via SSH
Conecte-se ao servidor utilizando suas credenciais SSH:
```bash
ssh usuario@ftp.purpletechnology.com.br
```

### 2. Navegar para o diretório da aplicação
Acesse o diretório onde a aplicação será hospedada (crie a pasta caso não exista):
```bash
cd www/app/
```

### 3. Clonar o Repositório
Clone o repositório do projeto para o diretório:
```bash
git clone https://github.com/fabmasouza/purple-core-frontend .
```

### 4. Instalar o Composer
Baixe e instale o Composer:
```bash
curl -sS https://getcomposer.org/installer | php
```

### 5. Instalar Dependências
Instale as dependências otimizadas, sem as dependências de desenvolvimento:
```bash
php composer.phar install --optimize-autoloader --no-dev
```

### 6. Configurar o Arquivo .env
Crie ou verifique o arquivo .env com as seguintes configurações:
```env
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:mc35kH5RKCYU4BngyA5ZVnPZmfEJnWRmLTlMaEL3V+w=
APP_DEBUG=true
APP_TIMEZONE=UTC
APP_URL=https://app.purpletechnology.com.br

APP_LOCALE=en
APP_FALLBACK_LOCALE=en
APP_FAKER_LOCALE=en_US

DB_CONNECTION=pgsql
DB_HOST=pgsql.purpletechnology.com.br
DB_PORT=5432
DB_DATABASE=purpletechnology
DB_USERNAME=
DB_PASSWORD=
```

### 7. Mover o Conteúdo da Pasta public
Mova o conteúdo da pasta public do Laravel para o diretório raiz do servidor (ou para o diretório apontado pelo subdomínio).

### 8. Modificar o Caminho de Referência no index.php
No arquivo www/app/index.php, altere as seguintes linhas:

Antes:
```php
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

require __DIR__.'/../vendor/autoload.php';
(require_once __DIR__.'/../bootstrap/app.php')
    ->handleRequest(Request::capture());
```

Depois:
```php
if (file_exists($maintenance = __DIR__.'/storage/framework/maintenance.php')) {
    require $maintenance;
}

require __DIR__.'/vendor/autoload.php';
(require_once __DIR__.'/bootstrap/app.php')
    ->handleRequest(Request::capture());
```

### 9. Definir Permissões para as Pastas
Conceda permissão de escrita para as pastas storage e bootstrap/cache. No cliente FTP ou painel da KingHost, defina as permissões como 755 para essas pastas ou execute o comando via SSH:

```bash
chmod -R 755 storage
chmod -R 755 bootstrap/cache
```

### 10. Gerar a Chave de Acesso
Por fim, gere uma nova chave de acesso com o comando:

```bash
php artisan key:generate
```