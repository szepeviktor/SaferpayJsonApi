<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Request\SecureAliasStore;

use JMS\Serializer\Annotation\SerializedName;
use Ticketpark\SaferpayJson\Request\Request;
use Ticketpark\SaferpayJson\Request\RequestCommonsTrait;
use Ticketpark\SaferpayJson\Response\SecureAliasStore\AssertInsertResponse;

class AssertInsertRequest extends Request
{
    const API_PATH = '/Payment/v1/Alias/AssertInsert';
    const RESPONSE_CLASS = AssertInsertResponse::class;

    use RequestCommonsTrait;

    /**
     * @var string
     * @SerializedName("Token")
     */
    protected $token;

    public function getToken(): string
    {
        return $this->token;
    }

    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }
}
