# PhpFrameworkZero

A php framework inspired by Django but a lot simpler.
Main logic:

  1) When a request arrives, the framework passes it to the main router. Routers are objects that test the request for different properties, and pass it on to the right handler, which is another router or a view.
  
  2) Views are simple functions or complex objects which handle the request and create the response. For this, they may make database queries through models, and they render templates.
  
  3) Models are object representations of database tables, designed for easy queriability.
  
  4) Templates are php documents that visualize data, turn it into html.
  
A project consists of apps. Apps are big logical units with separate routing and views. Though they can technically call each aother, they shouldn't. Templates are mostly separated too, but using common base templates is perfectly fine. 
  
