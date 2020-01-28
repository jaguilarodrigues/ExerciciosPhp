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
      $length_line = 0;
      $number_words= count($words);

      for ($i = 0; $i < count($words); $i++)
      {

        $length_word= strlen($words[$i]);

        if($length_line + $length_word <= $length)
        {
            if($new_word == "")
                $new_word = $new_word . $words[$i];
            else
                $new_word = $new_word . ' ' . $words[$i];
                
            $length_line=strlen($new_word);

        }else{
            //palavras grandes
        }

        if($i == $number_words - 1 || $i < $number_words - 1 && (strlen($new_word) + strlen($words[$i+1]) + 1) > $length)
        {
            array_push($text_final, $new_word);
            $new_word = "";
            $length_line = 0;
        }
      }
    }
      return $text_final;
  }

}
