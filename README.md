# PhpFrameworkZero

A php framework inspired by Django but a lot simpler.
Main logic:

  1) When a request arrives, the framework passes it to the main router. Routers are objects that test the request for different properties, and pass it on to the right handler, which is another router or a view.
  
  2) Views are simple functions or complex objects which handle the request and create the response. For this, they may make database queries or interact with external applications in some other way. They can either render templates or display data in some other way, like JSON objects for API responses.
  
  3) Templates are php documents that visualize data, turn it into html. They can encapsulate other templates or extend them, but they can't gather data.
  
A project consists of apps. Apps are big logical units with separate routing and views. Though they can technically call each aother, they shouldn't. Templates are mostly separated too, but using common base templates is perfectly fine. 

I might add providers and Dependency injection or some sort of database support if I need it, but I don't really work on this anymore. Use a proper framework or raw PHP instead.
