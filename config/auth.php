<?php

return [

    // AuthDriver configuration <START>
    'roles'  => ['admin', 'editor', 'user'],
    'rights' => [
        'admin'  => ['super', 'read', 'create', 'edit', 'delete'],
        'editor' => ['read', 'create', 'edit'],
        'user'   => ['read'],
    ],
    'status' => [
        'activated'   => 1,
        'deactivated' => 2,
        'suspended'   => 3,
    ],
    'use_cache'     => true,
    'use_cookie'    => true,
    // AuthDriver configuration <END>


    // SimpleAuth configuration <START>
    'message' => [
        'login'    => 'Welcome to Dashboard.',
        'register' => 'Registration Success.',
        'logout'   => 'Logout Success.',
        'forget'   => 'Password recover link has been sent to your email, check inbox and spam folder as well.',
        'reset'    => 'Password has been reset, you can login to your account from here.',
    ],
    'disabled'  => ['register'],
    'prefix'    => '/admin/',
    'urls'      => [
        'login'     => '/login/',
        'register'  => '/register/',
        'forget'    => '/forget/',
        'reset'     => '/reset/',
        'logout'    => '/logout/',
    ],
    'redirect_in'  => '/admin/',
    'redirect_out' => '/admin/login/',
    // SimpleAuth configuration <END>

];
