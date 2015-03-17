# disposable-email-domains

  A list of [disposable email domains](http://en.wikipedia.org/wiki/Disposable_email_address) like `mailinator.com`. You can use it to detect or block disposable accounts in your signup process. This is a fork of [ivolo/disposable-email-domains](https://github.com/ivolo/disposable-email-domains/).

## Example

```php
$userEmail = "test@example.com";
if(DisposableEmail::isDisposableEmail($userEmail)){
  echo 'You are using a disposable email adrdesse';
}else{
  echo 'You are not unsing a disposable email adrdesse';
}
```

## Installation
  
```
$ composer install mapumba/disposable-email-domains-php
```

## Contributing

Add new disposable domains in the orginal [repository](https://github.com/ivolo/disposable-email-domains/).

## Licence

```
WWWWWW||WWWWWW
 W W W||W W W
      ||
    ( OO )__________
     /  |           \
    /o o|    MIT     \
    \___/||_||__||_|| *
         || ||  || ||
        _||_|| _||_||
       (__|__|(__|__|
```