<?php

namespace App\classes;

class Series
{
    public function createSeries()
    {
        // print_r($_POST);
        // exit();

    //////////////////////////////////////
        //|| object Concept Method  ||//
    //////////////////////////////////////

        // $data = (object)$_POST;
        // $result='';
        // for($i=$data->starting_number; $i<=$data->ending_number; $i++) {
        //     $result .= $i.' ';
        // }
        // return $result;

    //////////////////////////////////////
        //|| Array Concept Method  ||//
    //////////////////////////////////////

        $data = (object)$_POST;
        $result = [];

        if ($data->starting_number < $data->ending_number) {

            if ($data->choice == 'odd') {
                for ($i = $data->starting_number; $i <= $data->ending_number; $i++) {
                    if ($i % 2 != 0) {
                        array_push($result, $i);
                    }
                }
            } elseif ($data->choice == 'even') {
                for ($i = $data->starting_number; $i <= $data->ending_number; $i++) {
                    if ($i % 2 == 0) {
                        array_push($result, $i);
                    }
                }
            }
        } else {
            if ($data->choice == 'odd') {
                for ($i = $data->starting_number; $i >= $data->ending_number; $i--) {
                    if ($i % 2 != 0) {
                        array_push($result, $i);
                    }
                }
            } elseif ($data->choice == 'even') {
                for ($i = $data->starting_number; $i >= $data->ending_number; $i--) {
                    if ($i % 2 == 0) {
                        array_push($result, $i);
                    }
                }
            }
        }
        return $result;
    }

    public function findWordCharacter(){
        $data = (object)$_POST;
        $givenString = $data->given_string;
        $result2=[];
        $result2 ['total_word'] = str_word_count($givenString);
        $result2 ['total_character'] = strlen($givenString);
        return $result2;
    }
}
