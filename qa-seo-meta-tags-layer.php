<?php

class qa_html_theme_layer extends qa_html_theme_base
{

    function head_metas()
    {
        if (qa_opt('seomt_activity') && ($this->template == 'activity')) {
            $this->output('<META NAME="robots" CONTENT="noindex, follow">');
        }

        if (qa_opt('seomt_questions') && ($this->template == 'questions')) {
            $this->output('<META NAME="robots" CONTENT="noindex, follow">');
        }

        if (qa_opt('seomt_hot') && ($this->template == 'hot')) {
            $this->output('<META NAME="robots" CONTENT="noindex, follow">');
        }

        if (qa_opt('seomt_ask') && ($this->template == 'ask')) {
            $this->output('<META NAME="robots" CONTENT="noindex, follow">');
        }

        if (qa_opt('seomt_unanswered') && ($this->template == 'unanswered')) {
            $this->output('<META NAME="robots" CONTENT="noindex, follow">');
        }

        if (qa_opt('seomt_categories') && ($this->template == 'categories')) {
            $this->output('<META NAME="robots" CONTENT="noindex, follow">');
        }

        if (qa_opt('seomt_tag') && ($this->template == 'tag')) {
            $this->output('<META NAME="robots" CONTENT="noindex, follow">');
        }

        if (qa_opt('seomt_tags') && ($this->template == 'tags')) {
            $this->output('<META NAME="robots" CONTENT="noindex, follow">');
        }

        if (qa_opt('seomt_feedback') && ($this->template == 'feedback')) {
            $this->output('<META NAME="robots" CONTENT="noindex, follow">');
        }

        if (qa_opt('seomt_login') && ($this->template == 'login')) {
            $this->output('<META NAME="robots" CONTENT="noindex, follow">');
        }

        if (qa_opt('seomt_register') && ($this->template == 'register')) {
            $this->output('<META NAME="robots" CONTENT="noindex, follow">');
        }

        if (qa_opt('seomt_search') && ($this->template == 'search')) {
            $this->output('<META NAME="robots" CONTENT="noindex, follow">');
        }

        if (qa_opt('seomt_user') && ($this->template == 'user')) {
            $this->output('<META NAME="robots" CONTENT="noindex, follow">');
        }

        if (qa_opt('seomt_users') && ($this->template == 'users')) {
            $this->output('<META NAME="robots" CONTENT="noindex, follow">');
        }

        qa_html_theme_base::head_metas();
    }
}
