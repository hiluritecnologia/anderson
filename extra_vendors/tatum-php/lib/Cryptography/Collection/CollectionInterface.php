<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Collection;
!defined("TATUM-SDK") && exit();

/**
 * @deprecated
 */
interface CollectionInterface extends \Iterator, \ArrayAccess, \Countable {
    /**
     * @return array
     */
    public function all(): array;

    /**
     * @return mixed
     */
    public function bottom();

    /**
     * @return mixed
     */
    public function top();

    /**
     * @param int $start
     * @param int $length
     * @return self
     */
    public function slice(int $start, int $length);

    /**
     * @return bool
     */
    public function isNull(): bool;
}
