<?php

class qa_html_theme_layer extends qa_html_theme_base
{
    function head_metas()
    {
        parent::head_metas();

        if (empty(qa_seo_meta_tags_admin::APPLICABLE_TEMPLATES[$this->template])) {
            return;
        }

        if (qa_opt('seomt_' . $this->template)) {
            echo '<meta name="robots" content="noindex, follow">';
        }
    }
}
