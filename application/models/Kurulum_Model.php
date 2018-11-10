<?php
/**
 * Created by Memba Co. Developer
 * Projct: Bazarci
 * User: Memba Co.
 * Date: 10.11.2018
 * Time: 16:00
 */
/**
 * Class Kurulum_Model
 */
class Kurulum_Model extends CI_Controller
{

    public function createAdmin($username, $email, $password)
    {
        $this->db->insert("users",
            array(
                "username" => $username,
                "email" => $email,
                "first_name" => "Admin",
                "last_name" => "User",
                "user_role" => 1,
                "password" => $password,
                "IP" => $_SERVER['REMOTE_ADDR'],
                "joined" => time(),
                "joined_date" => date("n-Y")
            )
        );
    }

    public function updateSite($name, $desc, $dir)
    {
        $this->db->update("site_settings",
            array(
                "site_name" => $name,
                "site_desc" => $desc,
                "upload_path" => $dir . "uploads",
                "upload_path_relative" => "uploads",
                "install" => 0
            )
        );
    }

    public function checkAdmin()
    {
        $s = $this->db->where("user_roles.admin", 1)
            ->join("user_roles", "user_roles.ID = users.user_role")
            ->get("users");
        if ($s->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}

?>