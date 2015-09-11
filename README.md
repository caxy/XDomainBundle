XDomain Bundle
==============

Use this bundle to support cross-domain XHR without [CORS](https://caniuse.com/cors). It
depends on the [XDomain](https://github.com/jpillora/xdomain) JavaScript library.

Installation
------------

Require the `caxy/xdomain-bundle` package in your composer.json and update
your dependencies.

    $ composer require caxy/xdomain-bundle

Register the bundle in `app/AppKernel.php`:

```php
// app/AppKernel.php
public function registerBundles()
{
    return array(
        // ...
        new Caxy\Bundle\XDomainBundle\CaxyXDomainBundle(),
    );
}
```

Import the routing definition in `routing.yml`:

```yaml
# app/config/routing.yml
caxy_xdomain:
    resource: "@CaxyXDomainBundle/Resources/config/routing.yml"
```

Enable the bundle's configuration in `app/config/config.yml`:

```yaml
# app/config/config.yml
caxy_xdomain:
    allow_from: http://example.com
```

Add an asset named `xdomain_js` to your Assetic bundle configuration with the URL of
the XDomain script. The URL in this example comes from the [XDomain
documentation](https://github.com/jpillora/xdomain#download).

```yaml
# app/config/config.yml
framework:
    assets:
        packages:
            xdomain:
                version: 0.7.3
                version_format: %%2$s/dist/%%1$s
                base_urls:
                    - //cdn.rawgit.com/jpillora/xdomain
```
