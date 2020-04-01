Laravel Fawry
==============

# Installation

Install via composer  
```bash
composer require maherelgamil/laravel-fawry

```

And then publish config

```bash
php artisan vendor:publish --tag="fawry-config"
```

Add `merchant_code` , `security_key` that's provided from Atfawry account

Now, Run migration

```bash
php artisan migrate
```

# Usage

## Create Card Token:

```php
// Get user
$user = App\User::find(1);

$tokenResponse = Fawry::createCardToken($cardNumber, $expiryYear, $expiryMonth, $cvv, $user);
```

## Get List Of Customer Tokens:

```php
// Get user
$user = App\User::find(1);

Fawry::listCustomerTokens($user);
```

## Delete Customer Token
```php
// Get user
$user = App\User::find(1);

Fawry::deleteCardToken($user);
```

## Charge:

### Charge Via Card:
```php
// Get user
$user = App\User::find(1);

Fawry::chargeViaCard($merchantRefNum, $user, $amount, $chargeItems = [], $description = null )
```

### Charge Via Fawry
```php
// Get user
$user = App\User::find(1);

Fawry::chargeViaFawry($merchantRefNum, $user, $paymentExpiry, $amount, $chargeItems = [], $description = null )
```

## Refund
```php
Fawry::refund($fawryRefNumber, $refundAmount, $reason = null)
```

Enjoy!
