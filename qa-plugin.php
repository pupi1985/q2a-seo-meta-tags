<?php

/*
	Question2Answer (c) Gideon Greenspan

	http://www.question2answer.org/


	File: qa-plugin/seo-meta-tags/qa-plugin.php
	Version: See define()s at top of qa-include/qa-base.php
	Description: Initiates SEO Meta Tags layer plugin
*/

/*
	Plugin Name: SEO Meta Tags
	Plugin URI: http://qcybb.com/question2answer-seo-meta-tags/
	Plugin Description: Adds "noindex,follow" meta tags to various user-defined pages.
	Plugin Version: 1.0
	Plugin Date: 2017-05-04
	Plugin Author: Dave Hannon
	Plugin Author URI: http://qcybb.com
	Plugin Minimum Question2Answer Version: 1.5
	Plugin Update Check URI:
*/


	if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
		header('Location: ../../');
		exit;
	}

	qa_register_plugin_module('module', 'qa-seo-meta-tags-admin-form.php', 'qa_seo_meta_tags_admin_form', 'SEO Meta Tags');
	qa_register_plugin_layer('qa-seo-meta-tags-layer.php', 'SEO Meta Tags');

/*
	Omit PHP closing tag to help avoid accidental output
*/
