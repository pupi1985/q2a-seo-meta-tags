<?php

if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
    header('Location: ../../');
    exit;
}

qa_register_plugin_module('module', 'qa-seo-meta-tags-admin-form.php', 'qa_seo_meta_tags_admin_form', 'SEO Meta Tags');
qa_register_plugin_layer('qa-seo-meta-tags-layer.php', 'SEO Meta Tags');
