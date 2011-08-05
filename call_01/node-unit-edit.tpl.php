<?php
	print drupal_render($form['title']);
	unset($form['group_unit']['field_phrases']);
	print drupal_render($form['group_unit']);
	$form['revision_information']['#access'] = FALSE;
	$form['attachments']['#access'] = FALSE;
	$form['path']['#access'] = FALSE;
	$form['comment_settings']['#access'] = FALSE;
	$form['menu']['#access'] = FALSE;
	$form['author']['#access'] = FALSE;
	$form['options']['#access'] = FALSE;
	print drupal_render($form);
?>