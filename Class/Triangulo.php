<?php



class Triangulo{
    private $altura; 
    private $base;
   
    function Triangulo(){
        // es la funcion del constructor 
        $this->altura= 0; 
        $this->base = 0;  
    }
    public function tabla(){
        $html = '
            <br>
                <form name= "for" action="" method="POST" text_aling= "center"> 
                <br>
                <h1 style="text-align: center; color: blue">***CALCULAR EL AREA Y PERIMETRO DEL TRIANGULO****</h1></td>
              
                 <br>
                 <table  style=" margin: 0 auto" border="2">
                 <tr>
                            <td style="text-align: center ; width: 80% ">* LA ALTURA DEL TRIANGULO ES*</td>
                            <td style="text-align: center ; width: 80% "><input type="text" name="altura" size=10></td>
                        </tr>
                        <tr>
                            <td  style="text-align: center ; width: 80% ">*LA BASE DEL TRIANGULO ES*</td>
                            <td style="text-align: center ; width: 80% "><input type="text" name="base" size=10></td>
                        </tr>
                        <tr aling = "center">
                            <td aling = "center" colspan= "2" ><center><input type="submit" name="guardar" value="Calcular"></center></td>
                        </tr>
            </table> 
                </form>';
        return $html;
    }
    
    public function area($altura,$base){ 
        $area = $altura * $base / 2;
        return $area;
    }
    public function perimetro($altura,$base){ 
        $perimetro = ($base + $altura)*2;
        return $perimetro;
    }   
    
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

