<?php

namespace controller\reg;

class get_data_init {

    public static function getUser() {
        return ['stranger' => '*'];
    }

    public static function execute($p) {
        \sock\init($p['address'], $p['port']);
        \acp\sendPackI1(ACP_CMD_REGSMP_PROG_GET_DATA_INIT, $p['item']);
        $data = \acp\getRegsmpDataInit();
        \sock\suspend();
        return $data;
    }

}
