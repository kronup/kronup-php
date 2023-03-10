---
title: Organizations
parent: API
layout: page
---

# Api/OrganizationsApi

[Organizations API Reference](https://api.kronup.com/#tag/Organizations)

```php
// Place your API Key 👇 here
$sdk = new \Kronup\Sdk();

// API Call
$sdk->api()->organizations();
```

## Methods

Method | Description
------------- | -------------
[**organizationCreate()**](#organizationcreate) | Create organization
[**organizationDelete()**](#organizationdelete) | Delete organization
[**organizationUpdate()**](#organizationupdate) | Update organization


## `organizationCreate()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **organizationCreate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/OrganizationsApi/organizationCreate.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/organizations`

### Type signature

```php
(new \Kronup\Sdk())->api()->organizations()->organizationCreate(
    \Kronup\Model\RequestOrganizationCreate $request_organization_create
): \Kronup\Model\Organization
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$request_organization_create** | [**\Kronup\Model\RequestOrganizationCreate**](../../Model/RequestOrganizationCreate) |  

### Return type

[**\Kronup\Model\Organization**](../../Model/Organization)

### Description

> Create organization

Add an organization owned by the current user

[Back to top](#top){: .btn .btn-purple }

---


## `organizationDelete()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **organizationDelete.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/OrganizationsApi/organizationDelete.php){: .btn .btn-green .mt-4}

### Request

> **DELETE** `/organizations/{orgId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->organizations()->organizationDelete(
    string $org_id
): bool
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$org_id** | **string**  | Organization ID 

### Return type

**bool**

### Description

> Delete organization

Remove organization

[Back to top](#top){: .btn .btn-purple }

---


## `organizationUpdate()`

### Example

{: .new-title }
> #️⃣ Execute command in terminal 
> 
> [php -f **organizationUpdate.php**](https://github.com/kronup/kronup-php/blob/main/examples/Api/OrganizationsApi/organizationUpdate.php){: .btn .btn-green .mt-4}

### Request

> **POST** `/organizations/{orgId}`

### Type signature

```php
(new \Kronup\Sdk())->api()->organizations()->organizationUpdate(
    string $org_id,
    \Kronup\Model\RequestOrganizationUpdate $request_organization_update
): \Kronup\Model\Organization
```

### Parameters

Name | Type | Description
------------- | ------------- | ------------- | -------------
 **$org_id** | **string**  | Organization ID 
 **$request_organization_update** | [**\Kronup\Model\RequestOrganizationUpdate**](../../Model/RequestOrganizationUpdate) |  

### Return type

[**\Kronup\Model\Organization**](../../Model/Organization)

### Description

> Update organization

Update organization details

[Back to top](#top){: .btn .btn-purple }

---
