<?php

class Votante extends Eloquent {

    protected $table = 'votantes';
    public $timestamp = false;

    protected $fillable = ['id','cedula','nombre','fallecido','centro_id'];

	protected static $rules = [
        'id' => 'required',
		'cedula' => 'required',
		'nombre' => 'required',
		'fallecido' => 'required',
		'centro_id' => 'required',        
    ];

    //Use this for custom messages
    protected static $messages = [
        
    ];

    /* Scopes */    

    public function scopeSearch($query, $q)
    {
        return $query->where('cedula', 'LIKE', '%'.$q.'%')->orWhere('nombre', 'LIKE', '%'.$q.'%');
        //return $query->whereRaw("MATCH(nombre,cedula) AGAINST(? IN BOOLEAN MODE)", array($q)); 
    }

    /* Relationships */    

    /* Function */
}