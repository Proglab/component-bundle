<?php

declare(strict_types=1);

namespace Proglab\ComponentBundle\Components\Alert;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;
use Symfony\UX\TwigComponent\Attribute\PreMount;

#[AsTwigComponent('proglab_alert', template: '@ProglabComponent/components/alert/alert.html.twig')]
class Alert
{
    public string $style;
    public string $text;
    public bool $dismissible = false;

    #[PreMount]
    public function preMount(array $data): array
    {
        $resolver = new OptionsResolver();
        $this->configureOptions($resolver);
        $data = $resolver->resolve($data);

        if (!isset($data['class'])) {
            $data['class'] = '';
        }

        if (!empty($data['style'])) {
            $data['class'] .= ' alert-' . $data['style'];
        } else {
            $data['class'] .= ' alert-primary';
        }

        if ($data['dismissible']) {
            $data['class'] .= ' alert-dismissible fade show';
        }

        $data['class'] = trim($data['class']);

        return $data;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults(['style' => 'primary', 'class' => null, 'text' => null, 'dismissible' => false]);
        $resolver->setRequired(['text']);

        $resolver->setAllowedTypes('text', 'string');
        $resolver->setAllowedTypes('style', 'string');
        $resolver->setAllowedTypes('dismissible', 'bool');

        $resolver->setAllowedValues('style', ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark']);
    }
}