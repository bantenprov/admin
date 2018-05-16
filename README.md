# admin

[![Join the chat at https://gitter.im/admin/Lobby](https://badges.gitter.im/admin/Lobby.svg)](https://gitter.im/admin/Lobby?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/bantenprov/admin/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/admin/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/bantenprov/admin/badges/build.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/admin/build-status/master)
[![Latest Stable Version](https://poser.pugx.org/bantenprov/admin/v/stable)](https://packagist.org/packages/bantenprov/admin)
[![Total Downloads](https://poser.pugx.org/bantenprov/admin/downloads)](https://packagist.org/packages/bantenprov/admin)
[![Latest Unstable Version](https://poser.pugx.org/bantenprov/admin/v/unstable)](https://packagist.org/packages/bantenprov/admin)
[![License](https://poser.pugx.org/bantenprov/admin/license)](https://packagist.org/packages/bantenprov/admin)
[![Monthly Downloads](https://poser.pugx.org/bantenprov/admin/d/monthly)](https://packagist.org/packages/bantenprov/admin)
[![Daily Downloads](https://poser.pugx.org/bantenprov/admin/d/daily)](https://packagist.org/packages/bantenprov/admin)

Admin


### Edit `App\User.php`

```php

protected $hidden = [
    'password', 'remember_token',
];

// ============

public function admins()
{
    return $this->hasMany('Bantenprov\Admin\Models\AdminModel','user_id');
}

```