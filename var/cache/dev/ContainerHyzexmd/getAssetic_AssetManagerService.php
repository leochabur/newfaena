<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'assetic.asset_manager' shared service.

include_once $this->targetDirs[3].'\\vendor\\kriswallsmith\\assetic\\src\\Assetic\\AssetManager.php';
include_once $this->targetDirs[3].'\\vendor\\kriswallsmith\\assetic\\src\\Assetic\\Factory\\LazyAssetManager.php';
include_once $this->targetDirs[3].'\\vendor\\kriswallsmith\\assetic\\src\\Assetic\\Factory\\Loader\\FormulaLoaderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\kriswallsmith\\assetic\\src\\Assetic\\Factory\\Loader\\CachedFormulaLoader.php';
include_once $this->targetDirs[3].'\\vendor\\kriswallsmith\\assetic\\src\\Assetic\\Extension\\Twig\\TwigFormulaLoader.php';
include_once $this->targetDirs[3].'\\vendor\\kriswallsmith\\assetic\\src\\Assetic\\Cache\\ConfigCache.php';
include_once $this->targetDirs[3].'\\vendor\\kriswallsmith\\assetic\\src\\Assetic\\Factory\\Resource\\ResourceInterface.php';
include_once $this->targetDirs[3].'\\vendor\\kriswallsmith\\assetic\\src\\Assetic\\Factory\\Resource\\IteratorResourceInterface.php';
include_once $this->targetDirs[3].'\\vendor\\kriswallsmith\\assetic\\src\\Assetic\\Factory\\Resource\\CoalescingDirectoryResource.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\assetic-bundle\\Factory\\Resource\\CoalescingDirectoryResource.php';
include_once $this->targetDirs[3].'\\vendor\\kriswallsmith\\assetic\\src\\Assetic\\Factory\\Resource\\DirectoryResource.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\assetic-bundle\\Factory\\Resource\\DirectoryResource.php';

$this->services['assetic.asset_manager'] = $instance = new \Assetic\Factory\LazyAssetManager(${($_ = isset($this->services['assetic.asset_factory']) ? $this->services['assetic.asset_factory'] : $this->getAssetic_AssetFactoryService()) && false ?: '_'}, ['twig' => new \Assetic\Factory\Loader\CachedFormulaLoader(new \Assetic\Extension\Twig\TwigFormulaLoader(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.assetic']) ? $this->services['monolog.logger.assetic'] : $this->load('getMonolog_Logger_AsseticService.php')) && false ?: '_'}), new \Assetic\Cache\ConfigCache(($this->targetDirs[0].'/assetic/config')), true)]);

$a = ${($_ = isset($this->services['templating.loader']) ? $this->services['templating.loader'] : $this->load('getTemplating_LoaderService.php')) && false ?: '_'};

$instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource([0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FrameworkBundle', ($this->targetDirs[3].'\\app/Resources/FrameworkBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FrameworkBundle', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle/Resources/views'), '/\\.[^.]+\\.twig$/')]), 'twig');
$instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource([0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SecurityBundle', ($this->targetDirs[3].'\\app/Resources/SecurityBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SecurityBundle', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\SecurityBundle/Resources/views'), '/\\.[^.]+\\.twig$/')]), 'twig');
$instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource([0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'TwigBundle', ($this->targetDirs[3].'\\app/Resources/TwigBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'TwigBundle', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views'), '/\\.[^.]+\\.twig$/')]), 'twig');
$instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource([0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MonologBundle', ($this->targetDirs[3].'\\app/Resources/MonologBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'MonologBundle', ($this->targetDirs[3].'\\vendor\\symfony\\monolog-bundle/Resources/views'), '/\\.[^.]+\\.twig$/')]), 'twig');
$instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource([0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SwiftmailerBundle', ($this->targetDirs[3].'\\app/Resources/SwiftmailerBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SwiftmailerBundle', ($this->targetDirs[3].'\\vendor\\symfony\\swiftmailer-bundle/Resources/views'), '/\\.[^.]+\\.twig$/')]), 'twig');
$instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource([0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineBundle', ($this->targetDirs[3].'\\app/Resources/DoctrineBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DoctrineBundle', ($this->targetDirs[3].'\\vendor\\doctrine\\doctrine-bundle/Resources/views'), '/\\.[^.]+\\.twig$/')]), 'twig');
$instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource([0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FOSUserBundle', ($this->targetDirs[3].'\\app/Resources/FOSUserBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'FOSUserBundle', ($this->targetDirs[3].'\\vendor\\friendsofsymfony\\user-bundle/Resources/views'), '/\\.[^.]+\\.twig$/')]), 'twig');
$instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource([0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SensioFrameworkExtraBundle', ($this->targetDirs[3].'\\app/Resources/SensioFrameworkExtraBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SensioFrameworkExtraBundle', ($this->targetDirs[3].'\\vendor\\sensio\\framework-extra-bundle/Resources/views'), '/\\.[^.]+\\.twig$/')]), 'twig');
$instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource([0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AppBundle', ($this->targetDirs[3].'\\app/Resources/AppBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AppBundle', ($this->targetDirs[3].'\\src\\AppBundle/Resources/views'), '/\\.[^.]+\\.twig$/')]), 'twig');
$instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource([0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'GestionFaenaBundle', ($this->targetDirs[3].'\\app/Resources/GestionFaenaBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'GestionFaenaBundle', ($this->targetDirs[3].'\\src\\GestionFaenaBundle/Resources/views'), '/\\.[^.]+\\.twig$/')]), 'twig');
$instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource([0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AsseticBundle', ($this->targetDirs[3].'\\app/Resources/AsseticBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'AsseticBundle', ($this->targetDirs[3].'\\vendor\\symfony\\assetic-bundle/Resources/views'), '/\\.[^.]+\\.twig$/')]), 'twig');
$instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource([0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'GestionSigcerBundle', ($this->targetDirs[3].'\\app/Resources/GestionSigcerBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'GestionSigcerBundle', ($this->targetDirs[3].'\\src\\GestionSigcerBundle/Resources/views'), '/\\.[^.]+\\.twig$/')]), 'twig');
$instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource([0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'LiuggioExcelBundle', ($this->targetDirs[3].'\\app/Resources/LiuggioExcelBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'LiuggioExcelBundle', ($this->targetDirs[3].'\\vendor\\liuggio\\excelbundle/Resources/views'), '/\\.[^.]+\\.twig$/')]), 'twig');
$instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource([0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'GestionVentasBundle', ($this->targetDirs[3].'\\app/Resources/GestionVentasBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'GestionVentasBundle', ($this->targetDirs[3].'\\src\\GestionVentasBundle/Resources/views'), '/\\.[^.]+\\.twig$/')]), 'twig');
$instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource([0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DebugBundle', ($this->targetDirs[3].'\\app/Resources/DebugBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'DebugBundle', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\DebugBundle/Resources/views'), '/\\.[^.]+\\.twig$/')]), 'twig');
$instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource([0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'WebProfilerBundle', ($this->targetDirs[3].'\\app/Resources/WebProfilerBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'WebProfilerBundle', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views'), '/\\.[^.]+\\.twig$/')]), 'twig');
$instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource([0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SensioDistributionBundle', ($this->targetDirs[3].'\\app/Resources/SensioDistributionBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SensioDistributionBundle', ($this->targetDirs[3].'\\vendor\\sensio\\distribution-bundle/Resources/views'), '/\\.[^.]+\\.twig$/')]), 'twig');
$instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource([0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SensioGeneratorBundle', ($this->targetDirs[3].'\\app/Resources/SensioGeneratorBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'SensioGeneratorBundle', ($this->targetDirs[3].'\\vendor\\sensio\\generator-bundle/Resources/views'), '/\\.[^.]+\\.twig$/')]), 'twig');
$instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\CoalescingDirectoryResource([0 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'WebServerBundle', ($this->targetDirs[3].'\\app/Resources/WebServerBundle/views'), '/\\.[^.]+\\.twig$/'), 1 => new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, 'WebServerBundle', ($this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebServerBundle/Resources/views'), '/\\.[^.]+\\.twig$/')]), 'twig');
$instance->addResource(new \Symfony\Bundle\AsseticBundle\Factory\Resource\DirectoryResource($a, '', ($this->targetDirs[3].'\\app/Resources/views'), '/\\.[^.]+\\.twig$/'), 'twig');

return $instance;
