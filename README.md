# Figuras Geométricas - Área y Perímetro con PHP 

Este proyecto web permite calcular el área y el perímetro de figuras geométricas básicas como cuadrados, círculos y triángulos. El usuario selecciona una figura en la pantalla principal y luego introduce las medidas necesarias para ver los resultados calculados.

---

###  Tecnologías

* **HTML5**
* **CSS3**
* **PHP7**
* Imágenes **PNG**

---

###  Características Principales

* **Pase de datos por URL (GET)**: La página principal (`index.html`) utiliza el método GET para enviar el tipo de figura seleccionada al formulario de cálculo.
* **Formulario Dinámico**: El archivo `operacion.php` recibe el dato y construye dinámicamente el formulario con los campos de entrada (`<input>`) requeridos para la figura elegida.
* **Procesamiento de datos (POST)**: Los datos del formulario, incluyendo un campo oculto que identifica la figura, se envían por método POST a una función parametrizada en el mismo archivo para realizar los cálculos.
* **Cálculo y Visualización**: La función correspondiente a la figura seleccionada realiza los cálculos de área y perímetro, y muestra los resultados directamente en la pantalla.

---

###  Instalación

#### Opción A: Servidor Local (Recomendado)

Para esta opción, necesitarás un servidor web local como **XAMPP** o **WAMPPserver**.

1.  Copia la carpeta del proyecto y pégala en el directorio de salida de tu servidor:
    * **XAMPP**: `c:/xampp/htdocs`
    * **WAMPPserver**: `c:/wamp64/www`

#### Opción B: Servidor de Hosting

1.  Asegúrate de que el servidor de hosting soporte **PHP7** o superior.
2.  Sube la carpeta del proyecto al directorio público del servidor, que generalmente es `public_html`, `www` o `public`, utilizando FTP o CPANEL.

---

###  Uso

#### Opción A: Local

1.  Inicia tu servicio web (XAMPP o WAMPPserver).
2.  Abre tu navegador y navega a la siguiente dirección, reemplazando `NombreDeLaCarpetaDelProyecto` con el nombre de tu carpeta:
    ```
    http://localhost/NombreDeLaCarpetaDelProyecto
    ```
    * **Nota**: Si configuraste un puerto diferente (ej. 8080), debes especificarlo: `http://localhost:8080/NombreDeLaCarpetaDelProyecto`.

#### Opción B: Hosting

1.  Abre un navegador y accede a la dirección de dominio donde está alojada la página, por ejemplo:
    ```
    [https://www.miDominio.com/figurasGeometricas](https://www.miDominio.com/figurasGeometricas)
    ```

---

###  Contribuciones

¡Las contribuciones son bienvenidas! Para ayudar a mejorar este proyecto, por favor, sigue estos pasos:

1.  **Haz un *fork*** del repositorio.
2.  **Clona tu *fork*** a tu máquina local:
    ```bash
    git clone [https://github.com/rodokizzzdev/AyPFigurasPHP.git](https://github.com/rodokizzzdev/AyPFigurasPHP.git)
    ```
3.  **Crea una nueva rama** para tus cambios:
    ```bash
    git checkout -b nombre-de-tu-rama
    ```
4.  **Realiza tus cambios y haz *commit***:
    ```bash
    git add .
    git commit -m "Descripción clara de tus cambios"
    ```
5.  **Envía los cambios** a tu *fork* en GitHub:
    ```bash
    git push origin nombre-de-tu-rama
    ```
6.  **Abre un *pull request*** hacia la rama `main` del repositorio original, explicando tus cambios.

Revisaré tu *pull request* tan pronto como sea posible. ¡Gracias por tu interés en mejorar este proyecto!

---

###  Licencia

Este proyecto está bajo la Licencia **MIT**.
