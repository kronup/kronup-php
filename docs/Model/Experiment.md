---
title: "Models - Experiment"
description: "Experiment meant to validate assumption"
parent: Model
layout: page
---

# Experiment

```php
new \Kronup\Model\Experiment();
```

Experiment meant to validate assumption

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getAuthorUserIds()** | **string[]** | Author IDs
**getConfirmed()** | **bool** | Experiment confirms assumption   [default to `false`]
**getDetails()** | **string** | Experiment details
**getState()** | **string** | Experiment state ( `idle` `running` `done` )  [default to `'idle'`]

