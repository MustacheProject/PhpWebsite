RewriteEngine On
RewriteBase /PhpWebsite/
RewriteRule ^index\.php$ %{QUERY_STRING} [C]
RewriteRule pagina=(.*) /PhpWebsite/$1? [R=301,L]
