# Sistema de Gestão de Autopeças com Integração a Marketplaces

Sistema completo para **gestão de estoque, vendas e anúncios de autopeças**, com integração direta com marketplaces como **Mercado Livre, OLX, Magalu e Shopee**.

A plataforma permite centralizar o cadastro de produtos, sincronizar estoque e preços automaticamente e gerenciar pedidos provenientes de diferentes canais em um único painel.

---

## Visão Geral

Este sistema foi desenvolvido para **lojas de autopeças, desmanches e distribuidores** que vendem em múltiplos marketplaces e precisam:

* Centralizar o cadastro de produtos
* Sincronizar estoque entre canais
* Publicar e atualizar anúncios automaticamente
* Gerenciar pedidos em um único sistema
* Evitar vendas duplicadas por falta de sincronização de estoque

---

## Funcionalidades

* Cadastro e gestão de produtos e autopeças
* Controle de estoque em tempo real
* Sincronização automática de estoque entre marketplaces
* Integração com APIs de marketplaces
* Importação automática de pedidos
* Atualização de preços e anúncios
* Dashboard de vendas e pedidos
* Gestão de imagens e atributos de produtos
* Registro de logs de integração

---

## Integrações com Marketplaces

O sistema possui integração com:

* Mercado Livre
* OLX
* Magalu Marketplace
* Shopee

As integrações permitem:

* Publicar produtos
* Atualizar preço e estoque
* Receber pedidos
* Sincronizar status de vendas

---

## Arquitetura

O sistema segue uma arquitetura moderna baseada em **API + aplicação web**, utilizando boas práticas de separação de responsabilidades e organização por casos de uso.

Principais características:

* Backend baseado em API
* Integrações assíncronas com marketplaces
* Processamento de filas para sincronização
* Estrutura modular para novas integrações

---

## Tecnologias Utilizadas

### Backend

* PHP 8+
* Composer
* Framework Laravel
* MySQL 8+
* REST API
* Integração com APIs externas

### Frontend

* Node.js 24+
* NPM
* Vite
* JavaScript / TypeScript
* HTML / CSS
* TailwindCSS

### Integrações

* APIs de marketplaces
* Webhooks para atualização de pedidos
* Sincronização via jobs e workers

---

## Requisitos do Ambiente

### Backend

* PHP 8.2 ou superior
* Composer
* Extensões PHP:
  * OpenSSL
  * PDO
  * Mbstring
  * Tokenizer
  * XML
  * Ctype
  * JSON
  * BCMath

---

## Instalação

### 1. Clonar o repositório

```bash
$ git clone https://github.com/OSenhorD/desmanche.git
$ cd desmanche
```

---

### 2. Instalar dependências PHP

```bash
$ composer run-script setup
```

---

### 8. Iniciar servidor

```bash
php artisan serve
```

A aplicação estará disponível em:

```
http://localhost:8000
```

---

## Sincronização com Marketplaces

As integrações funcionam através de:

* APIs oficiais dos marketplaces
* Webhooks para atualização de pedidos
* Jobs assíncronos para sincronização de estoque

Recomenda-se executar workers para processamento de filas:

```bash
php artisan queue:work
```

## Segurança

O sistema inclui:

* Autenticação de usuários
* Controle de acesso
* Validação de dados
* Logs de integração
* Proteção contra requisições inválidas

---

## Boas Práticas

* Versionamento utilizando Git
* Padrão de commits semânticos
* Testes automatizados
* Uso de filas para integrações externas
* Separação entre domínio e infraestrutura

---

## Documentações externas

- [FilamentPHP](./docs/filament.md)
- [Heroicons](https://blade-ui-kit.com/blade-icons?set=1#search)

---

## Licença

Este projeto é privado e destinado ao uso interno da empresa ou clientes licenciados.

---

## Autor

Desenvolvido por
**David Marques** e **Cristian Marques**
