<?php
class Reportebajabol_Model extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function consultarVentasBajas($idperiodo,$comprobante,$idalmacen) {
        try {
            $sth = $this->db->prepare('CALL SP_LISTAR_VENTA_POR_PERIODO_BAJAS_SUNAT (?,?,?)');           
            $sth->bindParam(1, $idperiodo, PDO::PARAM_INT);
            $sth->bindParam(2, $comprobante, PDO::PARAM_STR);
            $sth->bindParam(3, $idalmacen, PDO::PARAM_INT);
            $sth->execute();
            $datos = $sth->fetchAll(PDO::FETCH_ASSOC);
            return $datos;
        } catch (Exception $e) {
            $mensaje = "ERORR DEL SISTEMA " . $e->getMessage();
            return $mensaje;
        }
    }     
}