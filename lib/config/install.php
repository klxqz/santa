<?php

$plugin_id = array('shop', 'santa');
$app_settings_model = new waAppSettingsModel();
$app_settings_model->set($plugin_id, 'status', '1');
$app_settings_model->set($plugin_id, 'default_output', '1');
$app_settings_model->set($plugin_id, 'first_visit', '1');
$app_settings_model->set($plugin_id, 'text', '<p></p><p align="center"><font color="#ff0000">Дорогие Друзья!</font></p><p></p><p align="center"> Поздравляю Вас с наступающим <br/>Новым 2014 годом!</p><p align="center">Желаю Вам счастья, любви и успехов в профессиональной деятельности</p>');
