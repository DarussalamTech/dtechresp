<?php
/* @var $this ContactFeedbackController */
/* @var $model ContactFeedback */

$this->breadcrumbs = array(
    'Contact Feedbacks' => array('index'),
    $model->name,
);

$this->menu = array(
    array('label' => 'List All', 'url' => array('index')),
);
?>

<h1>View Contact Feedback #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        array('name' => 'create_time', 'value' => $model->created_date),
        'create_time_stamp',
        'name',
        'email',
        'subject',
        'body',
        array(
            'name' => 'email_sent',
            'value' => $model->email_sent==0?"No":"Yes"
        ),
    ),
));
?>
