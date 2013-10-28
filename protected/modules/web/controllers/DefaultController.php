<?php

class DefaultController extends Controller {

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0x000,
                'foreColor' => 0xFFB619,
            //'fontFile' => Yii::app()->basePath.DIRECTORY_SEPARATOR."data".DIRECTORY_SEPARATOR."BALLW__.TTF"
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * home page for website
     */
    public function actionIndex() {
        $this->layout = "//layouts/frontend";
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];

            if ($model->validate()) {
                $contactM = new ContactFeedback;
                $contactM->email = $model->email;
                $contactM->name = $model->name;
                $contactM->subject = $model->subject;
                $contactM->body = $model->body;




                /**
                 * email code
                 */
                $email['From'] = $model->email;
                $email['FromName'] = $model->name;
                $email['To'] = Yii::app()->params['adminEmail'];
                $email['Subject'] = $model->subject;
                $body = $model->body;

                $email['Body'] = $body;
                $email['Body'] = $this->renderPartial('//common/_email_template', array('email' => $email), true, false);

                /**
                 * if email sent then flag is one 
                 */
                if ($this->sendEmail2($email)) {
                    $contactM->email_sent = 1;
                    Yii::app()->user->setFlash('email_status', 'Thank you ! for your feedback');
                }
                $contactM->save();
                $this->redirect($this->createUrl("/web/default/index"));
            }
        }

        $this->render('//default/index', array("model" => $model));
    }

//    /**
//     *  service for evry key feature
//     * @param type $ajax
//     * @param type $view
//     */
//    public function actionService($ajax = "", $view) {
//        if (!empty($view)) {
//            $this->renderPartial('//default/' . $view);
//        }
//    }
}