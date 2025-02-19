# CakePHP Application
Utilizamos nesse projeto o framework CakePHP, na sua versão 3.9

## Instalação Composer
####Primeiro baixe o composer (se já estiver instalado na máquina não precisa instalar novamente)
1. Download [Composer](https://getcomposer.org/doc/00-intro.md) or update `composer self-update`.

##Instalação WampServer
####Você irá precisar de um servidor Apache e o PHP na sua versão 7.4
1. Vá no site do WampServer e baixe-o gratuitamente
(https://www.wampserver.com/en/download-wampserver-64bits/)
2. Depois da instalação, você poderá ver o wampServer nos ícones ocultos na sua barra de navegação do windows rodando em segundo plano.
Você pode tanto clicar com botão esquerdo como o direito para abrir suas configurações, porém, aperte com o botão direito para abrir
as opções de ferramentas. Clique no PHP>Version>Escolha a versão 7.4

```
composer create-project --prefer-dist "cakephp/app:^3.8" myapp
```

You can now either use your machine's webserver to view the default home page, or start
up the built-in webserver with:

```bash
bin/cake server -p 8765
```

Then visit `http://localhost:8765` to see the welcome page.

## Update

Since this skeleton is a starting point for your application and various files
would have been modified as per your needs, there isn't a way to provide
automated upgrades, so you have to do any updates manually.

## Configuration

Read and edit `config/app.php` and setup the `'Datasources'` and any other
configuration relevant for your application.

## Layout

The app skeleton uses a subset of [Foundation](http://foundation.zurb.com/) (v5) CSS
framework by default. You can, however, replace it with any other library or
custom styles.
