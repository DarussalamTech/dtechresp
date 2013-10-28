<?php
//loading css and js files for own pages
$cs = Yii::app()->clientScript;

$cs->registerCssFile(Yii::app()->theme->baseUrl . '/css/ebook_style.css');
$cs->registerCssFile(Yii::app()->theme->baseUrl . '/css/contact_us.css');
?>
<section id="banner">
    <article>
        <?php
        $criteria = new CDbCriteria();
        $criteria->limit = 2;
        $categories = Category::model()->findAll($criteria);
        $count = 0;
        foreach ($categories as $cat):
            if ($count == 0) {
                $this->renderPartial("//product/_apps_banner", array("cat" => $cat));
            } else if ($count == 1) {
                $this->renderPartial("//product/_ebooks_banner", array("cat" => $cat));
            }
            $count++;
        endforeach;
        ?>
    </article>
</section>
<section id="content">
    <article>
        <div class="contact_us_part">
            <div class="left_contact">
                <div class="contact_us_table">
                    <?php
                    $form = $this->beginWidget('CActiveForm', array(
                        'id' => 'contact-form',
                        'enableClientValidation' => true,
                        'clientOptions' => array(
                            'validateOnSubmit' => true,
                        ),
                    ));
                    ?>
                    <h3>Contact Us</h3>
                    <p>Please contact us in case of any inquiries, suggestions or feedbacks We will get back to you as soon as possible.</p>

                    <?php echo $form->textField($model, 'name', array("placeholder" => "Name")); ?>

                    <?php echo $form->textField($model, 'email', array("placeholder" => "Email")); ?>

                    <?php echo $form->textField($model, 'subject', array("placeholder" => "App")); ?>

                    <?php echo $form->textArea($model, 'body', array("placeholder" => "Message")); ?>
                    <?php $this->widget('CCaptcha', array("buttonOptions" => array("class" => 'g_cp_link'))); ?>
                    <?php echo $form->textField($model, 'verifyCode', array("class" => "captcha_txt")); ?>
                    <?php echo CHtml::submitButton('Submit', array("class" => "")); ?>
                    <?php $this->endWidget(); ?>
                </div>
            </div>
            <div class="right_contact">
                <a href="javascript:void(0)" class="main_logo">
                    <?php
                    echo CHtml::image(Yii::app()->theme->baseUrl . "/images/darussalam_main_logo_03.png")
                    ?>

                </a>
                <div class="check_box_contact">
                    <h4><input type="checkbox" /> GET OUR NEWSLETTER</h4>
                    <p>We always have some exiting news to share.</p>
                </div>
                <input type="submit" value="Submit" />

                <?php
                echo CHtml::image(Yii::app()->theme->baseUrl . "/images/contact_us_design_03.png", '', array("class" => "contact_design"));
                ?>
            </div>
        </div>
    </article>
</section>
<script type="text/javascript">

    $(window).load(function() {
        jQuery(".g_cp_link").trigger("click");
    });
</script>    