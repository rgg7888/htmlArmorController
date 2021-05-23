# htmlArmorController

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