<?php

namespace Galoa\ExerciciosPhp\TextWrap;

/**
 * Implemente sua resolução aqui.
 */
class Resolucao implements TextWrapInterface {

  /**
   * {@inheritdoc}
   */
  public function textWrap(string $text, int $length): array {
    
    $text_final = array();
    
    if($text == "")
    {
      $text_final = [""];
    }else{
      $words = explode(" ", $text);
      
      $new_word = "";
      
      for ($i = 0; $i < count($words); $i++)
      {
        
        $length_line = 0;
        $length_word= strlen($words[$i]);
        
        //print_r($words[$i] . " | " . $length_word. "\n");
        
        
      }
    }
      return $text_final;
  }

}
