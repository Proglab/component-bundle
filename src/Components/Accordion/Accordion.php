<?php

declare(strict_types=1);

namespace Proglab\ComponentBundle\Components\Accordion;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;

#[AsTwigComponent('proglab_accordion', template: '@ProglabComponent/components/accordion/accordion.html.twig')]
class Accordion
{
    public string $id;
    public bool $allwaysOpen = false;

    #[PreMount]
    public function preMount(array $data): array
    {
        $resolver = new OptionsResolver();
        $this->configureOptions($resolver);
        return $resolver->resolve($data) + $data;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setIgnoreUndefined();
        $resolver->setDefaults(['allwaysOpen' => false]);
        $resolver->setRequired('id');
        $resolver->setAllowedTypes('id', 'string');
        $resolver->setAllowedTypes('allwaysOpen', 'bool');
    }
}