# Teste de integração

## Preparar ambiente

### Instalar Cloudflare

```sh
$ wget https://github.com/cloudflare/cloudflared/releases/latest/download/cloudflared-linux-amd64.deb
$ sudo dpkg -i cloudflared-linux-amd64.deb
$ cloudflared --version
```

### Criar túnel

```sh
$ cloudflared tunnel --url http://localhost:8000

# Copie a URL gerada e uso no Mercado Livre
# Ex: https://staff-tribe-pichunter-humans.trycloudflare.com/api/v1/integrations/mercadolivre/callback
# Ex: https://staff-tribe-pichunter-humans.trycloudflare.com/api/v1/integrations/mercadolivre/webhook
```

### Credenciais

- Copie o ID do aplicativo
- Copie a Chave Secreta

## Conexão

```sh
# Acessa a página de login
# https://staff-tribe-pichunter-humans.trycloudflare.com/api/v1/integrations/mercadolivre/login

$ curl -H 'Authorization: Bearer <seu-token-aqui>' \
  https://api.mercadolibre.com/users/me

$ curl -H 'Authorization: Bearer <seu-token-aqui>' \
  https://api.mercadolibre.com/sites

$ curl -H 'Authorization: Bearer <seu-token-aqui>' \
  https://api.mercadolibre.com/sites/MLB/listing_types
```

