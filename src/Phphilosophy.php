<?php

namespace Phphilosophy;

use Phphilosophy\Http\Interfaces\RequestInterface;
use Phphilosophy\Router\Route;

/**
 * @author      Lisa Saalfrank <lisa.saalfrank@web.de>
 * @copyright   2016 Lisa Saalfrank
 * @license     MIT License http://opensource.org/licenses/MIT
 * @package     Phphilosophy
 * @version     1.0-thales
 */
class Phphilosophy {

    /**
     * @var \Phphilosophy\Http\Interfaces\RequestInterface
     */
    private $request;
    
    /**
     * @param   \Phphilosophy\Http\Interfaces\RequestInterface  $request
     */
    public function __construct(RequestInterface $request) {
        $this->request = $request;
    }
    
    /**
     * @param   string  $pattern
     * @param   array   $action
     * @param   array   $middleware
     *
     * @return  void
     */
    public function get(string $pattern, array $action, array $middleware = []) {
        $this->add(['GET'], $pattern, $action, $middleware);
    }
    
    /**
     * @param   string  $pattern
     * @param   array   $action
     * @param   array   $middleware
     *
     * @return  void
     */
    public function post(string $pattern, array $action, array $middleware = []) {
        $this->add(['POST'], $pattern, $action, $middleware);
    }
    
    /**
     * @param   string  $pattern
     * @param   array   $action
     * @param   array   $middleware
     *
     * @return  void
     */
    public function any(string $pattern, array $action, array $middleware = []) {
        $this->add(['GET', 'POST'], $pattern, $action, $middleware);
    }
    
    /**
     * @param   array   $methods
     * @param   string  $pattern
     * @param   array   $action
     * @param   array   $middleware
     *
     * @return  void
     */
    public function add(array $methods, string $pattern, array $action, array $middleware = []) {
        $route = new Route($pattern, $action, $methods, $middleware);
    }
    
    /**
     * @param   string      $name
     * @param   callable    $routes
     * @param   array       $middleware
     *
     * @return  void
     */
    public function group(string $name, callable $routes, array $middleware = []) {
        
    }
    
    /**
     * @param   array       $middleware
     * @param   callable    $routes
     *
     * @return  void
     */
    public function middleware(array $middleware, callable $routes) {
        
    }
    
    /**
     * @return  void
     */
    public function respond() {
        
    }
}