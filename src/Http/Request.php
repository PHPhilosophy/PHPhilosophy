<?php

namespace Phphilosophy\Http;

use Phphilosophy\Http\Interfaces\RequestInterface;
use Phphilosophy\Http\Interfaces\{InputInterface, SessionInterface, UriInterface};

/**
 * @author      Lisa Saalfrank <lisa.saalfrank@web.de>
 * @copyright   2016 Lisa Saalfrank
 * @license     MIT License http://opensource.org/licenses/MIT
 * @package     Phphilosophy\Http
 * @version     1.0-thales
 */
class Request implements RequestInterface {
    
    /**
     * @var string
     */
    private $method;
    
    /**
     * @var \Phphilosophy\Http\Interfaces\UriInterface
     */
    private $uri;
    
    /**
     * @var \Phphilosophy\Http\Interfaces\InputInterface
     */
    private $input;
    
    /**
     * @var \Phphilosophy\Http\Interfaces\SessionInterface
     */
    private $session;
    
    /**
     * @param   string                                          $method
     * @param   \Phphilosophy\Http\Interfaces\UriInterface      $uri
     * @param   \Phphilosophy\Http\Interfaces\InputInterface    $input
     * @param   \Phphilosophy\Http\Interfaces\SessionInterface  $session
     */
    public function __construct(
        string $method,
        UriInterface $uri,
        InputInterface $input,
        SessionInterface $session
    ) {
        $this->method = $method;
        $this->uri = $uri;
        $this->input = $input;
        $this->session = $session;
    }
}