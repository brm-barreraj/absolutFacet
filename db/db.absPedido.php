<?php
/**
 * Table Definition for abs_pedido
 */

class DataObject_AbsPedido extends DB_DataObject 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'abs_pedido';                      // table name
    public $id;                              // int(11)  not_null primary_key auto_increment
    public $nombre;                          // blob(65535)  blob
    public $tipoDocumento;                   // string(45)  
    public $documento;                       // string(15)  
    public $direccion;                       // blob(65535)  blob
    public $apartamento;                     // string(75)  
    public $ciudad;                          // string(75)  
    public $telefono;                        // string(15)  
    public $email;                           // string(150)  
    public $celular;                         // string(75)  
    public $cantidadCombo1;                  // int(11)  
    public $cantidadCombo2;                  // int(11)  
    public $cantidadCombo3;                  // int(11)  
    public $cantidadCombo4;                  // int(11)  
    public $totalValor;                      // string(75)  
    public $fecha;                           // datetime(19)  binary

    /* Static get */
    function staticGet($k,$v=NULL) { return DB_DataObject::staticGet('DataObject_AbsPedido',$k,$v); }

    function table()
    {
         return array(
             'id' =>  DB_DATAOBJECT_INT + DB_DATAOBJECT_NOTNULL,
             'nombre' =>  DB_DATAOBJECT_STR + DB_DATAOBJECT_BLOB,
             'tipoDocumento' =>  DB_DATAOBJECT_STR,
             'documento' =>  DB_DATAOBJECT_STR,
             'direccion' =>  DB_DATAOBJECT_STR + DB_DATAOBJECT_BLOB,
             'apartamento' =>  DB_DATAOBJECT_STR,
             'ciudad' =>  DB_DATAOBJECT_STR,
             'telefono' =>  DB_DATAOBJECT_STR,
             'email' =>  DB_DATAOBJECT_STR,
             'celular' =>  DB_DATAOBJECT_STR,
             'cantidadCombo1' =>  DB_DATAOBJECT_INT,
             'cantidadCombo2' =>  DB_DATAOBJECT_INT,
             'cantidadCombo3' =>  DB_DATAOBJECT_INT,
             'cantidadCombo4' =>  DB_DATAOBJECT_INT,
             'totalValor' =>  DB_DATAOBJECT_STR,
             'fecha' =>  DB_DATAOBJECT_STR + DB_DATAOBJECT_DATE + DB_DATAOBJECT_TIME,
         );
    }

    function keys()
    {
         return array('id');
    }

    function sequenceKey() // keyname, use native, native name
    {
         return array('id', true, false);
    }

    function defaults() // column default values 
    {
         return array(
             'nombre' => '',
             'tipoDocumento' => '',
             'documento' => '',
             'direccion' => '',
             'apartamento' => '',
             'ciudad' => '',
             'telefono' => '',
             'email' => '',
             'celular' => '',
             'totalValor' => '',
         );
    }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
