<?php

namespace Phphilosophy\Http\Mockups;

use Phphilosophy\Http\Interfaces\SessionInterface;

/**
 * @author      Lisa Saalfrank <lisa.saalfrank@web.de>
 * @copyright   2016 Lisa Saalfrank
 * @license     MIT License http://opensource.org/licenses/MIT
 * @package     Phphilosophy\Http
 * @version     1.0-thales
 */
class SessionMockup implements SessionInterface {
    
    /**
     * @var array
     */
    private $session = [];
    
    /**
     * @param   array   $session
     */
    public function __construct(array $session) {
        $this->session = $session;
    }
}