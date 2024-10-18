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
class FrontContainer extends \PrestaShop\PrestaShop\Adapter\Container\LegacyContainer
{
    private $parameters = [];
    private $getService;

    public function __construct()
    {
        $this->getService = \Closure::fromCallable([$this, 'getService']);
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->syntheticIds = [
            'employee' => true,
            'shop' => true,
        ];
        $this->methodMap = [
            'PrestaShop\\Module\\PsAccounts\\Adapter\\Configuration' => 'getConfigurationService',
            'PrestaShop\\Module\\PsAccounts\\Adapter\\Link' => 'getLinkService',
            'PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient' => 'getAccountsClientService',
            'PrestaShop\\Module\\PsAccounts\\Api\\Client\\ServicesBillingClient' => 'getServicesBillingClientService',
            'PrestaShop\\Module\\PsAccounts\\Api\\Client\\SsoClient' => 'getSsoClientService',
            'PrestaShop\\Module\\PsAccounts\\Context\\ShopContext' => 'getShopContextService',
            'PrestaShop\\Module\\PsAccounts\\Handler\\Error\\Sentry' => 'getSentryService',
            'PrestaShop\\Module\\PsAccounts\\Installer\\Installer' => 'getInstallerService',
            'PrestaShop\\Module\\PsAccounts\\Presenter\\PsAccountsPresenter' => 'getPsAccountsPresenterService',
            'PrestaShop\\Module\\PsAccounts\\Provider\\OAuth2\\Oauth2Client' => 'getOauth2ClientService',
            'PrestaShop\\Module\\PsAccounts\\Provider\\OAuth2\\PrestaShopClientProvider' => 'getPrestaShopClientProviderService',
            'PrestaShop\\Module\\PsAccounts\\Provider\\OAuth2\\PrestaShopSession' => 'getPrestaShopSessionService',
            'PrestaShop\\Module\\PsAccounts\\Provider\\RsaKeysProvider' => 'getRsaKeysProviderService',
            'PrestaShop\\Module\\PsAccounts\\Provider\\ShopProvider' => 'getShopProviderService',
            'PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository' => 'getConfigurationRepositoryService',
            'PrestaShop\\Module\\PsAccounts\\Repository\\ShopTokenRepository' => 'getShopTokenRepositoryService',
            'PrestaShop\\Module\\PsAccounts\\Repository\\UserTokenRepository' => 'getUserTokenRepositoryService',
            'PrestaShop\\Module\\PsAccounts\\Service\\AnalyticsService' => 'getAnalyticsServiceService',
            'PrestaShop\\Module\\PsAccounts\\Service\\PsAccountsService' => 'getPsAccountsServiceService',
            'PrestaShop\\Module\\PsAccounts\\Service\\PsBillingService' => 'getPsBillingServiceService',
            'PrestaShop\\Module\\PsAccounts\\Service\\ShopLinkAccountService' => 'getShopLinkAccountServiceService',
            'PrestaShop\\Module\\PsEventbus\\Api\\CollectorApiClient' => 'getCollectorApiClientService',
            'PrestaShop\\Module\\PsEventbus\\Api\\SyncApiClient' => 'getSyncApiClientService',
            'PrestaShop\\Module\\PsEventbus\\Builder\\CarrierBuilder' => 'getCarrierBuilderService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\CategoryDecorator' => 'getCategoryDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\CurrencyDecorator' => 'getCurrencyDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\CustomPriceDecorator' => 'getCustomPriceDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\CustomerDecorator' => 'getCustomerDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\LanguageDecorator' => 'getLanguageDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\ManufacturerDecorator' => 'getManufacturerDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\PayloadDecorator' => 'getPayloadDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\ProductDecorator' => 'getProductDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\ProductSupplierDecorator' => 'getProductSupplierDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\StockDecorator' => 'getStockDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\StoreDecorator' => 'getStoreDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\SupplierDecorator' => 'getSupplierDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Decorator\\WishlistDecorator' => 'getWishlistDecoratorService',
            'PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter' => 'getArrayFormatterService',
            'PrestaShop\\Module\\PsEventbus\\Formatter\\DateFormatter' => 'getDateFormatterService',
            'PrestaShop\\Module\\PsEventbus\\Formatter\\JsonFormatter' => 'getJsonFormatterService',
            'PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandler' => 'getErrorHandlerService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\CarrierDataProvider' => 'getCarrierDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\CartDataProvider' => 'getCartDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\CategoryDataProvider' => 'getCategoryDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\CurrencyDataProvider' => 'getCurrencyDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\CustomPriceDataProvider' => 'getCustomPriceDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\CustomProductCarrierDataProvider' => 'getCustomProductCarrierDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\CustomerDataProvider' => 'getCustomerDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\GoogleTaxonomyDataProvider' => 'getGoogleTaxonomyDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\LanguageDataProvider' => 'getLanguageDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\ManufacturerDataProvider' => 'getManufacturerDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\ModuleDataProvider' => 'getModuleDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\OrderDataProvider' => 'getOrderDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\ProductDataProvider' => 'getProductDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\ProductSupplierDataProvider' => 'getProductSupplierDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\StockDataProvider' => 'getStockDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\StoreDataProvider' => 'getStoreDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\SupplierDataProvider' => 'getSupplierDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Provider\\WishlistDataProvider' => 'getWishlistDataProviderService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\BundleRepository' => 'getBundleRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CarrierRepository' => 'getCarrierRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CartProductRepository' => 'getCartProductRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CartRepository' => 'getCartRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CartRuleRepository' => 'getCartRuleRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CategoryRepository' => 'getCategoryRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository' => 'getConfigurationRepository2Service',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CountryRepository' => 'getCountryRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CurrencyRepository' => 'getCurrencyRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CustomPriceRepository' => 'getCustomPriceRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\CustomerRepository' => 'getCustomerRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\DeletedObjectsRepository' => 'getDeletedObjectsRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\EventbusSyncRepository' => 'getEventbusSyncRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\GoogleTaxonomyRepository' => 'getGoogleTaxonomyRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ImageRepository' => 'getImageRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\IncrementalSyncRepository' => 'getIncrementalSyncRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository' => 'getLanguageRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ManufacturerRepository' => 'getManufacturerRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ModuleRepository' => 'getModuleRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\OrderCartRuleRepository' => 'getOrderCartRuleRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\OrderDetailsRepository' => 'getOrderDetailsRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\OrderHistoryRepository' => 'getOrderHistoryRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\OrderRepository' => 'getOrderRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ProductCarrierRepository' => 'getProductCarrierRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ProductRepository' => 'getProductRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ProductSupplierRepository' => 'getProductSupplierRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ServerInformationRepository' => 'getServerInformationRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ShopRepository' => 'getShopRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\SpecificPriceRepository' => 'getSpecificPriceRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\StateRepository' => 'getStateRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\StockMvtRepository' => 'getStockMvtRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\StockRepository' => 'getStockRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\StoreRepository' => 'getStoreRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\SupplierRepository' => 'getSupplierRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\TaxRepository' => 'getTaxRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\ThemeRepository' => 'getThemeRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\WishlistProductRepository' => 'getWishlistProductRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Repository\\WishlistRepository' => 'getWishlistRepositoryService',
            'PrestaShop\\Module\\PsEventbus\\Service\\ApiAuthorizationService' => 'getApiAuthorizationServiceService',
            'PrestaShop\\Module\\PsEventbus\\Service\\CacheService' => 'getCacheServiceService',
            'PrestaShop\\Module\\PsEventbus\\Service\\CompressionService' => 'getCompressionServiceService',
            'PrestaShop\\Module\\PsEventbus\\Service\\DeletedObjectsService' => 'getDeletedObjectsServiceService',
            'PrestaShop\\Module\\PsEventbus\\Service\\PresenterService' => 'getPresenterServiceService',
            'PrestaShop\\Module\\PsEventbus\\Service\\ProxyService' => 'getProxyServiceService',
            'PrestaShop\\Module\\PsEventbus\\Service\\SpecificPriceService' => 'getSpecificPriceServiceService',
            'PrestaShop\\Module\\PsEventbus\\Service\\SynchronizationService' => 'getSynchronizationServiceService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter' => 'getConfigurationAdapterService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Buffer\\TemplateBuffer' => 'getTemplateBufferService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Config\\Env' => 'getEnvService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Handler\\ErrorHandler' => 'getErrorHandler2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Handler\\RemarketingHookHandler' => 'getRemarketingHookHandlerService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\CartEventDataProvider' => 'getCartEventDataProviderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\ConversionEventDataProvider' => 'getConversionEventDataProviderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\PageViewEventDataProvider' => 'getPageViewEventDataProviderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\ProductDataProvider' => 'getProductDataProvider2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\PurchaseEventDataProvider' => 'getPurchaseEventDataProviderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\VerificationTagDataProvider' => 'getVerificationTagDataProviderService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\AttributesRepository' => 'getAttributesRepositoryService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CarrierRepository' => 'getCarrierRepository2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CountryRepository' => 'getCountryRepository2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CurrencyRepository' => 'getCurrencyRepository2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\LanguageRepository' => 'getLanguageRepository2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\ProductRepository' => 'getProductRepository2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\StateRepository' => 'getStateRepository2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\TabRepository' => 'getTabRepositoryService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\TaxRepository' => 'getTaxRepository2Service',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\VerificationTagRepository' => 'getVerificationTagRepositoryService',
            'PrestaShop\\Module\\PsxMarketingWithGoogle\\Tracker\\Segment' => 'getSegmentService',
            'PrestaShop\\PrestaShop\\Adapter\\Configuration' => 'getConfiguration2Service',
            'PrestaShop\\PrestaShop\\Adapter\\ContextStateManager' => 'getContextStateManagerService',
            'PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider' => 'getCurrencyDataProvider2Service',
            'PrestaShop\\PrestaShop\\Adapter\\LegacyContext' => 'getLegacyContextService',
            'PrestaShop\\PrestaShop\\Adapter\\Tools' => 'getToolsService',
            'PrestaShop\\PrestaShop\\Core\\Localization\\Locale\\Repository' => 'getRepositoryService',
            'PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts' => 'getPsAccountsService',
            'PrestaShop\\PsAccountsInstaller\\Installer\\Installer' => 'getInstaller2Service',
            'TrustedshopsAddon\\API\\Logger\\ApiLogger' => 'getApiLoggerService',
            'TrustedshopsAddon\\Repository\\ChannelRepository' => 'getChannelRepositoryService',
            'TrustedshopsAddon\\Repository\\OrderProductRepository' => 'getOrderProductRepositoryService',
            'TrustedshopsAddon\\Service\\ChannelService' => 'getChannelServiceService',
            'TrustedshopsAddon\\Service\\CredentialsService' => 'getCredentialsServiceService',
            'TrustedshopsAddon\\Service\\HookService' => 'getHookServiceService',
            'TrustedshopsAddon\\Service\\OrderProductService' => 'getOrderProductServiceService',
            'TrustedshopsAddon\\Service\\OrderStatusService' => 'getOrderStatusServiceService',
            'annotation_reader' => 'getAnnotationReaderService',
            'array' => 'getArrayService',
            'configuration' => 'getConfiguration3Service',
            'container.env_var_processors_locator' => 'getContainer_EnvVarProcessorsLocatorService',
            'context' => 'getContextService',
            'db' => 'getDbService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'hashing' => 'getHashingService',
            'inpost.shipping.adapter.assets_manager' => 'getInpost_Shipping_Adapter_AssetsManagerService',
            'inpost.shipping.configuration.carriers' => 'getInpost_Shipping_Configuration_CarriersService',
            'inpost.shipping.configuration.checkout' => 'getInpost_Shipping_Configuration_CheckoutService',
            'inpost.shipping.configuration.geo_widget' => 'getInpost_Shipping_Configuration_GeoWidgetService',
            'inpost.shipping.configuration.orders' => 'getInpost_Shipping_Configuration_OrdersService',
            'inpost.shipping.configuration.shipx' => 'getInpost_Shipping_Configuration_ShipxService',
            'inpost.shipping.configuration.shop' => 'getInpost_Shipping_Configuration_ShopService',
            'inpost.shipping.configuration.szybkie_zwroty' => 'getInpost_Shipping_Configuration_SzybkieZwrotyService',
            'inpost.shipping.data_provider.customer_choice' => 'getInpost_Shipping_DataProvider_CustomerChoiceService',
            'inpost.shipping.data_provider.point' => 'getInpost_Shipping_DataProvider_PointService',
            'inpost.shipping.geo_widget.token_provider' => 'getInpost_Shipping_GeoWidget_TokenProviderService',
            'inpost.shipping.handler.check_delivery_option' => 'getInpost_Shipping_Handler_CheckDeliveryOptionService',
            'inpost.shipping.handler.cron_jobs' => 'getInpost_Shipping_Handler_CronJobsService',
            'inpost.shipping.handler.shipment.update_status' => 'getInpost_Shipping_Handler_Shipment_UpdateStatusService',
            'inpost.shipping.hook_dispatcher' => 'getInpost_Shipping_HookDispatcherService',
            'inpost.shipping.presenter.checkout_data' => 'getInpost_Shipping_Presenter_CheckoutDataService',
            'inpost.shipping.presenter.point' => 'getInpost_Shipping_Presenter_PointService',
            'inpost.shipping.presenter.point_address' => 'getInpost_Shipping_Presenter_PointAddressService',
            'inpost.shipping.shipx.factory.authorized_request' => 'getInpost_Shipping_Shipx_Factory_AuthorizedRequestService',
            'inpost.shipping.shipx.factory.organization_request' => 'getInpost_Shipping_Shipx_Factory_OrganizationRequestService',
            'inpost.shipping.shipx.factory.points_api_request' => 'getInpost_Shipping_Shipx_Factory_PointsApiRequestService',
            'inpost.shipping.shipx.factory.request' => 'getInpost_Shipping_Shipx_Factory_RequestService',
            'inpost.shipping.shop_context' => 'getInpost_Shipping_ShopContextService',
            'inpost.shipping.time_checker' => 'getInpost_Shipping_TimeCheckerService',
            'inpost.shipping.updater.cart_choice' => 'getInpost_Shipping_Updater_CartChoiceService',
            'klaviyops.klaviyo_api_wrapper' => 'getKlaviyops_KlaviyoApiWrapperService',
            'klaviyops.klaviyo_service.coupon_generator' => 'getKlaviyops_KlaviyoService_CouponGeneratorService',
            'klaviyops.klaviyo_service.customer_event_service' => 'getKlaviyops_KlaviyoService_CustomerEventServiceService',
            'klaviyops.klaviyo_service.order_event' => 'getKlaviyops_KlaviyoService_OrderEventService',
            'klaviyops.module' => 'getKlaviyops_ModuleService',
            'klaviyops.prestashop_components.context' => 'getKlaviyops_PrestashopComponents_ContextService',
            'klaviyops.prestashop_services.cart_rule' => 'getKlaviyops_PrestashopServices_CartRuleService',
            'klaviyops.prestashop_services.context' => 'getKlaviyops_PrestashopServices_ContextService',
            'klaviyops.prestashop_services.customer' => 'getKlaviyops_PrestashopServices_CustomerService',
            'klaviyops.prestashop_services.logger' => 'getKlaviyops_PrestashopServices_LoggerService',
            'klaviyops.prestashop_services.order' => 'getKlaviyops_PrestashopServices_OrderService',
            'klaviyops.prestashop_services.product' => 'getKlaviyops_PrestashopServices_ProductService',
            'klaviyops.prestashop_services.validate' => 'getKlaviyops_PrestashopServices_ValidateService',
            'klaviyops.util_services.csv' => 'getKlaviyops_UtilServices_CsvService',
            'klaviyops.util_services.env' => 'getKlaviyops_UtilServices_EnvService',
            'prestashop.adapter.data_provider.country' => 'getPrestashop_Adapter_DataProvider_CountryService',
            'prestashop.adapter.environment' => 'getPrestashop_Adapter_EnvironmentService',
            'prestashop.adapter.module.repository.module_repository' => 'getPrestashop_Adapter_Module_Repository_ModuleRepositoryService',
            'prestashop.adapter.validate' => 'getPrestashop_Adapter_ValidateService',
            'prestashop.core.circuit_breaker.advanced_factory' => 'getPrestashop_Core_CircuitBreaker_AdvancedFactoryService',
            'prestashop.core.circuit_breaker.cache' => 'getPrestashop_Core_CircuitBreaker_CacheService',
            'prestashop.core.circuit_breaker.doctrine_cache' => 'getPrestashop_Core_CircuitBreaker_DoctrineCacheService',
            'prestashop.core.circuit_breaker.storage' => 'getPrestashop_Core_CircuitBreaker_StorageService',
            'prestashop.core.filter.front_end_object.cart' => 'getPrestashop_Core_Filter_FrontEndObject_CartService',
            'prestashop.core.filter.front_end_object.configuration' => 'getPrestashop_Core_Filter_FrontEndObject_ConfigurationService',
            'prestashop.core.filter.front_end_object.customer' => 'getPrestashop_Core_Filter_FrontEndObject_CustomerService',
            'prestashop.core.filter.front_end_object.main' => 'getPrestashop_Core_Filter_FrontEndObject_MainService',
            'prestashop.core.filter.front_end_object.product' => 'getPrestashop_Core_Filter_FrontEndObject_ProductService',
            'prestashop.core.filter.front_end_object.product_collection' => 'getPrestashop_Core_Filter_FrontEndObject_ProductCollectionService',
            'prestashop.core.filter.front_end_object.search_result_product' => 'getPrestashop_Core_Filter_FrontEndObject_SearchResultProductService',
            'prestashop.core.filter.front_end_object.search_result_product_collection' => 'getPrestashop_Core_Filter_FrontEndObject_SearchResultProductCollectionService',
            'prestashop.core.filter.front_end_object.shop' => 'getPrestashop_Core_Filter_FrontEndObject_ShopService',
            'prestashop.core.localization.cache.adapter' => 'getPrestashop_Core_Localization_Cache_AdapterService',
            'prestashop.core.localization.cldr.cache.adapter' => 'getPrestashop_Core_Localization_Cldr_Cache_AdapterService',
            'prestashop.core.localization.cldr.datalayer.locale_cache' => 'getPrestashop_Core_Localization_Cldr_Datalayer_LocaleCacheService',
            'prestashop.core.localization.cldr.datalayer.locale_reference' => 'getPrestashop_Core_Localization_Cldr_Datalayer_LocaleReferenceService',
            'prestashop.core.localization.cldr.locale_data_source' => 'getPrestashop_Core_Localization_Cldr_LocaleDataSourceService',
            'prestashop.core.localization.cldr.locale_repository' => 'getPrestashop_Core_Localization_Cldr_LocaleRepositoryService',
            'prestashop.core.localization.cldr.reader' => 'getPrestashop_Core_Localization_Cldr_ReaderService',
            'prestashop.core.localization.currency.datasource' => 'getPrestashop_Core_Localization_Currency_DatasourceService',
            'prestashop.core.localization.currency.middleware.cache' => 'getPrestashop_Core_Localization_Currency_Middleware_CacheService',
            'prestashop.core.localization.currency.middleware.database' => 'getPrestashop_Core_Localization_Currency_Middleware_DatabaseService',
            'prestashop.core.localization.currency.middleware.installed' => 'getPrestashop_Core_Localization_Currency_Middleware_InstalledService',
            'prestashop.core.localization.currency.middleware.reference' => 'getPrestashop_Core_Localization_Currency_Middleware_ReferenceService',
            'prestashop.core.localization.currency.repository' => 'getPrestashop_Core_Localization_Currency_RepositoryService',
            'prestashop.core.localization.locale.context_locale' => 'getPrestashop_Core_Localization_Locale_ContextLocaleService',
            'prestashop.core.string.character_cleaner' => 'getPrestashop_Core_String_CharacterCleanerService',
            'prestashop.database.naming_strategy' => 'getPrestashop_Database_NamingStrategyService',
            'prestashop.translation.translator_language_loader' => 'getPrestashop_Translation_TranslatorLanguageLoaderService',
            'product_comment_criterion_repository' => 'getProductCommentCriterionRepositoryService',
            'product_comment_repository' => 'getProductCommentRepositoryService',
            'ps_accounts.context' => 'getPsAccounts_ContextService',
            'ps_accounts.logger' => 'getPsAccounts_LoggerService',
            'ps_accounts.module' => 'getPsAccounts_ModuleService',
            'ps_eventbus' => 'getPsEventbusService',
            'ps_eventbus.context' => 'getPsEventbus_ContextService',
            'ps_eventbus.controller' => 'getPsEventbus_ControllerService',
            'ps_eventbus.cookie' => 'getPsEventbus_CookieService',
            'ps_eventbus.currency' => 'getPsEventbus_CurrencyService',
            'ps_eventbus.db' => 'getPsEventbus_DbService',
            'ps_eventbus.language' => 'getPsEventbus_LanguageService',
            'ps_eventbus.link' => 'getPsEventbus_LinkService',
            'ps_eventbus.shop' => 'getPsEventbus_ShopService',
            'ps_eventbus.smarty' => 'getPsEventbus_SmartyService',
            'psxmarketingwithgoogle' => 'getPsxmarketingwithgoogleService',
            'psxmarketingwithgoogle.context' => 'getPsxmarketingwithgoogle_ContextService',
            'psxmarketingwithgoogle.controller' => 'getPsxmarketingwithgoogle_ControllerService',
            'psxmarketingwithgoogle.cookie' => 'getPsxmarketingwithgoogle_CookieService',
            'psxmarketingwithgoogle.country' => 'getPsxmarketingwithgoogle_CountryService',
            'psxmarketingwithgoogle.currency' => 'getPsxmarketingwithgoogle_CurrencyService',
            'psxmarketingwithgoogle.db' => 'getPsxmarketingwithgoogle_DbService',
            'psxmarketingwithgoogle.language' => 'getPsxmarketingwithgoogle_LanguageService',
            'psxmarketingwithgoogle.link' => 'getPsxmarketingwithgoogle_LinkService',
            'psxmarketingwithgoogle.shop' => 'getPsxmarketingwithgoogle_ShopService',
            'psxmarketingwithgoogle.smarty' => 'getPsxmarketingwithgoogle_SmartyService',
            'prestashop.adapter.tools' => 'getPrestashop_Adapter_ToolsService',
        ];
        $this->aliases = [
            'InPost\\Shipping\\Configuration\\CheckoutConfiguration' => 'inpost.shipping.configuration.checkout',
            'InPost\\Shipping\\DataProvider\\PointDataProvider' => 'inpost.shipping.data_provider.point',
            'PrestaShop\\PrestaShop\\Core\\Currency\\CurrencyDataProviderInterface' => 'PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider',
            'PrestaShop\\PrestaShop\\Core\\Localization\\LocaleInterface' => 'prestashop.core.localization.locale.context_locale',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'prestashop.adapter.context_state_manager' => 'PrestaShop\\PrestaShop\\Adapter\\ContextStateManager',
            'prestashop.adapter.data_provider.currency' => 'PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider',
            'prestashop.adapter.legacy.configuration' => 'PrestaShop\\PrestaShop\\Adapter\\Configuration',
            'prestashop.adapter.legacy.context' => 'PrestaShop\\PrestaShop\\Adapter\\LegacyContext',
            'prestashop.core.localization.cldr.datalayer.top_layer' => 'prestashop.core.localization.cldr.datalayer.locale_cache',
            'prestashop.core.localization.currency.middleware.top_layer' => 'prestashop.core.localization.currency.middleware.cache',
            'prestashop.core.localization.locale.repository' => 'PrestaShop\\PrestaShop\\Core\\Localization\\Locale\\Repository',
        ];
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
            '.service_locator.auTkEjx' => true,
            '.service_locator.zH65KBq' => true,
            'Doctrine\\Bundle\\DoctrineBundle\\Controller\\ProfilerController' => true,
            'Doctrine\\Bundle\\DoctrineBundle\\Dbal\\ManagerRegistryAwareConnectionProvider' => true,
            'Doctrine\\Common\\Persistence\\ManagerRegistry' => true,
            'Doctrine\\DBAL\\Connection' => true,
            'Doctrine\\DBAL\\Connection $defaultConnection' => true,
            'Doctrine\\DBAL\\Driver\\Connection' => true,
            'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand' => true,
            'Doctrine\\ORM\\EntityManagerInterface' => true,
            'Doctrine\\ORM\\EntityManagerInterface $defaultEntityManager' => true,
            'Doctrine\\Persistence\\ManagerRegistry' => true,
            'InPostShipping' => true,
            'InPost\\Shipping\\Api\\PsrHttpImplementationFinder' => true,
            'InPost\\Shipping\\Configuration\\CarriersConfiguration' => true,
            'InPost\\Shipping\\Configuration\\GeoWidgetConfiguration' => true,
            'InPost\\Shipping\\Configuration\\OrdersConfiguration' => true,
            'InPost\\Shipping\\Configuration\\ShipXConfiguration' => true,
            'InPost\\Shipping\\Configuration\\ShopConfiguration' => true,
            'InPost\\Shipping\\Configuration\\SzybkieZwrotyConfiguration' => true,
            'InPost\\Shipping\\DataProvider\\CustomerChoiceDataProvider' => true,
            'InPost\\Shipping\\DataProvider\\LanguageDataProvider' => true,
            'InPost\\Shipping\\GeoWidget\\GeoWidgetTokenProvider' => true,
            'InPost\\Shipping\\Handler\\CronJobsHandler' => true,
            'InPost\\Shipping\\Handler\\Shipment\\UpdateShipmentStatusHandler' => true,
            'InPost\\Shipping\\HookDispatcher' => true,
            'InPost\\Shipping\\Presenter\\PointPresenter' => true,
            'InPost\\Shipping\\PrestaShopContext' => true,
            'InPost\\Shipping\\Repository\\ObjectModel\\ShipmentRepository' => true,
            'InPost\\Shipping\\Repository\\PointRepository' => true,
            'InPost\\Shipping\\ShipX\\RequestFactory\\AuthorizedRequestFactory' => true,
            'InPost\\Shipping\\ShipX\\RequestFactory\\PointsApiRequestFactory' => true,
            'InPost\\Shipping\\ShipX\\RequestFactory\\ShipXRequestFactory' => true,
            'InPost\\Shipping\\ShipX\\ShipXClient' => true,
            'InPost\\Shipping\\ShipX\\ShipXClientFactory' => true,
            'PrestaShopBundle\\DependencyInjection\\CacheAdapterFactory' => true,
            'PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor' => true,
            'PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandlerInterface' => true,
            'PrestaShop\\Module\\PsEventbus\\Service\\ProxyServiceInterface' => true,
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
            'cache.doctrine.orm.default.metadata' => true,
            'cache.doctrine.orm.default.query' => true,
            'cache.doctrine.orm.default.result' => true,
            'data_collector.doctrine' => true,
            'doctrine.cache_clear_metadata_command' => true,
            'doctrine.cache_clear_query_cache_command' => true,
            'doctrine.cache_clear_result_command' => true,
            'doctrine.cache_collection_region_command' => true,
            'doctrine.clear_entity_region_command' => true,
            'doctrine.clear_query_region_command' => true,
            'doctrine.database_create_command' => true,
            'doctrine.database_drop_command' => true,
            'doctrine.database_import_command' => true,
            'doctrine.dbal.connection' => true,
            'doctrine.dbal.connection.configuration' => true,
            'doctrine.dbal.connection.event_manager' => true,
            'doctrine.dbal.connection_factory' => true,
            'doctrine.dbal.default_connection.configuration' => true,
            'doctrine.dbal.default_connection.event_manager' => true,
            'doctrine.dbal.event_manager' => true,
            'doctrine.dbal.logger' => true,
            'doctrine.dbal.logger.backtrace' => true,
            'doctrine.dbal.logger.chain' => true,
            'doctrine.dbal.logger.chain.default' => true,
            'doctrine.dbal.logger.profiling' => true,
            'doctrine.dbal.logger.profiling.default' => true,
            'doctrine.dbal.schema_asset_filter_manager' => true,
            'doctrine.dbal.well_known_schema_asset_filter' => true,
            'doctrine.ensure_production_settings_command' => true,
            'doctrine.mapping_convert_command' => true,
            'doctrine.mapping_import_command' => true,
            'doctrine.mapping_info_command' => true,
            'doctrine.orm.configuration' => true,
            'doctrine.orm.container_repository_factory' => true,
            'doctrine.orm.default_annotation_metadata_driver' => true,
            'doctrine.orm.default_configuration' => true,
            'doctrine.orm.default_entity_listener_resolver' => true,
            'doctrine.orm.default_entity_manager.event_manager' => true,
            'doctrine.orm.default_entity_manager.property_info_extractor' => true,
            'doctrine.orm.default_entity_manager.validator_loader' => true,
            'doctrine.orm.default_listeners.attach_entity_listeners' => true,
            'doctrine.orm.default_manager_configurator' => true,
            'doctrine.orm.default_metadata_cache' => true,
            'doctrine.orm.default_metadata_driver' => true,
            'doctrine.orm.default_query_cache' => true,
            'doctrine.orm.default_result_cache' => true,
            'doctrine.orm.entity_manager.abstract' => true,
            'doctrine.orm.listeners.resolve_target_entity' => true,
            'doctrine.orm.manager_configurator.abstract' => true,
            'doctrine.orm.messenger.event_subscriber.doctrine_clear_entity_manager' => true,
            'doctrine.orm.metadata.annotation_reader' => true,
            'doctrine.orm.naming_strategy.default' => true,
            'doctrine.orm.naming_strategy.underscore' => true,
            'doctrine.orm.naming_strategy.underscore_number_aware' => true,
            'doctrine.orm.proxy_cache_warmer' => true,
            'doctrine.orm.quote_strategy.ansi' => true,
            'doctrine.orm.quote_strategy.default' => true,
            'doctrine.orm.security.user.provider' => true,
            'doctrine.orm.validator.unique' => true,
            'doctrine.orm.validator_initializer' => true,
            'doctrine.query_dql_command' => true,
            'doctrine.query_sql_command' => true,
            'doctrine.schema_create_command' => true,
            'doctrine.schema_drop_command' => true,
            'doctrine.schema_update_command' => true,
            'doctrine.schema_validate_command' => true,
            'doctrine.twig.doctrine_extension' => true,
            'form.type.entity' => true,
            'form.type_guesser.doctrine' => true,
            'inpost.shipping.context' => true,
            'inpost.shipping.data_provider.language' => true,
            'inpost.shipping.db' => true,
            'inpost.shipping.module' => true,
            'inpost.shipping.psr_implementation_locator' => true,
            'messenger.middleware.doctrine_close_connection' => true,
            'messenger.middleware.doctrine_open_transaction_logger' => true,
            'messenger.middleware.doctrine_ping_connection' => true,
            'messenger.middleware.doctrine_transaction' => true,
            'messenger.transport.doctrine.factory' => true,
            'trustedshopseasyintegration' => true,
        ];
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Adapter\Configuration' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Adapter\Configuration
     */
    protected function getConfigurationService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Adapter\\Configuration'] = new \PrestaShop\Module\PsAccounts\Adapter\Configuration(($this->services['ps_accounts.context'] ?? $this->getPsAccounts_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Adapter\Link' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Adapter\Link
     */
    protected function getLinkService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Adapter\\Link'] = new \PrestaShop\Module\PsAccounts\Adapter\Link(($this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext'] ?? $this->getShopContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Api\Client\AccountsClient' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Api\Client\AccountsClient
     */
    protected function getAccountsClientService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\AccountsClient'] = new \PrestaShop\Module\PsAccounts\Api\Client\AccountsClient('https://accounts-api.distribution.prestashop.net/v1/', ($this->services['PrestaShop\\Module\\PsAccounts\\Provider\\ShopProvider'] ?? $this->getShopProviderService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Api\Client\ServicesBillingClient' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Api\Client\ServicesBillingClient
     */
    protected function getServicesBillingClientService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\ServicesBillingClient'] = new \PrestaShop\Module\PsAccounts\Api\Client\ServicesBillingClient('https://billing-api.distribution.prestashop.net/', ($this->services['PrestaShop\\Module\\PsAccounts\\Service\\PsAccountsService'] ?? $this->getPsAccountsServiceService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Provider\\ShopProvider'] ?? $this->getShopProviderService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Api\Client\SsoClient' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Api\Client\SsoClient
     */
    protected function getSsoClientService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\SsoClient'] = new \PrestaShop\Module\PsAccounts\Api\Client\SsoClient('https://auth.prestashop.com/api/v1/');
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Context\ShopContext' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Context\ShopContext
     */
    protected function getShopContextService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext'] = new \PrestaShop\Module\PsAccounts\Context\ShopContext(($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] ?? $this->getConfigurationRepositoryService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\UserTokenRepository'] ?? $this->getUserTokenRepositoryService()), ($this->services['ps_accounts.context'] ?? $this->getPsAccounts_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Handler\Error\Sentry' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Handler\Error\Sentry
     */
    protected function getSentryService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Handler\\Error\\Sentry'] = new \PrestaShop\Module\PsAccounts\Handler\Error\Sentry('https://4c7f6c8dd5aa405b8401a35f5cf26ada@o298402.ingest.sentry.io/5354585', 'production', ($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] ?? $this->getConfigurationRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Installer\Installer' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Installer\Installer
     */
    protected function getInstallerService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Installer\\Installer'] = new \PrestaShop\Module\PsAccounts\Installer\Installer(($this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext'] ?? $this->getShopContextService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Adapter\\Link'] ?? $this->getLinkService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Presenter\PsAccountsPresenter' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Presenter\PsAccountsPresenter
     */
    protected function getPsAccountsPresenterService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Presenter\\PsAccountsPresenter'] = new \PrestaShop\Module\PsAccounts\Presenter\PsAccountsPresenter(($this->services['PrestaShop\\Module\\PsAccounts\\Service\\PsAccountsService'] ?? $this->getPsAccountsServiceService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Provider\\ShopProvider'] ?? $this->getShopProviderService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Service\\ShopLinkAccountService'] ?? $this->getShopLinkAccountServiceService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Installer\\Installer'] ?? $this->getInstallerService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] ?? $this->getConfigurationRepositoryService()), ($this->services['ps_accounts.module'] ?? $this->getPsAccounts_ModuleService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Provider\OAuth2\Oauth2Client' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Provider\OAuth2\Oauth2Client
     */
    protected function getOauth2ClientService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Provider\\OAuth2\\Oauth2Client'] = new \PrestaShop\Module\PsAccounts\Provider\OAuth2\Oauth2Client(($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] ?? $this->getConfigurationRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Provider\OAuth2\PrestaShopClientProvider' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Provider\OAuth2\PrestaShopClientProvider
     */
    protected function getPrestaShopClientProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Provider\\OAuth2\\PrestaShopClientProvider'] = \PrestaShop\Module\PsAccounts\Provider\OAuth2\PrestaShopClientProvider::create();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Provider\OAuth2\PrestaShopSession' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Provider\OAuth2\PrestaShopSession
     */
    protected function getPrestaShopSessionService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Provider\\OAuth2\\PrestaShopSession'] = \PrestaShop\Module\PsAccounts\Factory\PrestaShopSessionFactory::create();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Provider\RsaKeysProvider' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Provider\RsaKeysProvider
     */
    protected function getRsaKeysProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Provider\\RsaKeysProvider'] = new \PrestaShop\Module\PsAccounts\Provider\RsaKeysProvider(($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] ?? $this->getConfigurationRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Provider\ShopProvider' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Provider\ShopProvider
     */
    protected function getShopProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Provider\\ShopProvider'] = new \PrestaShop\Module\PsAccounts\Provider\ShopProvider(($this->services['PrestaShop\\Module\\PsAccounts\\Context\\ShopContext'] ?? $this->getShopContextService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Adapter\\Link'] ?? $this->getLinkService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Repository\ConfigurationRepository' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Repository\ConfigurationRepository
     */
    protected function getConfigurationRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] = new \PrestaShop\Module\PsAccounts\Repository\ConfigurationRepository(($this->services['PrestaShop\\Module\\PsAccounts\\Adapter\\Configuration'] ?? $this->getConfigurationService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Repository\ShopTokenRepository' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Repository\ShopTokenRepository
     */
    protected function getShopTokenRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ShopTokenRepository'] = new \PrestaShop\Module\PsAccounts\Repository\ShopTokenRepository(($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] ?? $this->getConfigurationRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Repository\UserTokenRepository' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Repository\UserTokenRepository
     */
    protected function getUserTokenRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Repository\\UserTokenRepository'] = new \PrestaShop\Module\PsAccounts\Repository\UserTokenRepository(($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] ?? $this->getConfigurationRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Service\AnalyticsService' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Service\AnalyticsService
     */
    protected function getAnalyticsServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Service\\AnalyticsService'] = new \PrestaShop\Module\PsAccounts\Service\AnalyticsService('pEJGnRxw47CU01efFjMyl1S7YcxshLxl', ($this->services['ps_accounts.logger'] ?? $this->getPsAccounts_LoggerService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Service\PsAccountsService' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Service\PsAccountsService
     */
    protected function getPsAccountsServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Service\\PsAccountsService'] = new \PrestaShop\Module\PsAccounts\Service\PsAccountsService(($this->services['ps_accounts.module'] ?? $this->getPsAccounts_ModuleService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ShopTokenRepository'] ?? $this->getShopTokenRepositoryService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\UserTokenRepository'] ?? $this->getUserTokenRepositoryService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Adapter\\Link'] ?? $this->getLinkService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Service\PsBillingService' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Service\PsBillingService
     */
    protected function getPsBillingServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Service\\PsBillingService'] = new \PrestaShop\Module\PsAccounts\Service\PsBillingService(($this->services['PrestaShop\\Module\\PsAccounts\\Api\\Client\\ServicesBillingClient'] ?? $this->getServicesBillingClientService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ShopTokenRepository'] ?? $this->getShopTokenRepositoryService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] ?? $this->getConfigurationRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsAccounts\Service\ShopLinkAccountService' shared service.
     *
     * @return \PrestaShop\Module\PsAccounts\Service\ShopLinkAccountService
     */
    protected function getShopLinkAccountServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsAccounts\\Service\\ShopLinkAccountService'] = new \PrestaShop\Module\PsAccounts\Service\ShopLinkAccountService(($this->services['PrestaShop\\Module\\PsAccounts\\Provider\\RsaKeysProvider'] ?? $this->getRsaKeysProviderService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ShopTokenRepository'] ?? $this->getShopTokenRepositoryService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\UserTokenRepository'] ?? $this->getUserTokenRepositoryService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Provider\\OAuth2\\Oauth2Client'] ?? $this->getOauth2ClientService()), ($this->services['PrestaShop\\Module\\PsAccounts\\Repository\\ConfigurationRepository'] ?? $this->getConfigurationRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Api\CollectorApiClient' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Api\CollectorApiClient
     */
    protected function getCollectorApiClientService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Api\\CollectorApiClient'] = new \PrestaShop\Module\PsEventbus\Api\CollectorApiClient(($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] ?? $this->getPsAccountsService()), 'https://eventbus-proxy.psessentials.net', ($this->services['ps_eventbus'] ?? $this->getPsEventbusService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Api\SyncApiClient' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Api\SyncApiClient
     */
    protected function getSyncApiClientService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Api\\SyncApiClient'] = new \PrestaShop\Module\PsEventbus\Api\SyncApiClient(($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] ?? $this->getPsAccountsService()), 'https://eventbus-sync.psessentials.net', ($this->services['ps_eventbus'] ?? $this->getPsEventbusService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Builder\CarrierBuilder' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Builder\CarrierBuilder
     */
    protected function getCarrierBuilderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Builder\\CarrierBuilder'] = new \PrestaShop\Module\PsEventbus\Builder\CarrierBuilder(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CarrierRepository'] ?? $this->getCarrierRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CountryRepository'] ?? $this->getCountryRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StateRepository'] ?? $this->getStateRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\TaxRepository'] ?? $this->getTaxRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\CategoryDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\CategoryDecorator
     */
    protected function getCategoryDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CategoryDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\CategoryDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\CurrencyDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\CurrencyDecorator
     */
    protected function getCurrencyDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CurrencyDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\CurrencyDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\CustomPriceDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\CustomPriceDecorator
     */
    protected function getCustomPriceDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CustomPriceDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\CustomPriceDecorator(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Service\\SpecificPriceService'] ?? $this->getSpecificPriceServiceService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\CustomerDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\CustomerDecorator
     */
    protected function getCustomerDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CustomerDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\CustomerDecorator(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\LanguageDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\LanguageDecorator
     */
    protected function getLanguageDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\LanguageDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\LanguageDecorator(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository())), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ShopRepository'] ?? $this->getShopRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\ManufacturerDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\ManufacturerDecorator
     */
    protected function getManufacturerDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ManufacturerDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\ManufacturerDecorator(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\PayloadDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\PayloadDecorator
     */
    protected function getPayloadDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\PayloadDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\PayloadDecorator(($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\DateFormatter'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\DateFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\DateFormatter())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\ProductDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\ProductDecorator
     */
    protected function getProductDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ProductDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\ProductDecorator(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository'] ?? $this->getLanguageRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ProductRepository'] ?? $this->getProductRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CategoryRepository'] ?? $this->getCategoryRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\ArrayFormatter())), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\BundleRepository'] ?? $this->getBundleRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\ProductSupplierDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\ProductSupplierDecorator
     */
    protected function getProductSupplierDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ProductSupplierDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\ProductSupplierDecorator(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\StockDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\StockDecorator
     */
    protected function getStockDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\StockDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\StockDecorator(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\StoreDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\StoreDecorator
     */
    protected function getStoreDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\StoreDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\StoreDecorator(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\SupplierDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\SupplierDecorator
     */
    protected function getSupplierDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\SupplierDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\SupplierDecorator(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Decorator\WishlistDecorator' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Decorator\WishlistDecorator
     */
    protected function getWishlistDecoratorService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\WishlistDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\WishlistDecorator();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Formatter\ArrayFormatter' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Formatter\ArrayFormatter
     */
    protected function getArrayFormatterService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\ArrayFormatter();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Formatter\DateFormatter' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Formatter\DateFormatter
     */
    protected function getDateFormatterService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\DateFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\DateFormatter();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Formatter\JsonFormatter' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Formatter\JsonFormatter
     */
    protected function getJsonFormatterService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\JsonFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\JsonFormatter();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Handler\ErrorHandler\ErrorHandler' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Handler\ErrorHandler\ErrorHandler
     */
    protected function getErrorHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandler'] = new \PrestaShop\Module\PsEventbus\Handler\ErrorHandler\ErrorHandler(($this->services['ps_eventbus'] ?? $this->getPsEventbusService()), ($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] ?? $this->getPsAccountsService()), 'https://457f191226df4b8f9a0d7bf6f250bab2@o298402.ingest.sentry.io/6066714', 'production');
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\CarrierDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\CarrierDataProvider
     */
    protected function getCarrierDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\CarrierDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\CarrierDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository())), ($this->services['PrestaShop\\Module\\PsEventbus\\Builder\\CarrierBuilder'] ?? $this->getCarrierBuilderService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CarrierRepository'] ?? $this->getCarrierRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository'] ?? $this->getLanguageRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\CartDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\CartDataProvider
     */
    protected function getCartDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\CartDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\CartDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartRepository'] ?? $this->getCartRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartProductRepository'] ?? $this->getCartProductRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartRuleRepository'] ?? $this->getCartRuleRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\CategoryDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\CategoryDataProvider
     */
    protected function getCategoryDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\CategoryDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\CategoryDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CategoryRepository'] ?? $this->getCategoryRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CategoryDecorator'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CategoryDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\CategoryDecorator())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\CurrencyDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\CurrencyDataProvider
     */
    protected function getCurrencyDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\CurrencyDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\CurrencyDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CurrencyRepository'] ?? $this->getCurrencyRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CurrencyDecorator'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CurrencyDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\CurrencyDecorator())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\CustomPriceDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\CustomPriceDataProvider
     */
    protected function getCustomPriceDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\CustomPriceDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\CustomPriceDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CustomPriceRepository'] ?? $this->getCustomPriceRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CustomPriceDecorator'] ?? $this->getCustomPriceDecoratorService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\CustomProductCarrierDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\CustomProductCarrierDataProvider
     */
    protected function getCustomProductCarrierDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\CustomProductCarrierDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\CustomProductCarrierDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ProductCarrierRepository'] ?? $this->getProductCarrierRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\CustomerDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\CustomerDataProvider
     */
    protected function getCustomerDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\CustomerDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\CustomerDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CustomerRepository'] ?? $this->getCustomerRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\CustomerDecorator'] ?? $this->getCustomerDecoratorService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\GoogleTaxonomyDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\GoogleTaxonomyDataProvider
     */
    protected function getGoogleTaxonomyDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\GoogleTaxonomyDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\GoogleTaxonomyDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\GoogleTaxonomyRepository'] ?? $this->getGoogleTaxonomyRepositoryService()), ($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\LanguageDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\LanguageDataProvider
     */
    protected function getLanguageDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\LanguageDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\LanguageDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository'] ?? $this->getLanguageRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\LanguageDecorator'] ?? $this->getLanguageDecoratorService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\ManufacturerDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\ManufacturerDataProvider
     */
    protected function getManufacturerDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\ManufacturerDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\ManufacturerDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ManufacturerRepository'] ?? $this->getManufacturerRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ManufacturerDecorator'] ?? $this->getManufacturerDecoratorService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\ModuleDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\ModuleDataProvider
     */
    protected function getModuleDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\ModuleDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\ModuleDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ModuleRepository'] ?? $this->getModuleRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ShopRepository'] ?? $this->getShopRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\OrderDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\OrderDataProvider
     */
    protected function getOrderDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\OrderDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\OrderDataProvider(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderRepository'] ?? $this->getOrderRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderDetailsRepository'] ?? $this->getOrderDetailsRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\ArrayFormatter())), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderHistoryRepository'] ?? $this->getOrderHistoryRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderCartRuleRepository'] ?? $this->getOrderCartRuleRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\ProductDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\ProductDataProvider
     */
    protected function getProductDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\ProductDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\ProductDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ProductRepository'] ?? $this->getProductRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ProductDecorator'] ?? $this->getProductDecoratorService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Provider\\ProductSupplierDataProvider'] ?? $this->getProductSupplierDataProviderService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository'] ?? $this->getLanguageRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\ProductSupplierDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\ProductSupplierDataProvider
     */
    protected function getProductSupplierDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\ProductSupplierDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\ProductSupplierDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ProductSupplierRepository'] ?? $this->getProductSupplierRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\ProductSupplierDecorator'] ?? $this->getProductSupplierDecoratorService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\StockDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\StockDataProvider
     */
    protected function getStockDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\StockDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\StockDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StockRepository'] ?? $this->getStockRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StockMvtRepository'] ?? $this->getStockMvtRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\StockDecorator'] ?? $this->getStockDecoratorService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\ArrayFormatter())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\StoreDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\StoreDataProvider
     */
    protected function getStoreDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\StoreDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\StoreDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StoreRepository'] ?? $this->getStoreRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\StoreDecorator'] ?? $this->getStoreDecoratorService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\SupplierDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\SupplierDataProvider
     */
    protected function getSupplierDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\SupplierDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\SupplierDataProvider(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\SupplierRepository'] ?? $this->getSupplierRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\SupplierDecorator'] ?? $this->getSupplierDecoratorService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Provider\WishlistDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Provider\WishlistDataProvider
     */
    protected function getWishlistDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Provider\\WishlistDataProvider'] = new \PrestaShop\Module\PsEventbus\Provider\WishlistDataProvider(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\WishlistRepository'] ?? $this->getWishlistRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\WishlistProductRepository'] ?? $this->getWishlistProductRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\WishlistDecorator'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\WishlistDecorator'] = new \PrestaShop\Module\PsEventbus\Decorator\WishlistDecorator())), ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\ArrayFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\ArrayFormatter())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\BundleRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\BundleRepository
     */
    protected function getBundleRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\BundleRepository'] = new \PrestaShop\Module\PsEventbus\Repository\BundleRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CarrierRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CarrierRepository
     */
    protected function getCarrierRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CarrierRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CarrierRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()), ($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CartProductRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CartProductRepository
     */
    protected function getCartProductRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartProductRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CartProductRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()), ($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CartRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CartRepository
     */
    protected function getCartRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CartRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()), ($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CartRuleRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CartRuleRepository
     */
    protected function getCartRuleRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CartRuleRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CartRuleRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CategoryRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CategoryRepository
     */
    protected function getCategoryRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CategoryRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CategoryRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()), ($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository
     */
    protected function getConfigurationRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CountryRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CountryRepository
     */
    protected function getCountryRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CountryRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CountryRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()), ($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CurrencyRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CurrencyRepository
     */
    protected function getCurrencyRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CurrencyRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CurrencyRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()), ($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CustomPriceRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CustomPriceRepository
     */
    protected function getCustomPriceRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CustomPriceRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CustomPriceRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()), ($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\CustomerRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\CustomerRepository
     */
    protected function getCustomerRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CustomerRepository'] = new \PrestaShop\Module\PsEventbus\Repository\CustomerRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()), ($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\DeletedObjectsRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\DeletedObjectsRepository
     */
    protected function getDeletedObjectsRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\DeletedObjectsRepository'] = new \PrestaShop\Module\PsEventbus\Repository\DeletedObjectsRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandler'] ?? $this->getErrorHandlerService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\EventbusSyncRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\EventbusSyncRepository
     */
    protected function getEventbusSyncRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\EventbusSyncRepository'] = new \PrestaShop\Module\PsEventbus\Repository\EventbusSyncRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()), ($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\GoogleTaxonomyRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\GoogleTaxonomyRepository
     */
    protected function getGoogleTaxonomyRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\GoogleTaxonomyRepository'] = new \PrestaShop\Module\PsEventbus\Repository\GoogleTaxonomyRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ImageRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ImageRepository
     */
    protected function getImageRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ImageRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ImageRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\IncrementalSyncRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\IncrementalSyncRepository
     */
    protected function getIncrementalSyncRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\IncrementalSyncRepository'] = new \PrestaShop\Module\PsEventbus\Repository\IncrementalSyncRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()), ($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandler'] ?? $this->getErrorHandlerService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\LanguageRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\LanguageRepository
     */
    protected function getLanguageRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository'] = new \PrestaShop\Module\PsEventbus\Repository\LanguageRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()), ($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ManufacturerRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ManufacturerRepository
     */
    protected function getManufacturerRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ManufacturerRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ManufacturerRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()), ($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ModuleRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ModuleRepository
     */
    protected function getModuleRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ModuleRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ModuleRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\OrderCartRuleRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\OrderCartRuleRepository
     */
    protected function getOrderCartRuleRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderCartRuleRepository'] = new \PrestaShop\Module\PsEventbus\Repository\OrderCartRuleRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\OrderDetailsRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\OrderDetailsRepository
     */
    protected function getOrderDetailsRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderDetailsRepository'] = new \PrestaShop\Module\PsEventbus\Repository\OrderDetailsRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()), ($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\OrderHistoryRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\OrderHistoryRepository
     */
    protected function getOrderHistoryRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderHistoryRepository'] = new \PrestaShop\Module\PsEventbus\Repository\OrderHistoryRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\OrderRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\OrderRepository
     */
    protected function getOrderRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\OrderRepository'] = new \PrestaShop\Module\PsEventbus\Repository\OrderRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ProductCarrierRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ProductCarrierRepository
     */
    protected function getProductCarrierRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ProductCarrierRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ProductCarrierRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()), ($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ProductRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ProductRepository
     */
    protected function getProductRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ProductRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ProductRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()), ($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ProductSupplierRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ProductSupplierRepository
     */
    protected function getProductSupplierRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ProductSupplierRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ProductSupplierRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ServerInformationRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ServerInformationRepository
     */
    protected function getServerInformationRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ServerInformationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ServerInformationRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()), ($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\CurrencyRepository'] ?? $this->getCurrencyRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\LanguageRepository'] ?? $this->getLanguageRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ConfigurationRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ConfigurationRepository())), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ShopRepository'] ?? $this->getShopRepositoryService()), ($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] ?? $this->getPsAccountsService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandler'] ?? $this->getErrorHandlerService()), ['EVENT_BUS_SYNC_API_URL' => 'https://eventbus-sync.psessentials.net', 'EVENT_BUS_PROXY_API_URL' => 'https://eventbus-proxy.psessentials.net']);
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ShopRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ShopRepository
     */
    protected function getShopRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ShopRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ShopRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\SpecificPriceRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\SpecificPriceRepository
     */
    protected function getSpecificPriceRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\SpecificPriceRepository'] = new \PrestaShop\Module\PsEventbus\Repository\SpecificPriceRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\StateRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\StateRepository
     */
    protected function getStateRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StateRepository'] = new \PrestaShop\Module\PsEventbus\Repository\StateRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\StockMvtRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\StockMvtRepository
     */
    protected function getStockMvtRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StockMvtRepository'] = new \PrestaShop\Module\PsEventbus\Repository\StockMvtRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\StockRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\StockRepository
     */
    protected function getStockRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StockRepository'] = new \PrestaShop\Module\PsEventbus\Repository\StockRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()), ($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\StoreRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\StoreRepository
     */
    protected function getStoreRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\StoreRepository'] = new \PrestaShop\Module\PsEventbus\Repository\StoreRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()), ($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\SupplierRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\SupplierRepository
     */
    protected function getSupplierRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\SupplierRepository'] = new \PrestaShop\Module\PsEventbus\Repository\SupplierRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()), ($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\TaxRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\TaxRepository
     */
    protected function getTaxRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\TaxRepository'] = new \PrestaShop\Module\PsEventbus\Repository\TaxRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()), ($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\ThemeRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\ThemeRepository
     */
    protected function getThemeRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\ThemeRepository'] = new \PrestaShop\Module\PsEventbus\Repository\ThemeRepository(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()), ($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\WishlistProductRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\WishlistProductRepository
     */
    protected function getWishlistProductRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\WishlistProductRepository'] = new \PrestaShop\Module\PsEventbus\Repository\WishlistProductRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Repository\WishlistRepository' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Repository\WishlistRepository
     */
    protected function getWishlistRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Repository\\WishlistRepository'] = new \PrestaShop\Module\PsEventbus\Repository\WishlistRepository(($this->services['ps_eventbus.db'] ?? $this->getPsEventbus_DbService()), ($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\ApiAuthorizationService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\ApiAuthorizationService
     */
    protected function getApiAuthorizationServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\ApiAuthorizationService'] = new \PrestaShop\Module\PsEventbus\Service\ApiAuthorizationService(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\EventbusSyncRepository'] ?? $this->getEventbusSyncRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Api\\SyncApiClient'] ?? $this->getSyncApiClientService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\CacheService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\CacheService
     */
    protected function getCacheServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\CacheService'] = new \PrestaShop\Module\PsEventbus\Service\CacheService();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\CompressionService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\CompressionService
     */
    protected function getCompressionServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\CompressionService'] = new \PrestaShop\Module\PsEventbus\Service\CompressionService(($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\JsonFormatter'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\JsonFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\JsonFormatter())));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\DeletedObjectsService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\DeletedObjectsService
     */
    protected function getDeletedObjectsServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\DeletedObjectsService'] = new \PrestaShop\Module\PsEventbus\Service\DeletedObjectsService(($this->services['ps_eventbus.context'] ?? $this->getPsEventbus_ContextService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\DeletedObjectsRepository'] ?? $this->getDeletedObjectsRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Service\\ProxyService'] ?? $this->getProxyServiceService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\PresenterService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\PresenterService
     */
    protected function getPresenterServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\PresenterService'] = new \PrestaShop\Module\PsEventbus\Service\PresenterService();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\ProxyService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\ProxyService
     */
    protected function getProxyServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\ProxyService'] = new \PrestaShop\Module\PsEventbus\Service\ProxyService(($this->services['PrestaShop\\Module\\PsEventbus\\Api\\CollectorApiClient'] ?? $this->getCollectorApiClientService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\JsonFormatter'] ?? ($this->services['PrestaShop\\Module\\PsEventbus\\Formatter\\JsonFormatter'] = new \PrestaShop\Module\PsEventbus\Formatter\JsonFormatter())), ($this->services['PrestaShop\\Module\\PsEventbus\\Handler\\ErrorHandler\\ErrorHandler'] ?? $this->getErrorHandlerService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\SpecificPriceService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\SpecificPriceService
     */
    protected function getSpecificPriceServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\SpecificPriceService'] = new \PrestaShop\Module\PsEventbus\Service\SpecificPriceService(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\SpecificPriceRepository'] ?? $this->getSpecificPriceRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsEventbus\Service\SynchronizationService' shared service.
     *
     * @return \PrestaShop\Module\PsEventbus\Service\SynchronizationService
     */
    protected function getSynchronizationServiceService()
    {
        return $this->services['PrestaShop\\Module\\PsEventbus\\Service\\SynchronizationService'] = new \PrestaShop\Module\PsEventbus\Service\SynchronizationService(($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\EventbusSyncRepository'] ?? $this->getEventbusSyncRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Repository\\IncrementalSyncRepository'] ?? $this->getIncrementalSyncRepositoryService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Service\\ProxyService'] ?? $this->getProxyServiceService()), ($this->services['PrestaShop\\Module\\PsEventbus\\Decorator\\PayloadDecorator'] ?? $this->getPayloadDecoratorService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Adapter\ConfigurationAdapter' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Adapter\ConfigurationAdapter
     */
    protected function getConfigurationAdapterService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Adapter\ConfigurationAdapter(($this->services['psxmarketingwithgoogle.shop'] ?? $this->getPsxmarketingwithgoogle_ShopService())->id);
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Buffer\TemplateBuffer' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Buffer\TemplateBuffer
     */
    protected function getTemplateBufferService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Buffer\\TemplateBuffer'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Buffer\TemplateBuffer();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Config\Env' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Config\Env
     */
    protected function getEnvService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Config\\Env'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Config\Env();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Handler\ErrorHandler' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Handler\ErrorHandler
     */
    protected function getErrorHandler2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Handler\\ErrorHandler'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Handler\ErrorHandler();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Handler\RemarketingHookHandler' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Handler\RemarketingHookHandler
     */
    protected function getRemarketingHookHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Handler\\RemarketingHookHandler'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Handler\RemarketingHookHandler(($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Buffer\\TemplateBuffer'] ?? ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Buffer\\TemplateBuffer'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Buffer\TemplateBuffer())), ($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()), ($this->services['psxmarketingwithgoogle'] ?? $this->getPsxmarketingwithgoogleService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Provider\CartEventDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Provider\CartEventDataProvider
     */
    protected function getCartEventDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\CartEventDataProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Provider\CartEventDataProvider(($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Provider\ConversionEventDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Provider\ConversionEventDataProvider
     */
    protected function getConversionEventDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\ConversionEventDataProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Provider\ConversionEventDataProvider(($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Provider\PageViewEventDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Provider\PageViewEventDataProvider
     */
    protected function getPageViewEventDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\PageViewEventDataProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Provider\PageViewEventDataProvider(($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Provider\ProductDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Provider\ProductDataProvider
     */
    protected function getProductDataProvider2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\ProductDataProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Provider\ProductDataProvider(($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Provider\PurchaseEventDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Provider\PurchaseEventDataProvider
     */
    protected function getPurchaseEventDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\PurchaseEventDataProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Provider\PurchaseEventDataProvider(($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\ProductDataProvider'] ?? $this->getProductDataProvider2Service()), ($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\LanguageRepository'] ?? ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\LanguageRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\LanguageRepository())), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CountryRepository'] ?? $this->getCountryRepository2Service()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Provider\VerificationTagDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Provider\VerificationTagDataProvider
     */
    protected function getVerificationTagDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Provider\\VerificationTagDataProvider'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Provider\VerificationTagDataProvider(($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\VerificationTagRepository'] ?? $this->getVerificationTagRepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\AttributesRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\AttributesRepository
     */
    protected function getAttributesRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\AttributesRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\AttributesRepository(($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\CarrierRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CarrierRepository
     */
    protected function getCarrierRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CarrierRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CarrierRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\CountryRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CountryRepository
     */
    protected function getCountryRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CountryRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CountryRepository(($this->services['psxmarketingwithgoogle.db'] ?? $this->getPsxmarketingwithgoogle_DbService()), ($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()), ($this->services['psxmarketingwithgoogle.country'] ?? $this->getPsxmarketingwithgoogle_CountryService()), ($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] ?? $this->getConfigurationAdapterService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\CurrencyRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CurrencyRepository
     */
    protected function getCurrencyRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CurrencyRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CurrencyRepository(($this->services['psxmarketingwithgoogle.currency'] ?? $this->getPsxmarketingwithgoogle_CurrencyService()), ($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\LanguageRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\LanguageRepository
     */
    protected function getLanguageRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\LanguageRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\LanguageRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\ProductRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\ProductRepository
     */
    protected function getProductRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\ProductRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\ProductRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\StateRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\StateRepository
     */
    protected function getStateRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\StateRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\StateRepository(($this->services['psxmarketingwithgoogle.db'] ?? $this->getPsxmarketingwithgoogle_DbService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\TabRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\TabRepository
     */
    protected function getTabRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\TabRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\TabRepository();
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\TaxRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\TaxRepository
     */
    protected function getTaxRepository2Service()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\TaxRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\TaxRepository(($this->services['psxmarketingwithgoogle.db'] ?? $this->getPsxmarketingwithgoogle_DbService()), ($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\VerificationTagRepository' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Repository\VerificationTagRepository
     */
    protected function getVerificationTagRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\VerificationTagRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\VerificationTagRepository(($this->services['psxmarketingwithgoogle.db'] ?? $this->getPsxmarketingwithgoogle_DbService()), ($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\Module\PsxMarketingWithGoogle\Tracker\Segment' shared service.
     *
     * @return \PrestaShop\Module\PsxMarketingWithGoogle\Tracker\Segment
     */
    protected function getSegmentService()
    {
        return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Tracker\\Segment'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Tracker\Segment(($this->services['psxmarketingwithgoogle.context'] ?? $this->getPsxmarketingwithgoogle_ContextService()));
    }

    /**
     * Gets the public 'PrestaShop\PrestaShop\Adapter\Configuration' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Configuration
     */
    protected function getConfiguration2Service()
    {
        return $this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration();
    }

    /**
     * Gets the public 'PrestaShop\PrestaShop\Adapter\ContextStateManager' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\ContextStateManager
     */
    protected function getContextStateManagerService()
    {
        return $this->services['PrestaShop\\PrestaShop\\Adapter\\ContextStateManager'] = new \PrestaShop\PrestaShop\Adapter\ContextStateManager(($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService()));
    }

    /**
     * Gets the public 'PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider
     */
    protected function getCurrencyDataProvider2Service()
    {
        return $this->services['PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider'] = new \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider(($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())), ((($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->shop) ? (($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->shop->id) : (null)));
    }

    /**
     * Gets the public 'PrestaShop\PrestaShop\Adapter\LegacyContext' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\LegacyContext
     */
    protected function getLegacyContextService()
    {
        return $this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] = new \PrestaShop\PrestaShop\Adapter\LegacyContext('/mails/themes', ($this->services['PrestaShop\\PrestaShop\\Adapter\\Tools'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Tools'] = new \PrestaShop\PrestaShop\Adapter\Tools())));
    }

    /**
     * Gets the public 'PrestaShop\PrestaShop\Adapter\Tools' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Tools
     */
    protected function getToolsService()
    {
        return $this->services['PrestaShop\\PrestaShop\\Adapter\\Tools'] = new \PrestaShop\PrestaShop\Adapter\Tools();
    }

    /**
     * Gets the public 'PrestaShop\PrestaShop\Core\Localization\Locale\Repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Locale\Repository
     */
    protected function getRepositoryService()
    {
        return $this->services['PrestaShop\\PrestaShop\\Core\\Localization\\Locale\\Repository'] = new \PrestaShop\PrestaShop\Core\Localization\Locale\Repository(($this->services['prestashop.core.localization.cldr.locale_repository'] ?? $this->getPrestashop_Core_Localization_Cldr_LocaleRepositoryService()), ($this->services['prestashop.core.localization.currency.repository'] ?? $this->getPrestashop_Core_Localization_Currency_RepositoryService()));
    }

    /**
     * Gets the public 'PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts' shared service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts
     */
    protected function getPsAccountsService()
    {
        return $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] = new \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts(($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Installer'] ?? ($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('5.3.0'))));
    }

    /**
     * Gets the public 'PrestaShop\PsAccountsInstaller\Installer\Installer' shared service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Installer
     */
    protected function getInstaller2Service()
    {
        return $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('5.3.0');
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

    /**
     * Gets the public 'annotation_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\AnnotationReader();
    }

    /**
     * Gets the public 'array' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\AdapterInterface
     */
    protected function getArrayService()
    {
        return $this->services['array'] = (new \PrestaShopBundle\DependencyInjection\CacheAdapterFactory())->getCacheAdapter('array');
    }

    /**
     * Gets the public 'configuration' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Configuration
     */
    protected function getConfiguration3Service()
    {
        return $this->services['configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration();
    }

    /**
     * Gets the public 'container.env_var_processors_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getContainer_EnvVarProcessorsLocatorService()
    {
        return $this->services['container.env_var_processors_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'const' => ['privates', 'PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor', 'getRuntimeConstEnvVarProcessorService', false],
        ], [
            'const' => '?',
        ]);
    }

    /**
     * Gets the public 'context' shared service.
     *
     * @return \Context
     */
    protected function getContextService()
    {
        return $this->services['context'] = \Context::getContext();
    }

    /**
     * Gets the public 'db' shared service.
     *
     * @return \Db
     */
    protected function getDbService()
    {
        return $this->services['db'] = \Db::getInstance();
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /**
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Doctrine\DBAL\Configuration();
        $a->setSQLLogger(new \Doctrine\DBAL\Logging\LoggerChain([0 => new \Symfony\Bridge\Doctrine\Logger\DbalLogger(NULL, NULL), 1 => new \Doctrine\DBAL\Logging\DebugStack()]));

        return $this->services['doctrine.dbal.default_connection'] = (new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]))->createConnection(['driver' => 'pdo_mysql', 'host' => 'localhost', 'port' => '', 'dbname' => 'qisogexqbz_cezo0724', 'user' => 'qisogexqbz_cezo0724', 'password' => '-)@63zqRKoKm4-bw', 'charset' => 'utf8mb4', 'driverOptions' => [1002 => 'SET sql_mode=(SELECT REPLACE(@@sql_mode,\'ONLY_FULL_GROUP_BY\',\'\'))', 1013 => $this->getEnv('const:runtime:_PS_ALLOW_MULTI_STATEMENTS_QUERIES_')], 'defaultTableOptions' => []], $a, new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this), ['enum' => 'string']);
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        $a = new \Doctrine\ORM\Configuration();

        $b = new \Doctrine\Persistence\Mapping\Driver\MappingDriverChain();

        $c = ($this->services['annotation_reader'] ?? ($this->services['annotation_reader'] = new \Doctrine\Common\Annotations\AnnotationReader()));
        $d = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($c, [0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/inpostshipping/src/Entity']);
        $d->addExcludePaths([0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/inpostshipping/src/Entity/index.php']);
        $e = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($c, [0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/productcomments/src/Entity']);
        $e->addExcludePaths([0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/productcomments/src/Entity/index.php']);

        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($c, [0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/src/PrestaShopBundle/Entity']), 'PrestaShop');
        $b->addDriver($d, 'InPost\\Shipping\\Entity');
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver($c, [0 => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/ps_accounts/src/Entity']), 'PrestaShop\\Module\\PsAccounts\\Entity');
        $b->addDriver($e, 'PrestaShop\\Module\\ProductComment\\Entity');

        $a->setEntityNamespaces(['PrestaShopBundle\\Entity' => 'PrestaShop']);
        $a->setMetadataCache(new \Symfony\Component\Cache\Adapter\ArrayAdapter());
        $a->setQueryCache(new \Symfony\Component\Cache\Adapter\ArrayAdapter());
        $a->setResultCache(new \Symfony\Component\Cache\Adapter\ArrayAdapter());
        $a->setMetadataDriverImpl($b);
        $a->setProxyDir('/home/qisogexqbz/domains/cezos.exis24.pl/public_html/var/cache/dev//doctrine/orm/Proxies');
        $a->setProxyNamespace('Proxies');
        $a->setAutoGenerateProxyClasses(true);
        $a->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $a->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $a->setNamingStrategy(($this->services['prestashop.database.naming_strategy'] ?? ($this->services['prestashop.database.naming_strategy'] = new \PrestaShopBundle\Service\Database\DoctrineNamingStrategy('ps_'))));
        $a->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $a->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this));
        $a->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\ServiceLocator([])));
        $a->addCustomStringFunction('regexp', 'DoctrineExtensions\\Query\\Mysql\\Regexp');
        $a->addEntityNamespace('Moduleinpostshipping', 'InPost\\Shipping\\Entity');
        $a->addEntityNamespace('ModulepsAccounts', 'PrestaShop\\Module\\PsAccounts\\Entity');
        $a->addEntityNamespace('Moduleproductcomments', 'PrestaShop\\Module\\ProductComment\\Entity');

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), $a);

        (new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'hashing' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Crypto\Hashing
     */
    protected function getHashingService()
    {
        return $this->services['hashing'] = new \PrestaShop\PrestaShop\Core\Crypto\Hashing();
    }

    /**
     * Gets the public 'inpost.shipping.adapter.assets_manager' shared service.
     *
     * @return \InPost\Shipping\Adapter\AssetsManager
     */
    protected function getInpost_Shipping_Adapter_AssetsManagerService()
    {
        return $this->services['inpost.shipping.adapter.assets_manager'] = new \InPost\Shipping\Adapter\AssetsManager(($this->privates['inpost.shipping.module'] ?? $this->getInpost_Shipping_ModuleService()), ($this->privates['inpost.shipping.context'] ?? $this->getInpost_Shipping_ContextService()));
    }

    /**
     * Gets the public 'inpost.shipping.configuration.carriers' shared service.
     *
     * @return \InPost\Shipping\Configuration\CarriersConfiguration
     */
    protected function getInpost_Shipping_Configuration_CarriersService()
    {
        return $this->services['inpost.shipping.configuration.carriers'] = new \InPost\Shipping\Configuration\CarriersConfiguration();
    }

    /**
     * Gets the public 'inpost.shipping.configuration.checkout' shared service.
     *
     * @return \InPost\Shipping\Configuration\CheckoutConfiguration
     */
    protected function getInpost_Shipping_Configuration_CheckoutService()
    {
        return $this->services['inpost.shipping.configuration.checkout'] = new \InPost\Shipping\Configuration\CheckoutConfiguration();
    }

    /**
     * Gets the public 'inpost.shipping.configuration.geo_widget' shared service.
     *
     * @return \InPost\Shipping\Configuration\GeoWidgetConfiguration
     */
    protected function getInpost_Shipping_Configuration_GeoWidgetService()
    {
        return $this->services['inpost.shipping.configuration.geo_widget'] = new \InPost\Shipping\Configuration\GeoWidgetConfiguration();
    }

    /**
     * Gets the public 'inpost.shipping.configuration.orders' shared service.
     *
     * @return \InPost\Shipping\Configuration\OrdersConfiguration
     */
    protected function getInpost_Shipping_Configuration_OrdersService()
    {
        return $this->services['inpost.shipping.configuration.orders'] = new \InPost\Shipping\Configuration\OrdersConfiguration();
    }

    /**
     * Gets the public 'inpost.shipping.configuration.shipx' shared service.
     *
     * @return \InPost\Shipping\Configuration\ShipXConfiguration
     */
    protected function getInpost_Shipping_Configuration_ShipxService()
    {
        return $this->services['inpost.shipping.configuration.shipx'] = new \InPost\Shipping\Configuration\ShipXConfiguration();
    }

    /**
     * Gets the public 'inpost.shipping.configuration.shop' shared service.
     *
     * @return \InPost\Shipping\Configuration\ShopConfiguration
     */
    protected function getInpost_Shipping_Configuration_ShopService()
    {
        return $this->services['inpost.shipping.configuration.shop'] = new \InPost\Shipping\Configuration\ShopConfiguration();
    }

    /**
     * Gets the public 'inpost.shipping.configuration.szybkie_zwroty' shared service.
     *
     * @return \InPost\Shipping\Configuration\SzybkieZwrotyConfiguration
     */
    protected function getInpost_Shipping_Configuration_SzybkieZwrotyService()
    {
        return $this->services['inpost.shipping.configuration.szybkie_zwroty'] = new \InPost\Shipping\Configuration\SzybkieZwrotyConfiguration();
    }

    /**
     * Gets the public 'inpost.shipping.data_provider.customer_choice' shared service.
     *
     * @return \InPost\Shipping\DataProvider\CustomerChoiceDataProvider
     */
    protected function getInpost_Shipping_DataProvider_CustomerChoiceService()
    {
        return $this->services['inpost.shipping.data_provider.customer_choice'] = new \InPost\Shipping\DataProvider\CustomerChoiceDataProvider();
    }

    /**
     * Gets the public 'inpost.shipping.data_provider.point' shared service.
     *
     * @return \InPost\Shipping\DataProvider\PointDataProvider
     */
    protected function getInpost_Shipping_DataProvider_PointService()
    {
        return $this->services['inpost.shipping.data_provider.point'] = new \InPost\Shipping\DataProvider\PointDataProvider(($this->services['inpost.shipping.configuration.shipx'] ?? ($this->services['inpost.shipping.configuration.shipx'] = new \InPost\Shipping\Configuration\ShipXConfiguration())), ($this->services['inpost.shipping.geo_widget.token_provider'] ?? $this->getInpost_Shipping_GeoWidget_TokenProviderService()), new \InPost\Shipping\Repository\PointRepository(), ($this->privates['inpost.shipping.context'] ?? $this->getInpost_Shipping_ContextService()));
    }

    /**
     * Gets the public 'inpost.shipping.geo_widget.token_provider' shared service.
     *
     * @return \InPost\Shipping\GeoWidget\GeoWidgetTokenProvider
     */
    protected function getInpost_Shipping_GeoWidget_TokenProviderService()
    {
        return $this->services['inpost.shipping.geo_widget.token_provider'] = new \InPost\Shipping\GeoWidget\GeoWidgetTokenProvider(($this->services['inpost.shipping.configuration.geo_widget'] ?? ($this->services['inpost.shipping.configuration.geo_widget'] = new \InPost\Shipping\Configuration\GeoWidgetConfiguration())), ($this->services['inpost.shipping.configuration.shipx'] ?? ($this->services['inpost.shipping.configuration.shipx'] = new \InPost\Shipping\Configuration\ShipXConfiguration())), ($this->privates['inpost.shipping.context'] ?? $this->getInpost_Shipping_ContextService()));
    }

    /**
     * Gets the public 'inpost.shipping.handler.check_delivery_option' shared service.
     *
     * @return \InPost\Shipping\Handler\DeliveryOption\CheckDeliveryOptionHandler
     */
    protected function getInpost_Shipping_Handler_CheckDeliveryOptionService()
    {
        return $this->services['inpost.shipping.handler.check_delivery_option'] = new \InPost\Shipping\Handler\DeliveryOption\CheckDeliveryOptionHandler(($this->services['inpost.shipping.time_checker'] ?? $this->getInpost_Shipping_TimeCheckerService()), ($this->services['inpost.shipping.geo_widget.token_provider'] ?? $this->getInpost_Shipping_GeoWidget_TokenProviderService()));
    }

    /**
     * Gets the public 'inpost.shipping.handler.cron_jobs' shared service.
     *
     * @return \InPost\Shipping\Handler\CronJobsHandler
     */
    protected function getInpost_Shipping_Handler_CronJobsService()
    {
        return $this->services['inpost.shipping.handler.cron_jobs'] = new \InPost\Shipping\Handler\CronJobsHandler(($this->privates['inpost.shipping.module'] ?? $this->getInpost_Shipping_ModuleService()), ($this->privates['inpost.shipping.context'] ?? $this->getInpost_Shipping_ContextService()), ($this->services['inpost.shipping.handler.shipment.update_status'] ?? $this->getInpost_Shipping_Handler_Shipment_UpdateStatusService()));
    }

    /**
     * Gets the public 'inpost.shipping.handler.shipment.update_status' shared service.
     *
     * @return \InPost\Shipping\Handler\Shipment\UpdateShipmentStatusHandler
     */
    protected function getInpost_Shipping_Handler_Shipment_UpdateStatusService()
    {
        return $this->services['inpost.shipping.handler.shipment.update_status'] = new \InPost\Shipping\Handler\Shipment\UpdateShipmentStatusHandler(($this->services['inpost.shipping.configuration.shipx'] ?? ($this->services['inpost.shipping.configuration.shipx'] = new \InPost\Shipping\Configuration\ShipXConfiguration())), ($this->services['inpost.shipping.configuration.orders'] ?? ($this->services['inpost.shipping.configuration.orders'] = new \InPost\Shipping\Configuration\OrdersConfiguration())), new \InPost\Shipping\Repository\ObjectModel\ShipmentRepository(\Db::getInstance()));
    }

    /**
     * Gets the public 'inpost.shipping.hook_dispatcher' shared service.
     *
     * @return \InPost\Shipping\HookDispatcher
     */
    protected function getInpost_Shipping_HookDispatcherService()
    {
        return $this->services['inpost.shipping.hook_dispatcher'] = new \InPost\Shipping\HookDispatcher(($this->privates['inpost.shipping.module'] ?? $this->getInpost_Shipping_ModuleService()), ($this->privates['inpost.shipping.context'] ?? $this->getInpost_Shipping_ContextService()), ($this->services['inpost.shipping.shop_context'] ?? ($this->services['inpost.shipping.shop_context'] = new \InPost\Shipping\PrestaShopContext())));
    }

    /**
     * Gets the public 'inpost.shipping.presenter.checkout_data' shared service.
     *
     * @return \InPost\Shipping\Presenter\CheckoutDataPresenter
     */
    protected function getInpost_Shipping_Presenter_CheckoutDataService()
    {
        return $this->services['inpost.shipping.presenter.checkout_data'] = new \InPost\Shipping\Presenter\CheckoutDataPresenter(($this->services['inpost.shipping.data_provider.customer_choice'] ?? ($this->services['inpost.shipping.data_provider.customer_choice'] = new \InPost\Shipping\DataProvider\CustomerChoiceDataProvider())), ($this->services['inpost.shipping.data_provider.point'] ?? $this->getInpost_Shipping_DataProvider_PointService()), ($this->privates['inpost.shipping.context'] ?? $this->getInpost_Shipping_ContextService()));
    }

    /**
     * Gets the public 'inpost.shipping.presenter.point' shared service.
     *
     * @return \InPost\Shipping\Presenter\PointPresenter
     */
    protected function getInpost_Shipping_Presenter_PointService()
    {
        return $this->services['inpost.shipping.presenter.point'] = new \InPost\Shipping\Presenter\PointPresenter(($this->privates['inpost.shipping.module'] ?? $this->getInpost_Shipping_ModuleService()), new \InPost\Shipping\DataProvider\LanguageDataProvider());
    }

    /**
     * Gets the public 'inpost.shipping.presenter.point_address' shared service.
     *
     * @return \InPost\Shipping\Presenter\PointAddressPresenter
     */
    protected function getInpost_Shipping_Presenter_PointAddressService()
    {
        return $this->services['inpost.shipping.presenter.point_address'] = new \InPost\Shipping\Presenter\PointAddressPresenter(($this->services['inpost.shipping.presenter.point'] ?? $this->getInpost_Shipping_Presenter_PointService()));
    }

    /**
     * Gets the public 'inpost.shipping.shipx.factory.authorized_request' shared service.
     *
     * @return \InPost\Shipping\ShipX\RequestFactory\AuthorizedRequestFactory
     */
    protected function getInpost_Shipping_Shipx_Factory_AuthorizedRequestService()
    {
        return $this->services['inpost.shipping.shipx.factory.authorized_request'] = new \InPost\Shipping\ShipX\RequestFactory\AuthorizedRequestFactory(($this->services['inpost.shipping.configuration.shipx'] ?? ($this->services['inpost.shipping.configuration.shipx'] = new \InPost\Shipping\Configuration\ShipXConfiguration())), ($this->privates['InPost\\Shipping\\ShipX\\ShipXClient'] ?? $this->getShipXClientService()), ($this->privates['inpost.shipping.context'] ?? $this->getInpost_Shipping_ContextService()));
    }

    /**
     * Gets the public 'inpost.shipping.shipx.factory.organization_request' shared service.
     *
     * @return \InPost\Shipping\ShipX\RequestFactory\OrganizationRequestFactory
     */
    protected function getInpost_Shipping_Shipx_Factory_OrganizationRequestService()
    {
        return $this->services['inpost.shipping.shipx.factory.organization_request'] = new \InPost\Shipping\ShipX\RequestFactory\OrganizationRequestFactory(($this->services['inpost.shipping.configuration.shipx'] ?? ($this->services['inpost.shipping.configuration.shipx'] = new \InPost\Shipping\Configuration\ShipXConfiguration())), ($this->privates['InPost\\Shipping\\ShipX\\ShipXClient'] ?? $this->getShipXClientService()), ($this->privates['inpost.shipping.context'] ?? $this->getInpost_Shipping_ContextService()));
    }

    /**
     * Gets the public 'inpost.shipping.shipx.factory.points_api_request' shared service.
     *
     * @return \InPost\Shipping\ShipX\RequestFactory\PointsApiRequestFactory
     */
    protected function getInpost_Shipping_Shipx_Factory_PointsApiRequestService()
    {
        return $this->services['inpost.shipping.shipx.factory.points_api_request'] = new \InPost\Shipping\ShipX\RequestFactory\PointsApiRequestFactory(($this->services['inpost.shipping.configuration.shipx'] ?? ($this->services['inpost.shipping.configuration.shipx'] = new \InPost\Shipping\Configuration\ShipXConfiguration())), ($this->privates['InPost\\Shipping\\ShipX\\ShipXClient'] ?? $this->getShipXClientService()), ($this->privates['inpost.shipping.context'] ?? $this->getInpost_Shipping_ContextService()));
    }

    /**
     * Gets the public 'inpost.shipping.shipx.factory.request' shared service.
     *
     * @return \InPost\Shipping\ShipX\RequestFactory\ShipXRequestFactory
     */
    protected function getInpost_Shipping_Shipx_Factory_RequestService()
    {
        return $this->services['inpost.shipping.shipx.factory.request'] = new \InPost\Shipping\ShipX\RequestFactory\ShipXRequestFactory(($this->services['inpost.shipping.configuration.shipx'] ?? ($this->services['inpost.shipping.configuration.shipx'] = new \InPost\Shipping\Configuration\ShipXConfiguration())), ($this->privates['InPost\\Shipping\\ShipX\\ShipXClient'] ?? $this->getShipXClientService()), ($this->privates['inpost.shipping.context'] ?? $this->getInpost_Shipping_ContextService()));
    }

    /**
     * Gets the public 'inpost.shipping.shop_context' shared service.
     *
     * @return \InPost\Shipping\PrestaShopContext
     */
    protected function getInpost_Shipping_ShopContextService()
    {
        return $this->services['inpost.shipping.shop_context'] = new \InPost\Shipping\PrestaShopContext();
    }

    /**
     * Gets the public 'inpost.shipping.time_checker' shared service.
     *
     * @return \InPost\Shipping\TimeChecker
     */
    protected function getInpost_Shipping_TimeCheckerService()
    {
        return $this->services['inpost.shipping.time_checker'] = new \InPost\Shipping\TimeChecker(($this->services['inpost.shipping.configuration.carriers'] ?? ($this->services['inpost.shipping.configuration.carriers'] = new \InPost\Shipping\Configuration\CarriersConfiguration())));
    }

    /**
     * Gets the public 'inpost.shipping.updater.cart_choice' shared service.
     *
     * @return \InPost\Shipping\CartChoiceUpdater
     */
    protected function getInpost_Shipping_Updater_CartChoiceService()
    {
        return $this->services['inpost.shipping.updater.cart_choice'] = new \InPost\Shipping\CartChoiceUpdater(($this->privates['inpost.shipping.module'] ?? $this->getInpost_Shipping_ModuleService()), ($this->services['inpost.shipping.data_provider.point'] ?? $this->getInpost_Shipping_DataProvider_PointService()), ($this->services['inpost.shipping.configuration.checkout'] ?? ($this->services['inpost.shipping.configuration.checkout'] = new \InPost\Shipping\Configuration\CheckoutConfiguration())));
    }

    /**
     * Gets the public 'klaviyops.klaviyo_api_wrapper' shared service.
     *
     * @return \KlaviyoPs\Classes\KlaviyoApiWrapper
     */
    protected function getKlaviyops_KlaviyoApiWrapperService()
    {
        return $this->services['klaviyops.klaviyo_api_wrapper'] = new \KlaviyoPs\Classes\KlaviyoApiWrapper();
    }

    /**
     * Gets the public 'klaviyops.klaviyo_service.coupon_generator' shared service.
     *
     * @return \KlaviyoPs\Classes\KlaviyoServices\CouponGeneratorService
     */
    protected function getKlaviyops_KlaviyoService_CouponGeneratorService()
    {
        return $this->services['klaviyops.klaviyo_service.coupon_generator'] = new \KlaviyoPs\Classes\KlaviyoServices\CouponGeneratorService(($this->services['klaviyops.prestashop_services.cart_rule'] ?? ($this->services['klaviyops.prestashop_services.cart_rule'] = new \KlaviyoPs\Classes\PrestashopServices\CartRuleService())));
    }

    /**
     * Gets the public 'klaviyops.klaviyo_service.customer_event_service' shared service.
     *
     * @return \KlaviyoPs\Classes\KlaviyoServices\CustomerEventService
     */
    protected function getKlaviyops_KlaviyoService_CustomerEventServiceService()
    {
        return $this->services['klaviyops.klaviyo_service.customer_event_service'] = new \KlaviyoPs\Classes\KlaviyoServices\CustomerEventService(($this->services['klaviyops.prestashop_services.customer'] ?? $this->getKlaviyops_PrestashopServices_CustomerService()));
    }

    /**
     * Gets the public 'klaviyops.klaviyo_service.order_event' shared service.
     *
     * @return \KlaviyoPs\Classes\KlaviyoServices\OrderEventService
     */
    protected function getKlaviyops_KlaviyoService_OrderEventService()
    {
        return $this->services['klaviyops.klaviyo_service.order_event'] = new \KlaviyoPs\Classes\KlaviyoServices\OrderEventService(($this->services['klaviyops.klaviyo_api_wrapper'] ?? ($this->services['klaviyops.klaviyo_api_wrapper'] = new \KlaviyoPs\Classes\KlaviyoApiWrapper())), ($this->services['klaviyops.prestashop_services.order'] ?? $this->getKlaviyops_PrestashopServices_OrderService()), ($this->services['klaviyops.prestashop_services.product'] ?? ($this->services['klaviyops.prestashop_services.product'] = new \KlaviyoPs\Classes\PrestashopServices\ProductService())), ($this->services['klaviyops.klaviyo_service.customer_event_service'] ?? $this->getKlaviyops_KlaviyoService_CustomerEventServiceService()));
    }

    /**
     * Gets the public 'klaviyops.module' shared service.
     *
     * @return \KlaviyoPsModule
     */
    protected function getKlaviyops_ModuleService()
    {
        return $this->services['klaviyops.module'] = \KlaviyoPsModule::getInstance();
    }

    /**
     * Gets the public 'klaviyops.prestashop_components.context' shared service.
     *
     * @return \Context
     */
    protected function getKlaviyops_PrestashopComponents_ContextService()
    {
        return $this->services['klaviyops.prestashop_components.context'] = \Context::getContext();
    }

    /**
     * Gets the public 'klaviyops.prestashop_services.cart_rule' shared service.
     *
     * @return \KlaviyoPs\Classes\PrestashopServices\CartRuleService
     */
    protected function getKlaviyops_PrestashopServices_CartRuleService()
    {
        return $this->services['klaviyops.prestashop_services.cart_rule'] = new \KlaviyoPs\Classes\PrestashopServices\CartRuleService();
    }

    /**
     * Gets the public 'klaviyops.prestashop_services.context' shared service.
     *
     * @return \KlaviyoPs\Classes\PrestashopServices\ContextService
     */
    protected function getKlaviyops_PrestashopServices_ContextService()
    {
        return $this->services['klaviyops.prestashop_services.context'] = new \KlaviyoPs\Classes\PrestashopServices\ContextService(($this->services['klaviyops.prestashop_components.context'] ?? $this->getKlaviyops_PrestashopComponents_ContextService()));
    }

    /**
     * Gets the public 'klaviyops.prestashop_services.customer' shared service.
     *
     * @return \KlaviyoPs\Classes\PrestashopServices\CustomerService
     */
    protected function getKlaviyops_PrestashopServices_CustomerService()
    {
        return $this->services['klaviyops.prestashop_services.customer'] = new \KlaviyoPs\Classes\PrestashopServices\CustomerService(($this->services['klaviyops.prestashop_services.validate'] ?? ($this->services['klaviyops.prestashop_services.validate'] = new \KlaviyoPs\Classes\PrestashopServices\ValidateService())));
    }

    /**
     * Gets the public 'klaviyops.prestashop_services.logger' shared service.
     *
     * @return \KlaviyoPs\Classes\PrestashopServices\LoggerService
     */
    protected function getKlaviyops_PrestashopServices_LoggerService()
    {
        return $this->services['klaviyops.prestashop_services.logger'] = new \KlaviyoPs\Classes\PrestashopServices\LoggerService();
    }

    /**
     * Gets the public 'klaviyops.prestashop_services.order' shared service.
     *
     * @return \KlaviyoPs\Classes\PrestashopServices\OrderService
     */
    protected function getKlaviyops_PrestashopServices_OrderService()
    {
        return $this->services['klaviyops.prestashop_services.order'] = new \KlaviyoPs\Classes\PrestashopServices\OrderService(($this->services['klaviyops.prestashop_services.context'] ?? $this->getKlaviyops_PrestashopServices_ContextService()), ($this->services['klaviyops.prestashop_services.product'] ?? ($this->services['klaviyops.prestashop_services.product'] = new \KlaviyoPs\Classes\PrestashopServices\ProductService())), ($this->services['klaviyops.prestashop_services.customer'] ?? $this->getKlaviyops_PrestashopServices_CustomerService()));
    }

    /**
     * Gets the public 'klaviyops.prestashop_services.product' shared service.
     *
     * @return \KlaviyoPs\Classes\PrestashopServices\ProductService
     */
    protected function getKlaviyops_PrestashopServices_ProductService()
    {
        return $this->services['klaviyops.prestashop_services.product'] = new \KlaviyoPs\Classes\PrestashopServices\ProductService();
    }

    /**
     * Gets the public 'klaviyops.prestashop_services.validate' shared service.
     *
     * @return \KlaviyoPs\Classes\PrestashopServices\ValidateService
     */
    protected function getKlaviyops_PrestashopServices_ValidateService()
    {
        return $this->services['klaviyops.prestashop_services.validate'] = new \KlaviyoPs\Classes\PrestashopServices\ValidateService();
    }

    /**
     * Gets the public 'klaviyops.util_services.csv' shared service.
     *
     * @return \KlaviyoPs\Classes\UtilServices\CsvService
     */
    protected function getKlaviyops_UtilServices_CsvService()
    {
        return $this->services['klaviyops.util_services.csv'] = new \KlaviyoPs\Classes\UtilServices\CsvService();
    }

    /**
     * Gets the public 'klaviyops.util_services.env' shared service.
     *
     * @return \KlaviyoPs\Classes\UtilServices\EnvService
     */
    protected function getKlaviyops_UtilServices_EnvService()
    {
        return $this->services['klaviyops.util_services.env'] = new \KlaviyoPs\Classes\UtilServices\EnvService(($this->services['klaviyops.module'] ?? $this->getKlaviyops_ModuleService()));
    }

    /**
     * Gets the public 'prestashop.adapter.data_provider.country' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Country\CountryDataProvider
     */
    protected function getPrestashop_Adapter_DataProvider_CountryService()
    {
        return $this->services['prestashop.adapter.data_provider.country'] = new \PrestaShop\PrestaShop\Adapter\Country\CountryDataProvider();
    }

    /**
     * Gets the public 'prestashop.adapter.environment' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Environment
     */
    protected function getPrestashop_Adapter_EnvironmentService()
    {
        return $this->services['prestashop.adapter.environment'] = new \PrestaShop\PrestaShop\Adapter\Environment(true);
    }

    /**
     * Gets the public 'prestashop.adapter.module.repository.module_repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Module\Repository\ModuleRepository
     */
    protected function getPrestashop_Adapter_Module_Repository_ModuleRepositoryService()
    {
        return $this->services['prestashop.adapter.module.repository.module_repository'] = new \PrestaShop\PrestaShop\Adapter\Module\Repository\ModuleRepository('/home/qisogexqbz/domains/cezos.exis24.pl/public_html', '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/');
    }

    /**
     * Gets the public 'prestashop.adapter.validate' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Validate
     */
    protected function getPrestashop_Adapter_ValidateService()
    {
        return $this->services['prestashop.adapter.validate'] = new \PrestaShop\PrestaShop\Adapter\Validate();
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.advanced_factory' shared service.
     *
     * @return \PrestaShop\CircuitBreaker\AdvancedCircuitBreakerFactory
     */
    protected function getPrestashop_Core_CircuitBreaker_AdvancedFactoryService()
    {
        return $this->services['prestashop.core.circuit_breaker.advanced_factory'] = new \PrestaShop\CircuitBreaker\AdvancedCircuitBreakerFactory();
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.cache' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getPrestashop_Core_CircuitBreaker_CacheService()
    {
        return $this->services['prestashop.core.circuit_breaker.cache'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('', 0, (($this->services['prestashop.adapter.environment'] ?? ($this->services['prestashop.adapter.environment'] = new \PrestaShop\PrestaShop\Adapter\Environment(true)))->getCacheDir() . "/circuit_breaker"));
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.doctrine_cache' shared service.
     *
     * @return \Symfony\Component\Cache\DoctrineProvider
     */
    protected function getPrestashop_Core_CircuitBreaker_DoctrineCacheService()
    {
        return $this->services['prestashop.core.circuit_breaker.doctrine_cache'] = new \Symfony\Component\Cache\DoctrineProvider(($this->services['prestashop.core.circuit_breaker.cache'] ?? $this->getPrestashop_Core_CircuitBreaker_CacheService()));
    }

    /**
     * Gets the public 'prestashop.core.circuit_breaker.storage' shared service.
     *
     * @return \PrestaShop\CircuitBreaker\Storage\DoctrineCache
     */
    protected function getPrestashop_Core_CircuitBreaker_StorageService()
    {
        return $this->services['prestashop.core.circuit_breaker.storage'] = new \PrestaShop\CircuitBreaker\Storage\DoctrineCache(($this->services['prestashop.core.circuit_breaker.doctrine_cache'] ?? $this->getPrestashop_Core_CircuitBreaker_DoctrineCacheService()));
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.cart' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\CartFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_CartService()
    {
        return $this->services['prestashop.core.filter.front_end_object.cart'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\CartFilter(($this->services['prestashop.core.filter.front_end_object.product_collection'] ?? $this->getPrestashop_Core_Filter_FrontEndObject_ProductCollectionService()));
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.configuration' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ConfigurationFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_ConfigurationService()
    {
        return $this->services['prestashop.core.filter.front_end_object.configuration'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ConfigurationFilter();
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.customer' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\CustomerFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_CustomerService()
    {
        return $this->services['prestashop.core.filter.front_end_object.customer'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\CustomerFilter();
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.main' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\MainFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_MainService()
    {
        return $this->services['prestashop.core.filter.front_end_object.main'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\MainFilter(['cart' => ($this->services['prestashop.core.filter.front_end_object.cart'] ?? $this->getPrestashop_Core_Filter_FrontEndObject_CartService()), 'customer' => ($this->services['prestashop.core.filter.front_end_object.customer'] ?? ($this->services['prestashop.core.filter.front_end_object.customer'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\CustomerFilter())), 'shop' => ($this->services['prestashop.core.filter.front_end_object.shop'] ?? ($this->services['prestashop.core.filter.front_end_object.shop'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ShopFilter())), 'configuration' => ($this->services['prestashop.core.filter.front_end_object.configuration'] ?? ($this->services['prestashop.core.filter.front_end_object.configuration'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ConfigurationFilter()))]);
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.product' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ProductFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_ProductService()
    {
        return $this->services['prestashop.core.filter.front_end_object.product'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ProductFilter();
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.product_collection' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\CollectionFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_ProductCollectionService()
    {
        $this->services['prestashop.core.filter.front_end_object.product_collection'] = $instance = new \PrestaShop\PrestaShop\Core\Filter\CollectionFilter();

        $instance->queue([0 => ($this->services['prestashop.core.filter.front_end_object.product'] ?? ($this->services['prestashop.core.filter.front_end_object.product'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ProductFilter()))]);

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.search_result_product' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\SearchResultProductFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_SearchResultProductService()
    {
        return $this->services['prestashop.core.filter.front_end_object.search_result_product'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\SearchResultProductFilter();
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.search_result_product_collection' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\CollectionFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_SearchResultProductCollectionService()
    {
        $this->services['prestashop.core.filter.front_end_object.search_result_product_collection'] = $instance = new \PrestaShop\PrestaShop\Core\Filter\CollectionFilter();

        $instance->queue([0 => ($this->services['prestashop.core.filter.front_end_object.search_result_product'] ?? ($this->services['prestashop.core.filter.front_end_object.search_result_product'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\SearchResultProductFilter()))]);

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.filter.front_end_object.shop' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ShopFilter
     */
    protected function getPrestashop_Core_Filter_FrontEndObject_ShopService()
    {
        return $this->services['prestashop.core.filter.front_end_object.shop'] = new \PrestaShop\PrestaShop\Core\Filter\FrontEndObject\ShopFilter();
    }

    /**
     * Gets the public 'prestashop.core.localization.cache.adapter' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getPrestashop_Core_Localization_Cache_AdapterService()
    {
        return $this->services['prestashop.core.localization.cache.adapter'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.cache.adapter' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getPrestashop_Core_Localization_Cldr_Cache_AdapterService()
    {
        return $this->services['prestashop.core.localization.cldr.cache.adapter'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('CLDR', 0, '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/var/cache/dev//localization');
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.datalayer.locale_cache' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleCache
     */
    protected function getPrestashop_Core_Localization_Cldr_Datalayer_LocaleCacheService()
    {
        $this->services['prestashop.core.localization.cldr.datalayer.locale_cache'] = $instance = new \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleCache(($this->services['prestashop.core.localization.cldr.cache.adapter'] ?? ($this->services['prestashop.core.localization.cldr.cache.adapter'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('CLDR', 0, '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/var/cache/dev//localization'))));

        $instance->setLowerLayer(($this->services['prestashop.core.localization.cldr.datalayer.locale_reference'] ?? $this->getPrestashop_Core_Localization_Cldr_Datalayer_LocaleReferenceService()));

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.datalayer.locale_reference' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleReference
     */
    protected function getPrestashop_Core_Localization_Cldr_Datalayer_LocaleReferenceService()
    {
        return $this->services['prestashop.core.localization.cldr.datalayer.locale_reference'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleReference(($this->services['prestashop.core.localization.cldr.reader'] ?? ($this->services['prestashop.core.localization.cldr.reader'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\Reader())));
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.locale_data_source' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleDataSource
     */
    protected function getPrestashop_Core_Localization_Cldr_LocaleDataSourceService()
    {
        return $this->services['prestashop.core.localization.cldr.locale_data_source'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleDataSource(($this->services['prestashop.core.localization.cldr.datalayer.locale_cache'] ?? $this->getPrestashop_Core_Localization_Cldr_Datalayer_LocaleCacheService()));
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.locale_repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleRepository
     */
    protected function getPrestashop_Core_Localization_Cldr_LocaleRepositoryService()
    {
        return $this->services['prestashop.core.localization.cldr.locale_repository'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleRepository(($this->services['prestashop.core.localization.cldr.locale_data_source'] ?? $this->getPrestashop_Core_Localization_Cldr_LocaleDataSourceService()));
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.reader' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\Reader
     */
    protected function getPrestashop_Core_Localization_Cldr_ReaderService()
    {
        return $this->services['prestashop.core.localization.cldr.reader'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\Reader();
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.datasource' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\CurrencyDataSource
     */
    protected function getPrestashop_Core_Localization_Currency_DatasourceService()
    {
        return $this->services['prestashop.core.localization.currency.datasource'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\CurrencyDataSource(($this->services['prestashop.core.localization.currency.middleware.cache'] ?? $this->getPrestashop_Core_Localization_Currency_Middleware_CacheService()), ($this->services['prestashop.core.localization.currency.middleware.installed'] ?? $this->getPrestashop_Core_Localization_Currency_Middleware_InstalledService()));
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.cache' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyCache
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_CacheService()
    {
        $this->services['prestashop.core.localization.currency.middleware.cache'] = $instance = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyCache(($this->services['prestashop.core.localization.cache.adapter'] ?? ($this->services['prestashop.core.localization.cache.adapter'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())));

        $instance->setLowerLayer(($this->services['prestashop.core.localization.currency.middleware.database'] ?? $this->getPrestashop_Core_Localization_Currency_Middleware_DatabaseService()));

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.database' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyDatabase
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_DatabaseService()
    {
        $this->services['prestashop.core.localization.currency.middleware.database'] = $instance = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyDatabase(($this->services['PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider'] ?? $this->getCurrencyDataProvider2Service()));

        $instance->setLowerLayer(($this->services['prestashop.core.localization.currency.middleware.reference'] ?? $this->getPrestashop_Core_Localization_Currency_Middleware_ReferenceService()));

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.installed' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyInstalled
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_InstalledService()
    {
        return $this->services['prestashop.core.localization.currency.middleware.installed'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyInstalled(($this->services['PrestaShop\\PrestaShop\\Adapter\\Currency\\CurrencyDataProvider'] ?? $this->getCurrencyDataProvider2Service()));
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.reference' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyReference
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_ReferenceService()
    {
        return $this->services['prestashop.core.localization.currency.middleware.reference'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyReference(($this->services['prestashop.core.localization.cldr.locale_repository'] ?? $this->getPrestashop_Core_Localization_Cldr_LocaleRepositoryService()));
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\Repository
     */
    protected function getPrestashop_Core_Localization_Currency_RepositoryService()
    {
        return $this->services['prestashop.core.localization.currency.repository'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\Repository(($this->services['prestashop.core.localization.currency.datasource'] ?? $this->getPrestashop_Core_Localization_Currency_DatasourceService()));
    }

    /**
     * Gets the public 'prestashop.core.localization.locale.context_locale' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Locale
     */
    protected function getPrestashop_Core_Localization_Locale_ContextLocaleService()
    {
        return $this->services['prestashop.core.localization.locale.context_locale'] = ($this->services['PrestaShop\\PrestaShop\\Core\\Localization\\Locale\\Repository'] ?? $this->getRepositoryService())->getLocale(($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->language->getLocale());
    }

    /**
     * Gets the public 'prestashop.core.string.character_cleaner' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\String\CharacterCleaner
     *
     * @deprecated The "prestashop.core.string.character_cleaner" service is deprecated. You should stop using it, as it will be removed in the future.
     */
    protected function getPrestashop_Core_String_CharacterCleanerService()
    {
        @trigger_error('The "prestashop.core.string.character_cleaner" service is deprecated. You should stop using it, as it will be removed in the future.', E_USER_DEPRECATED);

        return $this->services['prestashop.core.string.character_cleaner'] = new \PrestaShop\PrestaShop\Core\String\CharacterCleaner();
    }

    /**
     * Gets the public 'prestashop.database.naming_strategy' shared service.
     *
     * @return \PrestaShopBundle\Service\Database\DoctrineNamingStrategy
     */
    protected function getPrestashop_Database_NamingStrategyService()
    {
        return $this->services['prestashop.database.naming_strategy'] = new \PrestaShopBundle\Service\Database\DoctrineNamingStrategy('ps_');
    }

    /**
     * Gets the public 'prestashop.translation.translator_language_loader' shared service.
     *
     * @return \PrestaShopBundle\Translation\TranslatorLanguageLoader
     */
    protected function getPrestashop_Translation_TranslatorLanguageLoaderService()
    {
        return $this->services['prestashop.translation.translator_language_loader'] = new \PrestaShopBundle\Translation\TranslatorLanguageLoader(($this->services['prestashop.adapter.module.repository.module_repository'] ?? ($this->services['prestashop.adapter.module.repository.module_repository'] = new \PrestaShop\PrestaShop\Adapter\Module\Repository\ModuleRepository('/home/qisogexqbz/domains/cezos.exis24.pl/public_html', '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/modules/'))));
    }

    /**
     * Gets the public 'product_comment_criterion_repository' shared service.
     *
     * @return \PrestaShop\Module\ProductComment\Repository\ProductCommentCriterionRepository
     */
    protected function getProductCommentCriterionRepositoryService()
    {
        return $this->services['product_comment_criterion_repository'] = new \PrestaShop\Module\ProductComment\Repository\ProductCommentCriterionRepository(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), 'ps_');
    }

    /**
     * Gets the public 'product_comment_repository' shared service.
     *
     * @return \PrestaShop\Module\ProductComment\Repository\ProductCommentRepository
     */
    protected function getProductCommentRepositoryService()
    {
        return $this->services['product_comment_repository'] = new \PrestaShop\Module\ProductComment\Repository\ProductCommentRepository(($this->services['doctrine'] ?? $this->getDoctrineService()), ($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), 'ps_', ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()))->get("PRODUCT_COMMENTS_ALLOW_GUESTS"), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()))->get("PRODUCT_COMMENTS_MINIMAL_TIME"));
    }

    /**
     * Gets the public 'ps_accounts.context' shared service.
     *
     * @return \Context
     */
    protected function getPsAccounts_ContextService()
    {
        return $this->services['ps_accounts.context'] = \Context::getContext();
    }

    /**
     * Gets the public 'ps_accounts.logger' shared service.
     *
     * @return \Monolog\Logger
     */
    protected function getPsAccounts_LoggerService()
    {
        return $this->services['ps_accounts.logger'] = \PrestaShop\Module\PsAccounts\Factory\PsAccountsLogger::create();
    }

    /**
     * Gets the public 'ps_accounts.module' shared service.
     *
     * @return \Ps_accounts
     */
    protected function getPsAccounts_ModuleService()
    {
        return $this->services['ps_accounts.module'] = \Module::getInstanceByName('ps_accounts');
    }

    /**
     * Gets the public 'ps_eventbus' shared service.
     *
     * @return \Ps_eventbus
     */
    protected function getPsEventbusService()
    {
        return $this->services['ps_eventbus'] = \Module::getInstanceByName('ps_eventbus');
    }

    /**
     * Gets the public 'ps_eventbus.context' shared service.
     *
     * @return \Context
     */
    protected function getPsEventbus_ContextService()
    {
        return $this->services['ps_eventbus.context'] = \PrestaShop\Module\PsEventbus\Factory\ContextFactory::getContext();
    }

    /**
     * Gets the public 'ps_eventbus.controller' shared service.
     *
     * @return \Controller
     */
    protected function getPsEventbus_ControllerService()
    {
        return $this->services['ps_eventbus.controller'] = \PrestaShop\Module\PsEventbus\Factory\ContextFactory::getController();
    }

    /**
     * Gets the public 'ps_eventbus.cookie' shared service.
     *
     * @return \Cookie
     */
    protected function getPsEventbus_CookieService()
    {
        return $this->services['ps_eventbus.cookie'] = \PrestaShop\Module\PsEventbus\Factory\ContextFactory::getCookie();
    }

    /**
     * Gets the public 'ps_eventbus.currency' shared service.
     *
     * @return \Currency
     */
    protected function getPsEventbus_CurrencyService()
    {
        return $this->services['ps_eventbus.currency'] = \PrestaShop\Module\PsEventbus\Factory\ContextFactory::getCurrency();
    }

    /**
     * Gets the public 'ps_eventbus.db' shared service.
     *
     * @return \Db
     */
    protected function getPsEventbus_DbService()
    {
        return $this->services['ps_eventbus.db'] = \Db::getInstance();
    }

    /**
     * Gets the public 'ps_eventbus.language' shared service.
     *
     * @return \Language
     */
    protected function getPsEventbus_LanguageService()
    {
        return $this->services['ps_eventbus.language'] = \PrestaShop\Module\PsEventbus\Factory\ContextFactory::getLanguage();
    }

    /**
     * Gets the public 'ps_eventbus.link' shared service.
     *
     * @return \Link
     */
    protected function getPsEventbus_LinkService()
    {
        return $this->services['ps_eventbus.link'] = \PrestaShop\Module\PsEventbus\Factory\ContextFactory::getLink();
    }

    /**
     * Gets the public 'ps_eventbus.shop' shared service.
     *
     * @return \Shop
     */
    protected function getPsEventbus_ShopService()
    {
        return $this->services['ps_eventbus.shop'] = \PrestaShop\Module\PsEventbus\Factory\ContextFactory::getShop();
    }

    /**
     * Gets the public 'ps_eventbus.smarty' shared service.
     *
     * @return \Smarty
     */
    protected function getPsEventbus_SmartyService()
    {
        return $this->services['ps_eventbus.smarty'] = \PrestaShop\Module\PsEventbus\Factory\ContextFactory::getSmarty();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle' shared service.
     *
     * @return \PsxMarketingWithGoogle
     */
    protected function getPsxmarketingwithgoogleService()
    {
        return $this->services['psxmarketingwithgoogle'] = \Module::getInstanceByName('psxmarketingwithgoogle');
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.context' shared service.
     *
     * @return \Context
     */
    protected function getPsxmarketingwithgoogle_ContextService()
    {
        return $this->services['psxmarketingwithgoogle.context'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getContext();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.controller' shared service.
     *
     * @return \Controller
     */
    protected function getPsxmarketingwithgoogle_ControllerService()
    {
        return $this->services['psxmarketingwithgoogle.controller'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getController();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.cookie' shared service.
     *
     * @return \Cookie
     */
    protected function getPsxmarketingwithgoogle_CookieService()
    {
        return $this->services['psxmarketingwithgoogle.cookie'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getCookie();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.country' shared service.
     *
     * @return \Country
     */
    protected function getPsxmarketingwithgoogle_CountryService()
    {
        return $this->services['psxmarketingwithgoogle.country'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getCountry();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.currency' shared service.
     *
     * @return \Currency
     */
    protected function getPsxmarketingwithgoogle_CurrencyService()
    {
        return $this->services['psxmarketingwithgoogle.currency'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getCurrency();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.db' shared service.
     *
     * @return \Db
     */
    protected function getPsxmarketingwithgoogle_DbService()
    {
        return $this->services['psxmarketingwithgoogle.db'] = \Db::getInstance();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.language' shared service.
     *
     * @return \Language
     */
    protected function getPsxmarketingwithgoogle_LanguageService()
    {
        return $this->services['psxmarketingwithgoogle.language'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getLanguage();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.link' shared service.
     *
     * @return \Shop
     */
    protected function getPsxmarketingwithgoogle_LinkService()
    {
        return $this->services['psxmarketingwithgoogle.link'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getLink();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.shop' shared service.
     *
     * @return \Shop
     */
    protected function getPsxmarketingwithgoogle_ShopService()
    {
        return $this->services['psxmarketingwithgoogle.shop'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getShop();
    }

    /**
     * Gets the public 'psxmarketingwithgoogle.smarty' shared service.
     *
     * @return \Smarty
     */
    protected function getPsxmarketingwithgoogle_SmartyService()
    {
        return $this->services['psxmarketingwithgoogle.smarty'] = \PrestaShop\Module\PsxMarketingWithGoogle\Factory\ContextFactory::getSmarty();
    }

    /**
     * Gets the private 'InPost\Shipping\ShipX\ShipXClient' shared service.
     *
     * @return \InPost\Shipping\ShipX\ShipXClient
     */
    protected function getShipXClientService()
    {
        return $this->privates['InPost\\Shipping\\ShipX\\ShipXClient'] = (new \InPost\Shipping\ShipX\ShipXClientFactory(new \InPost\Shipping\Api\PsrHttpImplementationFinder(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], []))))->createClient();
    }

    /**
     * Gets the private 'PrestaShopBundle\DependencyInjection\RuntimeConstEnvVarProcessor' shared service.
     *
     * @return \PrestaShopBundle\DependencyInjection\RuntimeConstEnvVarProcessor
     */
    protected function getRuntimeConstEnvVarProcessorService()
    {
        return $this->privates['PrestaShopBundle\\DependencyInjection\\RuntimeConstEnvVarProcessor'] = new \PrestaShopBundle\DependencyInjection\RuntimeConstEnvVarProcessor();
    }

    /**
     * Gets the private 'inpost.shipping.context' shared service.
     *
     * @return \Context
     */
    protected function getInpost_Shipping_ContextService()
    {
        return $this->privates['inpost.shipping.context'] = \Context::getContext();
    }

    /**
     * Gets the private 'inpost.shipping.module' shared service.
     *
     * @return \InPostShipping
     */
    protected function getInpost_Shipping_ModuleService()
    {
        return $this->privates['inpost.shipping.module'] = \Module::getInstanceByName('inpostshipping');
    }

    /**
     * Gets the public 'prestashop.adapter.tools' alias.
     *
     * @return object The "PrestaShop\PrestaShop\Adapter\Tools" service.
     */
    protected function getPrestashop_Adapter_ToolsService()
    {
        @trigger_error('The "prestashop.adapter.tools" service alias is deprecated. You should stop using it, as it will be removed in the future.', E_USER_DEPRECATED);

        return $this->get('PrestaShop\\PrestaShop\\Adapter\\Tools');
    }

    /**
     * @return array|bool|float|int|string|\UnitEnum|null
     */
    public function getParameter($name)
    {
        $name = (string) $name;

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name): bool
    {
        $name = (string) $name;

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value): void
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag(): ParameterBagInterface
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [];
    private $dynamicParameters = [];

    private function getDynamicParameter(string $name)
    {
        throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
    }

    protected function getDefaultParameters(): array
    {
        return [
            'database_host' => 'localhost',
            'database_port' => '',
            'database_name' => 'qisogexqbz_cezo0724',
            'database_user' => 'qisogexqbz_cezo0724',
            'database_password' => '-)@63zqRKoKm4-bw',
            'database_prefix' => 'ps_',
            'database_engine' => 'InnoDB',
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'secret' => 'v03w8KNBYdENJUgLMtE5ZVnsAAip4zySghjSI7HrV64Sah4nNso8AXLMamR4TVa6',
            'ps_caching' => 'CacheMemcache',
            'ps_cache_enable' => false,
            'ps_creation_date' => '2023-07-17',
            'locale' => 'pl-PL',
            'use_debug_toolbar' => true,
            'cookie_key' => '7zgqfjQDEDyoMh685jI33G27a3qKxEPVuavkJPgwxWmB4sZYdMwARku26hUVFWH0',
            'cookie_iv' => 'c0VhAvekzQ9WTWMOo5DioAgz7bsaj9sS',
            'new_cookie_key' => 'def00000f9f2757f86ccb09a852afd98b15b0a072a3d6008f14eec57f2025afe15c2ba9968c44ddf9784a48951b06895f6fbc17e0d9281733a9e0a65cd013a7cd8266074',
            'api_public_key' => '-----BEGIN PUBLIC KEY-----'."\n".'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAvNDvT326V6umV+dy5Nx/'."\n".'BFDGvyUYS+nGEhKvaLKFVRvsGhHhPCiwV8Hq+zmnvaa1KPEEO1sY3zdlalQ7g6VY'."\n".'/j0OMSvu8gHUH0dHDg0ivVdY8FRjg01OvGozYcrqsg5dFk2P4664pKwR2b8E3MGP'."\n".'rGATGZ9LdN1ZiOGblnM8bHimpRk1bKrSu9KwzqdiojLrvt9d7fG0dEu8RUO1G/Un'."\n".'Q3OVzRADll2AN9c73cNIK63CglZCEavOLXxEvbPT3Opxv4UsmmQLB5BCqyEDSKw9'."\n".'FWZkYxeEY5wfJlmRkkvfK0OkAPbXYyI0xhY/UVtstutR5Tpzu3Plxq7xyOt/Pdl+'."\n".'3wIDAQAB'."\n".'-----END PUBLIC KEY-----'."\n".'',
            'api_private_key' => '-----BEGIN PRIVATE KEY-----'."\n".'MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQC80O9PfbpXq6ZX'."\n".'53Lk3H8EUMa/JRhL6cYSEq9osoVVG+waEeE8KLBXwer7Oae9prUo8QQ7WxjfN2Vq'."\n".'VDuDpVj+PQ4xK+7yAdQfR0cODSK9V1jwVGODTU68ajNhyuqyDl0WTY/jrrikrBHZ'."\n".'vwTcwY+sYBMZn0t03VmI4ZuWczxseKalGTVsqtK70rDOp2KiMuu+313t8bR0S7xF'."\n".'Q7Ub9SdDc5XNEAOWXYA31zvdw0grrcKCVkIRq84tfES9s9Pc6nG/hSyaZAsHkEKr'."\n".'IQNIrD0VZmRjF4RjnB8mWZGSS98rQ6QA9tdjIjTGFj9RW2y261HlOnO7c+XGrvHI'."\n".'63892X7fAgMBAAECggEAQH+Sr/G/3MDa4r5CRiF4Fg5Nxe+y/AOQUI4nczlASJFw'."\n".'NnuTGAzCKEgqr8TDIwq2aZTjIC9/MIjo0MiTR+YMn1RV68AZMHwlbMXZZNhh3JHg'."\n".'5L+++pRG6B/TC33YbBhx/fNiyqDdnArXUi1pSMup+3UaMS90BCi0tAh1MJCOvHJo'."\n".'KhgZ/DeLsFvT2BGK6ehCyAq8aKI+A62pM011mBhpOaz0UvlDxL4n77F5zQoSoGYy'."\n".'Mr85D2ebePCQK8+Ly1t3ykh7Yn4LjJDc2+F/ZQHDc2R/Tk2fowPO6SqQu82BTNLw'."\n".'GCLdM9eA1yF04q3ZwmyR2s+QnXxiygHZZyRLySUq8QKBgQDfAUGvxdSvC0tvOZi7'."\n".'KseC8ohyKcoHkamc9Nxas1x+7kQ38VK6x7RlLy9X7ZNffMh7Dyq673UjXMCvo1rE'."\n".'iH71fBQNldOnu6RjYWC+vItXFm7EjFwSy2gnLSjx+cMjfa/c+kAbsiy4AkLcfh4T'."\n".'yBxOJJdxX3Yubv17a9e/1rsi+QKBgQDYwLZ2RIiKifaByslv4t/M6+Ijs/poSVBQ'."\n".'9GlPTHRHSucYm4kQENBpfhRKXnJlpEkop9AbB4n8Ts41iNxowRL/ghefIHMXJHzy'."\n".'IuDyScSoJCHelghYn8p34GGrkHVH2NhpmYfp3rbt0U3v3Y6ljpm5MMnZiPooHLER'."\n".'oYUye1BOlwKBgQDZY/Ezt2eoqBsGNyCDPKW3KlUG7WPr0vyEbFKu/HArsHvCCTc7'."\n".'q1hY1xGQ5qEmkY8iH1vpVWtcaJvR3C2srt8M0cL+p1LoDUyoMJJN/aDb6ZtbcPSE'."\n".'wdMrdaOXl4G6BFk+0plSJnPfgRzKswsA/69QIe2b8JJVm47xFOUCNwLAiQKBgQC3'."\n".'0zCrutHGFN2AFBikkFfXtlGyj+gV29+G2NIbU67l66t0Xixu+KOYZDoXHGSOuTbm'."\n".'iPPgiJNI7RjLpEexe9V95rnb1axl+ycQP+5g7ZkgNIyY9ssbRmFzK1QKKdidV1Wq'."\n".'sW/oM18W8ETV4iQhWoAa5Dq8CASIUlUFq+OH/bcM/wKBgCIU5/kNCINAeQZ0GJbo'."\n".'npwBN2zOi59lifIYKbSZJX4RfEEL/Tp4H4f30hq9r3DVLaEPM2EktbaIJaP/dNUI'."\n".'qRiC9ZBunas1hmw+vL2ueXoHRuEpN9mWVL5/gbRmCnVwf8WQcfnaB8Mu6rx9yccY'."\n".'7fzTLVFsfoG2exqR9ZdNMcs6'."\n".'-----END PRIVATE KEY-----'."\n".'',
            'cache.driver' => 'array',
            'cache.adapter' => 'cache.adapter.array',
            'kernel.bundles' => [

            ],
            'kernel.root_dir' => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/app',
            'kernel.project_dir' => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html',
            'kernel.name' => 'app',
            'kernel.debug' => true,
            'kernel.environment' => 'dev',
            'kernel.cache_dir' => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/var/cache/dev/',
            'kernel.active_modules' => [
                0 => 'ps_linklist',
                1 => 'psgdpr',
                2 => 'ps_contactinfo',
                3 => 'ps_languageselector',
                4 => 'ps_customersignin',
                5 => 'ps_shoppingcart',
                6 => 'ps_mainmenu',
                7 => 'ps_searchbar',
                8 => 'ps_imageslider',
                9 => 'ps_featuredproducts',
                10 => 'ps_banner',
                11 => 'ps_specials',
                12 => 'ps_newproducts',
                13 => 'ps_bestsellers',
                14 => 'ps_emailsubscription',
                15 => 'ps_customeraccountlinks',
                16 => 'productcomments',
                17 => 'ps_categorytree',
                18 => 'contactform',
                19 => 'ps_sharebuttons',
                20 => 'gsitemap',
                21 => 'statsnewsletter',
                22 => 'klaviyopsautomation',
                23 => 'ps_wirepayment',
                24 => 'ps_viewedproduct',
                25 => 'ps_metrics',
                26 => 'mbeshipping',
                27 => 'ps_crossselling',
                28 => 'statssales',
                29 => 'ps_edition_basic',
                30 => 'ps_googleanalytics',
                31 => 'statscheckup',
                32 => 'dashactivity',
                33 => 'ps_accounts',
                34 => 'ps_eventbus',
                35 => 'ps_mbo',
                36 => 'pagesnotfound',
                37 => 'gamification',
                38 => 'graphnvd3',
                39 => 'ps_dataprivacy',
                40 => 'statsdata',
                41 => 'dashproducts',
                42 => 'statsproduct',
                43 => 'ps_themecusto',
                44 => 'statsbestmanufacturers',
                45 => 'psxmarketingwithgoogle',
                46 => 'statscatalog',
                47 => 'statsbestproducts',
                48 => 'ps_distributionapiclient',
                49 => 'statsbestsuppliers',
                50 => 'statsregistrations',
                51 => 'gridhtml',
                52 => 'ps_cashondelivery',
                53 => 'statsstock',
                54 => 'statsforecast',
                55 => 'ps_faviconnotificationbo',
                56 => 'statsbestvouchers',
                57 => 'dashtrends',
                58 => 'ps_emailalerts',
                59 => 'statsbestcategories',
                60 => 'statssearch',
                61 => 'statsbestcustomers',
                62 => 'ps_categoryproducts',
                63 => 'dashgoals',
                64 => 'statscarrier',
                65 => 'statspersonalinfos',
                66 => 'ps_facetedsearch',
                67 => 'ps_banner_two',
                68 => 'gmomni',
                69 => 'price_alert',
                70 => 'ets_megamenu',
                71 => 'trustedshopseasyintegration',
                72 => 'smartsupp',
                73 => 'przelewy24',
                74 => 'inpostshipping',
                75 => 'arlg',
                76 => 'categoriesbanners',
                77 => 'fblogin',
                78 => 'glogin',
                79 => 'ph_simpleblog',
                80 => 'phblogrecentposts',
                81 => 'blockwishlist',
                82 => 'sensbitgls',
                83 => 'blog_images',
                84 => 'pi_gusloader',
                85 => 'smartargetsocialfollowbar',
                86 => 'cs_invisible_recaptcha_v2',
            ],
            'ps_cache_dir' => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/var/cache/dev/',
            'mail_themes_uri' => '/mails/themes',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => [
                'default' => 'doctrine.orm.default_entity_manager',
            ],
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => [

            ],
            'doctrine.connections' => [
                'default' => 'doctrine.dbal.default_connection',
            ],
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.metadata.attribute.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AttributeDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_dir' => '/home/qisogexqbz/domains/cezos.exis24.pl/public_html/var/cache/dev//doctrine/orm/Proxies',
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'ps_accounts.environment' => 'production',
            'ps_accounts.accounts_api_url' => 'https://accounts-api.distribution.prestashop.net/v1/',
            'ps_accounts.accounts_ui_url' => 'https://accounts.distribution.prestashop.net',
            'ps_accounts.sso_api_url' => 'https://auth.prestashop.com/api/v1/',
            'ps_accounts.sso_account_url' => 'https://auth.prestashop.com/login',
            'ps_accounts.sso_resend_verification_email_url' => 'https://auth.prestashop.com/account/send-verification-email',
            'ps_accounts.billing_api_url' => 'https://billing-api.distribution.prestashop.net/',
            'ps_accounts.sentry_credentials' => 'https://4c7f6c8dd5aa405b8401a35f5cf26ada@o298402.ingest.sentry.io/5354585',
            'ps_accounts.segment_write_key' => 'pEJGnRxw47CU01efFjMyl1S7YcxshLxl',
            'ps_accounts.check_api_ssl_cert' => true,
            'ps_accounts.verify_account_tokens' => true,
            'ps_accounts.accounts_vue_cdn_url' => 'https://unpkg.com/prestashop_accounts_vue_components@3/dist/psaccountsVue.umd.min.js',
            'ps_accounts.accounts_cdn_url' => 'https://unpkg.com/prestashop_accounts_vue_components@4/dist/psaccountsVue.umd.min.js',
            'ps_accounts.svc_accounts_ui_url' => 'https://accounts.psessentials.net',
            'ps_accounts.oauth2_url_authorize' => 'https://oauth.prestashop.com/oauth2/auth',
            'ps_accounts.oauth2_url_access_token' => 'https://oauth.prestashop.com/oauth2/token',
            'ps_accounts.oauth2_url_resource_owner_details' => 'https://oauth.prestashop.com/userinfo',
            'ps_accounts.oauth2_url_session_logout' => 'https://oauth.prestashop.com/oauth2/sessions/logout',
            'ps_accounts.testimonials_url' => 'https://assets.prestashop3.com/dst/accounts/assets/testimonials.json',
            'ps_eventbus.proxy_api_url' => 'https://eventbus-proxy.psessentials.net',
            'ps_eventbus.sync_api_url' => 'https://eventbus-sync.psessentials.net',
            'ps_eventbus.sentry_dsn' => 'https://457f191226df4b8f9a0d7bf6f250bab2@o298402.ingest.sentry.io/6066714',
            'ps_eventbus.sentry_env' => 'production',
        ];
    }
}
