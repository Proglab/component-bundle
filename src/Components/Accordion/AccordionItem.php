<?php

declare(strict_types=1);

namespace Proglab\ComponentBundle\Components\Accordion;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;

#[AsTwigComponent('proglab_accordion_item', template: '@ProglabComponent/components/accordion/accordion_item.html.twig')]
class AccordionItem
{
    public string $id;
    public bool $open = false;

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
        $resolver->setDefaults(['open' => false]);
        $resolver->setRequired('id');
        $resolver->setAllowedTypes('id', 'string');
        $resolver->setAllowedTypes('open', 'bool');
    }
}