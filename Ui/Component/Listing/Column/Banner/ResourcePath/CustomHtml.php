<?php
/**
 *
 * @package     magento2
 * @author      Jayanka Ghosh (joy)
 * @license     https://opensource.org/licenses/OSL-3.0 Open Software License v. 3.0 (OSL-3.0)
 * @link        https://www.codilar.com/
 */

namespace Codilar\BannerSlider\Ui\Component\Listing\Column\Banner\ResourcePath;


class CustomHtml implements ProcessorInterface
{

    const ICON = 'data:image/png;base64,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';

    /**
     * @param array $item
     * @return string
     */
    public function process(array $item): string
    {
        $icon = self::ICON;
        return sprintf('<img style="width: 100px; height: auto;" src="%s" alt="%s" />', $icon, '&lt;HTML /&gt;');
    }
}