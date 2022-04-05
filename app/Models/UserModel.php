<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'users';
    protected $primaryKey       = 'uid';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['username' , 'name' , 'password' , 'email'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'username'     => 'required|alpha_dash|min_length[4]|is_unique[users.username]',
        'password'     => 'required|min_length[8]|alpha_numeric_punct',
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = false;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = ['hashPassword'];
    protected $afterInsert    = [];
    protected $beforeUpdate   = ['hashPassword'];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = ['verifyPassword'];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    protected function hashPassword(array $data)
{
    if (! isset($data['data']['password'])) {
        return $data;
    }

    $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
    

    return $data;
}

// Mengubah value password menjadi Bool jika mencari user dengan password untuk verifikasi. 
// Menampilkan data asli jika dinyatakan lain.
protected function verifyPassword(array $data){
    if (! isset($data['data']['password'])) {
        return $data;
    }else{

    $data['data']['password'] = (password_verify($data['data']['password'], $data['result']['password']) );
    }
    

    return $data;

}
}
