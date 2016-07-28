<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpMacroOperacao
 *
 * @ORM\Table(name="amp_macro_operacao", uniqueConstraints={@ORM\UniqueConstraint(name="macrooperacao_UNIQUE", columns={"macro_operacao"})})
 * @ORM\Entity
 */
class AmpMacroOperacao
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_macro_operacao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMacroOperacao;

    /**
     * @var int
     *
     * @ORM\Column(name="tipo_movimento", type="integer", nullable=false)
     */
    private $tipoMovimento;

    /**
     * @var int
     *
     * @ORM\Column(name="finalidade_emissao", type="integer", nullable=false)
     */
    private $finalidadeEmissao;

    /**
     * @var string
     *
     * @ORM\Column(name="macro_operacao", type="string", length=45, nullable=false)
     */
    private $macroOperacao;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="string", length=255, nullable=false)
     */
    private $observacao;

    /**
     * @var string
     *
     * @ORM\Column(name="calcula_ipi", type="string", length=1, nullable=false)
     */
    private $calculaIpi;

    /**
     * @var string
     *
     * @ORM\Column(name="calcula_icms", type="string", length=1, nullable=false)
     */
    private $calculaIcms;

    /**
     * @var string
     *
     * @ORM\Column(name="calcula_st", type="string", length=1, nullable=false)
     */
    private $calculaSt;

    /**
     * @var string
     *
     * @ORM\Column(name="calcula_pis", type="string", length=1, nullable=false)
     */
    private $calculaPis;

    /**
     * @var string
     *
     * @ORM\Column(name="calcula_cofins", type="string", length=1, nullable=false)
     */
    private $calculaCofins;

    /**
     * @var string
     *
     * @ORM\Column(name="calcula_iss", type="string", length=1, nullable=false)
     */
    private $calculaIss;

    /**
     * @var string
     *
     * @ORM\Column(name="calcula_ii", type="string", length=1, nullable=false)
     */
    private $calculaIi;

    /**
     * @var string
     *
     * @ORM\Column(name="gera_movimento_financeiro", type="string", length=1, nullable=false)
     */
    private $geraMovimentoFinanceiro;

    /**
     * @var string
     *
     * @ORM\Column(name="gera_dem", type="string", length=1, nullable=false)
     */
    private $geraDem;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_criacao", type="datetime", nullable=false)
     */
    private $dataCriacao;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_criacao", type="integer", nullable=false)
     */
    private $idUsuarioCriacao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_ultima_alteracao", type="datetime", nullable=false)
     */
    private $dataUltimaAlteracao;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_alteracao", type="integer", nullable=false)
     */
    private $idUsuarioAlteracao;


    /**
     * Get idMacroOperacao
     *
     * @return int
     */
    public function getIdMacroOperacao()
    {
        return $this->idMacroOperacao;
    }

    /**
     * Set tipoMovimento
     *
     * @param int $tipoMovimento
     *
     * @return AmpMacroOperacao
     */
    public function setTipoMovimento($tipoMovimento)
    {
        $this->tipoMovimento = $tipoMovimento;

        return $this;
    }

    /**
     * Get tipoMovimento
     *
     * @return int
     */
    public function getTipoMovimento()
    {
        return $this->tipoMovimento;
    }

    /**
     * Set finalidadeEmissao
     *
     * @param int $finalidadeEmissao
     *
     * @return AmpMacroOperacao
     */
    public function setFinalidadeEmissao($finalidadeEmissao)
    {
        $this->finalidadeEmissao = $finalidadeEmissao;

        return $this;
    }

    /**
     * Get finalidadeEmissao
     *
     * @return int
     */
    public function getFinalidadeEmissao()
    {
        return $this->finalidadeEmissao;
    }

    /**
     * Set macroOperacao
     *
     * @param string $macroOperacao
     *
     * @return AmpMacroOperacao
     */
    public function setMacroOperacao($macroOperacao)
    {
        $this->macroOperacao = $macroOperacao;

        return $this;
    }

    /**
     * Get macroOperacao
     *
     * @return string
     */
    public function getMacroOperacao()
    {
        return $this->macroOperacao;
    }

    /**
     * Set observacao
     *
     * @param string $observacao
     *
     * @return AmpMacroOperacao
     */
    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;

        return $this;
    }

    /**
     * Get observacao
     *
     * @return string
     */
    public function getObservacao()
    {
        return $this->observacao;
    }

    /**
     * Set calculaIpi
     *
     * @param string $calculaIpi
     *
     * @return AmpMacroOperacao
     */
    public function setCalculaIpi($calculaIpi)
    {
        $this->calculaIpi = $calculaIpi;

        return $this;
    }

    /**
     * Get calculaIpi
     *
     * @return string
     */
    public function getCalculaIpi()
    {
        return $this->calculaIpi;
    }

    /**
     * Set calculaIcms
     *
     * @param string $calculaIcms
     *
     * @return AmpMacroOperacao
     */
    public function setCalculaIcms($calculaIcms)
    {
        $this->calculaIcms = $calculaIcms;

        return $this;
    }

    /**
     * Get calculaIcms
     *
     * @return string
     */
    public function getCalculaIcms()
    {
        return $this->calculaIcms;
    }

    /**
     * Set calculaSt
     *
     * @param string $calculaSt
     *
     * @return AmpMacroOperacao
     */
    public function setCalculaSt($calculaSt)
    {
        $this->calculaSt = $calculaSt;

        return $this;
    }

    /**
     * Get calculaSt
     *
     * @return string
     */
    public function getCalculaSt()
    {
        return $this->calculaSt;
    }

    /**
     * Set calculaPis
     *
     * @param string $calculaPis
     *
     * @return AmpMacroOperacao
     */
    public function setCalculaPis($calculaPis)
    {
        $this->calculaPis = $calculaPis;

        return $this;
    }

    /**
     * Get calculaPis
     *
     * @return string
     */
    public function getCalculaPis()
    {
        return $this->calculaPis;
    }

    /**
     * Set calculaCofins
     *
     * @param string $calculaCofins
     *
     * @return AmpMacroOperacao
     */
    public function setCalculaCofins($calculaCofins)
    {
        $this->calculaCofins = $calculaCofins;

        return $this;
    }

    /**
     * Get calculaCofins
     *
     * @return string
     */
    public function getCalculaCofins()
    {
        return $this->calculaCofins;
    }

    /**
     * Set calculaIss
     *
     * @param string $calculaIss
     *
     * @return AmpMacroOperacao
     */
    public function setCalculaIss($calculaIss)
    {
        $this->calculaIss = $calculaIss;

        return $this;
    }

    /**
     * Get calculaIss
     *
     * @return string
     */
    public function getCalculaIss()
    {
        return $this->calculaIss;
    }

    /**
     * Set calculaIi
     *
     * @param string $calculaIi
     *
     * @return AmpMacroOperacao
     */
    public function setCalculaIi($calculaIi)
    {
        $this->calculaIi = $calculaIi;

        return $this;
    }

    /**
     * Get calculaIi
     *
     * @return string
     */
    public function getCalculaIi()
    {
        return $this->calculaIi;
    }

    /**
     * Set geraMovimentoFinanceiro
     *
     * @param string $geraMovimentoFinanceiro
     *
     * @return AmpMacroOperacao
     */
    public function setGeraMovimentoFinanceiro($geraMovimentoFinanceiro)
    {
        $this->geraMovimentoFinanceiro = $geraMovimentoFinanceiro;

        return $this;
    }

    /**
     * Get geraMovimentoFinanceiro
     *
     * @return string
     */
    public function getGeraMovimentoFinanceiro()
    {
        return $this->geraMovimentoFinanceiro;
    }

    /**
     * Set geraDem
     *
     * @param string $geraDem
     *
     * @return AmpMacroOperacao
     */
    public function setGeraDem($geraDem)
    {
        $this->geraDem = $geraDem;

        return $this;
    }

    /**
     * Get geraDem
     *
     * @return string
     */
    public function getGeraDem()
    {
        return $this->geraDem;
    }

    /**
     * Set dataCriacao
     *
     * @param \DateTime $dataCriacao
     *
     * @return AmpMacroOperacao
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
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpMacroOperacao
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
     * Set dataUltimaAlteracao
     *
     * @param \DateTime $dataUltimaAlteracao
     *
     * @return AmpMacroOperacao
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
     * Set idUsuarioAlteracao
     *
     * @param int $idUsuarioAlteracao
     *
     * @return AmpMacroOperacao
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
}

