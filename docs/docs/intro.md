---
sidebar_position: 1
---
# Proglab/Components

## Introduction

Some twig components

## Repository

https://github.com/Proglab/component-bundle

## Install

Install with composer

```bash
  composer require proglab\components-bundle
```

:::info What you'll need
**Client:** Bootstrap 5, Stimulus

**Server:** Symfony 7.1, Symfony UX Twig components 2.6, Symfony UX Live components 2.8
:::


## How to overide any templates ?

- Create a `bundles/ProglabComponentBundle/` directory in your template directory
- Copy/paste the original file (for exemple the `templates/components/alert/alert.html.twig` to your `templates/bundles/ProglabComponentBundle/components/alert/alert.html.twig`)
- Update it with your own twig code

## How to overide any components ?

- Create a `src/Components/Alert.php` file
- Extend from the Component of this bundle
- Update your `config/services.yaml`

```yaml
services:
  Proglab\ComponentBundle\Components\Alert:
    class: App\Components\Alert
    public: true
    autoconfigure: true
    autowire: true
```

:::success Well done
You can do what you need
:::