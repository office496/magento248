<?php
namespace Hyva\Checkout\ViewModel\Checkout\Formatter;

/**
 * Interceptor class for @see \Hyva\Checkout\ViewModel\Checkout\Formatter
 */
class Interceptor extends \Hyva\Checkout\ViewModel\Checkout\Formatter implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency)
    {
        $this->___init();
        parent::__construct($priceCurrency);
    }

    /**
     * {@inheritdoc}
     */
    public function filterCurrencyConditions(array $mergeWith = []) : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'filterCurrencyConditions');
        return $pluginInfo ? $this->___callPlugins('filterCurrencyConditions', func_get_args(), $pluginInfo) : parent::filterCurrencyConditions($mergeWith);
    }
}
