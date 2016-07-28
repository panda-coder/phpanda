<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpNaturezaOperacao
 *
 * @ORM\Table(name="amp_natureza_operacao", indexes={@ORM\Index(name="fk_amp_natureza_operacao_amp_cst_icms1_idx", columns={"id_cst_icms"}), @ORM\Index(name="fk_amp_natureza_operacao_amp_cst_pis_cofins1_idx", columns={"id_cst_pis_cofins"}), @ORM\Index(name="fk_amp_natureza_operacao_amp_cst_ipi1_idx", columns={"id_cst_ipi"}), @ORM\Index(name="fk_amp_natureza_operacao_amp_operacao_estoque1_idx", columns={"id_operacao_estoque"})})
 * @ORM\Entity
 */
class AmpNaturezaOperacao
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_natureza_operacao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNaturezaOperacao;

    /**
     * @var int
     *
     * @ORM\Column(name="id_cst_icms", type="integer", nullable=false)
     */
    private $idCstIcms;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="text", nullable=false)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao_nota", type="string", length=80, nullable=false)
     */
    private $descricaoNota;

    /**
     * @var int
     *
     * @ORM\Column(name="tipo_natureza", type="integer", nullable=false)
     */
    private $tipoNatureza;

    /**
     * @var int
     *
     * @ORM\Column(name="operacao", type="integer", nullable=false)
     */
    private $operacao;

    /**
     * @var string
     *
     * @ORM\Column(name="destaca_ipi", type="string", length=1, nullable=false)
     */
    private $destacaIpi = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="destaca_icms", type="string", length=1, nullable=false)
     */
    private $destacaIcms = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="destaca_pis", type="string", length=1, nullable=false)
     */
    private $destacaPis = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="destaca_cofins", type="string", length=1, nullable=false)
     */
    private $destacaCofins = 'N';

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
     * @var \AmpCstIpi
     *
     * @ORM\ManyToOne(targetEntity="AmpCstIpi")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cst_ipi", referencedColumnName="id_cst_ipi")
     * })
     */
    private $idCstIpi;

    /**
     * @var \AmpCstPisCofins
     *
     * @ORM\ManyToOne(targetEntity="AmpCstPisCofins")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cst_pis_cofins", referencedColumnName="id_cst_pis_cofins")
     * })
     */
    private $idCstPisCofins;

    /**
     * @var \AmpOperacaoEstoque
     *
     * @ORM\ManyToOne(targetEntity="AmpOperacaoEstoque")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_operacao_estoque", referencedColumnName="id_operacao_estoque")
     * })
     */
    private $idOperacaoEstoque;


    /**
     * Get idNaturezaOperacao
     *
     * @return int
     */
    public function getIdNaturezaOperacao()
    {
        return $this->idNaturezaOperacao;
    }

    /**
     * Set idCstIcms
     *
     * @param int $idCstIcms
     *
     * @return AmpNaturezaOperacao
     */
    public function setIdCstIcms($idCstIcms)
    {
        $this->idCstIcms = $idCstIcms;

        return $this;
    }

    /**
     * Get idCstIcms
     *
     * @return int
     */
    public function getIdCstIcms()
    {
        return $this->idCstIcms;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return AmpNaturezaOperacao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set descricaoNota
     *
     * @param string $descricaoNota
     *
     * @return AmpNaturezaOperacao
     */
    public function setDescricaoNota($descricaoNota)
    {
        $this->descricaoNota = $descricaoNota;

        return $this;
    }

    /**
     * Get descricaoNota
     *
     * @return string
     */
    public function getDescricaoNota()
    {
        return $this->descricaoNota;
    }

    /**
     * Set tipoNatureza
     *
     * @param int $tipoNatureza
     *
     * @return AmpNaturezaOperacao
     */
    public function setTipoNatureza($tipoNatureza)
    {
        $this->tipoNatureza = $tipoNatureza;

        return $this;
    }

    /**
     * Get tipoNatureza
     *
     * @return int
     */
    public function getTipoNatureza()
    {
        return $this->tipoNatureza;
    }

    /**
     * Set operacao
     *
     * @param int $operacao
     *
     * @return AmpNaturezaOperacao
     */
    public function setOperacao($operacao)
    {
        $this->operacao = $operacao;

        return $this;
    }

    /**
     * Get operacao
     *
     * @return int
     */
    public function getOperacao()
    {
        return $this->operacao;
    }

    /**
     * Set destacaIpi
     *
     * @param string $destacaIpi
     *
     * @return AmpNaturezaOperacao
     */
    public function setDestacaIpi($destacaIpi)
    {
        $this->destacaIpi = $destacaIpi;

        return $this;
    }

    /**
     * Get destacaIpi
     *
     * @return string
     */
    public function getDestacaIpi()
    {
        return $this->destacaIpi;
    }

    /**
     * Set destacaIcms
     *
     * @param string $destacaIcms
     *
     * @return AmpNaturezaOperacao
     */
    public function setDestacaIcms($destacaIcms)
    {
        $this->destacaIcms = $destacaIcms;

        return $this;
    }

    /**
     * Get destacaIcms
     *
     * @return string
     */
    public function getDestacaIcms()
    {
        return $this->destacaIcms;
    }

    /**
     * Set destacaPis
     *
     * @param string $destacaPis
     *
     * @return AmpNaturezaOperacao
     */
    public function setDestacaPis($destacaPis)
    {
        $this->destacaPis = $destacaPis;

        return $this;
    }

    /**
     * Get destacaPis
     *
     * @return string
     */
    public function getDestacaPis()
    {
        return $this->destacaPis;
    }

    /**
     * Set destacaCofins
     *
     * @param string $destacaCofins
     *
     * @return AmpNaturezaOperacao
     */
    public function setDestacaCofins($destacaCofins)
    {
        $this->destacaCofins = $destacaCofins;

        return $this;
    }

    /**
     * Get destacaCofins
     *
     * @return string
     */
    public function getDestacaCofins()
    {
        return $this->destacaCofins;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpNaturezaOperacao
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
     * @return AmpNaturezaOperacao
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
     * @return AmpNaturezaOperacao
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
     * @return AmpNaturezaOperacao
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
     * Set idCstIpi
     *
     * @param \AmpCstIpi $idCstIpi
     *
     * @return AmpNaturezaOperacao
     */
    public function setIdCstIpi(\AmpCstIpi $idCstIpi = null)
    {
        $this->idCstIpi = $idCstIpi;

        return $this;
    }

    /**
     * Get idCstIpi
     *
     * @return \AmpCstIpi
     */
    public function getIdCstIpi()
    {
        return $this->idCstIpi;
    }

    /**
     * Set idCstPisCofins
     *
     * @param \AmpCstPisCofins $idCstPisCofins
     *
     * @return AmpNaturezaOperacao
     */
    public function setIdCstPisCofins(\AmpCstPisCofins $idCstPisCofins = null)
    {
        $this->idCstPisCofins = $idCstPisCofins;

        return $this;
    }

    /**
     * Get idCstPisCofins
     *
     * @return \AmpCstPisCofins
     */
    public function getIdCstPisCofins()
    {
        return $this->idCstPisCofins;
    }

    /**
     * Set idOperacaoEstoque
     *
     * @param \AmpOperacaoEstoque $idOperacaoEstoque
     *
     * @return AmpNaturezaOperacao
     */
    public function setIdOperacaoEstoque(\AmpOperacaoEstoque $idOperacaoEstoque = null)
    {
        $this->idOperacaoEstoque = $idOperacaoEstoque;

        return $this;
    }

    /**
     * Get idOperacaoEstoque
     *
     * @return \AmpOperacaoEstoque
     */
    public function getIdOperacaoEstoque()
    {
        return $this->idOperacaoEstoque;
    }
}

