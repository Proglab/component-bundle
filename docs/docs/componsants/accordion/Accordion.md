## Description

A simple bootstrap accordion

![Accordion](images/accordion.jpg)

```twig
{{ component('proglab_accordion', {
    'id': 'accordion1',
}) }}
```
## Parameters

| Parameter     | Type      | Description         | Default Values | Valid Values |
|:--------------|:----------|:--------------------|:---------------|:-------------|
| `id`          | `string`  | **Required**        |                |              |
| `allwaysOpen` | `bool`    | Stay open           | false          | true, false  |


## Usage/Examples

```twig
{{ component('proglab_accordion', {
    test: 'Done',
    style: 'success'
}) }}
```

```twig
    <twig:proglab_accordion id="proglab">
    </twig:proglab_accordion>
```
:::info
Put some [accordion-item](./AccordionItem.md) inside it !

```twig
<twig:proglab_accordion id="proglab">
    <twig:proglab_accordion_item id="proglab1" title="Title 1">
    </twig:proglab_accordion_item>
    <twig:proglab_accordion_item id="proglab2" title="Title 2" open>
    </twig:proglab_accordion_item>
    <twig:proglab_accordion_item id="proglab3" title="Title 3">
    </twig:proglab_accordion_item>
</twig:proglab_accordion>
```
:::
