Twitter Bootstrap RTL Extension for Yii 2
=========================================

This is the Twitter Bootstrap RTL (Right to Left) extension for Yii 2. It create an AssetBundle for [Rtl bootstrap](https://github.com/salatnik/bootstrap-rtl).

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist salatnik/yii2-bootstrap-rtl
```

or add

```
"salatnik/yii2-bootstrap-rtl": "*"
```

to the require section of your `composer.json` file.

For using this asset bundle you need just add this line `'salatnik\bootstrap\BootstrapRtlAsset'` in `$depends` of `AppAsset` or any asset bundels you work that.

Example:

```php
namespace backend\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'salatnik\bootstrap\BootstrapRtlAsset',
    ];
}
```
