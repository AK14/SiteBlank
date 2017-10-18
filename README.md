SiteBlank
=========

- php v 7.*
- symfony 3.3.9
- jquery-3.2.1
- bootstrap 3


bin/console
-----------
- Create db
    - `php bin/console doctrine:database:create`

- Generates entity
    - `php bin/console doctrine:generate:entities AppBundle/Entity/Product`

- Generates entities in the bundle AppBundle
    - `php bin/console doctrine:generate:entities AppBundle`

- Generates all entities of bundles in the Acme namespace
    - `php bin/console doctrine:generate:entities Acme`

- Creating the Database Tables/Schema
    - `php bin/console doctrine:schema:update --force`

- Clear cache
    - `php bin/console cache:clear -e prod`
    - `php bin/console cache:clear -e dev`
    
- Server start
    - `php bin/console server:run`