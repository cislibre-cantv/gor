GOR
===

Sistema de Gestión Operativa Regional

Se inicio el proyecto de migracion del gro 26-01-2014


##############################################
###         BASE DE DATOS
##############################################
-TABLAS DE USUARIOS Y PERMISOLOGIAS:
    Se Crea la base de datos para manejo de usuarios ver archivo:
    
    ../protected/data/Scrip_tablas_usuarios_privilegios.sql

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


