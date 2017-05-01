<?php

/*
	Question2Answer (c) Gideon Greenspan

	http://www.question2answer.org/


	File: qa-plugin/meta-tags-seo/qa-seo-meta-tags-admin-form.php
	Version: See define()s at top of qa-include/qa-base.php
	Description: Generic module class for meta tags seo plugin to provide admin form and options
*/

	class qa_seo_meta_tags_admin_form
	{
		function admin_form(&$qa_content)
		{
			$saved=false;

			if (qa_clicked('seo_meta_tags_save_button')) {
				qa_opt('seomt_activity', (int)qa_post_text('seomt_activity_field'));
				qa_opt('seomt_questions', (int)qa_post_text('seomt_questions_field'));
				qa_opt('seomt_hot', (int)qa_post_text('seomt_hot_field'));
				qa_opt('seomt_ask', (int)qa_post_text('seomt_ask_field'));
				qa_opt('seomt_unanswered', (int)qa_post_text('seomt_unanswered_field'));
				qa_opt('seomt_categories', (int)qa_post_text('seomt_categories_field'));
				qa_opt('seomt_tag', (int)qa_post_text('seomt_tag_field'));
				qa_opt('seomt_tags', (int)qa_post_text('seomt_tags_field'));
				qa_opt('seomt_feedback', (int)qa_post_text('seomt_feedback_field'));
				qa_opt('seomt_login', (int)qa_post_text('seomt_login_field'));
				qa_opt('seomt_register', (int)qa_post_text('seomt_register_field'));
				qa_opt('seomt_search', (int)qa_post_text('seomt_search_field'));
				qa_opt('seomt_user', (int)qa_post_text('seomt_user_field'));
				qa_opt('seomt_users', (int)qa_post_text('seomt_users_field'));
				$saved=true;
			}

			return array(
				'ok' => $saved ? 'SEO Meta Tags settings saved' : null,

				'fields' => array(
					array(
						'label' => 'Apply "<code>noindex,follow</code>" to recent activity? ( <code>example.com/activity</code> )',
						'type' => 'checkbox',
						'value' => qa_opt('seomt_activity'),
						'tags' => 'NAME="seomt_activity_field" ID="seomt_activity_field"',
					),

					array(
						'label' => 'Apply "<code>noindex,follow</code>" to questions page? ( <code>example.com/questions</code> )',
						'type' => 'checkbox',
						'value' => qa_opt('seomt_questions'),
						'tags' => 'NAME="seomt_questions_field" ID="seomt_questions_field"',
					),

					array(
						'label' => 'Apply "<code>noindex,follow</code>" to hot questions page? ( <code>example.com/hot</code> )',
						'type' => 'checkbox',
						'value' => qa_opt('seomt_hot'),
						'tags' => 'NAME="seomt_hot_field" ID="seomt_hot_field"',
					),

					array(
						'label' => 'Apply "<code>noindex,follow</code>" to ask a question page? ( <code>example.com/ask</code> )',
						'type' => 'checkbox',
						'value' => qa_opt('seomt_ask'),
						'tags' => 'NAME="seomt_ask_field" ID="seomt_ask_field"',
					),

					array(
						'label' => 'Apply "<code>noindex,follow</code>" to recent questions without answers page? ( <code>example.com/unanswered</code> )',
						'type' => 'checkbox',
						'value' => qa_opt('seomt_unanswered'),
						'tags' => 'NAME="seomt_unanswered_field" ID="seomt_unanswered_field"',
					),

					array(
						'label' => 'Apply "<code>noindex,follow</code>" to categories? ( <code>example.com/questions/&lt;category name&gt;</code> )',
						'type' => 'checkbox',
						'value' => qa_opt('seomt_categories'),
						'tags' => 'NAME="seomt_categories_field" ID="seomt_categories_field"',
					),

					array(
						'label' => 'Apply "<code>noindex,follow</code>" to recent questions for a tag? ( <code>example.com/tag/&lt;tag name&gt;</code> )',
						'type' => 'checkbox',
						'value' => qa_opt('seomt_tag'),
						'tags' => 'NAME="seomt_tag_field" ID="seomt_tag_field"',
					),

					array(
						'label' => 'Apply "<code>noindex,follow</code>" to most popular tags page? ( <code>example.com/tags</code> )',
						'type' => 'checkbox',
						'value' => qa_opt('seomt_tags'),
						'tags' => 'NAME="seomt_tags_field" ID="seomt_tags_field"',
					),

					array(
						'label' => 'Apply "<code>noindex,follow</code>" to feedback page? ( <code>example.com/feedback.php</code> )',
						'type' => 'checkbox',
						'value' => qa_opt('seomt_feedback'),
						'tags' => 'NAME="seomt_feedback_field" ID="seomt_feedback_field"',
					),

					array(
						'label' => 'Apply "<code>noindex,follow</code>" to login page? ( <code>example.com/login</code> )',
						'type' => 'checkbox',
						'value' => qa_opt('seomt_login'),
						'tags' => 'NAME="seomt_login_field" ID="seomt_login_field"',
					),

					array(
						'label' => 'Apply "<code>noindex,follow</code>" to register page? ( <code>example.com/register</code> )',
						'type' => 'checkbox',
						'value' => qa_opt('seomt_register'),
						'tags' => 'NAME="seomt_register_field" ID="seomt_register_field"',
					),

					array(
						'label' => 'Apply "<code>noindex,follow</code>" to search page? ( <code>example.com/search?q=&lt;search query&gt;</code> )',
						'type' => 'checkbox',
						'value' => qa_opt('seomt_search'),
						'tags' => 'NAME="seomt_search_field" ID="seomt_search_field"',
					),

					array(
						'label' => 'Apply "<code>noindex,follow</code>" to user pages? ( <code>example.com/user/&lt;username&gt;</code> )',
						'type' => 'checkbox',
						'value' => qa_opt('seomt_user'),
						'tags' => 'NAME="seomt_user_field" ID="seomt_user_field"',
					),

					array(
						'label' => 'Apply "<code>noindex,follow</code>" to top scoring users page? ( <code>example.com/users</code> )',
						'type' => 'checkbox',
						'value' => qa_opt('seomt_users'),
						'tags' => 'NAME="seomt_users_field" ID="seomt_users_field"',
					),
				),

				'buttons' => array(
					array(
						'label' => 'Save Changes',
						'tags' => 'NAME="seo_meta_tags_save_button"',
					),
				),
			);
		}
	}


/*
	Omit PHP closing tag to help avoid accidental output
*/