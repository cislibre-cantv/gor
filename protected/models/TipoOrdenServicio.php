<?php

/**
 * This is the model class for table "cnx_tipo_orden_servicio".
 *
 * The followings are the available columns in table 'cnx_tipo_orden_servicio':
 * @property integer $id_tipo_orden_servicio
 * @property integer $co_tipo_orden_servicio
 * @property string $nb_tipo_servicio
 * @property string $tx_desc
 * @property string $fe_crea
 * @property string $fe_modf
 * @property string $usr_crea
 * @property string $usr_modf
 * @property string $in_stat
 *
 * The followings are the available model relations:
 * @property AsigLocOrden $coTipoOrdenServicio
 */
class TipoOrdenServicio extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cnx_tipo_orden_servicio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nb_tipo_servicio', 'required'),
			array('id_tipo_orden_servicio, co_tipo_orden_servicio', 'numerical', 'integerOnly'=>true),
			array('nb_tipo_servicio', 'length', 'max'=>20),
			array('tx_desc', 'length', 'max'=>100),
			array('usr_crea, usr_modf', 'length', 'max'=>10),
			array('in_stat', 'length', 'max'=>45),
			array('fe_crea, fe_modf', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tipo_orden_servicio, co_tipo_orden_servicio, nb_tipo_servicio, tx_desc, fe_crea, fe_modf, usr_crea, usr_modf, in_stat', 'safe', 'on'=>'search'),
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
			
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tipo_orden_servicio' => 'Id Cnx Tipo Orden Servicio',
			'co_tipo_orden_servicio' => 'Codigo Tipo Orden Servicio',
			'nb_tipo_servicio' => 'Tipo Orden Servicio',
			'tx_desc' => 'Descripcion',
			'fe_crea' => 'Creado el',
			'fe_modf' => 'Modificado el',
			'usr_crea' => 'Creado por',
			'usr_modf' => 'Modificado por',
			'in_stat' => 'Estatus',
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

		$criteria->compare('id_tipo_orden_servicio',$this->id_tipo_orden_servicio);
		$criteria->compare('co_tipo_orden_servicio',$this->co_tipo_orden_servicio);
		$criteria->compare('nb_tipo_servicio',$this->nb_tipo_servicio,true);
		$criteria->compare('tx_desc',$this->tx_desc,true);
		$criteria->compare('fe_crea',$this->fe_crea,true);
		$criteria->compare('fe_modf',$this->fe_modf,true);
		$criteria->compare('usr_crea',$this->usr_crea,true);
		$criteria->compare('usr_modf',$this->usr_modf,true);
		$criteria->compare('in_stat',$this->in_stat,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TipoOrdenServicio the static model class
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
        
        
        public function beforeSave()
        {

          if (parent::beforeSave())
          {
              
              if($this->co_tipo_orden_servicio==null || $this->co_tipo_orden_servicio==0 ||  $this->co_tipo_orden_servicio=='')
                  $this->co_tipo_orden_servicio=1;
              
              if($this->isNewRecord)
               {

                    $maxCoTipoOrdenServicio = Yii::app()->db->createCommand()
                     ->select('max(co_tipo_orden_servicio) as max')
                     ->from('cnx_tipo_orden_servicio')
                     ->queryScalar();
                    
                    $this->co_tipo_orden_servicio = $maxCoTipoOrdenServicio + 1;
                    
                }else{
                    $this->usr_modf = Yii::app()->user->id;
                }

               return true;
           }
           else
           return false;
        }
}
