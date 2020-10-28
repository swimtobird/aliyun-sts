<?php
return [
    'access_key_id' => env('OSS_ACCESS_KEY_ID'),
    'access_key_secret' => env('OSS_ACCESS_KEY_SECRET'),
    'region_id' => env('OSS_REGION_ID'),
    'endpoint' => env('OSS_ENDPOINT'),
    'role_arn' => env('OSS_ROLEARN'),
    'token_expire_time' => env('OSS_EXPIRE'),
    'policy' => [
        "Statement" => [
            [
                "Action" => [
                    "oss:PutObject",
                    "oss:AbortMultipartUpload",
                ],
                "Effect" => "Allow",
                "Resource" => [
                    "acs:oss:*:*:\$BUCKET_NAME/\$OBJECT_PREFIX*",
                ]
            ]
        ],
        "Version" => "1"
    ]
];