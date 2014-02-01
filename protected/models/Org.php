<?php

/**
 * This is the model class for table "cnx_org".
 *
 * The followings are the available columns in table 'cnx_org':
 * @property integer $id_org
 * @property integer $co_org
 * @property integer $co_org_dpnd
 * @property string $nb_org
 * @property string $tx_descripcion
 * @property string $abv_org
 * @property string $fe_crea
 * @property string $fe_modf
 * @property string $usr_crea
 * @property string $usr_modf
 * @property string $in_stat
 * @property string $tx_desc
 *
 * The followings are the available model relations:
 * @property AsigOrg[] $asigOrgs
 * @property Org $coOrgDpnd
 * @property Org[] $orgs
 */
class Org extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cnx_org';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('co_org, nb_org, tx_descripcion', 'required'),
			array('co_org, co_org_dpnd', 'numerical', 'integerOnly'=>true),
			array('nb_org', 'length', 'max'=>128),
			array('tx_descripcion', 'length', 'max'=>250),
			array('usr_crea, usr_modf, abv_org', 'length', 'max'=>10),
			array('in_stat', 'length', 'max'=>1),
			array('tx_desc', 'length', 'max'=>100),
			array('fe_crea, fe_modf', 'safe'),
                    
                        //Valida unique key
                        array('co_org', 'unique', 'attributeName'=>'co_org'),
                    
                        //Valida foreing key
                        array('co_org_dpnd', 'exist',
                                'allowEmpty' => true,
                                'attributeName' => 'co_org',
                                'className' => 'Org',
                                'message' => 'El codigo especificado no existe.',
                                'skipOnError'=>true
                                ),
                                        
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_org, co_org, co_org_dpnd, nb_org, tx_descripcion, abv_org, fe_crea, fe_modf, usr_crea, usr_modf, in_stat, tx_desc', 'safe', 'on'=>'search'),
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
			'asigOrgs' => array(self::HAS_MANY, 'AsigOrg', 'co_org'),
			'coOrgDpnd' => array(self::BELONGS_TO, 'Org', 'co_org_dpnd'),
                        'orgs' => array(self::HAS_MANY, 'Org', 'co_org_dpnd'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_org' => 'Id Org',
			'co_org' => 'Codigo Organizacion',
			'co_org_dpnd' => 'Codigo Padre',
			'nb_org' => 'Organizacion',
			'tx_descripcion' => 'Descripcion',
			'abv_org' => 'Abreviacion',
			'fe_crea' => 'Creado el',
			'fe_modf' => 'Modificado el',
			'usr_crea' => 'Creado por',
			'usr_modf' => 'Modificado por',
			'in_stat' => 'Estatus',
			'tx_desc' => 'Observaciones',
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

		$criteria->compare('id_org',$this->id_org);
		$criteria->compare('co_org',$this->co_org);
		$criteria->compare('co_org_dpnd',$this->co_org_dpnd);
                
                //$criteria->with =array('coOrgDpnd');
		//$criteria->addSearchCondition('coOrgDpnd.nb_org', $this->co_org_dpnd);
                //$criteria->addSearchCondition('LOWER(coOrgDpnd.nb_org)', strtolower($this->co_org));

               
		$criteria->compare('nb_org',$this->nb_org,true);
		$criteria->compare('tx_descripcion',$this->tx_descripcion,true);
		$criteria->compare('abv_org',$this->abv_org,true);
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
	 * @return Org the static model class
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
