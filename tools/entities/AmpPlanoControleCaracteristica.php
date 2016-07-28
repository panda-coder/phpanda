<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpPlanoControleCaracteristica
 *
 * @ORM\Table(name="amp_plano_controle_caracteristica", indexes={@ORM\Index(name="fk_amp_plano_controle_caracterisitica_1_idx", columns={"id_plano_controle"}), @ORM\Index(name="fk_amp_plano_controle_caracterisitica_2_idx", columns={"id_caracteristica"}), @ORM\Index(name="fk_amp_plano_controle_caracterisitica_3_idx", columns={"id_local_auditoria"}), @ORM\Index(name="fk_amp_plano_controle_caracterisitica_4_idx", columns={"id_criticidade"}), @ORM\Index(name="fk_amp_plano_controle_caracterisitica_5_idx", columns={"id_unidade"}), @ORM\Index(name="fk_amp_plano_controle_caracterisitica_5_idx1", columns={"id_meio_controle"}), @ORM\Index(name="fk_amp_plano_controle_caracterisitica_7_idx", columns={"id_tabela_amostragem"})})
 * @ORM\Entity
 */
class AmpPlanoControleCaracteristica
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_plano_controle_caracteristica", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPlanoControleCaracteristica;

    /**
     * @var string
     *
     * @ORM\Column(name="obs_caracteristica", type="text", nullable=true)
     */
    private $obsCaracteristica;

    /**
     * @var int
     *
     * @ORM\Column(name="tipo_resultado", type="integer", nullable=true)
     */
    private $tipoResultado;

    /**
     * @var int
     *
     * @ORM\Column(name="tipo_intervalo", type="integer", nullable=true)
     */
    private $tipoIntervalo;

    /**
     * @var string
     *
     * @ORM\Column(name="minimo", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $minimo;

    /**
     * @var string
     *
     * @ORM\Column(name="maximo", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $maximo;

    /**
     * @var int
     *
     * @ORM\Column(name="tipo_avaliacao", type="integer", nullable=true)
     */
    private $tipoAvaliacao;

    /**
     * @var int
     *
     * @ORM\Column(name="politica_skip_lote", type="integer", nullable=true)
     */
    private $politicaSkipLote;

    /**
     * @var int
     *
     * @ORM\Column(name="nivel_skip_lote", type="integer", nullable=true)
     */
    private $nivelSkipLote;

    /**
     * @var int
     *
     * @ORM\Column(name="tipo_amostragem", type="integer", nullable=true)
     */
    private $tipoAmostragem;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $quantidade;

    /**
     * @var string
     *
     * @ORM\Column(name="plano_reacao", type="text", nullable=true)
     */
    private $planoReacao;

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
     * @var \AmpPlanoControle
     *
     * @ORM\ManyToOne(targetEntity="AmpPlanoControle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_plano_controle", referencedColumnName="id_plano_controle")
     * })
     */
    private $idPlanoControle;

    /**
     * @var \AmpCaracteristicaControle
     *
     * @ORM\ManyToOne(targetEntity="AmpCaracteristicaControle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_caracteristica", referencedColumnName="id_caracteristica_controle")
     * })
     */
    private $idCaracteristica;

    /**
     * @var \AmpLocalAuditoria
     *
     * @ORM\ManyToOne(targetEntity="AmpLocalAuditoria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_local_auditoria", referencedColumnName="id_local_auditoria")
     * })
     */
    private $idLocalAuditoria;

    /**
     * @var \AmpCriticidade
     *
     * @ORM\ManyToOne(targetEntity="AmpCriticidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_criticidade", referencedColumnName="id_criticidade")
     * })
     */
    private $idCriticidade;

    /**
     * @var \AmpUnidade
     *
     * @ORM\ManyToOne(targetEntity="AmpUnidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_unidade", referencedColumnName="id_unidade")
     * })
     */
    private $idUnidade;

    /**
     * @var \AmpMeioControle
     *
     * @ORM\ManyToOne(targetEntity="AmpMeioControle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_meio_controle", referencedColumnName="id_meio_controle")
     * })
     */
    private $idMeioControle;

    /**
     * @var \AmpTabelaAmostragem
     *
     * @ORM\ManyToOne(targetEntity="AmpTabelaAmostragem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tabela_amostragem", referencedColumnName="id_tabela_amostragem")
     * })
     */
    private $idTabelaAmostragem;


    /**
     * Get idPlanoControleCaracteristica
     *
     * @return int
     */
    public function getIdPlanoControleCaracteristica()
    {
        return $this->idPlanoControleCaracteristica;
    }

    /**
     * Set obsCaracteristica
     *
     * @param string $obsCaracteristica
     *
     * @return AmpPlanoControleCaracteristica
     */
    public function setObsCaracteristica($obsCaracteristica)
    {
        $this->obsCaracteristica = $obsCaracteristica;

        return $this;
    }

    /**
     * Get obsCaracteristica
     *
     * @return string
     */
    public function getObsCaracteristica()
    {
        return $this->obsCaracteristica;
    }

    /**
     * Set tipoResultado
     *
     * @param int $tipoResultado
     *
     * @return AmpPlanoControleCaracteristica
     */
    public function setTipoResultado($tipoResultado)
    {
        $this->tipoResultado = $tipoResultado;

        return $this;
    }

    /**
     * Get tipoResultado
     *
     * @return int
     */
    public function getTipoResultado()
    {
        return $this->tipoResultado;
    }

    /**
     * Set tipoIntervalo
     *
     * @param int $tipoIntervalo
     *
     * @return AmpPlanoControleCaracteristica
     */
    public function setTipoIntervalo($tipoIntervalo)
    {
        $this->tipoIntervalo = $tipoIntervalo;

        return $this;
    }

    /**
     * Get tipoIntervalo
     *
     * @return int
     */
    public function getTipoIntervalo()
    {
        return $this->tipoIntervalo;
    }

    /**
     * Set minimo
     *
     * @param string $minimo
     *
     * @return AmpPlanoControleCaracteristica
     */
    public function setMinimo($minimo)
    {
        $this->minimo = $minimo;

        return $this;
    }

    /**
     * Get minimo
     *
     * @return string
     */
    public function getMinimo()
    {
        return $this->minimo;
    }

    /**
     * Set maximo
     *
     * @param string $maximo
     *
     * @return AmpPlanoControleCaracteristica
     */
    public function setMaximo($maximo)
    {
        $this->maximo = $maximo;

        return $this;
    }

    /**
     * Get maximo
     *
     * @return string
     */
    public function getMaximo()
    {
        return $this->maximo;
    }

    /**
     * Set tipoAvaliacao
     *
     * @param int $tipoAvaliacao
     *
     * @return AmpPlanoControleCaracteristica
     */
    public function setTipoAvaliacao($tipoAvaliacao)
    {
        $this->tipoAvaliacao = $tipoAvaliacao;

        return $this;
    }

    /**
     * Get tipoAvaliacao
     *
     * @return int
     */
    public function getTipoAvaliacao()
    {
        return $this->tipoAvaliacao;
    }

    /**
     * Set politicaSkipLote
     *
     * @param int $politicaSkipLote
     *
     * @return AmpPlanoControleCaracteristica
     */
    public function setPoliticaSkipLote($politicaSkipLote)
    {
        $this->politicaSkipLote = $politicaSkipLote;

        return $this;
    }

    /**
     * Get politicaSkipLote
     *
     * @return int
     */
    public function getPoliticaSkipLote()
    {
        return $this->politicaSkipLote;
    }

    /**
     * Set nivelSkipLote
     *
     * @param int $nivelSkipLote
     *
     * @return AmpPlanoControleCaracteristica
     */
    public function setNivelSkipLote($nivelSkipLote)
    {
        $this->nivelSkipLote = $nivelSkipLote;

        return $this;
    }

    /**
     * Get nivelSkipLote
     *
     * @return int
     */
    public function getNivelSkipLote()
    {
        return $this->nivelSkipLote;
    }

    /**
     * Set tipoAmostragem
     *
     * @param int $tipoAmostragem
     *
     * @return AmpPlanoControleCaracteristica
     */
    public function setTipoAmostragem($tipoAmostragem)
    {
        $this->tipoAmostragem = $tipoAmostragem;

        return $this;
    }

    /**
     * Get tipoAmostragem
     *
     * @return int
     */
    public function getTipoAmostragem()
    {
        return $this->tipoAmostragem;
    }

    /**
     * Set quantidade
     *
     * @param string $quantidade
     *
     * @return AmpPlanoControleCaracteristica
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
     * Set planoReacao
     *
     * @param string $planoReacao
     *
     * @return AmpPlanoControleCaracteristica
     */
    public function setPlanoReacao($planoReacao)
    {
        $this->planoReacao = $planoReacao;

        return $this;
    }

    /**
     * Get planoReacao
     *
     * @return string
     */
    public function getPlanoReacao()
    {
        return $this->planoReacao;
    }

    /**
     * Set dataCriacao
     *
     * @param \DateTime $dataCriacao
     *
     * @return AmpPlanoControleCaracteristica
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
     * @return AmpPlanoControleCaracteristica
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
     * Set idUsuarioAlteracao
     *
     * @param int $idUsuarioAlteracao
     *
     * @return AmpPlanoControleCaracteristica
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
     * @return AmpPlanoControleCaracteristica
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
     * Set idPlanoControle
     *
     * @param \AmpPlanoControle $idPlanoControle
     *
     * @return AmpPlanoControleCaracteristica
     */
    public function setIdPlanoControle(\AmpPlanoControle $idPlanoControle = null)
    {
        $this->idPlanoControle = $idPlanoControle;

        return $this;
    }

    /**
     * Get idPlanoControle
     *
     * @return \AmpPlanoControle
     */
    public function getIdPlanoControle()
    {
        return $this->idPlanoControle;
    }

    /**
     * Set idCaracteristica
     *
     * @param \AmpCaracteristicaControle $idCaracteristica
     *
     * @return AmpPlanoControleCaracteristica
     */
    public function setIdCaracteristica(\AmpCaracteristicaControle $idCaracteristica = null)
    {
        $this->idCaracteristica = $idCaracteristica;

        return $this;
    }

    /**
     * Get idCaracteristica
     *
     * @return \AmpCaracteristicaControle
     */
    public function getIdCaracteristica()
    {
        return $this->idCaracteristica;
    }

    /**
     * Set idLocalAuditoria
     *
     * @param \AmpLocalAuditoria $idLocalAuditoria
     *
     * @return AmpPlanoControleCaracteristica
     */
    public function setIdLocalAuditoria(\AmpLocalAuditoria $idLocalAuditoria = null)
    {
        $this->idLocalAuditoria = $idLocalAuditoria;

        return $this;
    }

    /**
     * Get idLocalAuditoria
     *
     * @return \AmpLocalAuditoria
     */
    public function getIdLocalAuditoria()
    {
        return $this->idLocalAuditoria;
    }

    /**
     * Set idCriticidade
     *
     * @param \AmpCriticidade $idCriticidade
     *
     * @return AmpPlanoControleCaracteristica
     */
    public function setIdCriticidade(\AmpCriticidade $idCriticidade = null)
    {
        $this->idCriticidade = $idCriticidade;

        return $this;
    }

    /**
     * Get idCriticidade
     *
     * @return \AmpCriticidade
     */
    public function getIdCriticidade()
    {
        return $this->idCriticidade;
    }

    /**
     * Set idUnidade
     *
     * @param \AmpUnidade $idUnidade
     *
     * @return AmpPlanoControleCaracteristica
     */
    public function setIdUnidade(\AmpUnidade $idUnidade = null)
    {
        $this->idUnidade = $idUnidade;

        return $this;
    }

    /**
     * Get idUnidade
     *
     * @return \AmpUnidade
     */
    public function getIdUnidade()
    {
        return $this->idUnidade;
    }

    /**
     * Set idMeioControle
     *
     * @param \AmpMeioControle $idMeioControle
     *
     * @return AmpPlanoControleCaracteristica
     */
    public function setIdMeioControle(\AmpMeioControle $idMeioControle = null)
    {
        $this->idMeioControle = $idMeioControle;

        return $this;
    }

    /**
     * Get idMeioControle
     *
     * @return \AmpMeioControle
     */
    public function getIdMeioControle()
    {
        return $this->idMeioControle;
    }

    /**
     * Set idTabelaAmostragem
     *
     * @param \AmpTabelaAmostragem $idTabelaAmostragem
     *
     * @return AmpPlanoControleCaracteristica
     */
    public function setIdTabelaAmostragem(\AmpTabelaAmostragem $idTabelaAmostragem = null)
    {
        $this->idTabelaAmostragem = $idTabelaAmostragem;

        return $this;
    }

    /**
     * Get idTabelaAmostragem
     *
     * @return \AmpTabelaAmostragem
     */
    public function getIdTabelaAmostragem()
    {
        return $this->idTabelaAmostragem;
    }
}

