<?php

/*
 * setting url for admin site
 * to beautify url in admin site
 * author:ubd
 */
$rules_admin = array(
    /** admin url ** */
     'admin' => '/site/login',
     'admin/contactFeedback/index' => '/contactFeedback/index',
     'admin/contactFeedback/view/<id:[\w-\.]+>' => '/contactFeedback/view',
     'admin/users/changePass' => '/users/changePass',
     'admin/conf/load' => '/configurations/load',
);
?>
