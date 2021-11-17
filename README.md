# AcmeWidgetCo

## Building app
docker-compose up -d --build

## Starting app
docker-compose up -d

## Running tests
docker-compose run php vendor/bin/phpunit

## Documentation
http://localhost:8080/

## Assumptions
1. Basket complexity will change, so it's build with BasketBuilder (now it can take more than three parameters on the constructor).
2. Similar Baskets can use same builder or might need other Builder functionality. I'm using trait to add functionality through composition. BasketBuilder is easy to be reused.
3. BasketBuilder configuration is encapsulated into factory.
4. Products count and data will change so ProductCatalogueDataStructure is holding the data.
5. ProductCatalogue is build with ProductCatalogueDataStructure and ProductCatalogueStrategy.
6. The way products are handled will change so ProductCatalogueStrategy allows logic to be changed.
7. The way offers are build will change so OffersStrategy allows logic to be changed.
8. Delivery charge will change so DeliveryChargeRulesStrategy allows logic to be changed as well.
9. All classes are connected through abstract level - interfaces.
10. Money is stored as integers to avoid missing one cent issue.
11. Exercise is using composer to add autoloader and PhpUnit.
12. Example of BasketDecorator added, to present how new business logic should be introduced.
13. Composite example added to demonstrate working on a group of Baskets.

## Using PhpUnit in PhpStorm
1. PhpUnit By Remote Interpreter
2. Provide full docker path to autoloader.php /opt/project/vendor/autoload.php
