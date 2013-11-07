<?php

return array(
    'name' => 'Дед мороз',
    'description' => 'Анимированный дед мороз на вашем сайте',
    'vendor'=>903438,
    'version'=>'1.0.0',
    'img'=>'img/santa.png',
    'shop_settings' => true,
    'frontend'    => true,
    'handlers' => array(
        'frontend_head' => 'frontendHead',
    ),
);
//EOF
