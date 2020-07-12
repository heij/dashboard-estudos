<?php

namespace App\Models;

use Dotenv\Result\Result;
use Illuminate\Database\Eloquent\Model;
use stdClass;

class Study extends Model
{
    // public $table = "studies";

    // public $timestamp = true;

    public $fillable = [
        'description',
        'date_init',
        'date_finish',
        'status',
        'area_id'
    ];

    public function area()
    {
        // $this->belongsTo('App\Models\Area');
        // return $this->belongsTo(Area::class, 'area_id', 'id');
        return $this->belongsTo(Area::class);
    }

    public function numEstudosPorStatus()
    {
        $result = $this->select($this::raw('status, count(status) AS count'))->groupBy('status')->get();
        $parsedResult = [];
        foreach ($result as $row) {
            $parsedResult[$row->status] = $row->count;
        }
        return $parsedResult;
    }

    public function estudosPorStatus($tipo)
    {
        if (in_array($tipo, ['Atrasado', 'Em andamento', 'Finalizado'])) {
            return $this->where('status', '=', $tipo)->get();
        } else {
            return [];
        }
    }
}
