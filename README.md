# IntegratedSubscriptionWallBundle #
This bundle provides SubscriptionWall management

## Requirements ##
* See the require section in the composer.json

## Features ##
* SubscriptionWall management

## Documentation ##
* [Integrated for Developers](http://integratedfordevelopers.com/ "Integrated for Developers")

## Installation ##
This bundle can be installed following these steps:

### Install using composer ###

    $ php composer.phar require integrated/subscription-bundle:dev-master

### Enable the bundle ###

    // app/AppKernel.php
    public function registerBundles()
    {
        $bundles = array(
            // ...
            new Integrated\Bundle\SubscriptionBundle\IntegratedSubscriptionBundle(),
            // ...
        );
    }

### Import the routing ###

    # app/config/routing.yml
    integrated_subscription:
        resource: "@IntegratedSubscriptionBundle/Resources/config/routing.xml"
        prefix: "/admin"

## License ##
This bundle is under the MIT license. See the complete license in the bundle:

    LICENSE

## Contributing ##
Pull requests are welcome. Please see our [CONTRIBUTING guide](http://integratedfordevelopers.com/contributing "CONTRIBUTING guide").

## About ##
This bundle is part of the Integrated project. You can read more about this project on the
[Integrated for Developers](http://integratedfordevelopers.com/ "Integrated for Developers") website.
