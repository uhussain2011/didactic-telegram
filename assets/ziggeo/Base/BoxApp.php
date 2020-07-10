<?php
namespace Ziggeo\BoxContent\Base;
class BoxApp
{

    protected $clientId;

    protected $clientSecret;

    /**
     * The Access Token
     *
     * @var string
     */
    protected $accessToken;

    /**
     * Create a new Box instance
     *
     * @param string $clientId     Application Client ID
     * @param string $clientSecret Application Client Secret
     * @param string $accessToken  Access Token
     */
    public function __construct($clientId, $clientSecret, $accessToken = null)
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->accessToken = $accessToken;
    }

    /**
     * Get the App Client ID
     *
     * @return string
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * Get the App Client Secret
     *
     * @return string
     */
    public function getClientSecret()
    {
        return $this->clientSecret;
    }

    /**
     * Get the Access Token
     *
     * @return string
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }
}
