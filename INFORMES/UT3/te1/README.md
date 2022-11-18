# ngx_small_light

### aqui va el indice

## Antes de hacer nada, voy a mirar la documentación del modulo que voy a instalar

### Dependencias

    Puedo ver que hay dos apartados que para mi, en la tabla de contenidos me llaman la atención.

![TablaContenidos](screenshots/1.png)

    Asi que voy primero a ver las dependencias. Veo que hay dos que son requeridas y dos opcionales. Voy a instalar las 4.

- PCRE (required)
- ImageMagick (required)
- Imlib2 (optional)
- GD (optional)

` $ sudo apt update && sudo apt install imagemagick libpcre3 libpcre3-dev libimlib2-dev -y `

![instalarDependencias](screenshots/2.png)

### Instalación

Voy a instalar el modulo *ngx_small_light* dinámicamente, para ello tengo que descargar el nginx en la versión actual que tengo instalada en el sistema. Para ello puedo usar el siguiente comando:

` curl -sL https://nginx.org/download/nginx-$(/sbin/nginx -v \
|& cut -d '/' -f2).tar.gz | tar xvz -C /tmp `

Este comando, descarga la versión de nginx que tengo instalada en el sistema en la carpeta temporal */tmp*

Despues de esto, descargo el codigo fuente del módulo, en mi caso lo descargaré dentro de una carpeta dedicada para *GitHub*. Para ello hago:

` git clone https://github.com/cubicdaiya/ngx_small_light.git /tmp/ngx_small_light`

![GitHub/modulo](screenshots/3.png)

Ahora voy a la carpeta donde se descargó el Nginx y escribo lo siguiente

`./configure --add-dynamic-module=../ngx_small_light`

Pero me salta un error

![Error1](screenshots/4.png)

Dice que no encuentra el compilador de c, vamos a instalarlo con `sudo apt install gcc`

Después de haber hecho eso, me sale este error:

![errorMagick](screenshots/errorMagick.png)

Esto es debido a que pensaba que había instalado bien magick, así que lo que hice fué ir a la pagina oficial de [magick](http://www.imagemagick.org/script/install-source.php), me descargué el codigo fuente desde su GitHub y seguí los pasos para instalar esta dependencia. Me situé en la carpeta de magick y escribí lo siguiente:

``` shell
    ./configure
    gmake
    sudo gmake install
    sudo ldconfig /usr/local/lib
```

Finalmente un `make check` para ver que todo funciona bien y corra sus tests.

Ahora, cruzo los dedos para que se me haga bien el `./configure` 🤞

*Me da el mismo error, así que voy a ver en clase*
