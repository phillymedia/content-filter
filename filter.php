<?php

$filter = [
    'morning' => [
        [
            'pattern' => '/<blockquote.*?>/i',
            'replacement' => '<blockquote style="font-size:14px;text-align:center;margin-top:25px;margin-bottom:25px;line-height:1.5;">',
        ],
        [
            'pattern' => '/<h3.*?>/i',
            'replacement' => '<h3 style="margin-top:15px;border-top:1px solid #ccc;border-bottom:1px solid #ccc;padding-top:10px;padding-bottom:10px;margin-top:10px;text-transform:uppercase;color:#222222;">',
        ],
        [
            'pattern' => '/<h4.*?>/i',
            'replacement' => '<h4 style="text-align:center;line-height:1.5em;font-size:25px;">',
        ],
        [
            'pattern' => '/<img.*?>/i',
            'replacement' => '<img width="560" style="border: 0;display: block;height: auto;max-width: 900px;Margin-bottom:10px;" class="nlimage">',
        ],
        [
            'pattern' => '/<a. *?>/i',
            'replacement' => '<a style="color:#0099cc;text-decoration:none;">',
        ],
        [
            'pattern' => '/<ul.*?>/i',
            'replacement' => '<ul <!--[if !mso]--> style="margin-left:0px;padding-left:24px;"<!--[endif]--><!--[if (mso)|(IE)]> style="margin-left:22px;"<![endif]-->>',
        ],
        [
            'pattern' => '/<figcaption.*?>/i',
            'replacement' => '<figcaption style="margin-top:0;margin-bottom:0;font-size:12px;line-height:19px;color:#9b9b9b">',
        ],
    ],
    'phillies' => [
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
            'pattern' => '/<img.*?>/i',
            'replacement' => '<img width="560" style="border: 0;display: block;height: auto;width: 100%;max-width: 900px;margin-bottom:10px;">',
        ],
        [
            'pattern' => '/<a. *?>/i',
            'replacement' => '<a style="text-decoration: underline;transition: opacity 0.1s ease-in;color: #5f7495;">',
        ],
        [
            'pattern' => '/<ul.*?>/i',
            'replacement' => '<ul <!--[if !mso]--> style="margin-left:0px;padding-left:24px;"<!--[endif]--><!--[if (mso)|(IE)]> style="margin-left:22px;"<![endif]-->>',
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
            'pattern' => '/<img.*?>/i',
            'replacement' => '<img width="560" style="border: 0;display: block;height: auto;width: 100%;max-width: 900px;margin-bottom:10px;">',
        ],
        [
            'pattern' => '/<a. *?>/i',
            'replacement' => '<a style="text-decoration: underline;transition: opacity 0.1s ease-in;color: #5f7495;">',
        ],
        [
            'pattern' => '/<ul.*?>/i',
            'replacement' => '<ul <!--[if !mso]--> style="margin-left:0px;padding-left:24px;"<!--[endif]--><!--[if (mso)|(IE)]> style="margin-left:22px;"<![endif]-->>',
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
];
