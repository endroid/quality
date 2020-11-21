## Guidelines

* Only support actively maintained versions
    * Optionally support older versions in a separate branch
    * When a new version provides many advantages you can switch earlier
        * I.e.: PHP 7.4 typed properties
* Apply strong typing everywhere
    * Minimize the number of optional properties as much as possible
* Entities and models primarily maintain state
    * Use repositories to create / update entities
* Make objects immutible where possible to make your model more solid
    * You can use builders or factories to get rid of setters
* Use interfaces if you want to enforce generic behavior on specific types
* Rely on self-created UUIDs instead of database generated values
* The primary data source should guarantee consistency
    * You can still use a NoSQL database for creating fast views
* Use the message bus to make changes to the domain
* Do not pass complex objects to buses but rely on primitives
    * To some extent, value objects can be acceptable and valuable
    * As long as they don't rely on the domain too much (i.e. EmailAddress)
* Make logic explicit and readable
    * In case of softdeleteable don't rely on Doctrine filters
    * Use inheritance only in a is_a relation, not just for code reuse
    * Minimize usage of traits
* Minimize the number of if / else and switch statements
    * Instead of else, set a default value and use a single if
    * Switch statements often implicate different behavior => different objects
* Differences between projects and libraries
    * Projects are an implementation, libraries provide generic solutions
    * In libraries you provide routing via a routin.yaml file
        * In project you can choose to only depend on annotations
    * In libraries you should provide interfaces to allow customization
        * In projects you generally have a specific implementation
