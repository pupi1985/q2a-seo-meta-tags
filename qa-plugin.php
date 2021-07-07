<?php

if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
    header('Location: ../../');
    exit;
}

qa_register_plugin_module('process', 'qa-seo-meta-tags-admin.php', 'qa_seo_meta_tags_admin', 'SEO Meta Tags Admin');
qa_register_plugin_layer('qa-seo-meta-tags-layer.php', 'SEO Meta Tags Layer');

qa_register_plugin_phrases('qa-seo-meta-tags-lang-*.php', 'seo_meta_tags');
