## Bazar

### Postup inštalácie

- rozbaliť php_mysql_doma.zip z cvičení
- naklonovať projekt webpage z Gitu do priečinka www v php_mysql
- composer install
- skopírovať .env.example do .env
- php artisan key:generate
- vytvoriť databázu použitím adminera (http://localhost/aer predvolené údaje meno: root, heslo: dtb456)
- nastaviť prihlasovacie údaje k databáze v .env
- povoliť openssl extension v php.ini (php/php.ini, extension=openssl)
- php artisan migrate --seed (spustenie migrácii a naplnenie testovacími dátami)
- otvoriť http://localhost/webpage/public/ v prehliadači
