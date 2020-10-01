# Laravel Client POS Support

Laravel PHP library untuk mengintegrasikan Aplikasi Anda dengan sistem Support Perlu POS

Library ini support PHP :

- [ ] PHP 5.6.x
- [ ] PHP 7.0.x
- [ ] PHP 7.1.x
- [x] PHP 7.2.x
- [ ] PHP 7.3.x

Library ini support Laravel :

- [x] Laravel 6.2.x
- [ ] Laravel 6.5.x
- [ ] Laravel 7.0.x


## Feature Library
* Member Register
* Add Order
* Use Subscription
* Update Status Order (Done, Pending, Cancel)
* Update Status Subscription (Request, Success)
* Update Status Member (Unverified, Verified, Active)

### INSTALLATION

```bash
composer require perluapps/client-support-php
```

## Guidelines
* need composer to install
* based on using Unirest PHP Http Client Library
* wrapping using body or ``` Content-Type ``` type as ``` application/json ``` (need an array parse from its method)
* need parse base url to its method likewise 
```php
     $url = env("URL_POS_SUPPORT");
     $member = [
            // array body 
        ];
     $clientSupport = new ClientSupport('register');
     $clientSupport->factory()->send($url, $member);
```

# LICENSE

MIT License

Copyright (c) 2017 perluapps

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
