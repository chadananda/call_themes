<?php
 print drupal_render($form['title']);
 print drupal_render($form['group_fc']);
 unset($form['group_en'][field_en_isphrase]);
 unset($form['group_en'][field_en_words]);
 print drupal_render($form['group_en']);
 unset($form['group_2nd'][field_2nd_isphrase]);
 unset($form['group_2nd'][field_2nd_words]);
 print drupal_render($form['group_2nd']);
 print drupal_render($form['taxonomy']);
 print drupal_render($form['buttons']);
 $form['revision_information']['#access'] = FALSE;
 $form['attachments']['#access'] = FALSE;
 $form['path']['#access'] = FALSE;
 $form['comment_settings']['#access'] = FALSE;
 $form['menu']['#access'] = FALSE;
 $form['author']['#access'] = FALSE;
 $form['options']['#access'] = FALSE;
 print drupal_render($form);
?>