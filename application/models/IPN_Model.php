<?php
/**
 * Created by Memba Co. Developer
 * Projct: Bazarci
 * User: Memba Co.
 * Date: 10.11.2018
 * Time: 15:58
 */

/**
 * Class IPN_Model
 */
class IPN_Model extends CI_Controller
{

    public function log_ipn($ipn)
    {
        $this->db->insert("ipn_log", array(
                "data" => $ipn,
                "timestamp" => time(),
                "IP" => $_SERVER['REMOTE_ADDR']
            )
        );
    }

    public function add_payment($data)
    {
        $this->db->insert("payment_logs", $data);
    }

    public function get_payment_log_hash($hash)
    {
        return $this->db->where("hash", $hash)->get("payment_logs");
    }
}

?>