<?php
/**
 * TagController.php
 *
 * PHP version 7
 *
 * @category    Controllers
 * @package     App\Http\Controllers
 * @author      XE Developers <developers@xpressengine.com>
 * @copyright   2015 Copyright (C) NAVER Corp. <http://www.navercorp.com>
 * @license     http://www.gnu.org/licenses/old-licenses/lgpl-2.1.html LGPL-2.1
 * @link        https://xpressengine.io
 */

namespace App\Http\Controllers;

use XePresenter;
use XeTag;
use Xpressengine\Http\Request;

/**
 * Class TagController
 *
 * @category    Controllers
 * @package     App\Http\Controllers
 * @author      XE Developers <developers@xpressengine.com>
 * @copyright   2015 Copyright (C) NAVER Corp. <http://www.navercorp.com>
 * @license     http://www.gnu.org/licenses/old-licenses/lgpl-2.1.html LGPL-2.1
 * @link        https://xpressengine.io
 */
class TagController extends Controller
{
    /**
     * Search tags by given text.
     *
     * @param Request $request request
     * @return \Xpressengine\Presenter\Presentable
     */
    public function autoComplete(Request $request)
    {
        $words = XeTag::similarWord($request->get('string'));

        return XePresenter::makeApi($words);
    }
}
