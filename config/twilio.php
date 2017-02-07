<?php

return [

    'twilio' => [

        'default' => 'twilio',

        'connections' => [

            'twilio' => [

                /*
                |--------------------------------------------------------------------------
                | SID
                |--------------------------------------------------------------------------
                |
                | Your Twilio Account SID #
                |
                */

                # LIVE Credential SID: AC9b3a296bf1ccc243b381855a9692a2ee
                # TEST Credential SID: ACd557acc9121160c02fc646c43d1522d3
                'sid' => getenv('TWILIO_SID') ?: 'AC9b3a296bf1ccc243b381855a9692a2ee',

                /*
                |--------------------------------------------------------------------------
                | Access Token
                |--------------------------------------------------------------------------
                |
                | Access token that can be found in your Twilio dashboard
                |
                */
                # LIVE Credential Token: cc818c991d279e6633332fe9a17c4349
                # TEST Credential Token: e676312347befbc3b1985f256f6368a4
                'token' => getenv('TWILIO_TOKEN') ?: 'cc818c991d279e6633332fe9a17c4349',

                /*
                |--------------------------------------------------------------------------
                | From Number
                |--------------------------------------------------------------------------
                |
                | The Phone number registered with Twilio that your SMS & Calls will come from
                |
                */

                # LIVE phone +18662233879
                # TEST phone +15005550006
                'from' => getenv('TWILIO_FROM') ?: '+18662233879',

                /*
                |--------------------------------------------------------------------------
                | Verify Twilio's SSL Certificates
                |--------------------------------------------------------------------------
                |
                | Allows the client to bypass verifying Twilio's SSL certificates.
                | It is STRONGLY advised to leave this set to true for production environments.
                |
                */

                'ssl_verify' => true,
            ],
        ],
    ],
];
