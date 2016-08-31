<?php
namespace Ashraf\BehatGoogleAnalyticsExtension;

use Symfony\Component\Config\FileLocator,
    Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition,
    Symfony\Component\DependencyInjection\ContainerBuilder,
    Symfony\Component\DependencyInjection\Loader\YamlFileLoader,
	Symfony\Component\DependencyInjection\Loader\XmlFileLoader,
	Behat\Testwork\ServiceContainer\ExtensionManager,
	Behat\Testwork\ServiceContainer\Extension as BaseExtension;


class Extension implements BaseExtension {
	/**
	 * Loads a specific configuration.
	 *
	 * @param array            $config    Extension configuration hash (from behat.yml)
	 * @param ContainerBuilder $container ContainerBuilder instance
	 */
	public function load(ContainerBuilder $container, array $config) {
		$loader = new XmlFileLoader(new FileLocator(__DIR__ . '/services'));
		$loader->load('core.xml');
		$container->setParameter('behat.googleanalytics.parameters', $config);
	}

	public function getConfigKey()
	{
		// TODO: Implement getConfigKey() method.
		return 'BehatGoogleAnalyticsExtension';
	}

	public function initialize(ExtensionManager $extensionManager)
	{
		// TODO: Implement initialize() method.

	}

	public function configure(ArrayNodeDefinition $builder)
	{
		// TODO: Implement configure() method.
	}

	public function process(ContainerBuilder $container)
	{
		// TODO: Implement process() method.
	}
}


?>