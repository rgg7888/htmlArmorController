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
    y de esta forma evitamos ls inyeccion de
    codigo malicioso.
</p>