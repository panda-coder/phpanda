<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpBaixaTitulo
 *
 * @ORM\Table(name="amp_baixa_titulo", indexes={@ORM\Index(name="fk_amp_baixa_titulo_1_idx", columns={"id_titulo"}), @ORM\Index(name="fk_amp_baixa_titulo_2_idx", columns={"id_forma_pagamento"}), @ORM\Index(name="fk_amp_baixa_titulo_3_idx", columns={"id_conta_corrente"}), @ORM\Index(name="fk_amp_baixa_titulo_4_idx", columns={"id_conta_interna_lancamento"})})
 * @ORM\Entity
 */
class AmpBaixaTitulo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_baixa_titulo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBaixaTitulo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_pagamento", type="datetime", nullable=false)
     */
    private $dataPagamento;

    /**
     * @var int
     *
     * @ORM\Column(name="tipo_baixa", type="integer", nullable=false)
     */
    private $tipoBaixa;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_baixa", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $valorBaixa;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_baixa", type="integer", nullable=false)
     */
    private $idUsuarioBaixa;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_baixa", type="datetime", nullable=false)
     */
    private $dataBaixa;

    /**
     * @var \AmpTitulo
     *
     * @ORM\ManyToOne(targetEntity="AmpTitulo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_titulo", referencedColumnName="id_titulo")
     * })
     */
    private $idTitulo;

    /**
     * @var \AmpFormaPagamento
     *
     * @ORM\ManyToOne(targetEntity="AmpFormaPagamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_forma_pagamento", referencedColumnName="id_forma_pagamento")
     * })
     */
    private $idFormaPagamento;

    /**
     * @var \AmpContaCorrente
     *
     * @ORM\ManyToOne(targetEntity="AmpContaCorrente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_conta_corrente", referencedColumnName="id_conta_corrente")
     * })
     */
    private $idContaCorrente;

    /**
     * @var \AmpContaInternaLancamento
     *
     * @ORM\ManyToOne(targetEntity="AmpContaInternaLancamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_conta_interna_lancamento", referencedColumnName="id_conta_interna_lancamento")
     * })
     */
    private $idContaInternaLancamento;


    /**
     * Get idBaixaTitulo
     *
     * @return int
     */
    public function getIdBaixaTitulo()
    {
        return $this->idBaixaTitulo;
    }

    /**
     * Set dataPagamento
     *
     * @param \DateTime $dataPagamento
     *
     * @return AmpBaixaTitulo
     */
    public function setDataPagamento($dataPagamento)
    {
        $this->dataPagamento = $dataPagamento;

        return $this;
    }

    /**
     * Get dataPagamento
     *
     * @return \DateTime
     */
    public function getDataPagamento()
    {
        return $this->dataPagamento;
    }

    /**
     * Set tipoBaixa
     *
     * @param int $tipoBaixa
     *
     * @return AmpBaixaTitulo
     */
    public function setTipoBaixa($tipoBaixa)
    {
        $this->tipoBaixa = $tipoBaixa;

        return $this;
    }

    /**
     * Get tipoBaixa
     *
     * @return int
     */
    public function getTipoBaixa()
    {
        return $this->tipoBaixa;
    }

    /**
     * Set valorBaixa
     *
     * @param string $valorBaixa
     *
     * @return AmpBaixaTitulo
     */
    public function setValorBaixa($valorBaixa)
    {
        $this->valorBaixa = $valorBaixa;

        return $this;
    }

    /**
     * Get valorBaixa
     *
     * @return string
     */
    public function getValorBaixa()
    {
        return $this->valorBaixa;
    }

    /**
     * Set idUsuarioBaixa
     *
     * @param int $idUsuarioBaixa
     *
     * @return AmpBaixaTitulo
     */
    public function setIdUsuarioBaixa($idUsuarioBaixa)
    {
        $this->idUsuarioBaixa = $idUsuarioBaixa;

        return $this;
    }

    /**
     * Get idUsuarioBaixa
     *
     * @return int
     */
    public function getIdUsuarioBaixa()
    {
        return $this->idUsuarioBaixa;
    }

    /**
     * Set dataBaixa
     *
     * @param \DateTime $dataBaixa
     *
     * @return AmpBaixaTitulo
     */
    public function setDataBaixa($dataBaixa)
    {
        $this->dataBaixa = $dataBaixa;

        return $this;
    }

    /**
     * Get dataBaixa
     *
     * @return \DateTime
     */
    public function getDataBaixa()
    {
        return $this->dataBaixa;
    }

    /**
     * Set idTitulo
     *
     * @param \AmpTitulo $idTitulo
     *
     * @return AmpBaixaTitulo
     */
    public function setIdTitulo(\AmpTitulo $idTitulo = null)
    {
        $this->idTitulo = $idTitulo;

        return $this;
    }

    /**
     * Get idTitulo
     *
     * @return \AmpTitulo
     */
    public function getIdTitulo()
    {
        return $this->idTitulo;
    }

    /**
     * Set idFormaPagamento
     *
     * @param \AmpFormaPagamento $idFormaPagamento
     *
     * @return AmpBaixaTitulo
     */
    public function setIdFormaPagamento(\AmpFormaPagamento $idFormaPagamento = null)
    {
        $this->idFormaPagamento = $idFormaPagamento;

        return $this;
    }

    /**
     * Get idFormaPagamento
     *
     * @return \AmpFormaPagamento
     */
    public function getIdFormaPagamento()
    {
        return $this->idFormaPagamento;
    }

    /**
     * Set idContaCorrente
     *
     * @param \AmpContaCorrente $idContaCorrente
     *
     * @return AmpBaixaTitulo
     */
    public function setIdContaCorrente(\AmpContaCorrente $idContaCorrente = null)
    {
        $this->idContaCorrente = $idContaCorrente;

        return $this;
    }

    /**
     * Get idContaCorrente
     *
     * @return \AmpContaCorrente
     */
    public function getIdContaCorrente()
    {
        return $this->idContaCorrente;
    }

    /**
     * Set idContaInternaLancamento
     *
     * @param \AmpContaInternaLancamento $idContaInternaLancamento
     *
     * @return AmpBaixaTitulo
     */
    public function setIdContaInternaLancamento(\AmpContaInternaLancamento $idContaInternaLancamento = null)
    {
        $this->idContaInternaLancamento = $idContaInternaLancamento;

        return $this;
    }

    /**
     * Get idContaInternaLancamento
     *
     * @return \AmpContaInternaLancamento
     */
    public function getIdContaInternaLancamento()
    {
        return $this->idContaInternaLancamento;
    }
}

