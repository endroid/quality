## Guidelines

* Apply strong typing
    * Reduce the number of optional properties as much as possible
* Entities and models primarily maintain state
    * Use repositories to create / update entities
* Make objects immutible where possible to make your model more solid
    * You can use builders or factories to get rid of setters
* Rely on self-created UUIDs instead of database generated values
* The primary data source should guarantee consistency
    * You can still use a NoSQL database for creating fast views
* Use the message bus to make changes to the domain
