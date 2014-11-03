<?php

/**
 * This is the model class for table "tbl_expense".
 *
 * The followings are the available columns in table 'tbl_expense':
 * @property integer $id
 * @property integer $id_equipment
 * @property string $expense_date
 * @property integer $amount
 * @property integer $id_person
 * @property string $notes
 *
 * The followings are the available model relations:
 * @property TblEquipment $idEquipment
 * @property TblPerson $idPerson
 */
class Expense extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_expense';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_equipment, amount, id_person', 'required'),
			array('id_equipment, amount, id_person', 'numerical', 'integerOnly'=>true),
			array('notes', 'length', 'max'=>128),
			array('expense_date', 'safe'),
                        array('ammount','ammountRule' ),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_equipment, expense_date, amount, id_person, notes', 'safe', 'on'=>'search'),
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
			'equipment' => array(self::BELONGS_TO, 'Equipment', 'id_equipment'),
			'person' => array(self::BELONGS_TO, 'Person', 'id_person'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_equipment' => 'Оборудование',
			'expense_date' => 'Дата выдачи',
			'amount' => 'Количество',
			'id_person' => 'Получатель',
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
		$criteria->compare('id_equipment',$this->id_equipment);
		$criteria->compare('expense_date',$this->expense_date,true);
		$criteria->compare('amount',$this->amount);
		$criteria->compare('id_person',$this->id_person);
		$criteria->compare('notes',$this->notes,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Expense the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        public function ammountRule()
        {
            // Проверка наличия нужного количества оборудования 
            $connection=Yii::app()->db;
//            $sql_prihod='SELECT amount FROM tbl_arrival WHERE id_equipment = :id_equipment';
//            $dataReader=$connection->createCommand($sql_prihod);
//            $dataReader->bindParam(":id_equipment",$this->id_equipment,PDO::PARAM_INT);
//            $dataReader->query();

            $all_amount = 0;
            
            $sql_prihod='SELECT SUM(amount) FROM tbl_arrival WHERE id_equipment='.$this->id_equipment;
            $dataReader=$connection->createCommand($sql_prihod)->query();
            $dataReader->bindColumn(1,$amount_prihod);
            if ($dataReader->read() !== false)
            {
                $all_amount = $amount_prihod; 
            }
            $sql_rashod='SELECT SUM(amount) FROM tbl_expense WHERE id_equipment='.$this->id_equipment;
            $dataReader=$connection->createCommand($sql_rashod)->query();
            $dataReader->bindColumn(1,$amount_rashod);
            if ($dataReader->read() !== false)
            {
                $all_amount -= $amount_rashod; 
            }
            $all_amount -= $this->amount;
            
            if ($all_amount < 0)
            {
                
//                throw new CHttpException(400, 'Нет необходимого количества данного материала на складе!' );
//                echo "<script>alert(\"Нет необходимого количества данного материала на складе!\");</script>";
               $this->addError('amount','Нет необходимого количества оборудования на складе!');
               return false;
            }
            return true;
            /*
            if(!$this->hasErrors())
                {
                    .....

                    if(....)
                    {
                        $this->addError('mail','{attribute} ...!');
                    }
                    elseif()
                    {
                        $this->addError('mail','....{attribute} ...!');
                    }

                }*/
            
            //return false;
        }
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
}
