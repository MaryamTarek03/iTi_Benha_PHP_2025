<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = ['id', 'name'];
    // public static function getPatientsArray()
    // {
    //     return [
    //         new Patient(['id' => 1, 'name' => 'John Doe']),
    //         new Patient(['id' => 2, 'name' => 'Jane Smith']),
    //         new Patient(['id' => 3, 'name' => 'Alice Johnson']),
    //     ];
    // }
    // public static function addPatient($id, $name)
    // {
    //     $patients = self::getPatientsArray();
    //     $patients[] = ['id' => $id, 'name' => $name];
    //     return $patients;
    // }
    // public static function findPatientById($id)
    // {
    //     $patients = self::getPatientsArray();
    //     foreach ($patients as $patient) {
    //         if ($patient['id'] == $id) {
    //             return $patient;
    //         }
    //     }
    //     return null;
    // }
}
