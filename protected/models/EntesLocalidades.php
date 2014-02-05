<?php

/**
 * This is the model class for table "cnx_entes_localidades".
 *
 * The followings are the available columns in table 'cnx_entes_localidades':
 * @property integer $id_sector_proyecto
 * @property integer $co_sector_proyecto
 * @property string $nb_entidad
 * @property string $email
 * @property string $cnx_sectores_proyectos
 * @property string $fe_crea
 * @property string $fe_modf
 * @property string $usr_crea
 * @property string $usr_modf
 * @property string $in_stat
 * @property string $tx_desc
 *
 * The followings are the available model relations:
 * @property Localidades[] $localidades
 */
class EntesLocalidades extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cnx_entes_localidades';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('co_sector_proyecto, nb_entidad', 'required'),
			array('co_sector_proyecto', 'numerical', 'integerOnly'=>true),
			array('nb_entidad', 'length', 'max'=>50),
			array('email, tx_desc', 'length', 'max'=>45),
			array('cnx_sectores_proyectos', 'length', 'max'=>20),
			array('fe_modf, usr_crea, usr_modf', 'length', 'max'=>10),
			array('in_stat', 'length', 'max'=>1),
			array('fe_crea', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_sector_proyecto, co_sector_proyecto, nb_entidad, email, cnx_sectores_proyectos, fe_crea, fe_modf, usr_crea, usr_modf, in_stat, tx_desc', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'localidades' => array(self::HAS_MANY, 'Localidades', 'co_ente'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_sector_proyecto' => 'Id Sector Proyecto',
			'co_sector_proyecto' => 'Codigo Sectro Proyecto',
			'nb_entidad' => 'Nombre de la Localidad/Entidad',
			'email' => 'Correo Electronico',
			'cnx_sectores_proyectos' => 'Cnx Sectores Proyectos',
			'fe_crea' => 'Fe Crea',
			'fe_modf' => 'Fe Modf',
			'usr_crea' => 'Usr Crea',
			'usr_modf' => 'Usr Modf',
			'in_stat' => 'In Stat',
			'tx_desc' => 'Tx Desc',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_sector_proyecto',$this->id_sector_proyecto);
		$criteria->compare('co_sector_proyecto',$this->co_sector_proyecto);
		$criteria->compare('nb_entidad',$this->nb_entidad,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('cnx_sectores_proyectos',$this->cnx_sectores_proyectos,true);
		$criteria->compare('fe_crea',$this->fe_crea,true);
		$criteria->compare('fe_modf',$this->fe_modf,true);
		$criteria->compare('usr_crea',$this->usr_crea,true);
		$criteria->compare('usr_modf',$this->usr_modf,true);
		$criteria->compare('in_stat',$this->in_stat,true);
		$criteria->compare('tx_desc',$this->tx_desc,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EntesLocalidades the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        
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
        
}
