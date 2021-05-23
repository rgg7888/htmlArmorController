# htmlArmorController

<h2>Ir a lo nuevo y omitir lo obsolete <a href="#validar">para Evitar conflictos en sus proyectos click me</a></h2>

<h1>Bugs Temporales</h1>

<pre>
<h3>This bug is already patched</h3>
<b>
<pre>
Pero tambien tome en cuenta que esta es una validacion
muy muy basica y especifica, asi que para que funcione
debe de tener un formulario con tres inputs y en el orden
que se indica :
1- debe ser email
2- debe ser un input que admita solo letras
3- debe ser un input que espera una lista
</pre>
</b>
Por el momento no utilice las funciones validar_form y _validar_form
directamente ya que estas tienen un problema logico al obtener los 
datos validados, puede utilizar las funciones de validacion independientemente
para validar , email, solo letras o listas divididas por coma

en la clase DataController tiene las funciones para realizar
dichas acciones puede instanciar la clase y utilizar sus 
metodos de validacion sin problema pero recuerde no utilizar 
los helpers aun , excepto el helper notXSS() este helper si 
puede utilizarlo sin problema.
</pre>
<p>
El bug anterior y esta parchado pero aun no 
se implementa una funcion que sea util para formularios 
con mas de 3 inputs de entrada , despues de este parrafo
estare notificando cuando la funcion para validar 
formularios este lista !!
<br>HAPPY CODING =)
</p>
<h2>Controlador de datos</h2>

<p>
    Esta clase contiene funciones simples
    que te permitiran validar y prevenir
    ataques XSS (cross site scripting) en tus formularios.
</p>

<p>
    Tambien este paquete te proporcionara
    los mecanismos necesarios para utilizar
    por lo pronto mysqli para conectar tus 
    web apps a una base de datos mysql
</p>

<p>
    el primer helper que tenemos es :
    <pre>
    notXSS();
    </pre>
    este metodo nos ayuda a convertir 
    las etiquetas html en entidades html
    y de esta forma evitamos la inyeccion de
    codigo malicioso.
</p>

<p>
    notXSS probablemente no sea necesario
    que lo utilize directamente, ya que 
    las siguientes funciones hacen 
    el llamado a este metodo cuando sea necesario.
</p>

<p>
    para validar formularios que 
    utilizan el metodo POST
    debe utilizar el helper 
    <pre>
    validar_form()
    </pre>
    simplemente pasele un arreglo con los nombres de los
    campos y la funcion hara el resto.
</p>

<p>
    Para validar con GET utilize 
    <pre>
    _validar_form()
    </pre>
    y el funcionaiento es igual solo agreguele 
    mediante un arreglo los nombres de todos los
    datos que esta capturando con el formulario
    y que sea necesario un tipo de validacion
</p>

<h2 id="validar">Funcion validar()</h2>

<pre>
hola bienvenido/a a el htmlArmorController
iniciamos con un methodo super poderoso
el cual te permitira validar tus inputs
de una manera facil y elegante.

lo unico que tiene que hacer es utilizar
el method validar(), este metodo recibe 
3 atributos "tipo,name,method"

el primero define el tipo de validacion
que  quiera realizar , por el momento
contamos con cuatro tipos de validaciones
</pre>

<h3>Tipos de Validaciones</h3>
<ol>
    <li>vacio</li>
    <li>correo</li>
    <li>lista</li>
    <li>letrasOnly</li>
</ol>

<p>
creo que los nombres son bastante
descriptivos para entender lo que 
hace cada validacion.
</p>

<p>
Supongamos que quiere validar que 
un campo obligatorio no este vacio
para despues proceder con su evaluacion<br>

el metodo validar obtendra directamente
el valor de la variable $_POST o $_GET
segun se le indique, por eso es requerido
el argumento name.
</p>

<pre>
entonces para validar que un campo
no esta vacio enviado por el method post
se hace de esta manera :

validar("vacio","myInput");

donde myInput es el valor del atributo name de tu input

en caso que el campo este vacio 
obtendra como resultado "myInput es Obligatorio"

de lo contrario recibira el valor que se 
haya ingresado en el campo.

para hacer la misma validacion pero 
por el metodo get solamente agregue
true como tercer argumento asi :

validar("vacio","myInput",true);

ESTA MISMA FORMA APLICA PARA TODAS LAS VALIDACIONES DISPONIBLES
</pre>