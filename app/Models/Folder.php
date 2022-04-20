<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    use HasFactory;

    protected $fillable = [
        'cgm',
        'name',
        'birth_date',
        'label',
        'box',
        'shelf',
        'door',
        'description'
    ];

    private $a=1200, $b=150, $c=50;
    public function makeLabel()
    {
        $this->door = intdiv($this->id,$a);
        $this->shelf = intdiv($this->id,$b);
        $this->box = intdiv($this->id,$c);
        $this->label = $this->door.$this->shelf.$this->box.$this->id;
        return ($this->label);
    }



}
