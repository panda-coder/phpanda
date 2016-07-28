<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpCpNaoConformidade
 *
 * @ORM\Table(name="amp_cp_nao_conformidade", indexes={@ORM\Index(name="fk_amp_controle_producao_rnc_2_idx", columns={"id_defeito_cp"}), @ORM\Index(name="fk_amp_cp_nao_conformidade_1_idx", columns={"id_controle_producao"})})
 * @ORM\Entity
 */
class AmpCpNaoConformidade
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_cp_nao_conformidade", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCpNaoConformidade;

    /**
     * @var int
     *
     * @ORM\Column(name="tipo_parecer", type="integer", nullable=false)
     */
    private $tipoParecer;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade", type="decimal", precision=15, scale=4, nullable=false)
     */
    private $quantidade;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_criacao", type="integer", nullable=false)
     */
    private $idUsuarioCriacao = '0';

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
     * @var \AmpDefeitoCp
     *
     * @ORM\ManyToOne(targetEntity="AmpDefeitoCp")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_defeito_cp", referencedColumnName="id_defeito_cp")
     * })
     */
    private $idDefeitoCp;

    /**
     * @var \AmpControleProducao
     *
     * @ORM\ManyToOne(targetEntity="AmpControleProducao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_controle_producao", referencedColumnName="id_controle_producao")
     * })
     */
    private $idControleProducao;


    /**
     * Get idCpNaoConformidade
     *
     * @return int
     */
    public function getIdCpNaoConformidade()
    {
        return $this->idCpNaoConformidade;
    }

    /**
     * Set tipoParecer
     *
     * @param int $tipoParecer
     *
     * @return AmpCpNaoConformidade
     */
    public function setTipoParecer($tipoParecer)
    {
        $this->tipoParecer = $tipoParecer;

        return $this;
    }

    /**
     * Get tipoParecer
     *
     * @return int
     */
    public function getTipoParecer()
    {
        return $this->tipoParecer;
    }

    /**
     * Set quantidade
     *
     * @param string $quantidade
     *
     * @return AmpCpNaoConformidade
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * Get quantidade
     *
     * @return string
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpCpNaoConformidade
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
     * @return AmpCpNaoConformidade
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
     * @return AmpCpNaoConformidade
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
     * @return AmpCpNaoConformidade
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
     * Set idDefeitoCp
     *
     * @param \AmpDefeitoCp $idDefeitoCp
     *
     * @return AmpCpNaoConformidade
     */
    public function setIdDefeitoCp(\AmpDefeitoCp $idDefeitoCp = null)
    {
        $this->idDefeitoCp = $idDefeitoCp;

        return $this;
    }

    /**
     * Get idDefeitoCp
     *
     * @return \AmpDefeitoCp
     */
    public function getIdDefeitoCp()
    {
        return $this->idDefeitoCp;
    }

    /**
     * Set idControleProducao
     *
     * @param \AmpControleProducao $idControleProducao
     *
     * @return AmpCpNaoConformidade
     */
    public function setIdControleProducao(\AmpControleProducao $idControleProducao = null)
    {
        $this->idControleProducao = $idControleProducao;

        return $this;
    }

    /**
     * Get idControleProducao
     *
     * @return \AmpControleProducao
     */
    public function getIdControleProducao()
    {
        return $this->idControleProducao;
    }
}

