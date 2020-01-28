<?php

namespace Galoa\ExerciciosPhp\Tests\TextWrap;

use Galoa\ExerciciosPhp\TextWrap\Resolucao;
use PHPUnit\Framework\TestCase;

/**
 * Tests for Galoa\ExerciciosPhp\TextWrap\Resolucao.
 *
 * @codeCoverageIgnore
 */
class TextWrapTest extends TestCase {

  /**
   * Test Setup.
   */
  public function setUp() {
    $this->resolucao = new Resolucao();
    $this->baseString = "Se vi mais longe foi por estar de pé sobre ombros de gigantes";
  }

  /**
   * Checa o retorno para strings vazias.
   *
   * @covers Galoa\ExerciciosPhp\TextWrap\Resolucao::textWrap
   */
  public function testForEmptyStrings() {
    $ret = $this->resolucao->textWrap("", 2018);
    $this->assertEmpty($ret[0]);
    $this->assertCount(1, $ret);
  }

  /**
   * Testa a quebra de linha para palavras curtas.
   *
   * @covers Galoa\ExerciciosPhp\TextWrap\Resolucao::textWrap
   */
  
  public function testForSmallWords() {
    $ret = $this->resolucao->textWrap($this->baseString, 8);
    $this->assertEquals("Se vi", $ret[0]);
    $this->assertEquals("mais", $ret[1]);
    $this->assertEquals("longe", $ret[2]);
    $this->assertEquals("foi por", $ret[3]);
    $this->assertEquals("estar de", $ret[4]);
    $this->assertEquals("pé", $ret[5]);
    $this->assertEquals("sobre", $ret[6]);
    $this->assertEquals("ombros", $ret[7]);
    $this->assertEquals("de", $ret[8]);
    $this->assertEquals("gigantes", $ret[9]);
    $this->assertCount(10, $ret);
  }
  /*
  /**
   * Testa a quebra de linha para palavras curtas.
   *
   * @covers Galoa\ExerciciosPhp\TextWrap\Resolucao::textWrap
   */
  
  public function testForSmallWords2() {
    $ret = $this->resolucao->textWrap($this->baseString, 12);
    $this->assertEquals("Se vi mais", $ret[0]);
    $this->assertEquals("longe foi", $ret[1]);
    $this->assertEquals("por estar de", $ret[2]);
    $this->assertEquals("pé sobre", $ret[3]);
    $this->assertEquals("ombros de", $ret[4]);
    $this->assertEquals("gigantes", $ret[5]);
    $this->assertCount(6, $ret);
  }

  /**
   * Testa a quebra de linha para palavras limite de linha para 1.
   *
   * @covers Galoa\ExerciciosPhp\TextWrap\Resolucao::textWrap
   */
  /*
  public function testForLimitOne() {
    $ret = $this->resolucao->textWrap($this->baseString, 1);
    $this->assertEquals("S", $ret[0]);
    $this->assertEquals("e", $ret[1]);
    $this->assertEquals("v", $ret[2]);
    $this->assertEquals("i", $ret[3]);
    $this->assertEquals("m", $ret[4]);
    $this->assertEquals("a", $ret[5]);
    $this->assertEquals("i", $ret[6]);
    $this->assertEquals("s", $ret[7]);
    $this->assertEquals("l", $ret[8]);
    $this->assertEquals("o", $ret[9]);
    $this->assertEquals("n", $ret[10]);
    $this->assertEquals("g", $ret[11]);
    $this->assertEquals("e", $ret[12]);
    $this->assertEquals("f", $ret[13]);
    $this->assertEquals("o", $ret[14]);
    $this->assertEquals("i", $ret[15]);
    $this->assertEquals("p", $ret[16]);
    $this->assertEquals("o", $ret[17]);
    $this->assertEquals("r", $ret[18]);
    $this->assertEquals("e", $ret[19]);
    $this->assertEquals("s", $ret[20]);
    $this->assertEquals("t", $ret[21]);
    $this->assertEquals("a", $ret[22]);
    $this->assertEquals("r", $ret[23]);
    $this->assertEquals("d", $ret[24]);
    $this->assertEquals("e", $ret[25]);
    $this->assertEquals("p", $ret[26]);
    $this->assertEquals("é", $ret[27]);
    $this->assertEquals("s", $ret[28]);
    $this->assertEquals("o", $ret[29]);
    $this->assertEquals("b", $ret[30]);
    $this->assertEquals("r", $ret[31]);
    $this->assertEquals("e", $ret[32]);
    $this->assertEquals("o", $ret[33]);
    $this->assertEquals("m", $ret[34]);
    $this->assertEquals("b", $ret[35]);
    $this->assertEquals("r", $ret[36]);
    $this->assertEquals("o", $ret[37]);
    $this->assertEquals("s", $ret[38]);
    $this->assertEquals("d", $ret[39]);
    $this->assertEquals("e", $ret[40]);
    $this->assertEquals("g", $ret[41]);
    $this->assertEquals("i", $ret[42]);
    $this->assertEquals("g", $ret[43]);
    $this->assertEquals("a", $ret[44]);
    $this->assertEquals("n", $ret[45]);
    $this->assertEquals("t", $ret[46]);
    $this->assertEquals("e", $ret[47]);
    $this->assertEquals("s", $ret[48]);
    $this->assertCount(49, $ret);
  }*/
  
  /**
   * Testa a quebra de linha para palavras grandes(texto completo) limite de linha para 62 total de letras + acento.
   *
   * @covers Galoa\ExerciciosPhp\TextWrap\Resolucao::textWrap
   */
  
  public function testForBigWord() {
    $ret = $this->resolucao->textWrap($this->baseString, 62);
    $this->assertEquals("Se vi mais longe foi por estar de pé sobre ombros de gigantes", $ret[0]);
    $this->assertCount(1, $ret);
  }

  /**
   * Testa a quebra de linha para palavras com limite de linha para 25.
   *
   * @covers Galoa\ExerciciosPhp\TextWrap\Resolucao::textWrap
   */
  
  public function testForWordLimit25() {
    $ret = $this->resolucao->textWrap($this->baseString, 25);
    $this->assertEquals("Se vi mais longe foi por", $ret[0]);
    $this->assertEquals("estar de pé sobre ombros", $ret[1]);
    $this->assertEquals("de gigantes", $ret[2]);   
    $this->assertCount(3, $ret);
  }

  /**
   * Testa a quebra de linha para palavras com limite de linha para 5.
   *
   * @covers Galoa\ExerciciosPhp\TextWrap\Resolucao::textWrap
   */
  
  public function testForWordLimit5() {
    $ret = $this->resolucao->textWrap($this->baseString, 5);
    $this->assertEquals("Se vi", $ret[0]);
    $this->assertEquals("mais", $ret[1]);
    $this->assertEquals("longe", $ret[2]);
    $this->assertEquals("foi", $ret[3]);
    $this->assertEquals("por", $ret[4]);
    $this->assertEquals("estar", $ret[5]);
    $this->assertEquals("de", $ret[6]);
    $this->assertEquals("pé", $ret[7]);
    $this->assertEquals("sobre", $ret[8]);
    $this->assertEquals("ombro", $ret[9]);
    $this->assertEquals("s de", $ret[10]);
    $this->assertEquals("gigan", $ret[11]);
    $this->assertEquals("tes", $ret[12]);
    $this->assertCount(13, $ret);
  }

  /**
   * Testa a quebra de linha para palavras com limite de linha para 3.
   *
   * @covers Galoa\ExerciciosPhp\TextWrap\Resolucao::textWrap
   */
  
  public function testForWordLimit3() {
    $ret = $this->resolucao->textWrap($this->baseString, 3);
    $this->assertEquals("Se", $ret[0]);
    $this->assertEquals("vi", $ret[1]);
    $this->assertEquals("mai", $ret[2]);
    $this->assertEquals("s", $ret[3]);
    $this->assertEquals("lon", $ret[4]);
    $this->assertEquals("ge", $ret[5]);
    $this->assertEquals("foi", $ret[6]);
    $this->assertEquals("por", $ret[7]);
    $this->assertEquals("est", $ret[8]);
    $this->assertEquals("ar", $ret[9]);
    $this->assertEquals("de", $ret[10]);
    $this->assertEquals("pé", $ret[11]);
    $this->assertEquals("sob", $ret[12]);
    $this->assertEquals("re", $ret[13]);
    $this->assertEquals("omb", $ret[14]);
    $this->assertEquals("ros", $ret[15]);
    $this->assertEquals("de", $ret[16]);
    $this->assertEquals("gig", $ret[17]);
    $this->assertEquals("ant", $ret[18]);
    $this->assertEquals("es", $ret[19]);
    $this->assertCount(20, $ret);
  }

 

}
