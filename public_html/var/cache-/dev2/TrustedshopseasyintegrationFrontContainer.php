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
class TrustedshopseasyintegrationFrontContainer extends Container
{
    private $parameters = [];

    public function __construct()
    {
        $this->services = $this->privates = [];
        $this->methodMap = [
            'TrustedshopsAddon\\API\\Logger\\ApiLogger' => 'getApiLoggerService',
            'TrustedshopsAddon\\Repository\\ChannelRepository' => 'getChannelRepositoryService',
            'TrustedshopsAddon\\Repository\\OrderProductRepository' => 'getOrderProductRepositoryService',
            'TrustedshopsAddon\\Service\\ChannelService' => 'getChannelServiceService',
            'TrustedshopsAddon\\Service\\CredentialsService' => 'getCredentialsServiceService',
            'TrustedshopsAddon\\Service\\HookService' => 'getHookServiceService',
            'TrustedshopsAddon\\Service\\OrderProductService' => 'getOrderProductServiceService',
            'TrustedshopsAddon\\Service\\OrderStatusService' => 'getOrderStatusServiceService',
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
            'trustedshopseasyintegration' => true,
        ];
    }

    /**
     * Gets the public 'TrustedshopsAddon\API\Logger\ApiLogger' shared service.
     *
     * @return \TrustedshopsAddon\API\Logger\ApiLogger
     */
    protected function getApiLoggerService()
    {
        return $this->services['TrustedshopsAddon\\API\\Logger\\ApiLogger'] = new \TrustedshopsAddon\API\Logger\ApiLogger();
    }

    /**
     * Gets the public 'TrustedshopsAddon\Repository\ChannelRepository' shared service.
     *
     * @return \TrustedshopsAddon\Repository\ChannelRepository
     */
    protected function getChannelRepositoryService()
    {
        return $this->services['TrustedshopsAddon\\Repository\\ChannelRepository'] = new \TrustedshopsAddon\Repository\ChannelRepository();
    }

    /**
     * Gets the public 'TrustedshopsAddon\Repository\OrderProductRepository' shared service.
     *
     * @return \TrustedshopsAddon\Repository\OrderProductRepository
     */
    protected function getOrderProductRepositoryService()
    {
        return $this->services['TrustedshopsAddon\\Repository\\OrderProductRepository'] = new \TrustedshopsAddon\Repository\OrderProductRepository();
    }

    /**
     * Gets the public 'TrustedshopsAddon\Service\ChannelService' shared service.
     *
     * @return \TrustedshopsAddon\Service\ChannelService
     */
    protected function getChannelServiceService()
    {
        return $this->services['TrustedshopsAddon\\Service\\ChannelService'] = new \TrustedshopsAddon\Service\ChannelService(($this->services['TrustedshopsAddon\\Repository\\ChannelRepository'] ?? ($this->services['TrustedshopsAddon\\Repository\\ChannelRepository'] = new \TrustedshopsAddon\Repository\ChannelRepository())), ($this->services['TrustedshopsAddon\\Service\\CredentialsService'] ?? ($this->services['TrustedshopsAddon\\Service\\CredentialsService'] = new \TrustedshopsAddon\Service\CredentialsService())), ($this->services['TrustedshopsAddon\\Service\\OrderProductService'] ?? $this->getOrderProductServiceService()));
    }

    /**
     * Gets the public 'TrustedshopsAddon\Service\CredentialsService' shared service.
     *
     * @return \TrustedshopsAddon\Service\CredentialsService
     */
    protected function getCredentialsServiceService()
    {
        return $this->services['TrustedshopsAddon\\Service\\CredentialsService'] = new \TrustedshopsAddon\Service\CredentialsService();
    }

    /**
     * Gets the public 'TrustedshopsAddon\Service\HookService' shared service.
     *
     * @return \TrustedshopsAddon\Service\HookService
     */
    protected function getHookServiceService()
    {
        return $this->services['TrustedshopsAddon\\Service\\HookService'] = new \TrustedshopsAddon\Service\HookService(($this->services['TrustedshopsAddon\\Service\\ChannelService'] ?? $this->getChannelServiceService()), ($this->services['TrustedshopsAddon\\Service\\OrderProductService'] ?? $this->getOrderProductServiceService()));
    }

    /**
     * Gets the public 'TrustedshopsAddon\Service\OrderProductService' shared service.
     *
     * @return \TrustedshopsAddon\Service\OrderProductService
     */
    protected function getOrderProductServiceService()
    {
        return $this->services['TrustedshopsAddon\\Service\\OrderProductService'] = new \TrustedshopsAddon\Service\OrderProductService(($this->services['TrustedshopsAddon\\Repository\\OrderProductRepository'] ?? ($this->services['TrustedshopsAddon\\Repository\\OrderProductRepository'] = new \TrustedshopsAddon\Repository\OrderProductRepository())));
    }

    /**
     * Gets the public 'TrustedshopsAddon\Service\OrderStatusService' shared service.
     *
     * @return \TrustedshopsAddon\Service\OrderStatusService
     */
    protected function getOrderStatusServiceService()
    {
        return $this->services['TrustedshopsAddon\\Service\\OrderStatusService'] = new \TrustedshopsAddon\Service\OrderStatusService(($this->services['TrustedshopsAddon\\Service\\ChannelService'] ?? $this->getChannelServiceService()), ($this->services['TrustedshopsAddon\\Service\\CredentialsService'] ?? ($this->services['TrustedshopsAddon\\Service\\CredentialsService'] = new \TrustedshopsAddon\Service\CredentialsService())));
    }
}
