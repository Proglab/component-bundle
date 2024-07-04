<?php

declare(strict_types=1);

namespace Proglab\ComponentBundle\Components\Alert;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;

#[AsTwigComponent('proglab_alert', template: '@ProglabComponent/components/alert/alert.html.twig')]
class Alert
{
    public string $text;
    public string $type;
    public bool $dismissible;

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
        $resolver->setDefaults(['text' => null, 'type' => 'primary', 'dismissible' => false]);

        $resolver->setAllowedTypes('text', 'string');
        $resolver->setAllowedTypes('type', 'string');
        $resolver->setAllowedTypes('dismissible', 'bool');

        $resolver->setAllowedValues('type', ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark']);
    }
}