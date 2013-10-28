<?php
/* @var $this ContactFeedbackController */
/* @var $model ContactFeedback */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
    ));
    ?>

    <div class="row">
        <?php echo $form->label($model, 'name'); ?>
        <?php echo $form->textField($model, 'name', array('size' => 60, 'maxlength' => 150)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'email'); ?>
        <?php echo $form->textField($model, 'email', array('size' => 60, 'maxlength' => 150)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'subject'); ?>
        <?php echo $form->textField($model, 'subject', array('size' => 60, 'maxlength' => 150)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model, 'email_sent'); ?>
        <?php echo $form->dropDownList($model, 'email_sent',array("0"=>"No","1"=>"Yes")); ?>
    </div>


    <div class="row buttons">
        <?php echo CHtml::submitButton('Search', array("class" => "btn")); ?>
        <?php echo CHtml::Button('Reset', array("class" => "btn","onclick"=>"window.location.reload()")); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->