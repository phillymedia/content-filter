<?php
$filter = [
    'default' => [
        [
            'pattern' => '/<p class="text_element".*?/i',
            'replacement' => '<p class="text_element" style="color:#000000;font-size:15px;line-height:23px"',
        ],
        [
            'pattern' => '/<blockquote.*?>/i',
            'replacement' => '<blockquote style="font-size:14px;text-align:center;margin-top:25px;margin-bottom:25px;line-height:1.5;">',
        ],
        [
            'pattern' => '/<h3.*?>/i',
            'replacement' => '<h3 style="margin-top:15px;border-top:1px solid #ccc;border-bottom:1px solid #ccc;padding-top:10px;padding-bottom:10px;margin-top:10px;text-transform:uppercase;color:#222222;font-size:18px;font-weight:bold;">',
        ],
        [
            'pattern' => '/<h4.*?>/i',
            'replacement' => '<h4 style="text-align:center;line-height:1.5em;font-size:25px;">',
        ],
        [
            'pattern' => '/<img\s+/i',
            'replacement' => '<img width="560" style="border: 0;display: block;height: auto;width: 100%;max-width: 900px;margin-bottom:10px;" class="nlimage"',
        ],
        [
            'pattern' => '/<a class="interstitial_link_element".*?/i',
            'replacement' => '<a class="interstitial_link_element" style="color:#0099cc;font-size:24px;text-decoration:none;font-weight:bold;"',
        ],
        [
            'pattern' => '/<span class="label-author-rss".*?>/i',
            'replacement' => '<span class="label-author-rss" style="color:#666666;font-size:11px;line-height:23px;font-weight:bold;">',
        ],
        [
            'pattern' => '/<div class="label-caption-rss".*?>/i',
            'replacement' => '<div class="label-caption-rss" style="color:#9B9B9B;font-size:12px;line-height:19px;">',
        ],
        [
            'pattern' => '/<a (?!class="interstitial_link_element").*?/i',
            'replacement' => '<a style="color:#0099cc;text-decoration:none;"',
        ],
        [
            'pattern' => '/<\/ul>/i',
            'replacement' => '</ul> <!--[if!mso]><style type="text/css">ul{margin-left:0;padding-left:24px}</style><![endif]--><!--[if(mso)|(IE)]><style type="text/css">ul{margin-left:22px} </style> <![endif]-->',
        ],
        [
            'pattern' => '/<figcaption.*?>/i',
            'replacement' => '<figcaption style="margin-top:0;margin-bottom:0;font-size:12px;line-height:19px;color:#9b9b9b">',
        ],
    ],
    'morning' => [
        [
            'pattern' => '/<p class="text_element".*?/i',
            'replacement' => '<p class="text_element" style="color:#000000;font-size:15px;line-height:23px"',
        ],
        [
            'pattern' => '/<blockquote.*?>/i',
            'replacement' => '<blockquote style="font-size:14px;text-align:center;margin-top:25px;margin-bottom:25px;line-height:1.5;">',
        ],
        [
            'pattern' => '/<h3.*?>/i',
            'replacement' => '<h3 style="margin-top:15px;border-top:1px solid #ccc;border-bottom:1px solid #ccc;padding-top:10px;padding-bottom:10px;margin-top:10px;text-transform:uppercase;color:#222222;font-size:18px;font-weight:bold;">',
        ],
        [
            'pattern' => '/<h4.*?>/i',
            'replacement' => '<h4 style="text-align:center;line-height:1.5em;font-size:25px;">',
        ],
        [
            'pattern' => '/<img\s+/i',
            'replacement' => '<img width="560" style="border: 0;display: block;height: auto;width: 100%;max-width: 900px;margin-bottom:10px;" class="nlimage"',
        ],
        [
            'pattern' => '/<a class="interstitial_link_element".*?/i',
            'replacement' => '<a class="interstitial_link_element" style="color:#0099cc;font-size:24px;text-decoration:none;font-weight:bold;"',
        ],
        [
            'pattern' => '/<span class="label-author-rss".*?>/i',
            'replacement' => '<span class="label-author-rss" style="color:#666666;font-size:11px;line-height:23px;font-weight:bold;">',
        ],
        [
            'pattern' => '/<div class="label-caption-rss".*?>/i',
            'replacement' => '<div class="label-caption-rss" style="color:#9B9B9B;font-size:12px;line-height:19px;">',
        ],
        [
            'pattern' => '/<a (?!class="interstitial_link_element").*?/i',
            'replacement' => '<a style="color:#0099cc;text-decoration:none;"',
        ],
        [
            'pattern' => '/<\/ul>/i',
            'replacement' => '</ul> <!--[if!mso]><style type="text/css">ul{margin-left:0;padding-left:24px}</style><![endif]--><!--[if(mso)|(IE)]><style type="text/css">ul{margin-left:22px} </style> <![endif]-->',
        ],
        [
            'pattern' => '/<figcaption.*?>/i',
            'replacement' => '<figcaption style="margin-top:0;margin-bottom:0;font-size:12px;line-height:19px;color:#9b9b9b">',
        ],
    ],
    'phillies' => [
        [
            'pattern' => '/<p class="text_element".*?/i',
            'replacement' => '<p class="text_element"style="color:#000000;font-size:15px;line-height:23px"',
        ],
        [
            'pattern' => '/<blockquote.*?>/i',
            'replacement' => '<blockquote style="font-size:14px;text-align:center;margin-top:25px;margin-bottom:25px;line-height:1.5;">',
        ],
        [
            'pattern' => '/<h2.*?>/i',
            'replacement' => '<h2 style="margin-top: 0;margin-bottom: 20px;font-style: normal;font-weight: normal;color: #222;font-size: 30px;line-height: 34px;font-family: sans-serif;">',
        ],
        [
            'pattern' => '/<h3.*?>/i',
            'replacement' => '<h3 style="font-size:18px;color:#e20909;font-weight:bold;">',
        ],
        [
            'pattern' => '/<h4.*?>/i',
            'replacement' => '<h4 style="text-align:center;line-height:1.5em;font-size:25px;">',
        ],
        [
            'pattern' => '/<img\s+/i',
            'replacement' => '<img width="560" style="border: 0;display: block;height: auto;width: 100%;max-width: 900px;margin-bottom:10px;"',
        ],
        [
            'pattern' => '/<a class="interstitial_link_element".*?/i',
            'replacement' => '<a class="interstitial_link_element" style="font-size:18px;color:#e20909;text-decoration:none;font-weight:bold;"',
        ],
        [
            'pattern' => '/<span class="label-author-rss".*?>/i',
            'replacement' => '<span class="label-author-rss" style="color:#666666;line-height:23px;font-size:11px;">',
        ],
        [
            'pattern' => '/<div class="label-caption-rss".*?>/i',
            'replacement' => '<div class="label-caption-rss" style="color:#9B9B9B;line-height:19px;font-size:12px;">',
        ],
        [
            'pattern' => '/<a (?!class="interstitial_link_element").*?/i',
            'replacement' => '<a style="color: #1155cc;font-size:15px;line-height:23px;text-decoration: underline;"',
        ],
        [
            'pattern' => '/<\/ul>/i',
            'replacement' => '</ul> <!--[if!mso]><style type="text/css">ul{margin-left:0;padding-left:24px}</style><![endif]--><!--[if(mso)|(IE)]><style type="text/css">ul{margin-left:22px} </style> <![endif]-->',
        ],
        [
            'pattern' => '/<figcaption.*?>/i',
            'replacement' => '<figcaption style="margin-top:0;margin-bottom:0;font-size:12px;line-height:19px;color:#9b9b9b">',
        ],
    ],
    'eagles' => [
        [
            'pattern' => '/<blockquote.*?>/i',
            'replacement' => '<blockquote style="font-size:14px;text-align:center;margin-top:25px;margin-bottom:25px;line-height:1.5;">',
        ],
        [
            'pattern' => '/<h2.*?>/i',
            'replacement' => '<h2 style="margin-top: 0;margin-bottom: 20px;font-style: normal;font-weight: normal;color: #222;font-size: 30px;line-height: 34px;font-family: sans-serif;">',
        ],
        [
            'pattern' => '/<h3.*?>/i',
            'replacement' => '<h3 class="size-24" style="margin-top: 20px;margin-bottom: 0;font-style: normal;font-weight: normal;color: #222;font-size: 20px;line-height: 28px;font-family: sans-serif;font-weight:bold;">',
        ],
        [
            'pattern' => '/<h4.*?>/i',
            'replacement' => '<h4 style="text-align:center;line-height:1.5em;font-size:25px;">',
        ],
        [
            'pattern' => '/<img\s+/i',
            'replacement' => '<img width="560" style="border: 0;display: block;height: auto;width: 100%;max-width: 900px;margin-bottom:10px;"',
        ],
        [
            'pattern' => '/<a class="interstitial_link_element".*?/i',
            'replacement' => '<a class="title-article-rss" style="color:#0099cc;text-decoration:none;font-size:24px;"',
        ],
        [
            'pattern' => '/<span class="label-author-rss".*?>/i',
            'replacement' => '<span class="label-author-rss" style="color:#666666;line-height:23px;font-size:11px;">',
        ],
        [
            'pattern' => '/<div class="label-caption-rss".*?>/i',
            'replacement' => '<div class="label-caption-rss" style="color:#9B9B9B;line-height:19px;font-size:12px;">',
        ],
        [
            'pattern' => '/<a (?!class="interstitial_link_element").*?/i',
            'replacement' => '<a style="text-decoration: underline;transition: opacity 0.1s ease-in;color: #5f7495;"',
        ],
        [
            'pattern' => '/<\/ul>/i',
            'replacement' => '</ul> <!--[if!mso]><style type="text/css">ul{margin-left:0;padding-left:24px}</style><![endif]--><!--[if(mso)|(IE)]><style type="text/css">ul{margin-left:22px} </style> <![endif]-->',
        ],
        [
            'pattern' => '/<hr.*?>/i',
            'replacement' => '<hr style="min-height:1px;color:#d1d2d4;">',
        ],
        [
            'pattern' => '/<figcaption.*?>/i',
            'replacement' => '<figcaption style="margin-top:0;margin-bottom:0;font-size:12px;line-height:19px;color:#9b9b9b">',
        ],
    ],
    'earlybirds' => [
        [
            'pattern' => '/<p class="text_element".*?/i',
            'replacement' => '<p class="text_element" style="color:#353638;font-size:15px;line-height:23px;font-family: PT Serif"',
        ],
        [
            'pattern' => '/<blockquote.*?>/i',
            'replacement' => '<blockquote style="font-size:14px;text-align:center;margin-top:25px;margin-bottom:25px;line-height:1.5;">',
        ],
        [
            'pattern' => '/<h3.*?>/i',
            'replacement' => '<h3 style="margin-top:15px;padding-top:10px;padding-bottom:10px;margin-top:10px;text-transform:uppercase;color:#353538;font-size:24px;font-weight:bold;font-family: PT Serif Bold;line-height: 32px">',
        ],
        [
            'pattern' => '/<h4.*?>/i',
            'replacement' => '<h4 style="text-align:center;line-height:28px;font-size:20px;color:#353538;font-family: PT Serif Bold">',
        ],
        [
            'pattern' => '/<img\s+/i',
            'replacement' => '<img width="560" style="border: 0;display: block;height: auto;width: 100%;max-width: 900px;margin-bottom:10px;" class="nlimage"',
        ],
        [
            'pattern' => '/<a class="interstitial_link_element".*?/i',
            'replacement' => '<a class="interstitial_link_element" style="color:#0099cc;font-size:24px;text-decoration:none;font-weight:bold;"',
        ],
        [
            'pattern' => '/<span class="label-author-rss".*?>/i',
            'replacement' => '<span class="label-author-rss" style="color:#666666;font-size:11px;line-height:23px;font-weight:bold;font-family: Arial">',
        ],
        [
            'pattern' => '/<div class="label-caption-rss".*?>/i',
            'replacement' => '<div class="label-caption-rss" style="color:#999999;font-size:11px;line-height:19px;font-family: Arial">',
        ],
        [
            'pattern' => '/<a (?!class="interstitial_link_element").*?/i',
            'replacement' => '<a style="color: #5f7495;text-decoration: underline;font-size: 15px;line-height: 23px;font-family: PT Serif"',
        ],
        [
            'pattern' => '/<\/ul>/i',
            'replacement' => '</ul> <!--[if!mso]><style type="text/css">ul{margin-left:0;padding-left:24px}</style><![endif]--><!--[if(mso)|(IE)]><style type="text/css">ul{margin-left:22px} </style> <![endif]-->',
        ],
        [
            'pattern' => '/<figcaption.*?>/i',
            'replacement' => '<figcaption style="margin-top:0;margin-bottom:0;font-size:11px;line-height:19px;color:#999999;font-family: Arial">',
        ],
    ],
    'clout' => [
        [
            'pattern' => '/<p class="text_element".*?/i',
            'replacement' => '<p class="text_element" style="color:#353638;font-size:15px;line-height:23px;font-family: sans-serif;"',
        ],
        [
            'pattern' => '/<blockquote.*?>/i',
            'replacement' => '<blockquote style="font-size:14px;text-align:center;margin-top:25px;margin-bottom:25px;line-height:1.5;">',
        ],
        [
            'pattern' => '/<h2.*?>/i',
            'replacement' => '<h2 style="Margin-top: 0;Margin-bottom: 16px;font-style: normal;font-weight: normal;color: #222;font-size: 20px;line-height: 28px;font-family: sans-serif;">',
        ],
        [
            'pattern' => '/<h3.*?>/i',
            'replacement' => '<h3 style="margin-top:10px;padding-top:10px;margin-bottom:0px;text-transform:uppercase;color:#353538;font-size:24px;font-weight:bold;font-family: sans-serif;line-height: 32px">',
        ],
        [
            'pattern' => '/<h4.*?>/i',
            'replacement' => '<h4 style="text-align:center;line-height:28px;font-size:20px;color:#353538;font-family: sans-serif;">',
        ],
        [
            'pattern' => '/<img\s+/i',
            'replacement' => '<img width="560" style="border: 0;display: block;height: auto;width: 100%;max-width: 900px;margin-bottom:10px;" class="nlimage"',
        ],
        [
            'pattern' => '/<a class="interstitial_link_element".*?/i',
            'replacement' => '<a class="interstitial_link_element" style="color:#0099cc;font-size:24px;text-decoration:none;font-weight:bold;"',
        ],
        [
            'pattern' => '/<span class="label-author-rss".*?>/i',
            'replacement' => '<span class="label-author-rss" style="color:#666666;font-size:11px;line-height:23px;font-weight:bold;font-family: sans-serif;">',
        ],
        [
            'pattern' => '/<div class="label-caption-rss".*?>/i',
            'replacement' => '<div class="label-caption-rss" style="color:#999999;font-size:11px;line-height:19px;font-family: sans-serif;">',
        ],
        [
            'pattern' => '/<a (?!class="interstitial_link_element").*?/i',
            'replacement' => '<a style="color: #5f7495;text-decoration: underline;font-size: 15px;line-height: 23px;font-family: sans-serif;"',
        ],
        [
            'pattern' => '/<\/ul>/i',
            'replacement' => '</ul> <!--[if!mso]><style type="text/css">ul{margin-left:0;padding-left:24px}</style><![endif]--><!--[if(mso)|(IE)]><style type="text/css">ul{margin-left:22px} </style> <![endif]-->',
        ],
        [
            'pattern' => '/<figcaption.*?>/i',
            'replacement' => '<figcaption style="margin-top:0;margin-bottom:0;font-size:11px;line-height:19px;color:#999999;font-family: sans-serif;">',
        ],
    ],
    'letseat' => [
        [
            'pattern' => '/<p class="text_element".*?/i',
            'replacement' => '<p class="text_element" style="color:#353638;font-size:15px;line-height:23px;font-family: Lora,Palatino,Book Antiqua,Georgia,serif;"',
        ],
        [
            'pattern' => '/<blockquote.*?>/i',
            'replacement' => '<blockquote style="font-size:14px;text-align:center;margin-top:25px;margin-bottom:25px;line-height:1.5;font-family: Avenir,sans-serif">',
        ],
        [
            'pattern' => '/<h1.*?>/i',
            'replacement' => '<h1 style="Margin-top: 0;Margin-bottom: 16px;font-style: normal;font-weight: bold;color: #222;font-size: 34px;line-height: 43px;font-family: Avenir,sans-serif">',
        ],
        [
            'pattern' => '/<h2.*?>/i',
            'replacement' => '<h2 style="Margin-top: 0;Margin-bottom: 16px;font-style: normal;font-weight: bold;color: #222;font-size: 22px;line-height: 34px;font-family: Avenir,sans-serif">',
        ],
        [
            'pattern' => '/<h3.*?>/i',
            'replacement' => '<h3 style="margin-bottom:0px;padding-top:10px;margin-top:10px;text-transform:uppercase;color:#222222;font-size:26px;font-weight:bold;line-height: 34px;font-family: Avenir Bold">',
        ],
        [
            'pattern' => '/<h4.*?>/i',
            'replacement' => '<h4 style="text-align:center;line-height:28px;font-size:20px;color:#353538;font-family: Avenir Bold">',
        ],
        [
            'pattern' => '/<img\s+/i',
            'replacement' => '<img width="560" style="border: 0;display: block;height: auto;width: 100%;max-width: 900px;margin-bottom:10px;" class="nlimage"',
        ],
        [
            'pattern' => '/<a class="interstitial_link_element".*?/i',
            'replacement' => '<a class="interstitial_link_element" style="color:#0099cc;font-size:24px;text-decoration:none;font-weight:bold;font-family: Lora,Palatino,Book Antiqua,Georgia,serif;"',
        ],
        [
            'pattern' => '/<span class="label-author-rss".*?>/i',
            'replacement' => '<span class="label-author-rss" style="color:#666666;font-size:11px;line-height:23px;font-weight:bold;font-family: Avenir">',
        ],
        [
            'pattern' => '/<div class="label-caption-rss".*?>/i',
            'replacement' => '<div class="label-caption-rss" style="color:#777777;font-size:12px;line-height:19px;font-family: Avenir;">',
        ],
        [
            'pattern' => '/<a (?!class="interstitial_link_element").*?/i',
            'replacement' => '<a style="color: #5f7495;text-decoration: underline;font-size: 15px;line-height: 32px;font-family: Lora,Palatino,Book Antiqua,Georgia,serif;"',
        ],
        [
            'pattern' => '/<\/ul>/i',
            'replacement' => '</ul> <!--[if!mso]><style type="text/css">ul{margin-left:0;padding-left:24px}</style><![endif]--><!--[if(mso)|(IE)]><style type="text/css">ul{margin-left:22px} </style> <![endif]-->',
        ],
        [
            'pattern' => '/<figcaption.*?>/i',
            'replacement' => '<figcaption style="margin-top:0;margin-bottom:0;font-size:12px;line-height:19px;color:#777777;font-family: Avenir;">',
        ],
    ],
];