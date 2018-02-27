<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	/* Regular styles */

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		button,
		input,
		select,
		textarea,
		.site-main #infinite-handle span,
		#infinite-footer .blog-info,
		#infinite-footer .blog-info a,
		#infinite-footer .blog-credits',
		array(
			array( 'property' => 'font-family', 'value' => '"Libre Franklin", "Helvetica Neue", helvetica, arial, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1, h2, h3, h4, h5, h6',
		array(
			array( 'property' => 'font-family', 'value' => '"Libre Franklin", "Helvetica Neue", helvetica, arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-weight', 'value' => '800' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h5',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-weight', 'value' => '800' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h6',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
			array( 'property' => 'font-weight', 'value' => '800' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'cite,
		dfn,
		em,
		i',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'blockquote cite',
		array(
			array( 'property' => 'font-style', 'value' => 'normal' ),
			array( 'property' => 'font-weight', 'value' => '600' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'pre',
		array(
			array( 'property' => 'font-family', 'value' => '"Courier 10 Pitch", Courier, monospace' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'code,
		kbd,
		tt,
		var',
		array(
			array( 'property' => 'font-family', 'value' => 'Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'html[lang="ar"] body,
		html[lang="ar"] button,
		html[lang="ar"] input,
		html[lang="ar"] select,
		html[lang="ar"] textarea,
		html[lang="ar"] .site-main #infinite-handle span,
		html[lang="ar"] #infinite-footer .blog-info,
		html[lang="ar"] #infinite-footer .blog-info a,
		html[lang="ar"] #infinite-footer .blog-credits,
		html[lang="ary"] body,
		html[lang="ary"] button,
		html[lang="ary"] input,
		html[lang="ary"] select,
		html[lang="ary"] textarea,
		html[lang="ary"] .site-main #infinite-handle span,
		html[lang="ary"] #infinite-footer .blog-info,
		html[lang="ary"] #infinite-footer .blog-info a,
		html[lang="ary"] #infinite-footer .blog-credits,
		html[lang="azb"] body,
		html[lang="azb"] button,
		html[lang="azb"] input,
		html[lang="azb"] select,
		html[lang="azb"] textarea,
		html[lang="azb"] .site-main #infinite-handle span,
		html[lang="azb"] #infinite-footer .blog-info,
		html[lang="azb"] #infinite-footer .blog-info a,
		html[lang="azb"] #infinite-footer .blog-credits,
		html[lang="fa-IR"] body,
		html[lang="fa-IR"] button,
		html[lang="fa-IR"] input,
		html[lang="fa-IR"] select,
		html[lang="fa-IR"] textarea,
		html[lang="fa-IR"] .site-main #infinite-handle span,
		html[lang="fa-IR"] #infinite-footer .blog-info,
		html[lang="fa-IR"] #infinite-footer .blog-info a,
		html[lang="fa-IR"] #infinite-footer .blog-credits,
		html[lang="haz"] body,
		html[lang="haz"] button,
		html[lang="haz"] input,
		html[lang="haz"] select,
		html[lang="haz"] textarea,
		html[lang="haz"] .site-main #infinite-handle span,
		html[lang="haz"] #infinite-footer .blog-info,
		html[lang="haz"] #infinite-footer .blog-info a,
		html[lang="haz"] #infinite-footer .blog-credits,
		html[lang="ps"] body,
		html[lang="ps"] button,
		html[lang="ps"] input,
		html[lang="ps"] select,
		html[lang="ps"] textarea,
		html[lang="ps"] .site-main #infinite-handle span,
		html[lang="ps"] #infinite-footer .blog-info,
		html[lang="ps"] #infinite-footer .blog-info a,
		html[lang="ps"] #infinite-footer .blog-credits,
		html[lang="ur"] body,
		html[lang="ur"] button,
		html[lang="ur"] input,
		html[lang="ur"] select,
		html[lang="ur"] textarea,
		html[lang="ur"] .site-main #infinite-handle span,
		html[lang="ur"] #infinite-footer .blog-info,
		html[lang="ur"] #infinite-footer .blog-info a,
		html[lang="ur"] #infinite-footer .blog-credits',
		array(
			array( 'property' => 'font-family', 'value' => 'Tahoma, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'placeholder',
		'html[lang="ar"] h1,
		html[lang="ar"] h2,
		html[lang="ar"] h3,
		html[lang="ar"] h4,
		html[lang="ar"] h5,
		html[lang="ar"] h6,
		html[lang="ary"] h1,
		html[lang="ary"] h2,
		html[lang="ary"] h3,
		html[lang="ary"] h4,
		html[lang="ary"] h5,
		html[lang="ary"] h6,
		html[lang="azb"] h1,
		html[lang="azb"] h2,
		html[lang="azb"] h3,
		html[lang="azb"] h4,
		html[lang="azb"] h5,
		html[lang="azb"] h6,
		html[lang="fa-IR"] h1,
		html[lang="fa-IR"] h2,
		html[lang="fa-IR"] h3,
		html[lang="fa-IR"] h4,
		html[lang="fa-IR"] h5,
		html[lang="fa-IR"] h6,
		html[lang="haz"] h1,
		html[lang="haz"] h2,
		html[lang="haz"] h3,
		html[lang="haz"] h4,
		html[lang="haz"] h5,
		html[lang="haz"] h6,
		html[lang="ps"] h1,
		html[lang="ps"] h2,
		html[lang="ps"] h3,
		html[lang="ps"] h4,
		html[lang="ps"] h5,
		html[lang="ps"] h6,
		html[lang="ur"] h1,
		html[lang="ur"] h2,
		html[lang="ur"] h3,
		html[lang="ur"] h4,
		html[lang="ur"] h5,
		html[lang="ur"] h6',
		array(
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'html[lang^="zh-"] body,
		html[lang^="zh-"] button,
		html[lang^="zh-"] input,
		html[lang^="zh-"] select,
		html[lang^="zh-"] textarea,
		html[lang^="zh-"] .site-main #infinite-handle span,
		html[lang^="zh-"] #infinite-footer .blog-info,
		html[lang^="zh-"] #infinite-footer .blog-info a,
		html[lang^="zh-"] #infinite-footer .blog-credits',
		array(
			array( 'property' => 'font-family', 'value' => '"PingFang TC", "Helvetica Neue", Helvetica, STHeitiTC-Light, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'html[lang="zh-CN"] body,
		html[lang="zh-CN"] button,
		html[lang="zh-CN"] input,
		html[lang="zh-CN"] select,
		html[lang="zh-CN"] textarea,
		html[lang="zh-CN"] .site-main #infinite-handle span,
		html[lang="zh-CN"] #infinite-footer .blog-info,
		html[lang="zh-CN"] #infinite-footer .blog-info a,
		html[lang="zh-CN"] #infinite-footer .blog-credits',
		array(
			array( 'property' => 'font-family', 'value' => '"PingFang SC", "Helvetica Neue", Helvetica, STHeitiSC-Light, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'html[lang^="zh-"] h1,
		html[lang^="zh-"] h2,
		html[lang^="zh-"] h3,
		html[lang^="zh-"] h4,
		html[lang^="zh-"] h5,
		html[lang^="zh-"] h6',
		array(
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'html[lang="bg-BG"] body,
		html[lang="bg-BG"] button,
		html[lang="bg-BG"] input,
		html[lang="bg-BG"] select,
		html[lang="bg-BG"] textarea,
		html[lang="bg-BG"] .site-main #infinite-handle span,
		html[lang="bg-BG"] #infinite-footer .blog-info,
		html[lang="bg-BG"] #infinite-footer .blog-info a,
		html[lang="bg-BG"] #infinite-footer .blog-credits,
		html[lang="ru-RU"] body,
		html[lang="ru-RU"] button,
		html[lang="ru-RU"] input,
		html[lang="ru-RU"] select,
		html[lang="ru-RU"] textarea,
		html[lang="ru-RU"] .site-main #infinite-handle span,
		html[lang="ru-RU"] #infinite-footer .blog-info,
		html[lang="ru-RU"] #infinite-footer .blog-info a,
		html[lang="ru-RU"] #infinite-footer .blog-credits,
		html[lang="uk"] body,
		html[lang="uk"] button,
		html[lang="uk"] input,
		html[lang="uk"] select,
		html[lang="uk"] textarea,
		html[lang="uk"] .site-main #infinite-handle span,
		html[lang="uk"] #infinite-footer .blog-info,
		html[lang="uk"] #infinite-footer .blog-info a,
		html[lang="uk"] #infinite-footer .blog-credits',
		array(
			array( 'property' => 'font-family', 'value' => '"Helvetica Neue", Helvetica, "Segoe UI", Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'html[lang="bg-BG"] h1,
		html[lang="bg-BG"] h2,
		html[lang="bg-BG"] h3,
		html[lang="bg-BG"] h4,
		html[lang="bg-BG"] h5,
		html[lang="bg-BG"] h6,
		html[lang="ru-RU"] h1,
		html[lang="ru-RU"] h2,
		html[lang="ru-RU"] h3,
		html[lang="ru-RU"] h4,
		html[lang="ru-RU"] h5,
		html[lang="ru-RU"] h6,
		html[lang="uk"] h1,
		html[lang="uk"] h2,
		html[lang="uk"] h3,
		html[lang="uk"] h4,
		html[lang="uk"] h5,
		html[lang="uk"] h6',
		array(
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'html[lang="bn-BD"] body,
		html[lang="bn-BD"] button,
		html[lang="bn-BD"] input,
		html[lang="bn-BD"] select,
		html[lang="bn-BD"] textarea,
		html[lang="bn-BD"] .site-main #infinite-handle span,
		html[lang="bn-BD"] #infinite-footer .blog-info,
		html[lang="bn-BD"] #infinite-footer .blog-info a,
		html[lang="bn-BD"] #infinite-footer .blog-credits,
		html[lang="hi-IN"] body,
		html[lang="hi-IN"] button,
		html[lang="hi-IN"] input,
		html[lang="hi-IN"] select,
		html[lang="hi-IN"] textarea,
		html[lang="hi-IN"] .site-main #infinite-handle span,
		html[lang="hi-IN"] #infinite-footer .blog-info,
		html[lang="hi-IN"] #infinite-footer .blog-info a,
		html[lang="hi-IN"] #infinite-footer .blog-credits,
		html[lang="mr-IN"] body,
		html[lang="mr-IN"] button,
		html[lang="mr-IN"] input,
		html[lang="mr-IN"] select,
		html[lang="mr-IN"] textarea,
		html[lang="mr-IN"] .site-main #infinite-handle span,
		html[lang="mr-IN"] #infinite-footer .blog-info,
		html[lang="mr-IN"] #infinite-footer .blog-info a,
		html[lang="mr-IN"] #infinite-footer .blog-credits',
		array(
			array( 'property' => 'font-family', 'value' => 'Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'html[lang="bn-BD"] h1,
		html[lang="bn-BD"] h2,
		html[lang="bn-BD"] h3,
		html[lang="bn-BD"] h4,
		html[lang="bn-BD"] h5,
		html[lang="bn-BD"] h6,
		html[lang="hi-IN"] h1,
		html[lang="hi-IN"] h2,
		html[lang="hi-IN"] h3,
		html[lang="hi-IN"] h4,
		html[lang="hi-IN"] h5,
		html[lang="hi-IN"] h6,
		html[lang="mr-IN"] h1,
		html[lang="mr-IN"] h2,
		html[lang="mr-IN"] h3,
		html[lang="mr-IN"] h4,
		html[lang="mr-IN"] h5,
		html[lang="mr-IN"] h6',
		array(
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'html[lang="el"] body,
		html[lang="el"] button,
		html[lang="el"] input,
		html[lang="el"] select,
		html[lang="el"] textarea,
		html[lang="el"] .site-main #infinite-handle span,
		html[lang="el"] #infinite-footer .blog-info,
		html[lang="el"] #infinite-footer .blog-info a,
		html[lang="el"] #infinite-footer .blog-credits',
		array(
			array( 'property' => 'font-family', 'value' => '"Helvetica Neue", Helvetica, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'html[lang="el"] h1,
		html[lang="el"] h2,
		html[lang="el"] h3,
		html[lang="el"] h4,
		html[lang="el"] h5,
		html[lang="el"] h6',
		array(
			array( 'property' => 'font-weight', 'value' => '700' ),
			array( 'property' => 'font-family', 'value' => '"Helvetica Neue", Helvetica, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'html[lang="gu-IN"] body,
		html[lang="gu-IN"] button,
		html[lang="gu-IN"] input,
		html[lang="gu-IN"] select,
		html[lang="gu-IN"] textarea,
		html[lang="gu-IN"] .site-main #infinite-handle span,
		html[lang="gu-IN"] #infinite-footer .blog-info,
		html[lang="gu-IN"] #infinite-footer .blog-info a,
		html[lang="gu-IN"] #infinite-footer .blog-credits',
		array(
			array( 'property' => 'font-family', 'value' => 'Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'html[lang="gu-IN"] h1,
		html[lang="gu-IN"] h2,
		html[lang="gu-IN"] h3,
		html[lang="gu-IN"] h4,
		html[lang="gu-IN"] h5,
		html[lang="gu-IN"] h6',
		array(
			array( 'property' => 'font-weight', 'value' => '700' ),
			array( 'property' => 'font-family', 'value' => 'Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'html[lang="he-IL"] body,
		html[lang="he-IL"] button,
		html[lang="he-IL"] input,
		html[lang="he-IL"] select,
		html[lang="he-IL"] textarea,
		html[lang="he-IL"] .site-main #infinite-handle span,
		html[lang="he-IL"] #infinite-footer .blog-info,
		html[lang="he-IL"] #infinite-footer .blog-info a,
		html[lang="he-IL"] #infinite-footer .blog-credits',
		array(
			array( 'property' => 'font-family', 'value' => '"Arial Hebrew", Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'html[lang="he-IL"] h1,
		html[lang="he-IL"] h2,
		html[lang="he-IL"] h3,
		html[lang="he-IL"] h4,
		html[lang="he-IL"] h5,
		html[lang="he-IL"] h6',
		array(
			array( 'property' => 'font-weight', 'value' => '700' ),
			array( 'property' => 'font-family', 'value' => '"Arial Hebrew", Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'html[lang="ja"] body,
		html[lang="ja"] button,
		html[lang="ja"] input,
		html[lang="ja"] select,
		html[lang="ja"] textarea,
		html[lang="ja"] .site-main #infinite-handle span,
		html[lang="ja"] #infinite-footer .blog-info,
		html[lang="ja"] #infinite-footer .blog-info a,
		html[lang="ja"] #infinite-footer .blog-credits',
		array(
			array( 'property' => 'font-family', 'value' => '"Hiragino Kaku Gothic Pro", Meiryo, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'html[lang="ja"] h1,
		html[lang="ja"] h2,
		html[lang="ja"] h3,
		html[lang="ja"] h4,
		html[lang="ja"] h5,
		html[lang="ja"] h6',
		array(
			array( 'property' => 'font-weight', 'value' => '700' ),
			array( 'property' => 'font-family', 'value' => '"Hiragino Kaku Gothic Pro", Meiryo, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'html[lang="ko-KR"] body,
		html[lang="ko-KR"] button,
		html[lang="ko-KR"] input,
		html[lang="ko-KR"] select,
		html[lang="ko-KR"] textarea,
		html[lang="ko-KR"] .site-main #infinite-handle span,
		html[lang="ko-KR"] #infinite-footer .blog-info,
		html[lang="ko-KR"] #infinite-footer .blog-info a,
		html[lang="ko-KR"] #infinite-footer .blog-credits',
		array(
			array( 'property' => 'font-family', 'value' => '"Apple SD Gothic Neo", "Malgun Gothic", "Nanum Gothic", Dotum, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'html[lang="ko-KR"] h1,
		html[lang="ko-KR"] h2,
		html[lang="ko-KR"] h3,
		html[lang="ko-KR"] h4,
		html[lang="ko-KR"] h5,
		html[lang="ko-KR"] h6',
		array(
			array( 'property' => 'font-weight', 'value' => '600' ),
			array( 'property' => 'font-family', 'value' => '"Apple SD Gothic Neo", "Malgun Gothic", "Nanum Gothic", Dotum, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'html[lang="th"] body,
		html[lang="th"] button,
		html[lang="th"] input,
		html[lang="th"] select,
		html[lang="th"] textarea,
		html[lang="th"] .site-main #infinite-handle span,
		html[lang="th"] #infinite-footer .blog-info,
		html[lang="th"] #infinite-footer .blog-info a,
		html[lang="th"] #infinite-footer .blog-credits',
		array(
			array( 'property' => 'font-family', 'value' => '"Sukhumvit Set", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'html[lang="th"] h1,
		html[lang="th"] h2,
		html[lang="th"] h3,
		html[lang="th"] h4,
		html[lang="th"] h5,
		html[lang="th"] h6',
		array(
			array( 'property' => 'font-family', 'value' => '"Sukhumvit Set", "Helvetica Neue", Helvetica, Arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'label',
		array(
			array( 'property' => 'font-weight', 'value' => '800' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'input[type="checkbox"] + label,
		input[type="radio"] + label',
		array(
			array( 'property' => 'font-weight', 'value' => '400' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'button,
		input[type="button"],
		input[type="submit"],
		.site-main #infinite-handle span',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-weight', 'value' => '800' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'::-webkit-input-placeholder',
		array(
			array( 'property' => 'font-family', 'value' => '"Libre Franklin", "Helvetica Neue", helvetica, arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		':-moz-placeholder',
		array(
			array( 'property' => 'font-family', 'value' => '"Libre Franklin", "Helvetica Neue", helvetica, arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'::-moz-placeholder',
		array(
			array( 'property' => 'font-family', 'value' => '"Libre Franklin", "Helvetica Neue", helvetica, arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		':-ms-input-placeholder',
		array(
			array( 'property' => 'font-family', 'value' => '"Libre Franklin", "Helvetica Neue", helvetica, arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'placeholder',
		'dt',
		array(
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.navigation-top',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.navigation-top a',
		array(
			array( 'property' => 'font-weight', 'value' => '600' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.menu-toggle',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-weight', 'value' => '800' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.dropdown-toggle',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-title',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
			array( 'property' => 'font-weight', 'value' => '800' ),
			array( 'property' => 'font-family', 'value' => '"Libre Franklin", "Helvetica Neue", helvetica, arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-description',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-family', 'value' => '"Libre Franklin", "Helvetica Neue", helvetica, arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.twentyseventeen-panel .entry-header .edit-link',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.page .panel-content .recent-posts .entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
			array( 'property' => 'font-family', 'value' => '"Libre Franklin", "Helvetica Neue", helvetica, arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.twentyseventeen-panel .recent-posts .entry-header .edit-link',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.page .panel-content .entry-title,
		.page-title,
		body.page:not(.twentyseventeen-front-page) .entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-weight', 'value' => '800' ),
			array( 'property' => 'font-family', 'value' => '"Libre Franklin", "Helvetica Neue", helvetica, arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-meta',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
			array( 'property' => 'font-weight', 'value' => '800' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comments-pagination,
		.pagination',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-weight', 'value' => '800' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.next.page-numbers,
		.prev.page-numbers',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-content blockquote.alignleft,
		.entry-content blockquote.alignright',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.taxonomy-description',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.page-links',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-weight', 'value' => '800' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-footer .cat-links,
		.entry-footer .tags-links',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
			array( 'property' => 'font-weight', 'value' => '800' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-footer .edit-link a.post-edit-link',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-weight', 'value' => '800' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.format-quote blockquote',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-navigation',
		array(
			array( 'property' => 'font-weight', 'value' => '800' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.nav-subtitle',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
			array( 'property' => 'font-family', 'value' => '"Libre Franklin", "Helvetica Neue", helvetica, arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.nav-title',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
			array( 'property' => 'font-family', 'value' => '"Libre Franklin", "Helvetica Neue", helvetica, arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.page .entry-header .edit-link',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.search .page .entry-header .edit-link',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.social-navigation',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-info',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comments-title',
		array(
			array( 'property' => 'font-size', 'value' => '20px' ),
			array( 'property' => 'font-family', 'value' => '"Libre Franklin", "Helvetica Neue", helvetica, arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-author',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-metadata',
		array(
			array( 'property' => 'font-size', 'value' => '10px' ),
			array( 'property' => 'font-weight', 'value' => '800' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-body',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-reply-link',
		array(
			array( 'property' => 'font-weight', 'value' => '800' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-awaiting-moderation,
		.no-comments',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2.widget-title',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-weight', 'value' => '800' ),
			array( 'property' => 'font-family', 'value' => '"Libre Franklin", "Helvetica Neue", helvetica, arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_rss li .rsswidget',
		array(
			array( 'property' => 'font-size', 'value' => '22px' ),
			array( 'property' => 'font-weight', 'value' => '300' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_rss .rss-date,
		.widget_rss li cite',
		array(
			array( 'property' => 'font-size', 'value' => '10px' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
			array( 'property' => 'font-weight', 'value' => '800' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget-grofile h4',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-family', 'value' => '"Libre Franklin", "Helvetica Neue", helvetica, arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget .tagcloud a,
		.widget.widget_tag_cloud a,
		.wp_widget_tag_cloud a',
		array(
			array( 'property' => 'font-size', 'value' => '14px !important' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.gallery-caption,
		.wp-caption',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-content .wp-playlist-current-item .wp-playlist-item-title',
		array(
			array( 'property' => 'font-weight', 'value' => '700' ),
			array( 'property' => 'font-family', 'value' => '"Libre Franklin", "Helvetica Neue", helvetica, arial, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-content .wp-playlist-current-item .wp-playlist-item-album',
		array(
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-content .wp-playlist-current-item .wp-playlist-item-artist',
		array(
			array( 'property' => 'font-size', 'value' => '10px' ),
			array( 'property' => 'font-weight', 'value' => '800' ),
		)
	);

		/* Min-width: 30em */

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		button,
		input,
		select,
		textarea,
		.site-main #infinite-handle span,
		#infinite-footer .blog-info,
		#infinite-footer .blog-info a,
		#infinite-footer .blog-credits',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		),
		array(
			'screen and (min-width: 30em)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1',
		array(
			array( 'property' => 'font-size', 'value' => '30px' ),
		),
		array(
			'screen and (min-width: 480px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h2,
		.page .panel-content .recent-posts .entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '26px' ),
		),
		array(
			'screen and (min-width: 480px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h3',
		array(
			array( 'property' => 'font-size', 'value' => '22px' ),
		),
		array(
			'screen and (min-width: 480px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h4',
		array(
			array( 'property' => 'font-size', 'value' => '18px' ),
		),
		array(
			'screen and (min-width: 480px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h5',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
		),
		array(
			'screen and (min-width: 480px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h6',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		),
		array(
			'screen and (min-width: 480px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-content blockquote.alignleft,
		.entry-content blockquote.alignright',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		),
		array(
			'screen and (min-width: 480px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.taxonomy-description',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		),
		array(
			'screen and (min-width: 480px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.page-numbers.current',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		),
		array(
			'screen and (min-width: 480px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-footer',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		),
		array(
			'screen and (min-width: 480px)',
		)
	);

	/* Min-width: 48em */

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		button,
		input,
		select,
		textarea,
		.site-main #infinite-handle span,
		#infinite-footer .blog-info,
		#infinite-footer .blog-info a,
		#infinite-footer .blog-credits',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-content blockquote.alignleft,
		.entry-content blockquote.alignright',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-title',
		array(
			array( 'property' => 'font-size', 'value' => '36px' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-description',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.navigation-top',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.page .panel-content .recent-posts .entry-title,
		.single-post .entry-title,
		.page .entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '26px' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#secondary',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'#secondary',
		array(
			array( 'property' => 'font-size', 'value' => '11px' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#secondary',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
		),
		array(
			'screen and (min-width: 768px)',
		)
	);

	/* Min-width: 67em */

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.sticky .icon-thumb-tack',
		array(
			array( 'property' => 'font-size', 'value' => '32px' ),
		),
		array(
			'screen and (min-width: 1072px)',
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.page-numbers.current',
		array(
			array( 'property' => 'font-size', 'value' => '15px' ),
		),
		array(
			'screen and (min-width: 1072px)',
		)
	);

	return $category_rules;
} );
