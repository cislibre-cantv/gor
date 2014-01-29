# _GOR_

_Descripcion: Sistema de Gestion Operativa Regional_

## Configuración del proyecto

_¿Cómo puedo, como desarrollador, empezar a trabajar en el proyecto?_ 

1. Realice un Fork al proyecto desde su cuenta en guthub.
2. Haga un clon del proyecto que se ha copiado en su cuenta.
     
        git clone git@github.com:tu_cuenta_de_github/gor.git

3. Copie la carpeta gor en su servidor web
4. Istale la base de datos, ubucada en  

        ../protected/data/gor_db/Scrip_tablas_usuarios_privilegios.sql

5. Cree un usuario admin desde su administrador de base de datos.
6. Ingrese a la aplicación desde httt://localhost/gor


## Pruebas

_¿Cómo puedo ejecutar pruebas automatizadas del proyecto?_

### Pruebas Unitarias

1. No definidas

### Pruebas Integrales

1. No definidas

## Implementación

### _¿Cómo configurar el ambiente de implementación?_

- _No requiere configuración especial._

### _Cómo implementar_

## Solución de problemas y herramientas útiles

_Ejemplos de tareas comunes_

> e.g.
> 
> - No definidas.

## Cambios y Contribuciones

- _CRUD Usuarios:_
    Se crea el crud de usuarios y se establece la autenticación con 
    la base de datos a través del componente UserIdentity.php, función authenticate()
    
- _Integracion con behaviors:_
    Si ha creado los campos de autoria (fe_crea, fe_modf, usr_crea, usr_modf), 
    agregue la siguiente funcion en el modelo de la tabla en cuestion, para que
    se guarde automaticamente la fecha y id de usuario que intereactua con esta.
    Almacena logs en la tabla cnx_active_record_log.

        public function behaviors()
            {
                    return array(
                            'CTimestampBehavior' => array(
                                'class' => 'zii.behaviors.CTimestampBehavior',
                                'createAttribute' => 'fe_crea',
                                'updateAttribute' => 'fe_modf',
                                'setUpdateOnCreate' => true,
                            ),

                            'BlameableBehavior' => array(
                                'class' => 'application.components.BlameableBehavior',
                                'createdByColumn' => 'usr_crea',
                                'updatedByColumn' => 'usr_modf',
                            ),

                            'ActiveRecordLogableBehavior' => 'application.components.ActiveRecordLogableBehavior',
                    );
            }

- _CRUD Organización:_
    Se crea el crud de organizacion.

- _CRUD Asignacion de Organización:_
    Se crea el asignacion de usuarios a una estructura organizativa.

## Licencia

    Copyright 2014
    Compañia Anónima Nacional Teléfonos de Venezuela. RIF: J-00124134-5.- Todos los derechos reservados.