DADES DEL PROJECTE:
-Versió de Laravel: 6.0.4
-Versió de Php: 7.2.18

INSTRUCCIONS PER A LA UTILITZACIÓ:

-Descarregar el projecte i copiar-lo dins la carpeta del teu servidor. En el meu cas he utilitzat Wamp i la carpeta seria la 'www'.
-Crear una nova base de dades amb el nom 'clínica'.
-obrir la consola dintre de la carpeta del nostre projecte i escriure: "php artisan migrate" i després escriure "php artisan db:seed" per tal de migrar i importar les taules de la nostra clínica.
	-En el cas que en el MySql tingueu un nom d'usuari o password anar l'arxiu ".env" i modificar les dades d'accés.
-per acabar escriure en el nostre terminal "php artisan serve".

Qüestions
• Quines fonts d'informació acostumes a consultar en cas de dubtes?
Normalment faig servir la documentació de Laravel, però si necessito buscar més exemples o un altre explicació faig servir: 
Stackoverflow
w3Schools
Laraveles
• Has utilitzat paquets de tercers per tal d'ampliar funcionalitats de Laravel? Quins i per a què?
Per un projecte de classe vam utilitzar els paquets de Laravel-logger, Laravel-roles i Laravel-users de Jeremy kennedy. Volíem implementar diferents sistemes de logs i de rols i realment el conjunt de paquets de jeremmy kennedy era bastant complet en tots els aspectes.
