<?php

/**
 * This is the model class for table "ALUMNO".
 *
 * The followings are the available columns in table 'ALUMNO':
 * @property integer $ID_ALUMNO
 * @property string $NOMBRE_ALUMNO
 * @property string $PAT_ALUMNO
 * @property string $MAT_ALUMNO
 * @property integer $RUT_ALUMNO
 * @property integer $TEL_ALUMNO
 * @property string $EMAIL_ALUMNO
 * @property string $DIR_ALUMNO
 * @property string $PASS_ALUMNO
 *
 * The followings are the available model relations:
 * @property DIPLOMADO[] $dIPLOMADOs
 * @property CURSO[] $cURSOs
 */
class Alumno extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ALUMNO';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('RUT_ALUMNO, TEL_ALUMNO', 'numerical', 'integerOnly'=>true),
			array('NOMBRE_ALUMNO, PAT_ALUMNO, MAT_ALUMNO, EMAIL_ALUMNO, DIR_ALUMNO, PASS_ALUMNO', 'length', 'max'=>50),
			/*
			//Example username
			array('username', 'match', 'pattern' => '/^[A-Za-z0-9_]+$/u',
                 'message'=>'Username can contain only alphanumeric 
                             characters and hyphens(-).'),
          	array('username','unique'),
          	*/
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID_ALUMNO, NOMBRE_ALUMNO, PAT_ALUMNO, MAT_ALUMNO, RUT_ALUMNO, TEL_ALUMNO, EMAIL_ALUMNO, DIR_ALUMNO, PASS_ALUMNO', 'safe', 'on'=>'search'),
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
			'dIPLOMADOs' => array(self::MANY_MANY, 'DIPLOMADO', 'CURSA(ID_ALUMNO, ID_DIPLO)'),
			'cURSOs' => array(self::MANY_MANY, 'CURSO', 'INSCRIBE(ID_ALUMNO, ID_CURSO)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_ALUMNO' => 'Id Alumno',
			'NOMBRE_ALUMNO' => 'Nombre Alumno',
			'PAT_ALUMNO' => 'Pat Alumno',
			'MAT_ALUMNO' => 'Mat Alumno',
			'RUT_ALUMNO' => 'Rut Alumno',
			'TEL_ALUMNO' => 'Tel Alumno',
			'EMAIL_ALUMNO' => 'Email Alumno',
			'DIR_ALUMNO' => 'Dir Alumno',
			'PASS_ALUMNO' => 'Pass Alumno',
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

		$criteria->compare('ID_ALUMNO',$this->ID_ALUMNO);
		$criteria->compare('NOMBRE_ALUMNO',$this->NOMBRE_ALUMNO,true);
		$criteria->compare('PAT_ALUMNO',$this->PAT_ALUMNO,true);
		$criteria->compare('MAT_ALUMNO',$this->MAT_ALUMNO,true);
		$criteria->compare('RUT_ALUMNO',$this->RUT_ALUMNO);
		$criteria->compare('TEL_ALUMNO',$this->TEL_ALUMNO);
		$criteria->compare('EMAIL_ALUMNO',$this->EMAIL_ALUMNO,true);
		$criteria->compare('DIR_ALUMNO',$this->DIR_ALUMNO,true);
		$criteria->compare('PASS_ALUMNO',$this->PASS_ALUMNO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Alumno the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function beforeSave() 
    {
        $userId=0;
		if(null!=Yii::app()->user->id) $userId=(int)Yii::app()->user->id;
		
		if($this->isNewRecord)
        {           
                        						
        }else{
                        						
        }

        
        return parent::beforeSave();
    }

    public function beforeDelete () {
		$userId=0;
		if(null!=Yii::app()->user->id) $userId=(int)Yii::app()->user->id;
                                
        return false;
    }

    public function afterFind()    {
         
        parent::afterFind();
    }
	
		
	public function defaultScope()
    {
    	/*
    	//Example Scope
    	return array(
	        'condition'=>"deleted IS NULL ",
            'order'=>'create_time DESC',
            'limit'=>5,
        );
        */
        $scope=array();

        
        return $scope;
    }
}
