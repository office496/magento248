<?php
namespace Mollie\Payment\Model\Methods\Paypal;

/**
 * Interceptor class for @see \Mollie\Payment\Model\Methods\Paypal
 */
class Interceptor extends \Mollie\Payment\Model\Methods\Paypal implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Payment\Gateway\Config\ValueHandlerPoolInterface $valueHandlerPool, \Magento\Payment\Gateway\Data\PaymentDataObjectFactory $paymentDataObjectFactory, \Magento\Framework\Registry $registry, \Magento\Sales\Model\OrderRepository $orderRepository, \Magento\Sales\Model\ResourceModel\Order\CollectionFactory $orderFactory, \Mollie\Payment\Model\Client\Orders $ordersApi, \Mollie\Payment\Model\Client\Payments $paymentsApi, \Mollie\Payment\Helper\General $mollieHelper, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder, \Magento\Framework\View\Asset\Repository $assetRepository, \Mollie\Payment\Config $config, \Mollie\Payment\Service\Mollie\Timeout $timeout, \Mollie\Payment\Model\Client\Orders\ProcessTransaction $ordersProcessTransaction, \Mollie\Payment\Service\OrderLockService $orderLockService, \Mollie\Payment\Service\Mollie\MollieApiClient $mollieApiClient, \Mollie\Payment\Api\TransactionToOrderRepositoryInterface $transactionToOrderRepository, \Mollie\Payment\Service\Mollie\GetApiMethod $getApiMethod, \Mollie\Payment\Service\Mollie\LogException $logException, $formBlockType, $infoBlockType, ?\Magento\Payment\Gateway\Command\CommandPoolInterface $commandPool = null, ?\Magento\Payment\Gateway\Validator\ValidatorPoolInterface $validatorPool = null, ?\Magento\Payment\Gateway\Command\CommandManagerInterface $commandExecutor = null, ?\Psr\Log\LoggerInterface $logger = null)
    {
        $this->___init();
        parent::__construct($eventManager, $valueHandlerPool, $paymentDataObjectFactory, $registry, $orderRepository, $orderFactory, $ordersApi, $paymentsApi, $mollieHelper, $checkoutSession, $searchCriteriaBuilder, $assetRepository, $config, $timeout, $ordersProcessTransaction, $orderLockService, $mollieApiClient, $transactionToOrderRepository, $getApiMethod, $logException, $formBlockType, $infoBlockType, $commandPool, $validatorPool, $commandExecutor, $logger);
    }

    /**
     * {@inheritdoc}
     */
    public function canCapture()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canCapture');
        return $pluginInfo ? $this->___callPlugins('canCapture', func_get_args(), $pluginInfo) : parent::canCapture();
    }

    /**
     * {@inheritdoc}
     */
    public function canReviewPayment()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canReviewPayment');
        return $pluginInfo ? $this->___callPlugins('canReviewPayment', func_get_args(), $pluginInfo) : parent::canReviewPayment();
    }

    /**
     * {@inheritdoc}
     */
    public function isActive($storeId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isActive');
        return $pluginInfo ? $this->___callPlugins('isActive', func_get_args(), $pluginInfo) : parent::isActive($storeId);
    }
}
