<?php

require_once "../Geth/JsonRpc.php";
require_once "../Geth/Geth.php";

$geth = new Geth\Geth('127.0.0.1', 8545);
echo "Client version: " . $geth->web3_clientVersion(), "\n";
echo $geth->web3_sha3('0x68656c6c6f20776f726c64') . ": " . '0x47173285a8d7341e5e972fc677286384f802f8ef42a5ec5f03bbfa254cb01fad', "\n";
echo $geth->net_version() . ": " . "1", "\n";
echo $geth->net_listening() . ": " . "true", "\n";
echo "Net Pears count" . ": " . $geth->net_peerCount(), "\n";
echo "Protocol version" . ": " . $geth->eth_protocolVersion(), "\n";
echo "Coinbase" . ": " . $geth->eth_coinbase(), "\n";
