<div id="contact_us">
    <div class="container marketing">
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'contact-form',
            'enableClientValidation' => true,
            //'focus' => array($model, 'name'),
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
        ));

        /**
         * to make focus on field
         * thats y did this code
         * after validation
         */
        if ($model->hasErrors()) {
            Yii::app()->clientScript->registerScript('focus_onf_field', '
            jQuery("#ContactForm_name").focus();
            dtech.scrolltoSection("contact_us");
        ');
        }
        ?>
        <div class="contact_us_part">
            <h2><span>Contact Us</span></h2>
            <div class="row">
                <div class="col-lg-5">
                    <div class="left_contact">
                        <div class="contact_input">
                            <label>Full Name (<span style="color:red">*</span>)</label>
                            <?php echo $form->textField($model, 'name', array("class" => "contact_text")); ?>
                        </div>
                        <div class="contact_input">
                            <label>Your Email (<span style="color:red">*)</label>
                            <?php echo $form->textField($model, 'email', array("class" => "contact_text")); ?>
                        </div>
                        <div class="contact_input">
                            <label>Subject</label>
                            <?php echo $form->textField($model, 'subject', array("class" => "contact_text")); ?>
                        </div>
                        <div class="contact_input">
                            <div style="float:left">
                                <label>Message</label>
                                <?php echo $form->textArea($model, 'body', array('cols' => 32, 'rows' => 7)); ?>
                            </div>
                        </div>
                        <?php if (CCaptcha::checkRequirements()): ?>
                            <div  style="float:left">
                                <?php echo $form->labelEx($model, 'verifyCode', array("class" => "captcha_label")); ?>
                                <div id="captcha">
                                    <?php $this->widget('CCaptcha', array("buttonOptions" => array("class" => 'g_cp_link'))); ?>
                                    <?php echo $form->textField($model, 'verifyCode', array("class" => "captcha_txt")); ?>
                                </div>

                                <?php echo $form->error($model, 'verifyCode'); ?>
                            </div>
                        <?php endif; ?>

                        <?php echo CHtml::submitButton('send'); ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right_contact">
                        <div class="quotation">
                            <div class="tweet_hover">
                                <a href="https://twitter.com/dtechnet" target="_blank"></a>
                            </div>
                            <div class="facebook_hover">
                                <a href="https://www.facebook.com/dtech.co" target="_blank">
                                </a>
                            </div>
                            <div class="google_hover">
                                <a href="https://plus.google.com/u/3/b/105213190898214474427/105213190898214474427" target="_blank">

                                </a>
                            </div>
                            <div class="linkedin_hover">
                                <a href="http://www.linkedin.com/company/3203533" target="_blank">

                                </a>
                            </div>
                            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/contact_content_03.png" />
                            <ul>
                                <li> <?php echo CHtml::mailto("info@dtechsystems.co.uk") ?></li>
                                <li> <?php echo CHtml::mailto("support@dtechsystems.co.uk") ?></li>
                                <li> <?php echo CHtml::mailto("sales@dtechsystems.co.uk") ?></li>
                                <li> <?php echo CHtml::mailto("marketing@dtechsystems.co.uk") ?></li>                               
                            </ul>
                            <p style="color:#000; margin-top:40px; font-weight:bold;">Dtech-Systems All Rights Reserved 2013.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->endWidget(); ?>

        <?php
        if (!$model->hasErrors()) {
            Yii::app()->clientScript->registerScript('capcha', '
            jQuery("#captcha a#yw0_button").trigger("click");
    ');
        }
        ?>
    </div>
</div>
