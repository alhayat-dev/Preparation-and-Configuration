<?php
/**
 *
 * Copyright © 2019 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Unit1\LogPathInfo\Observer;

/**
 * Class Log
 * @package Unit1\LogPathInfo\Observer
 */
class Log implements \Magento\Framework\Event\ObserverInterface
{
    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;
    /**
     * @var \Magento\Framework\App\RequestInterface
     */
    private $request;

    /**
     * Log constructor.
     * @param \Psr\Log\LoggerInterface $logger
     * @param \Magento\Framework\App\RequestInterface $request
     */
    public function __construct(
        \Psr\Log\LoggerInterface $logger,
        \Magento\Framework\App\RequestInterface $request)
    {
        $this->logger = $logger;
        $this->request = $request;
    }

    /**
     * @param \Magento\Framework\Event\Observer $observer
     */
    public function execute(\Magento\Framework\Event\Observer $observer) {
        $this->logger->critical('Request URI: ' . $this->request->getPathInfo());
    }
}
