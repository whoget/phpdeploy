<?php
return [
    'your-site-name'=>[
        'repository'=>[
            'home'=>'https://bitbucket.org/your-account-name/your-repository',
            'download_url'=>'https://bitbucket.org/your-account-name/your-repository/get/',
            'auth'=>[
                'username'=>'your-username',
                'password'=>'your-password'
            ]
        ],
        'siteRoot'=>'/var/www/sites/Your-Site-Root',
        'siteData'=>[
            'config/Your-local.php'=>'/var/www/sites/Your-Site-Data/local_config.php'
        ],
        'runComposerInstall'=>true
    ]
];