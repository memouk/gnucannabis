<p align="center">
    <a href="https://github.com/memouk/gnucannabis" target="_blank">
        <img src="https://avatars.githubusercontent.com/u/62582844?s=200&v=4" height="100px">
    </a>
    <h1 align="center">GNUCannabis</h1>
    <br>
</p>

GNUCannabis es una plataforma de software libre para la gestión de cultivos de cannabis, desarrollada con el marco Yii 2. Proporciona una solución integral para el registro, seguimiento y análisis de los cultivos. La plataforma incluye tres niveles: frontend, backend y consola, cada uno de los cuales es una aplicación Yii separada. El proyecto está diseñado para trabajar en un entorno de desarrollo en equipo. Admite el despliegue de la aplicación en diferentes entornos.

La documentación está en [docs/guide/README.md](docs/guide/README.md).

[![Latest Stable Version](https://img.shields.io/packagist/v/yiisoft/yii2-app-advanced.svg)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Total Downloads](https://img.shields.io/packagist/dt/yiisoft/yii2-app-advanced.svg)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Build Status](https://travis-ci.org/yiisoft/yii2-app-advanced.svg?branch=master)](https://travis-ci.org/yiisoft/yii2-app-advanced)

ESTRUCTURA DE DIRECTORIOS
-------------------

```
common
    config/              contiene configuraciones compartidas
    mail/                contiene archivos de vista para correos electrónicos
    models/              contiene clases de modelo utilizadas en backend y frontend
    tests/               contiene pruebas para clases comunes    
console
    config/              contiene configuraciones de consola
    controllers/         contiene controladores de consola (comandos)
    migrations/          contiene migraciones de base de datos
    models/              contiene clases de modelo específicas de la consola
    runtime/             contiene archivos generados en tiempo de ejecución
backend
    assets/              contiene activos de la aplicación como JavaScript y CSS
    config/              contiene configuraciones de backend
    controllers/         contiene clases de controlador Web
    models/              contiene clases de modelo específicas de backend
    runtime/             contiene archivos generados en tiempo de ejecución
    tests/               contiene pruebas para la aplicación backend    
    views/               contiene archivos de vista para la aplicación Web
    web/                 contiene el script de entrada y recursos Web
frontend
    assets/              contiene activos de la aplicación como JavaScript y CSS
    config/              contiene configuraciones de frontend
    controllers/         contiene clases de controlador Web
    models/              contiene clases de modelo específicas de frontend
    runtime/             contiene archivos generados en tiempo de ejecución
    tests/               contiene pruebas para la aplicación frontend
    views/               contiene archivos de vista para la aplicación Web
    web/                 contiene el script de entrada y recursos Web
    widgets/             contiene widgets de frontend
vendor/                  contiene paquetes dependientes de terceros
environments/            contiene sobreescrituras basadas en entorno
```

## configuración

configuración de php
```sh
php init
```

instalar las dependencias
```sh
composer install
```

> en caso de error ejecutar: `composer install --ignore-platform-req=ext-gd`

iniciar:
```sh
php yii serve --docroot="backend/web" & php yii serve --docroot="frontend/web" -p 8081
```