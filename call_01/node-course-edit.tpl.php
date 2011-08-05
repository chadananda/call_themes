<?php
 print drupal_render($form['title']); 
 print drupal_render($form['group_crs']);
 $form['revision_information']['#access'] = FALSE;
 $form['attachments']['#access'] = FALSE;
 $form['path']['#access'] = FALSE;
 $form['comment_settings']['#access'] = FALSE;
 $form['menu']['#access'] = FALSE;
 $form['author']['#access'] = FALSE;
 $form['options']['#access'] = FALSE;
 print drupal_render($form); 
 /*dsm($form);*/
 ?>