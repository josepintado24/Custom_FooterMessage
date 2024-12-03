<?php

namespace Custom\FooterMessage\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    const XML_PATH_FOOTER_MESSAGE = 'custom_footer_message/general/footer_message';

    /**
     * Obtener el mensaje configurado
     *
     * @return string
     */
    public function getFooterMessage()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_FOOTER_MESSAGE,
            ScopeInterface::SCOPE_STORE
        );
    }
}
