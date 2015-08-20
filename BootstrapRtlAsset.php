<?php
/**
 * Created by Semen Kamenetskiy.
 * Date: 20/08/15
 */
namespace salatnik\bootstrap;

use yii\web\AssetBundle;

/**
 * Class BootstrapRtlAsset
 *
 * @package salatnik\bootstrap
 */
class BootstrapRtlAsset
    extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@bower/salatnik-bootstrap-rtl/dist';

    /**
     * @var array
     */
    public $css
        = [
            'css/bootstrap-rtl.css',
        ];
}
