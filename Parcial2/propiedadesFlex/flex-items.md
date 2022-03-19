| Propiedades flex-items | En que consiste |  Valor |
| -------------------------- | ---------------- | ------ |
|flex-grow |Sirve para decir cómo deben crecer los elementos incluidos en el contenedor, es decir, cómo distribuir el espacio entre ellos, haciendo que ocupen más o menos espacio.|  El valor que acepta es numérico e indica la proporción de espacio que va a ocupar. |
| order | Sirve para aplicar un orden puramente arbitrario en la disposición de los elementos. | Admite un valor numérico entero |
| align-self |Sirve para modificar el valor de align-items marcado por el contenedor principal.  | Automático |
|flex-shrink | Sirve para indicar que ciertos ítems deben encoger su tamaño. |  El valor predeterminado de flex-shrink es de 1 |
| flex-basis |Sirve para modificar las dimensiones de los elementos atendiendo a varias posibilidades. (aplica a la altura de los elementos.)  | Numéro y auto  |
| flex | Es solo un atajo para escribir en una sola línea de código CSS las propiedades flex-grow, flex-shrink y flex-basis.  | El valor por defecto de esta propiedad es "0 1 auto".|



| Valor | Descripcion|
| -------------------------- | ---------------- |
|Numéro | Unidad CSS o porcentaje: lo que indica las dimensiones iniciales del elemento, antes de otorgar espacio sobrante. |  
|auto| Es el valor predeterminado e indica que flex-basis no va a tener efecto, otorgando dimensionamiento en función de cualquier otro atributo que pueda haber en el elemento, o en función del contenido del propio elemento. |


| align-items, Valor    | Descripcion |
| ------------------- | ---------------- |
|flex-start|El límite del margen transversal inicial del elemento flexible es unido al borde transversal final de la línea.|  
|flex-end|El límite del margen transversal final del elemento flexible es unido al borde transversal final de la línea. |
|center| Los márgenes del elemento flexible son centrados dentro de la línea sobre su eje transversal. Si el tamaño transversal del elemento es mayor al del contenedor, se excederá por igual en ambas direcciones.|
|start| Los elementos se agrupan uno junto al otro hacia el borde inicial del contenedor de alineación en el eje apropiado.|
|end|Los elementos se agrupan uno junto al otro hacia el borde final del contenedor de alineación en el eje apropiado.|
|baseline|Todos los elementos flexibles son ajustados de modo que sus bases queden alineadas. El elemento con la distancia mayor entre su límite transversal inicial y su base es combinado con el borde transversal de la línea.|
|stretch|Las elementos flexibles son estirados de modo que el tamaño transversal de sus límites sea el mismo de la línea, manteniendo sus restricciones de anchura y altura.|


* Links

[Fuente de información 1 ](https://desarrolloweb.com/articulos/propiedades-contenedor-flexbox.html)

[Fuente de información 2 ](https://desarrolloweb.com/articulos/propiedades-item-flexbox.html)

[Fuente de información 3](https://lenguajecss.com/css/maquetacion-y-colocacion/flexbox/)