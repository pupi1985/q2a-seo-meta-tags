<?php

class qa_seo_meta_tags_admin
{
    const APPLICABLE_TEMPLATES = array(
        'activity' => true,
        'ask' => true,
        'categories' => true,
        'feedback' => true,
        'forgot' => true,
        'hot' => true,
        'login' => true,
        'questions' => true,
        'register' => true,
        'search' => true,
        'tag' => true,
        'tags' => true,
        'unanswered' => true,
        'user' => true,
        'users' => true,
    );

    function admin_form(&$qa_content)
    {
        $saved = false;

        if (qa_clicked('seo_meta_tags_save_button')) {
            foreach (self::APPLICABLE_TEMPLATES as $template => $dummy) {
                qa_opt('seomt_' . $template, (int)qa_post_text('seomt_field_' . $template));
            }
            $saved = true;
        }

        $fields = array(
            array(
                'label' => strtr(qa_lang_html('seo_meta_tags/apply_to_following_pages_label'), array(
                    '^1' => '<code>',
                    '^2' => '</code>',
                )),
                'type' => 'static',
            ),
        );
        foreach (self::APPLICABLE_TEMPLATES as $template => $dummy) {
            $fields[] = array(
                'label' => strtr(qa_lang_html('seo_meta_tags/selected_page'), array(
                    '^1' => $template,
                    '^2' => '<code>',
                    '^3' => qa_lang_html('seo_meta_tags/custom_url_' . $template),
                    '^4' => '</code>',
                )),
                'type' => 'checkbox',
                'value' => qa_opt('seomt_' . $template),
                'tags' => sprintf('name="seomt_field_%s"', $template),
            );
        }

        return array(
            'ok' => $saved ? qa_lang_html('admin/options_saved') : null,

            'fields' => $fields,

            'buttons' => array(
                array(
                    'label' => qa_lang_html('main/save_button'),
                    'tags' => 'name="seo_meta_tags_save_button"',
                ),
            ),
        );
    }
}
