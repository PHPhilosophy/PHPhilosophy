<?php

namespace Phphilosophy\Http;

use Phphilosophy\Http\Interfaces\UriInterface;

/**
 * @author      Lisa Saalfrank <lisa.saalfrank@web.de>
 * @copyright   2016 Lisa Saalfrank
 * @license     MIT License http://opensource.org/licenses/MIT
 * @package     Phphilosophy\Http
 * @version     1.0-thales
 */
class Uri implements UriInterface {
    
    /**
     * @var string
     */
    private $uri;
    
    /**
     * @param   string  $uri
     */
    public function __construct($uri) {
        $this->uri = $uri;
    }
}