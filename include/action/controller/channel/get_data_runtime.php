<?php

namespace controller\channel;

class get_data_runtime {

    public static function getUser() {
        return ['stranger' => '*'];
    }

    public static function execute($p) {
        \sock\init($p['address'], $p['port']);
        $id=\acp\requestSendI1List(ACP_CMD_CHANNEL_GET_DATA_RUNTIME, $p['item']);
        $data = \acp\getRegsmpDataRuntime($id);
        \sock\suspend();
        return $data;
    }

}
