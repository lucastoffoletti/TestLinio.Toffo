<?php
/**
 * Created by PhpStorm.
 * User: lucas.toffoletti
 * Date: 21/11/2019
 */

namespace toffo\PHP;


class Main
{
    public  function executeChallenge(){

        for($i =1; $i <=100;$i++)
        {
            $calcForm = new CalcForm();
            $result = new Result();
            $result -> number = $i;
            $result -> remainder3  = $calcForm->calcRemainder($i,3);
            $result -> remainder5  = $calcForm->calcRemainder($i,5);
            $result -> remainder35 = $calcForm->addRemainder($result->remainder3,$result->remainder5);
            $write = new Writer();
            $write->writeAnswer($result);


        }
    }

}
