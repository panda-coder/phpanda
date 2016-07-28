<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpPoliticaDescontoLinha
 *
 * @ORM\Table(name="amp_politica_desconto_linha", indexes={@ORM\Index(name="fk_amp_politica_desconto_linha_1_idx", columns={"id_politica_comercial"}), @ORM\Index(name="fk_amp_politica_desconto_linha_2_idx", columns={"id_linha_produto"})})
 * @ORM\Entity
 */
class AmpPoliticaDescontoLinha
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_politica_desconto_linha", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPoliticaDescontoLinha;

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
     * @var \AmpLinhaProduto
     *
     * @ORM\ManyToOne(targetEntity="AmpLinhaProduto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_linha_produto", referencedColumnName="id_linha_produto")
     * })
     */
    private $idLinhaProduto;


    /**
     * Get idPoliticaDescontoLinha
     *
     * @return int
     */
    public function getIdPoliticaDescontoLinha()
    {
        return $this->idPoliticaDescontoLinha;
    }

    /**
     * Set desconto1
     *
     * @param string $desconto1
     *
     * @return AmpPoliticaDescontoLinha
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
     * @return AmpPoliticaDescontoLinha
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
     * @return AmpPoliticaDescontoLinha
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
     * @return AmpPoliticaDescontoLinha
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
     * @return AmpPoliticaDescontoLinha
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
     * @return AmpPoliticaDescontoLinha
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
     * @return AmpPoliticaDescontoLinha
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
     * @return AmpPoliticaDescontoLinha
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
     * @return AmpPoliticaDescontoLinha
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
     * Set idLinhaProduto
     *
     * @param \AmpLinhaProduto $idLinhaProduto
     *
     * @return AmpPoliticaDescontoLinha
     */
    public function setIdLinhaProduto(\AmpLinhaProduto $idLinhaProduto = null)
    {
        $this->idLinhaProduto = $idLinhaProduto;

        return $this;
    }

    /**
     * Get idLinhaProduto
     *
     * @return \AmpLinhaProduto
     */
    public function getIdLinhaProduto()
    {
        return $this->idLinhaProduto;
    }
}

