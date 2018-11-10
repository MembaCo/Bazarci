<?php
/**
 * Created by Memba Co. Developer
 * Projct: Bazarci
 * User: Memba Co.
 * Date: 10.11.2018
 * Time: 15:52
 */

/**
 * Class Para_Model
 */
class Para_Model extends CI_Model
{

    public function get_plans()
    {
        return $this->db->get("payment_plans");
    }

    public function get_plan($id)
    {
        return $this->db->where("ID", $id)->get("payment_plans");
    }

    public function update_plan($id, $data)
    {
        $this->db->where("ID", $id)->update("payment_plans", $data);
    }


}

?>