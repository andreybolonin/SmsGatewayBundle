<?php

namespace SmsGatewayBundle\Drivers;

use SmsGatewayBundle\OutgoingMessage;

interface DriverInterface
{
    /**
     * Sends a SMS message.
     *
     * @param \SmsGatewayBundle\OutgoingMessage $message
     */
    public function send(OutgoingMessage $message);

    /**
     * Checks the server for messages and returns their results.
     *
     * @param array $options
     *
     * @return array
     */
    public function checkMessages(array $options = []);

    /**
     * Gets a single message by it's ID.
     *
     * @param string|int $messageId
     *
     * @return \SmsGatewayBundle\IncomingMessage
     */
    public function getMessage($messageId);

    /**
     * Receives an incoming message via REST call.
     *
     * @param mixed $raw
     *
     * @return \SmsGatewayBundle\IncomingMessage
     */
    public function receive($raw);
}
