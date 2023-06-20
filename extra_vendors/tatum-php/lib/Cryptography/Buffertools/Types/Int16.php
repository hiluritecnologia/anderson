<?php

declare(strict_types=1);

namespace Tatum\Cryptography\Buffertools\Types;
!defined("TATUM-SDK") && exit();

class Int16 extends AbstractSignedInt {
    /**
     * @return int
     */
    public function getBitSize(): int {
        return 16;
    }
}
