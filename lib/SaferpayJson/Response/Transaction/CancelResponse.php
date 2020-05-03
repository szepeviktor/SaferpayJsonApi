<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Response\Transaction;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Response\Response;

final class CancelResponse extends Response
{
    /**
     * @var string
     * @SerializedName("TransactionId")
     * @Type("string")
     */
    private $transactionId;

    /**
     * @var string
     * @SerializedName("OrderId")
     * @Type("string")
     */
    private $orderId;

    /**
     * @var string
     * @SerializedName("Date")
     * @Type("string")
     */
    private $date;

    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }

    public function getOrderId(): ?string
    {
        return $this->orderId;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }
}
