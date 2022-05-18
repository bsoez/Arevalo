# Promesas - JavaScript ⛓

El objeto *Promise* representa la eventual finalización (o falla) de una operación asincrónica y su valor resultante.

Una Promesa es un proxy de un valor que no necesariamente se conoce cuando se crea la promesa. Le permite asociar controladores con el valor eventual de éxito o el motivo de falla de una acción asíncrona. Esto permite que los métodos asíncronos devuelvan valores como los métodos síncronos: en lugar de devolver inmediatamente el valor final, el método asíncrono devuelve la promesa de proporcionar el valor en algún momento en el futuro.

Una Promesa está en uno de estos estados:

- pendiente: estado inicial, ni cumplida ni rechazada.
- cumplida: significa que la operación se completó con éxito.
- rechazado: lo que significa que la operación falló.

Una promesa pendiente puede cumplirse con un valor o rechazarse con un motivo (error). Cuando ocurre cualquiera de estas opciones, se llama a los controladores asociados en cola por el método entonces de una promesa. Si la promesa ya se ha cumplido o rechazado cuando se adjunta un controlador correspondiente, se llamará al controlador, por lo que no existe una condición de carrera entre la finalización de una operación asíncrona y la conexión de sus controladores.

Como los métodos Promise.prototype.then() y Promise.prototype.catch() devuelven promesas, se pueden encadenar.

---

**Conclusión**

Las Promesas en JavaScript son acciones que se resolverán a futuro (cuando se pueda) y que sabremos si se llevaron a cabo con éxito o no.

Fuentes de información:

[fuente 1](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Promise)

[fuente 2](https://www.arsys.es/blog/promesas-javascript#:~:text=Las%20Promesas%20en%20JavaScript%20son,cabo%20con%20%C3%A9xito%20o%20no.)

María Belén Arévalo Esquivel

19100144