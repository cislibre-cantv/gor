# _GOR_

_Descripcion: Sistema de Gestion Operativa Regional_

## Configuración del proyecto

_¿Cómo puedo, como desarrollador, empezar a trabajar en el proyecto?_ 

1. Realice un Fork al proyecto desde su cuenta en guthub.
2. Haga un clon del proyecto que se ha copiado en su cuenta. <br/>
    ej. git clone git@github.com:tu_cuenta_de_github/gor.git


## Testing

_How do I run the project's automated tests?_

### Unit Tests

1. `rake spec`

### Integration Tests

1. _Run other local services / provide credentials for external services._
2. `rake spec:integration`

## Deploying

### _How to setup the deployment environment_

- _Required heroku addons, packages, or chef recipes._
- _Required environment variables or credentials not included in git._
- _Monitoring services and logging._

### _How to deploy_

## Troubleshooting & Useful Tools

_Examples of common tasks_

> e.g.
> 
> - How to make curl requests while authenticated via oauth.
> - How to monitor background jobs.
> - How to run the app through a proxy.

## Contributing changes

- _Internal git workflow_
- _Pull request guidelines_
- _Tracker project_
- _Google group_
- _irc channel_
- _"Please open github issues"_

## License






GOR
===

Sistema de Gestión Operativa Regional

Se inicio el proyecto de migracion del Gor 26-01-2014


##############################################
###         BASE DE DATOS 
##############################################

-TABLAS DE USUARIOS Y PERMISOLOGIAS:
    Se Crea la base de datos para manejo de usuarios ver archivo:
    
    ../protected/data/gor_db/Scrip_tablas_usuarios_privilegios.sql

    Crear el usuario admin una vez que se cree la BD.



##############################################
###         AUDITORIA EN TABLAS
##############################################

    Si ha creado los campos de autoria (fe_crea, fe_modf, usr_crea, usr_modf), 
    agregue la siguiente funcion en el modelo de la tabla en cuestion, para que
    se guarde automaticamente la fecha y id de usuario que intereactua con esta.

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
                    );
            }


