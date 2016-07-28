<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpPoliticaDescontoProduto
 *
 * @ORM\Table(name="amp_politica_desconto_produto", indexes={@ORM\Index(name="fk_amp_politica_desconto_produto_1_idx", columns={"id_politica_comercial"}), @ORM\Index(name="fk_amp_politica_desconto_produto_2_idx", columns={"id_produto"})})
 * @ORM\Entity
 */
class AmpPoliticaDescontoProduto
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_politica_desconto_produto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPoliticaDescontoProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="desconto_1", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $desconto1;

    /**
     * @var string
     *
     * @ORM\Column(name="desconto_2", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $desconto2;

    /**
     * @var string
     *
     * @ORM\Column(name="desconto_3", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $desconto3;

    /**
     * @var string
     *
     * @ORM\Column(name="desconto_final", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $descontoFinal;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_criacao", type="integer", nullable=false)
     */
    private $idUsuarioCriacao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_criacao", type="datetime", nullable=false)
     */
    private $dataCriacao;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_alteracao", type="integer", nullable=false)
     */
    private $idUsuarioAlteracao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_ultima_alteracao", type="datetime", nullable=false)
     */
    private $dataUltimaAlteracao;

    /**
     * @var \AmpPoliticaComercial
     *
     * @ORM\ManyToOne(targetEntity="AmpPoliticaComercial")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_politica_comercial", referencedColumnName="id_politica_comercial")
     * })
     */
    private $idPoliticaComercial;

    /**
     * @var \AmpProduto
     *
     * @ORM\ManyToOne(targetEntity="AmpProduto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_produto", referencedColumnName="id_produto")
     * })
     */
    private $idProduto;


    /**
     * Get idPoliticaDescontoProduto
     *
     * @return int
     */
    public function getIdPoliticaDescontoProduto()
    {
        return $this->idPoliticaDescontoProduto;
    }

    /**
     * Set desconto1
     *
     * @param string $desconto1
     *
     * @return AmpPoliticaDescontoProduto
     */
    public function setDesconto1($desconto1)
    {
        $this->desconto1 = $desconto1;

        return $this;
    }

    /**
     * Get desconto1
     *
     * @return string
     */
    public function getDesconto1()
    {
        return $this->desconto1;
    }

    /**
     * Set desconto2
     *
     * @param string $desconto2
     *
     * @return AmpPoliticaDescontoProduto
     */
    public function setDesconto2($desconto2)
    {
        $this->desconto2 = $desconto2;

        return $this;
    }

    /**
     * Get desconto2
     *
     * @return string
     */
    public function getDesconto2()
    {
        return $this->desconto2;
    }

    /**
     * Set desconto3
     *
     * @param string $desconto3
     *
     * @return AmpPoliticaDescontoProduto
     */
    public function setDesconto3($desconto3)
    {
        $this->desconto3 = $desconto3;

        return $this;
    }

    /**
     * Get desconto3
     *
     * @return string
     */
    public function getDesconto3()
    {
        return $this->desconto3;
    }

    /**
     * Set descontoFinal
     *
     * @param string $descontoFinal
     *
     * @return AmpPoliticaDescontoProduto
     */
    public function setDescontoFinal($descontoFinal)
    {
        $this->descontoFinal = $descontoFinal;

        return $this;
    }

    /**
     * Get descontoFinal
     *
     * @return string
     */
    public function getDescontoFinal()
    {
        return $this->descontoFinal;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpPoliticaDescontoProduto
     */
    public function setIdUsuarioCriacao($idUsuarioCriacao)
    {
        $this->idUsuarioCriacao = $idUsuarioCriacao;

        return $this;
    }

    /**
     * Get idUsuarioCriacao
     *
     * @return int
     */
    public function getIdUsuarioCriacao()
    {
        return $this->idUsuarioCriacao;
    }

    /**
     * Set dataCriacao
     *
     * @param \DateTime $dataCriacao
     *
     * @return AmpPoliticaDescontoProduto
     */
    public function setDataCriacao($dataCriacao)
    {
        $this->dataCriacao = $dataCriacao;

        return $this;
    }

    /**
     * Get dataCriacao
     *
     * @return \DateTime
     */
    public function getDataCriacao()
    {
        return $this->dataCriacao;
    }

    /**
     * Set idUsuarioAlteracao
     *
     * @param int $idUsuarioAlteracao
     *
     * @return AmpPoliticaDescontoProduto
     */
    public function setIdUsuarioAlteracao($idUsuarioAlteracao)
    {
        $this->idUsuarioAlteracao = $idUsuarioAlteracao;

        return $this;
    }

    /**
     * Get idUsuarioAlteracao
     *
     * @return int
     */
    public function getIdUsuarioAlteracao()
    {
        return $this->idUsuarioAlteracao;
    }

    /**
     * Set dataUltimaAlteracao
     *
     * @param \DateTime $dataUltimaAlteracao
     *
     * @return AmpPoliticaDescontoProduto
     */
    public function setDataUltimaAlteracao($dataUltimaAlteracao)
    {
        $this->dataUltimaAlteracao = $dataUltimaAlteracao;

        return $this;
    }

    /**
     * Get dataUltimaAlteracao
     *
     * @return \DateTime
     */
    public function getDataUltimaAlteracao()
    {
        return $this->dataUltimaAlteracao;
    }

    /**
     * Set idPoliticaComercial
     *
     * @param \AmpPoliticaComercial $idPoliticaComercial
     *
     * @return AmpPoliticaDescontoProduto
     */
    public function setIdPoliticaComercial(\AmpPoliticaComercial $idPoliticaComercial = null)
    {
        $this->idPoliticaComercial = $idPoliticaComercial;

        return $this;
    }

    /**
     * Get idPoliticaComercial
     *
     * @return \AmpPoliticaComercial
     */
    public function getIdPoliticaComercial()
    {
        return $this->idPoliticaComercial;
    }

    /**
     * Set idProduto
     *
     * @param \AmpProduto $idProduto
     *
     * @return AmpPoliticaDescontoProduto
     */
    public function setIdProduto(\AmpProduto $idProduto = null)
    {
        $this->idProduto = $idProduto;

        return $this;
    }

    /**
     * Get idProduto
     *
     * @return \AmpProduto
     */
    public function getIdProduto()
    {
        return $this->idProduto;
    }
}

