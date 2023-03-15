---
title: TaskExpanded
parent: Model
layout: page
---

# TaskExpanded

## Model getters

Method name | Return type | Description
------------ | ------------- | -------------
**getId()** | **string** | Task ID
**getAssigneeId()** | **string** | Author ID
**getDigest()** | **string** | Task title
**getDetails()** | **string** | Task description
**getState()** | **string** | Task state [default to `'idle'`]
**getMinute()** | [**\Kronup\Model\Minute**](../Minute) | 
**getNotions()** | [**\Kronup\Model\Notion[]**](../Notion) | Notions
