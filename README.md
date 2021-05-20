# htmlArmorController

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
    para validar formularios que utilizan el metodo POST<br>
    debe utilizar el helper validar_form()<br>
    simplemente pasele un arreglo con los nombres de los
    campos y la funcion hara el resto.
</p>

<p>
    Para validar con GET utilize _validar_form()
    y el funcionaiento es igual solo agreguele 
    mediante un arreglo los nombres de todos los
    datos que esta capturando con el formulario
    y que sea necesario un tipo de validacion
</p>