<?php

/**
 * This is the model class for table "tbl_equipment".
 *
 * The followings are the available columns in table 'tbl_equipment':
 * @property integer $id
 * @property integer $id_nomenclature
 * @property string $name
 * @property string $feature
 * @property string $inventory_no
 * @property string $serial_no
 * @property integer $id_contractor
 * @property string $price
 * @property string $purchase_date
 * @property string $warranty
 * @property string $warranty_date
 * @property string $notes
 *
 * The followings are the available model relations:
 * @property TblNomenclature $idNomenclature
 * @property TblContractor $idContractor
 */
class Equipment extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_equipment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_nomenclature, name, feature, id_contractor', 'required'),
			array('id_nomenclature, id_contractor', 'numerical', 'integerOnly'=>true),
			array('name, feature, inventory_no, serial_no, warranty, notes', 'length', 'max'=>128),
			array('price', 'length', 'max'=>8),
			array('purchase_date, warranty_date', 'safe'),
                        array('purchase_date, warranty_date', 'date', 'format'=>'dd.MM.yyyy'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_nomenclature, name, feature, inventory_no, serial_no, id_contractor, price, purchase_date, warranty, warranty_date, notes', 'safe', 'on'=>'search'),
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
			'nomenclature' => array(self::BELONGS_TO, 'Nomenclature', 'id_nomenclature'),
			'contractor' => array(self::BELONGS_TO, 'Contractor', 'id_contractor'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_nomenclature' => 'Номенклатура',
			'name' => 'Название',
			'feature' => 'Характеристики',
			'inventory_no' => 'Инвентарный №',
			'serial_no' => 'Серийный №',
			'id_contractor' => 'Поставщик',
			'price' => 'Цена',
			'purchase_date' => 'Дата приобретения',
			'warranty' => 'Гарантия',
			'warranty_date' => 'Гарантийная дата',
			'notes' => 'Примечания',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('id_nomenclature',$this->id_nomenclature);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('feature',$this->feature,true);
		$criteria->compare('inventory_no',$this->inventory_no,true);
		$criteria->compare('serial_no',$this->serial_no,true);
		$criteria->compare('id_contractor',$this->id_contractor);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('purchase_date',$this->purchase_date,true);
		$criteria->compare('warranty',$this->warranty,true);
		$criteria->compare('warranty_date',$this->warranty_date,true);
		$criteria->compare('notes',$this->notes,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Equipment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
/*        
        protected function beforeSave() 
        {
            if(parent::beforeSave()) 
            {
                $this->purchase_date = date('Y-m-d', strtotime($this->purchase_date));
                $this->warranty_date = date('Y-m-d', strtotime($this->warranty_date));
                return true;
            } 
            else 
            {
                return false;
            }
        }


        protected function afterFind() 
        {
            $this->purchase_date = date('d.m.Y', strtotime($this->purchase_date));
            $this->warranty_date = date('d.m.Y', strtotime($this->warranty_date));
            parent::afterFind();
        }        */
        protected function beforeSave()
        {
            foreach($this->metadata->tableSchema->columns as $columnName => $column)
            {
                if ($column->dbType == 'date')
                {
//                    if ($this->$columnName == 'Дата не установлена') 
                    if ($this->$columnName == '') 
                    {
                        $this->$columnName = '01.01.1970';
                    }
                    $this->$columnName = date('Y-m-d', CDateTimeParser::parse($this->$columnName, Yii::app()->locale->dateFormat));
                }
                elseif ($column->dbType == 'datetime')
                {
                    $this->$columnName = date('Y-m-d H:i:s', CDateTimeParser::parse($this->$columnName, Yii::app()->locale->dateFormat));
                }
            }
            return true;
        }
        

        protected function afterFind()
        {
                                                
            foreach($this->metadata->tableSchema->columns as $columnName => $column)
            {
                        
                if (!strlen($this->$columnName)) continue;
                        
                if ($column->dbType == 'date')
                {
                    $this->$columnName = Yii::app()->dateFormatter->formatDateTime(CDateTimeParser::parse($this->$columnName, 'yyyy-MM-dd'),'medium',null);
                    if ($this->$columnName == '01.01.1970') 
                    {
//                        $this->$columnName = 'Дата не установлена';
                        $this->$columnName = '';
                        //Yii::trace($columnName.'('.$column->dbType.') = "'.$this->$columnName.'"', 'OvBuild.php - AfterFind');
                    }
                }
                elseif ($column->dbType == 'datetime')
                {
                    $this->$columnName = Yii::app()->dateFormatter->formatDateTime(CDateTimeParser::parse($this->$columnName, 'yyyy-MM-dd hh:mm:ss'));
                }
            }
            return true;
        }    
        public static function All()
        {
            $models = Equipment::model()->findAll(array('order' => 'name'));
            $list = CHtml::listData($models,'id', 'name', 'shown');
            return $list;
        }

}
