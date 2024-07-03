<?php
namespace Proglab\ComponentBundle;

use Proglab\ComponentBundle\DependencyInjection\ProglabComponentExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class ProglabComponentBundle extends AbstractBundle
{
    public function getPath(): string
    {
        return dirname(__DIR__);
    }

    public function getContainerExtension(): ?ExtensionInterface
    {
        return new ProglabComponentExtension();
    }
}