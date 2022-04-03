<h1>🗯️ Propagación y captura de los elementos en javascript (bubbling)🗯️</h1> 

<h2>Propagación</h2>
Cuando un evento ocurre en un elemento, este primero ejecuta los manejadores que tiene asignados, luego los manejadores de su padre, y así hasta otros ancestros.


Tenemos 3 elementos anidados FORM > DIV > P con un manejador en cada uno de ellos:
![](https://scontent.fnld1-1.fna.fbcdn.net/v/t1.15752-9/275861029_1116523568915928_7341908673667002149_n.png?_nc_cat=102&ccb=1-5&_nc_sid=ae9488&_nc_ohc=dZdtvOigPeUAX9PIaHR&_nc_ht=scontent.fnld1-1.fna&oh=03_AVIatDWhDWaZdkb2tQiMTElK5frEvJ0Ry6ZPbhRiAa7RQw&oe=626DBA0E)


Un clic en el elemento del interior <p> primero ejecuta onclick:

**Detener la propagación**

Una propagación de evento empieza desde el elemento objetivo hacia arriba. Normalmente este continúa hasta < html > y luego hacia el objeto document, algunos eventos incluso alcanzan window, llamando a todos los manejadores en el camino.

Pero cualquier manejador podría decidir que el evento se ha procesado por completo y detener su propagación.

El método para esto es event.stopPropagation().

Por ejemplo, aquí body.onclick no funciona si haces clic en < button >.

<h1>Captura</h1>

El estándar de eventos del DOM describe 3 fases de la propagación de eventos:

* Fase de captura – el evento desciende al elemento.
* Fase de objetivo – el evento alcanza al elemento.
* Fase de propagación – el evento se propaga hacia arriba del elemento.



clic en < td > dentro de una tabla, tomada desde la especificación:![](https://scontent.fnld1-1.fna.fbcdn.net/v/t1.15752-9/274488662_546078573493158_9199639002983014002_n.png?_nc_cat=111&ccb=1-5&_nc_sid=ae9488&_nc_ohc=Kdsj6_HPD4oAX8TGgs9&_nc_ht=scontent.fnld1-1.fna&oh=03_AVJK3y-0hxVtcgqD-c9TMd0DhZ0Z8abOJa7tvMTD5koxtw&oe=626FB14B)

por un clic en <td> el evento va primero a través de la cadena de ancestros hacia el elemento (fase de captura), luego alcanza el objetivo y se desencadena ahí (fase de objetivo), y por último va hacia arriba (fase de propagación), ejecutando los manejadores en su camino.

Para atrapar un evento en la fase de captura, necesitamos preparar la opción capture como true en el manejador:

![](https://scontent.fnld1-1.fna.fbcdn.net/v/t1.15752-9/277113573_1615526352151170_2435597797696349210_n.png?_nc_cat=102&ccb=1-5&_nc_sid=ae9488&_nc_ohc=khywAFEc9ewAX86XLij&_nc_ht=scontent.fnld1-1.fna&oh=03_AVI8zjpauXibGJHIaEbE0IXM5ApcA5KOd0CjiVoKRjlRgA&oe=6270485D)

**Hay dos posibles valores para la opción capture:**

* Si es false (por defecto), entonces el manejador es preparado para la fase de propagación.
* Si es true, entonces el manejador es preparado para la fase de captura.

**Captura y propagación en acción**

![](https://scontent.fnld1-1.fna.fbcdn.net/v/t1.15752-9/259265443_290310596593334_5132256081110167249_n.png?_nc_cat=108&ccb=1-5&_nc_sid=ae9488&_nc_ohc=diBZ4sSrgiYAX--Iz9f&_nc_ht=scontent.fnld1-1.fna&oh=03_AVLqQ1OMQDxobnCOGRCmagWyn33f5SNn-BQJ0-emPrHJtA&oe=626CC100)

Hay un propiedad event.eventPhase que nos dice el número de fase en la qué el evento fue capturado. Pero es raramente usada, ya que usualmente lo sabemos en el manejador.


Cuando ocurre un evento, el elemento más anidado dónde ocurrió se reconoce como el “elemento objetivo” (event.target).

* Luego el evento se mueve hacia abajo desde el documento raíz hacia event.target, llamando a los manejadores en el camino asignados con addEventListener(..., true) (true es una abreviación para {capture: true}).
* Luego los manejadores son llamados en el elemento objetivo mismo.
* Luego el evento se propaga desde event.target hacia la raíz, llamando a los manejadores que se asignaron usando on<event>, atributos HTML y addEventListener sin el 3er argumento o con el 3er argumento false/{capture:false}.

[Fuente de información](https://es.javascript.info/bubbling-and-capturing)