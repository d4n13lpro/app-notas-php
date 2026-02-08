# 📝 App Notas Pract (Mini-Framework MVC)

Un sistema de gestión de notas desarrollado en **PHP nativo** siguiendo el patrón de diseño **Model-View-Controller (MVC)**. Este proyecto implementa un enrutador personalizado y un sistema de persistencia de datos robusto utilizando PDO.

## 🚀 Características Principales

- **Custom Router:** Sistema de ruteo basado en URIs que mapea peticiones a controladores específicos.
- **PDO Database Wrapper:** Clase `Database` personalizada para manejar sentencias preparadas y prevenir inyecciones SQL.
- **Dependency Injection:** Inyección de la instancia de base de datos y configuraciones a través del ciclo de vida de la petición.
- **Separación de Concernimientos:** Clara distinción entre lógica de negocio (Controllers) y presentación (Views).

## 📂 Estructura del Proyecto

```text
ESTRUCTURA DEL PROYECTO
Generado el: 2026-02-08 03:47:16
==============================

app_notas_pract\
├── .gitignore
├── .htaccess
├── Database.php
├── README.md
├── Response.php
├── config.php
├── controllers
│   ├── about.php
│   ├── contact.php
│   ├── index.php
│   ├── note-create.php
│   ├── note.php
│   └── notes.php
├── estructura_proyecto.txt
├── exportador.php
├── functions.php
├── index.php
├── router.php
├── routes.php
└── views
    ├── 403.PHP
    ├── 404.php
    ├── about.view.php
    ├── contact.view.php
    ├── index.view.php
    ├── note-create.view.php
    ├── note.view.php
    ├── notes.view.php
    └── partials
        ├── banner.php
        ├── footer.php
        ├── head.php
        └── nav.php
```

```mysql


CREATE TABLE `notes` (
`id` int NOT NULL AUTO_INCREMENT,
`body` text NOT NULL, -- Cambiado de title a body
`user_id` int NOT NULL,
`created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
`updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
PRIMARY KEY (`id`),
CONSTRAINT `fk_user_notes` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `users` (
`id` int NOT NULL AUTO_INCREMENT,
`name` varchar(255) NOT NULL,
`email` varchar(255) NOT NULL,
`created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
`updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
PRIMARY KEY (`id`),
UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
```

os nombres de los archivos dentro de la carpeta controllers/notes/ tienen un significado estandarizado:AcciónRuta (URI)ControladorPropósitoIndex/notesnotes/index.phpLista todas las notas.Show/note?id=...notes/show.phpMuestra una nota específica (detalle).Create/notes/createnotes/create.phpMuestra el formulario y procesa la creación.
