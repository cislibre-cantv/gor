GOR
===

Sistema de Gestión Operativa Regional

Se inicio el proyecto de migracion del Gor 26-01-2014


##############################################
###         BASE DE DATOS 
##############################################
 Creado 26-01-2014 averen01@cantv.com.ve
 Actualizado 27-01-2014 averen01@cantv.com.ve

-TABLAS DE USUARIOS Y PERMISOLOGIAS:
    Se Crea la base de datos para manejo de usuarios ver archivo:
    
    ../protected/data/gor_db/Scrip_tablas_usuarios_privilegios.sql

    Crear el usuario admin una vez que se cree la BD.



##############################################
###         AUDITORIA EN TABLAS
##############################################
Creado 26-01-2014 averen01@cantv.com.ve

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


