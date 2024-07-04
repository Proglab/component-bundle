## Description

A simple bootstrap alert

![Breadcrumb](images/alert.jpg)

```twig
{{ component('proglab_alert', {
    style: 'success',
    text: 'Ceci est une alerte',
    dismissable: true,
    class: 'text-center'
}) }}
```
## Parameters

| Parameter     | Type      | Description         | Default Values | Valid Values                                                    |
|:--------------|:----------|:--------------------|:---------------|:----------------------------------------------------------------|
| `text`        | `string`  | **Required**        |                |                                                                 |
| `type`        | `?string` | The bootstrap style | primary        | primary, secondary, success, danger, warning, info, light, dark |
| `dismissable` | `?bool`   | X button to dismiss | false          | true, false                                                     |
| `class`       | `?string` | Other class         | null           |                                                                 |


## Usage/Examples

```twig
{{ component('proglab_alert', {
    test: 'Done',
    style: 'success'
}) }}
```

```twig
    <twig:proglab_alert text="Hello" style="dark">
        <h4 class="alert-heading">{{ text }}</h4>
        <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
        <hr>
        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
    </twig:proglab_alert>
```