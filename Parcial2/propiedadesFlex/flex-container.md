| Propiedades flex-container | En que consiste |  Valor |
| -------------------------- | ---------------- | ------ |
|Display flex |  Hace que cambien las reglas con las cuales sus hijos van a ser representados en la página. | row, row-reverse, column, column-reverse |
|Display inline-flex | Se comportan como un bloque, pero no se exanden para ocupar todo el espacio en la horizontal. |row, row-reverse, column, column-reverse |
|flex-direction |  Cambia la orientación del eje principal. |  row, row-reverse, column, column-reverse|
|flex-wrap | Evita o permite el desbordamiento (multilinea). | nowrap, wrap, wrap-reverse |
| flex-flow | Es un atajo para escribir de 1 sola vez flex-direction y flex-wrap. |  row nowrap |
| justify-content |Es muy útil para indicar cómo se van a colocar los justificados y márgenes de los ítems. | flex-start,end, space-between,around|
| align-items |Ahora estamos alineando con respecto al eje secundario y no el principal. | flex-start,end, center, stretch, baseline|
|align-content|Es parecido al que conseguimos con align-items, en el sentido que aplicará al eje secundario su efecto de distribución, solo que aquí no estamos indicando la colocación de una única fila, sino de todas las filas. |flex-start,end, center, stretch, space-between, space-around|


| Valor (flex-direction) | Descripcion|
| -------------------------- | ---------------- |
|row | Establece la dirección del eje principal en horizontal. |  row row-reverse column column-reverse|
|row-reverse | Establece la dirección del eje principal en horizontal (invertido).| 
|column |  Establece la dirección del eje principal en vertical. |
|column-reverse| Establece la dirección del eje principal en vertical (invertido).|


| Valor (flex-wrap) | Descripcion|
| -------------------------- | ---------------- |
|nowrap | Establece los ítems en una sola línea (no permite que se desborde el contenedor). |  
|wrap | Establece los ítems en modo multilínea (permite que se desborde el contenedor). | 
|wrap-reverse | Establece los ítems en modo multilínea, pero en dirección inversa. |


| Valor (justify-content) | Descripcion|
| -------------------------- | ---------------- |
|flex-start | Añade los elementos a partir del inicio del eje principal.|  
|flex-end | Añade los elementos a partir del final del eje principal.| 
|center|Los elementos se centran en el espacio del contenedor, siempre con respecto al eje principal.|
|space-between | Hace que los elementos se distribuyan con un espacio proporcional entre ellos, siendo que los ítem de los extremos se sitúan en el borde del contenedor.|
|space-around|Es parecido a space-between en el sentido de dejar un espaciado proporcional, sin embargo, en esta ocasión se deja también espacio entre el borde del contenedor y los ítem de los extremos.|