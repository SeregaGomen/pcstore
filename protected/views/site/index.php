<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Складской учет компьютерной техники и комплектующих ЗНУ</h1>

<?php echo CHtml::link('Справочники',array('/site/dict')); ?>
<div></div>
<?php echo CHtml::link('Склад',array('/site/store')); ?>
<div></div>
<?php echo CHtml::link('О программе',array('/site/page', 'view'=>'about')); ?>
<div></div>
<?php echo CHtml::link('Контакты',array('site/contact')); ?>
<div></div>
<?php 
    if (Yii::app()->user->isGuest)
        echo CHtml::link('Вход',array('site/login'));
    else
        echo CHtml::link('Выход ('.Yii::app()->user->name.')',array('site/logout'));
?>
