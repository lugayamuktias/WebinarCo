<?php

namespace App\Models;

use CodeIgniter\Model;

class inputwebinarmodel extends Model
{
    protected $table = "detailevent";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'nama_webinar', 'pembicara', 'topik_webinar', 'tanggal_mulai', 'waktu_mulai','durasi','batas_peserta','type_event','gambar'];
}