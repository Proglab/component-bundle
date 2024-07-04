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

| Parameter     | Type      | Description         | Default Values |
|:--------------|:----------|:--------------------|----------------|
| `text`        | `string`  | **Required**        |                |
| `style`       | `?string` | The bootstrap style | primary        |
| `dismissable` | `?string` | X button to dismiss | false          |
| `class`       | `?string` | Other class         | null           |


## Usage/Examples

```twig
{{ component('proglab_alert', {
    test: 'Done',
    style: 'success'
}) }}
```