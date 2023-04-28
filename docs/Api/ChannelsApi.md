---
title: Channels
parent: API
layout: page
---

# Api/ChannelsApi

[Channels API Reference](https://api.kronup.com/#tag/Channels)

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// API Call
$sdk->api()->channels();
```

## Methods

Method | Description
------------- | -------------
[**channelAssign()**](#channelassign) | Assign to channel
[**channelCreate()**](#channelcreate) | Create channel
[**channelDelete()**](#channeldelete) | Delete channel
[**channelListMembers()**](#channellistmembers) | List members
[**channelUnassign()**](#channelunassign) | Unassign from channel
[**channelUpdate()**](#channelupdate) | Update channel


## `channelAssign()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **channelAssign.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ChannelsApi/channelAssign.php){: .btn .btn-green .mt-4}

### Request

> **PUT** `/teams/{teamId}/channels/{channelId}/users/{userId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->channels()->channelAssign(
    string $team_id,
    string $channel_id,
    string $user_id,
    string $x_org_id
): \Kronup\Model\User
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$user_id** | **string**  | User ID 
 **$x_org_id** | **string**  | Organization ID 

### Return type

[**\Kronup\Model\User**](../../Model/User)

### Description

> Assign to channel

Assign a user to a channel

[Back to top](#top){: .btn .btn-purple }

---


## `channelCreate()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **channelCreate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ChannelsApi/channelCreate.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/teams/{teamId}/channels`

### Type signature

```php
(new \Kronup\Sdk())->api()->channels()->channelCreate(
    string $team_id,
    string $x_org_id,
    \Kronup\Model\PayloadChannelCreate $payload_channel_create
): \Kronup\Model\TeamExtended
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$x_org_id** | **string**  | Organization ID 
 **$payload_channel_create** | [**\Kronup\Model\PayloadChannelCreate**](../../Model/PayloadChannelCreate) |  

### Return type

[**\Kronup\Model\TeamExtended**](../../Model/TeamExtended)

### Description

> Create channel

Create a new channel for a team

[Back to top](#top){: .btn .btn-purple }

---


## `channelDelete()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **channelDelete.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ChannelsApi/channelDelete.php){: .btn .btn-green .mt-4}

### Request

> **DELETE** `/teams/{teamId}/channels/{channelId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->channels()->channelDelete(
    string $team_id,
    string $channel_id,
    string $x_org_id
): bool
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$x_org_id** | **string**  | Organization ID 

### Return type

**bool**

### Description

> Delete channel

Delete a channel and unassign all users

[Back to top](#top){: .btn .btn-purple }

---


## `channelListMembers()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **channelListMembers.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ChannelsApi/channelListMembers.php){: .btn .btn-green .mt-4}

### Request

> **GET** `/teams/{teamId}/channels/{channelId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->channels()->channelListMembers(
    string $team_id,
    string $channel_id,
    string $x_org_id,
    [ int $page_number = 1, ]
    [ int $page_size = 100 ]
): \Kronup\Model\ChannelMembersList
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$x_org_id** | **string**  | Organization ID 
 **$page_number** | **int**  | Pagination: page number  [default to 1]
 **$page_size** | **int**  | Pagination: page size  [default to 100]

### Return type

[**\Kronup\Model\ChannelMembersList**](../../Model/ChannelMembersList)

### Description

> List members

List all channel members

[Back to top](#top){: .btn .btn-purple }

---


## `channelUnassign()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **channelUnassign.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ChannelsApi/channelUnassign.php){: .btn .btn-green .mt-4}

### Request

> **DELETE** `/teams/{teamId}/channels/{channelId}/users/{userId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->channels()->channelUnassign(
    string $team_id,
    string $channel_id,
    string $user_id,
    string $x_org_id
): bool
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$user_id** | **string**  | User ID 
 **$x_org_id** | **string**  | Organization ID 

### Return type

**bool**

### Description

> Unassign from channel

Remove a user from a channel

[Back to top](#top){: .btn .btn-purple }

---


## `channelUpdate()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **channelUpdate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/ChannelsApi/channelUpdate.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/teams/{teamId}/channels/{channelId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->channels()->channelUpdate(
    string $team_id,
    string $channel_id,
    string $x_org_id,
    \Kronup\Model\PayloadChannelUpdate $payload_channel_update
): \Kronup\Model\TeamExtended
```

### Parameters

Name | Type | Description
------------- | ------------- | -------------
 **$team_id** | **string**  | Team ID 
 **$channel_id** | **string**  | Channel ID 
 **$x_org_id** | **string**  | Organization ID 
 **$payload_channel_update** | [**\Kronup\Model\PayloadChannelUpdate**](../../Model/PayloadChannelUpdate) |  

### Return type

[**\Kronup\Model\TeamExtended**](../../Model/TeamExtended)

### Description

> Update channel

Update channel details for a team

[Back to top](#top){: .btn .btn-purple }

---
