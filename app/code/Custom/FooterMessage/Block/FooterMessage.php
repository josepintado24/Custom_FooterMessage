<?php

namespace Custom\FooterMessage\Block;

use Magento\Framework\View\Element\Template;
use Custom\FooterMessage\Helper\Data;

class FooterMessage extends Template
{
    /**
     * @var Data
     */
    private $helper;

    /**
     * Constructor
     *
     * @param Template\Context $context
     * @param Data $helper
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        Data $helper,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->helper = $helper;
    }

    /**
     * Obtener el mensaje de pie de página
     *
     * @return string
     */
    public function getFooterMessage(): string
    {
        $message = $this->_scopeConfig->getValue('custom_footer/message', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        return $message ?? '';
    }
}
