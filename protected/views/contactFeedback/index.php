<?php
/* @var $this ContactFeedbackController */
/* @var $model ContactFeedback */

$this->breadcrumbs = array(
    'Contact Feedbacks' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List All', 'url' => array('index')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#contact-feedback-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Contact Feedbacks</h1>


<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'contact-feedback-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        array('name' => 'create_time', 'value' => '$data->created_date'),
        'create_time_stamp',
        'name',
        'email',
        'subject',
        array(
            'name' => 'email_sent',
            'value' => '$data->email_sent==0?"No":"Yes"'
        ),
        array(
            'class' => 'CButtonColumn',
            'template' => '{view}{delete}',
        ),
    ),
));
?>
