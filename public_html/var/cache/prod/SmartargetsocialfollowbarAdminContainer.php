<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final
 */
class SmartargetsocialfollowbarAdminContainer extends Container
{
    private $parameters = [];

    public function __construct()
    {
        $this->services = $this->privates = [];
        $this->methodMap = [
            'smartargetsocialfollowbar.context' => 'getSmartargetsocialfollowbar_ContextService',
            'smartargetsocialfollowbar.module' => 'getSmartargetsocialfollowbar_ModuleService',
            'smartargetsocialfollowbar.ps_accounts_facade' => 'getSmartargetsocialfollowbar_PsAccountsFacadeService',
            'smartargetsocialfollowbar.ps_accounts_installer' => 'getSmartargetsocialfollowbar_PsAccountsInstallerService',
            'smartargetsocialfollowbar.ps_billings_context_wrapper' => 'getSmartargetsocialfollowbar_PsBillingsContextWrapperService',
            'smartargetsocialfollowbar.ps_billings_facade' => 'getSmartargetsocialfollowbar_PsBillingsFacadeService',
            'smartargetsocialfollowbar.ps_billings_service' => 'getSmartargetsocialfollowbar_PsBillingsServiceService',
        ];

        $this->aliases = [];
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return [
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
        ];
    }

    /**
     * Gets the public 'smartargetsocialfollowbar.context' shared service.
     *
     * @return \Context
     */
    protected function getSmartargetsocialfollowbar_ContextService()
    {
        return $this->services['smartargetsocialfollowbar.context'] = \Context::getContext();
    }

    /**
     * Gets the public 'smartargetsocialfollowbar.module' shared service.
     *
     * @return \smartargetsocialfollowbar
     */
    protected function getSmartargetsocialfollowbar_ModuleService()
    {
        return $this->services['smartargetsocialfollowbar.module'] = \Module::getInstanceByName('smartargetsocialfollowbar');
    }

    /**
     * Gets the public 'smartargetsocialfollowbar.ps_accounts_facade' shared service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts
     */
    protected function getSmartargetsocialfollowbar_PsAccountsFacadeService()
    {
        return $this->services['smartargetsocialfollowbar.ps_accounts_facade'] = new \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts(($this->services['smartargetsocialfollowbar.ps_accounts_installer'] ?? ($this->services['smartargetsocialfollowbar.ps_accounts_installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('5.0'))));
    }

    /**
     * Gets the public 'smartargetsocialfollowbar.ps_accounts_installer' shared service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Installer
     */
    protected function getSmartargetsocialfollowbar_PsAccountsInstallerService()
    {
        return $this->services['smartargetsocialfollowbar.ps_accounts_installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('5.0');
    }

    /**
     * Gets the public 'smartargetsocialfollowbar.ps_billings_context_wrapper' shared service.
     *
     * @return \PrestaShopCorp\Billing\Wrappers\BillingContextWrapper
     */
    protected function getSmartargetsocialfollowbar_PsBillingsContextWrapperService()
    {
        return $this->services['smartargetsocialfollowbar.ps_billings_context_wrapper'] = new \PrestaShopCorp\Billing\Wrappers\BillingContextWrapper(($this->services['smartargetsocialfollowbar.ps_accounts_facade'] ?? $this->getSmartargetsocialfollowbar_PsAccountsFacadeService()), ($this->services['smartargetsocialfollowbar.context'] ?? $this->getSmartargetsocialfollowbar_ContextService()), false);
    }

    /**
     * Gets the public 'smartargetsocialfollowbar.ps_billings_facade' shared service.
     *
     * @return \PrestaShopCorp\Billing\Presenter\BillingPresenter
     */
    protected function getSmartargetsocialfollowbar_PsBillingsFacadeService()
    {
        return $this->services['smartargetsocialfollowbar.ps_billings_facade'] = new \PrestaShopCorp\Billing\Presenter\BillingPresenter(($this->services['smartargetsocialfollowbar.ps_billings_context_wrapper'] ?? $this->getSmartargetsocialfollowbar_PsBillingsContextWrapperService()), ($this->services['smartargetsocialfollowbar.module'] ?? $this->getSmartargetsocialfollowbar_ModuleService()));
    }

    /**
     * Gets the public 'smartargetsocialfollowbar.ps_billings_service' shared service.
     *
     * @return \PrestaShopCorp\Billing\Services\BillingService
     */
    protected function getSmartargetsocialfollowbar_PsBillingsServiceService()
    {
        return $this->services['smartargetsocialfollowbar.ps_billings_service'] = new \PrestaShopCorp\Billing\Services\BillingService(($this->services['smartargetsocialfollowbar.ps_billings_context_wrapper'] ?? $this->getSmartargetsocialfollowbar_PsBillingsContextWrapperService()), ($this->services['smartargetsocialfollowbar.module'] ?? $this->getSmartargetsocialfollowbar_ModuleService()));
    }
}
