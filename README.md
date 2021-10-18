# sim_server
Sim Server para equipos tipo GOIP

# Instalación de composer

 php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
 php -r "if (hash_file('sha384', 'composer-setup.php') === '906a84df04cea2aa72f40b5f787e49f22d4c2f19492ac310e8cba5b96ac8b64115ac402c8cd292b8a03482574915d1a8') { echo 'Installer verified'; } else {  echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
 php composer-setup.php
 php -r "unlink('composer-setup.php');"

 sudo mv composer.phar /usr/local/bin/composer

 * Instalar node.js para habilitar algunos plugins de subl

 
## Uso de gettext para crear código que sea facilmente traducible a otros idiomas

En los archivos .tpl que se encuentran en la carpeta templates/, cuando se necesite un texto, se colocará así: {gt texto en inglés} para que cuando se compile, en la carpeta templates_c aparezca el código <?=_('texto en inglés')?> y así sea fácilmente reconocido por programas como poedit, etc.
