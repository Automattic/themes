<?php
/* Custom Fonts: Apostrophe */

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

  TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
    '#infinite-handle span,
    .comment-reply-link,
    .edit-link,
    .entry-footer a[rel="category tag"],
    .entry-footer a[rel="tag"],
    .entry-meta',
    array(
      array( 'property' => 'font-family', 'value' => '"Open Sans", Arial, sans-serif' ),
      array( 'property' => 'font-size', 'value' => '12px' ),
      array( 'property' => 'font-weight', 'value' => '600' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'none',
    '.archive .apostrophe-2-nothumb span:before,
    .blog .apostrophe-2-nothumb span:before,
    .entry-footer a[rel="category tag"]::before,
    .entry-footer a[rel="tag"]::before,
    .entry-format::before,
    .nav-next .meta-nav:before,
    .nav-previous .meta-nav:before,
    .search .apostrophe-2-nothumb span:before,
    .apostrophe-2-navigation .menu-item-has-children > a:after,
    .apostrophe-2-social li a::before',
    array(
      array( 'property' => 'font-family', 'value' => 'Genericons' ),
      array( 'property' => 'font-size', 'value' => '16px' ),
      array( 'property' => 'font-weight', 'value' => 'normal' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'none',
    'html',
    array(
      array( 'property' => 'font-family', 'value' => 'sans-serif' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
    'b,
    strong',
    array(
      array( 'property' => 'font-weight', 'value' => 'bold' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
    'dfn',
    array(
      array( 'property' => 'font-style', 'value' => 'italic' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'headings',
    'h1',
    array(
      array( 'property' => 'font-size', 'value' => '2em' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
    'small',
    array(
      array( 'property' => 'font-size', 'value' => '80%' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
    'sub,
    sup',
    array(
      array( 'property' => 'font-size', 'value' => '75%' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'none',
    'code,
    kbd,
    pre,
    samp',
    array(
      array( 'property' => 'font-family', 'value' => 'monospace, monospace' ),
      array( 'property' => 'font-size', 'value' => '1em' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
    'button,
    input,
    optgroup,
    select,
    textarea',
    array(
      array( 'property' => 'font', 'value' => 'inherit' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
    'optgroup',
    array(
      array( 'property' => 'font-weight', 'value' => 'bold' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'none',
    'html',
    array(
      array( 'property' => 'font-size', 'value' => '62.5%' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
    'body,
    button,
    input,
    select,
    textarea',
    array(
      array( 'property' => 'font-family', 'value' => '"PT Serif", Georgia, "Times New Roman", serif' ),
      array( 'property' => 'font-size', 'value' => '19px' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'headings',
    '#reply-title,
    .comments-title,
    .widget-title,
    .widgettitle,
    .widget-title label,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6',
    array(
      array( 'property' => 'font-family', 'value' => '"Open Sans", Arial, sans-serif' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'headings',
    'h1',
    array(
      array( 'property' => 'font-size', 'value' => '42px' ),
      array( 'property' => 'font-weight', 'value' => '300' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'headings',
    '#reply-title,
    .comments-title,
    .widget-title,
    .widgettitle,
    .widget-title label,
    h2',
    array(
      array( 'property' => 'font-size', 'value' => '32px' ),
      array( 'property' => 'font-weight', 'value' => '700' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'headings',
    'h3',
    array(
      array( 'property' => 'font-size', 'value' => '28px' ),
      array( 'property' => 'font-weight', 'value' => '300' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'headings',
    'h4',
    array(
      array( 'property' => 'font-size', 'value' => '21px' ),
      array( 'property' => 'font-weight', 'value' => '600' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'headings',
    'h5',
    array(
      array( 'property' => 'font-size', 'value' => '19px' ),
      array( 'property' => 'font-weight', 'value' => '400' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'headings',
    'h6',
    array(
      array( 'property' => 'font-size', 'value' => '17px' ),
      array( 'property' => 'font-weight', 'value' => '600' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
    '.emphasis',
    array(
      array( 'property' => 'font-size', 'value' => '1.25em' ),
      array( 'property' => 'font-style', 'value' => 'italic' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
    'b,
    strong',
    array(
      array( 'property' => 'font-weight', 'value' => 'bold' ),
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

  TypekitTheme::add_font_category_rule( $category_rules, 'none',
    'pre',
    array(
      array( 'property' => 'font-family', 'value' => '"Courier 10 Pitch", Courier, monospace' ),
      array( 'property' => 'font-size', 'value' => '0.85em' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'none',
    'code,
    kbd,
    tt,
    var',
    array(
      array( 'property' => 'font-family', 'value' => 'Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace' ),
      array( 'property' => 'font-size', 'value' => '0.85em' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
    'small',
    array(
      array( 'property' => 'font-size', 'value' => '75%' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
    'big',
    array(
      array( 'property' => 'font-size', 'value' => '125%' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
    'blockquote',
    array(
      array( 'property' => 'font-style', 'value' => 'italic' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
    'cite',
    array(
      array( 'property' => 'font-style', 'value' => 'normal' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
    '.pullquote',
    array(
      array( 'property' => 'font-size', 'value' => '1.2em' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
    '.pullquote cite',
    array(
      array( 'property' => 'font-size', 'value' => '0.8em' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
    'dt',
    array(
      array( 'property' => 'font-weight', 'value' => 'bold' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
    'table',
    array(
      array( 'property' => 'font-size', 'value' => '0.85em' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
    'table caption',
    array(
      array( 'property' => 'font-style', 'value' => 'italic' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
    '.button,
    .button-primary,
    .button-secondary,
    button,
    input[type="button"],
    input[type="reset"],
    input[type="submit"]',
    array(
      array( 'property' => 'font-family', 'value' => '"Open Sans", Arial, sans-serif' ),
      array( 'property' => 'font-size', 'value' => '18px' ),
      array( 'property' => 'font-weight', 'value' => '300' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
    'label',
    array(
      array( 'property' => 'font-family', 'value' => '"Open Sans", Arial, sans-serif' ),
      array( 'property' => 'font-size', 'value' => '14px' ),
      array( 'property' => 'font-weight', 'value' => '600' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
    'input[type="email"],
    input[type="password"],
    input[type="search"],
    input[type="text"],
    input[type="url"],
    textarea',
    array(
      array( 'property' => 'font-size', 'value' => '18px' ),
      array( 'property' => 'font-weight', 'value' => 'normal' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
    '.main-navigation',
    array(
      array( 'property' => 'font-family', 'value' => '"Open Sans", Arial, sans-serif' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
    '.main-navigation a',
    array(
      array( 'property' => 'font-size', 'value' => '17px' ),
      array( 'property' => 'font-weight', 'value' => '600' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'none',
    '.apostrophe-2-social li a::before',
    array(
      array( 'property' => 'font-size', 'value' => '20px' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
    '.nav-next,
    .nav-previous',
    array(
      array( 'property' => 'font-size', 'value' => '17px' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
    '.nav-next .meta-nav,
    .nav-previous .meta-nav',
    array(
      array( 'property' => 'font-family', 'value' => '"Open Sans", Arial, sans-serif' ),
      array( 'property' => 'font-size', 'value' => '28px' ),
      array( 'property' => 'font-weight', 'value' => '100' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'none',
    '.nav-next .meta-nav:before,
    .nav-previous .meta-nav:before',
    array(
      array( 'property' => 'font-size', 'value' => '36px' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
    '.paging-navigation .page-numbers',
    array(
      array( 'property' => 'font-size', 'value' => '20px' ),
      array( 'property' => 'font-weight', 'value' => '400' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'none',
    '.screen-reader-text:active,
    .screen-reader-text:focus,
    .screen-reader-text:hover',
    array(
      array( 'property' => 'font-size', 'value' => '0.875px' ),
      array( 'property' => 'font-weight', 'value' => 'bold' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
    '.widget select',
    array(
      array( 'property' => 'font-size', 'value' => '16px' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'headings',
    '.site-title',
    array(
      array( 'property' => 'font-family', 'value' => '"PT Serif", Georgia, "Times New Roman", serif' ),
      array( 'property' => 'font-size', 'value' => '36px' ),
      array( 'property' => 'font-weight', 'value' => '400' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'headings',
    '.site-description',
    array(
      array( 'property' => 'font-size', 'value' => '21px' ),
      array( 'property' => 'font-style', 'value' => 'italic' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
    '.site-footer .site-info',
    array(
      array( 'property' => 'font-size', 'value' => '16px' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'none',
    '.entry-format::before',
    array(
      array( 'property' => 'font-size', 'value' => '24px' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
    '.page-links',
    array(
      array( 'property' => 'font-family', 'value' => '"Open Sans", Arial, sans-serif' ),
      array( 'property' => 'font-size', 'value' => '14px' ),
      array( 'property' => 'font-weight', 'value' => '600' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
    '.page-links a',
    array(
      array( 'property' => 'font-weight', 'value' => '400' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'none',
    '.entry-footer .post-categories,
    .entry-footer .post-tags',
    array(
      array( 'property' => 'font-size', 'value' => '0' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
    '.single .author .author-bio',
    array(
      array( 'property' => 'font-size', 'value' => '17px' ),
      array( 'property' => 'font-style', 'value' => 'italic' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'headings',
    '.archive .entry-title,
    .blog .entry-title,
    .search .entry-title',
    array(
      array( 'property' => 'font-family', 'value' => '"PT Serif", Georgia, "Times New Roman", serif' ),
      array( 'property' => 'font-size', 'value' => '21px' ),
      array( 'property' => 'font-weight', 'value' => 'normal' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'headings',
    '.archive .apostrophe-2-featured .entry-title,
    .blog .apostrophe-2-featured .entry-title,
    .search .apostrophe-2-featured .entry-title',
    array(
      array( 'property' => 'font-size', 'value' => '36px' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
    '.apostrophe-2-inline-controls a',
    array(
      array( 'property' => 'font-size', 'value' => '16px' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'headings',
    '.widget-title,
    .widgettitle,
    .widget-title label',
    array(
      array( 'property' => 'font-size', 'value' => '18px' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
    '.widget-area .sidebar-primary aside ul',
    array(
      array( 'property' => 'font-size', 'value' => '16px' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
    '.widget-area .sidebar-secondary,
    .widget-area .sidebar-tertiary',
    array(
      array( 'property' => 'font-size', 'value' => '16px' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
    '.error404 .page-content .widget',
    array(
      array( 'property' => 'font-size', 'value' => '16px' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
    '.comment-meta',
    array(
      array( 'property' => 'font-family', 'value' => '"Open Sans", Arial, sans-serif' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
    '.comment-meta .comment-author b',
    array(
      array( 'property' => 'font-size', 'value' => '28px' ),
      array( 'property' => 'font-weight', 'value' => '300' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
    '.comment-meta .comment-metadata',
    array(
      array( 'property' => 'font-size', 'value' => '14px' ),
      array( 'property' => 'font-weight', 'value' => 'normal' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
    '.form-allowed-tags',
    array(
      array( 'property' => 'font-size', 'value' => '16px' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
    '.wp-caption-text',
    array(
      array( 'property' => 'font-style', 'value' => 'italic' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
    '.gallery-caption',
    array(
      array( 'property' => 'font-size', 'value' => '16px' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'none',
    '.main-navigation .menu-toggle:before',
    array(
      array( 'property' => 'font-weight', 'value' => 'normal' ),
      array( 'property' => 'font-family', 'value' => 'Genericons' ),
      array( 'property' => 'font-size', 'value' => '16px' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'headings',
    'h1',
    array(
      array( 'property' => 'font-size', 'value' => '36px' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'none',
    '.archive .apostrophe-2-nothumb span:before,
    .blog .apostrophe-2-nothumb span:before,
    .search .apostrophe-2-nothumb span:before',
    array(
      array( 'property' => 'font-size', 'value' => '64px' ),
    )
  );

  TypekitTheme::add_font_category_rule( $category_rules, 'none',
    '.archive article .apostrophe-2-nothumb span:before,
    .blog article .apostrophe-2-nothumb span:before,
    .search article .apostrophe-2-nothumb span:before',
    array(
      array( 'property' => 'font-size', 'value' => '128px' ),
    )
  );

  return $category_rules;
} );
