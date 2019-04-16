<?php
namespace Omnipay\Skrill\Message;

use Omnipay\Common\Message\AbstractResponse;

/**
 * Skrill Response
 *
 * @author Joao Dias <joao.dias@cherrygroup.com>
 * @author SamYan <luvel88@gmail.com>
 * @copyright 2013-2019 Cherry Ltd.
 * @license http://opensource.org/licenses/mit-license.php MIT
 * @version 3.0.0 Automated Payments Interface
 */
abstract class Response extends AbstractResponse
{
    /**
     * Is the response successful?
     *
     * @return boolean
     */
    public function isSuccessful()
    {
        return !isset($this->data->error);
    }

    /**
     * Get the error message if the response isn't successful.
     *
     * @return string error message
     */
    public function getMessage()
    {
        return $this->isSuccessful()
            ? null
            : (string)$this->data->error->error_msg;
    }
}
