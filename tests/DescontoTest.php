<?php
/**
 * DescontoTest
 *
 * @group group
 */
class DescontoTest extends \PHPUnit_Framework_TestCase
{
	protected function setUp()
	{
		require_once 'config/load.php';
	}

    public function testDescontoPorItens()
    {
        $orcamento = new \Orcamento(new \Produto('calca', 20));
        $orcamento->addItem(new \Produto('moleton', 40));
        $orcamento->addItem(new \Produto('Boné', 30));
        $orcamento->addItem(new \Produto('Jaqueta', 5));
        $orcamento->addItem(new \Produto('Reógio', 5));

        $desconto = new \Desconto\DescontoPorItens($orcamento);
        $desconto2 = $desconto->setProximo(new \Desconto\DescontoPorValor($orcamento));
        $desconto2->setProximo(new \Desconto\SemDesconto($orcamento));

        $valor = $desconto->validaDesconto();

        $this->assertEquals(10, $valor);
    }

    public function testDescontoPorValor()
    {
        $orcamento = new \Orcamento(new \Produto('calca', 800));
        $orcamento->addItem(new \Produto('moleton', 200));

        $desconto = new \Desconto\DescontoPorItens($orcamento);
        $desconto2 = $desconto->setProximo(new \Desconto\DescontoPorValor($orcamento));
        $desconto2->setProximo(new \Desconto\SemDesconto($orcamento));

        $valor = $desconto->validaDesconto();

        $this->assertEquals(70, $valor);
    }

    public function testSemDesconto()
    {
        $orcamento = new \Orcamento(new \Produto('calca', 80));
        $orcamento->addItem(new \Produto('moleton', 20));

        $desconto = new \Desconto\DescontoPorItens($orcamento);
        $desconto2 = $desconto->setProximo(new \Desconto\DescontoPorValor($orcamento));
        $desconto2->setProximo(new \Desconto\SemDesconto($orcamento));

        $valor = $desconto->validaDesconto();

        $this->assertEquals(0, $valor);
    }

    public function testDescontoVendaCasada()
    {
        $orcamento = new \Orcamento(new \Produto('LAPIS', 80));
        $orcamento->addItem(new \Produto('CANETA', 20));

        $desconto = new \Desconto\DescontoPorItens($orcamento);
        $desconto2 = $desconto->setProximo(new \Desconto\DescontoPorValor($orcamento));
        $desconto3 = $desconto2->setProximo(new \Desconto\DescontoVendaCasada($orcamento));
        $desconto3->setProximo(new \Desconto\SemDesconto($orcamento));

        $valor = $desconto->validaDesconto();

        $this->assertEquals(5, $valor);
    }
}
