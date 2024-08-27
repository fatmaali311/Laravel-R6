<h2> MiddleWare</h2>
<p> Middleware is code that runs before or after an HTTP request reaches the application's Controller. Middleware is used to handle operations that need to be performed at a certain level of the application, such as user authentication, setting a specific language, or logging requests .</p>
<h3>Types of Middleware</h3>
<P>
1-Global Middleware:
This middleware is applied to every request that reaches the application, regardless of the route or target controller.
It is defined in the app/Http/Kernel.php file within the middleware array.

Examples:
CSRF protection, such as \App\Http\Middleware\VerifyCsrfToken::class.

2-Route Middleware (Custom Middleware):
This middleware is applied only to specific routes or route groups.
It is registered in the app/Http/Kernel.php file within the routeMiddleware array.
You can apply it to routes or route groups using methods like Route::middleware() or directly within a Controller.

Examples:
User authentication (auth).

3-Middleware Groups:
These are groups of middleware that can be applied together to a set of routes or a specific scope of the application.
They are defined in the app/Http/Kernel.php file under the middlewareGroups array.
Laravel provides two default groups: web and api.</p>
 <h3>Where Middleware is Defined:</h3>
 <p>
 Global Middleware: Defined in the app/Http/Kernel.php file under the middleware array.

Route Middleware: Also defined in the app/Http/Kernel.php file under the routeMiddleware array.

Middleware Groups: Defined in the same file (Kernel.php) under the middlewareGroups array.
 
  </P>
  <h3>Differences Between Global Middleware and Custom Middleware:</h3>
  <p>
  <h6>Global Middleware:</h6>

Applied to all requests automatically.
Used for general tasks that apply to all requests, such as common security checks or handling CORS.


<h6>Route Middleware (Custom Middleware):</h6>

Applied only to specific requests or routes.
Used for specific operations, like checking user permissions on a certain route.
</p>
 <h3>Differences Between Global Middleware and web / api Middleware Groups:
</h3>
<p>
 <h6>Global Middleware:</h6>
 Operates on all requests regardless of the route or controller.
  <h6>web Middleware Group:</h6>
  Contains middleware needed for applications that use sessions, cookies, and other features specific to traditional web applications.
 <h6>api Middleware Group:</h6>
 Contains middleware for applications relying on APIs, such as token handling and JSON responses.

</p>