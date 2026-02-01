# 📝 App Notas Pract (Mini-Framework MVC)

Un sistema de gestión de notas desarrollado en **PHP nativo** siguiendo el patrón de diseño **Model-View-Controller (MVC)**. Este proyecto implementa un enrutador personalizado y un sistema de persistencia de datos robusto utilizando PDO.

## 🚀 Características Principales

- **Custom Router:** Sistema de ruteo basado en URIs que mapea peticiones a controladores específicos.
- **PDO Database Wrapper:** Clase `Database` personalizada para manejar sentencias preparadas y prevenir inyecciones SQL.
- **Dependency Injection:** Inyección de la instancia de base de datos y configuraciones a través del ciclo de vida de la petición.
- **Separación de Concernimientos:** Clara distinción entre lógica de negocio (Controllers) y presentación (Views).

## 📂 Estructura del Proyecto

```text
app_notas_pract/
├── controllers/          # Lógica de manejo de peticiones
├── views/                # Archivos de plantilla (HTML/PHP)
│   └── partials/         # Componentes reutilizables (Nav, Footer, etc.)
├── config.php            # Arreglo de configuración (DB, credenciales)
├── Database.php          # Wrapper de conexión PDO
├── router.php            # Motor de enrutamiento
├── functions.php         # Helpers y utilidades globales
├── index.php             # Punto de entrada único (Front Controller)
└── .htaccess             # Reescritura de URLs para limpieza de URIs
```
