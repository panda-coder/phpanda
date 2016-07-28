<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpPlanoControle
 *
 * @ORM\Table(name="amp_plano_controle", indexes={@ORM\Index(name="fk_amp_plano_controle_1_idx", columns={"id_produto"}), @ORM\Index(name="fk_amp_plano_controle_2_idx", columns={"id_politica_inicial"}), @ORM\Index(name="fk_amp_plano_controle_3_idx", columns={"id_estagio"}), @ORM\Index(name="fk_amp_plano_controle_4_idx", columns={"id_usuario_aprovador"})})
 * @ORM\Entity
 */
class AmpPlanoControle
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_plano_controle", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPlanoControle;

    /**
     * @var int
     *
     * @ORM\Column(name="numero_versao", type="integer", nullable=true)
     */
    private $numeroVersao;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_documento", type="string", length=50, nullable=true)
     */
    private $numeroDocumento;

    /**
     * @var string
     *
     * @ORM\Column(name="revisao", type="string", length=50, nullable=true)
     */
    private $revisao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="efetividade", type="datetime", nullable=true)
     */
    private $efetividade;

    /**
     * @var int
     *
     * @ORM\Column(name="resultado", type="integer", nullable=true)
     */
    private $resultado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_aprovacao", type="datetime", nullable=true)
     */
    private $dataAprovacao;

    /**
     * @var string
     *
     * @ORM\Column(name="historico_alteracoes", type="text", nullable=true)
     */
    private $historicoAlteracoes;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="text", nullable=true)
     */
    private $observacao;

    /**
     * @var string
     *
     * @ORM\Column(name="imagem", type="string", length=100, nullable=true)
     */
    private $imagem;

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
     * @var int
     *
     * @ORM\Column(name="codigo_gemma", type="integer", nullable=true)
     */
    private $codigoGemma;

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
     * @var \AmpPoliticaInicial
     *
     * @ORM\ManyToOne(targetEntity="AmpPoliticaInicial")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_politica_inicial", referencedColumnName="id_politica_inicial")
     * })
     */
    private $idPoliticaInicial;

    /**
     * @var \AmpEstado
     *
     * @ORM\ManyToOne(targetEntity="AmpEstado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_estagio", referencedColumnName="id_estado")
     * })
     */
    private $idEstagio;

    /**
     * @var \AmpUsuario
     *
     * @ORM\ManyToOne(targetEntity="AmpUsuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario_aprovador", referencedColumnName="id_usuario")
     * })
     */
    private $idUsuarioAprovador;


    /**
     * Get idPlanoControle
     *
     * @return int
     */
    public function getIdPlanoControle()
    {
        return $this->idPlanoControle;
    }

    /**
     * Set numeroVersao
     *
     * @param int $numeroVersao
     *
     * @return AmpPlanoControle
     */
    public function setNumeroVersao($numeroVersao)
    {
        $this->numeroVersao = $numeroVersao;

        return $this;
    }

    /**
     * Get numeroVersao
     *
     * @return int
     */
    public function getNumeroVersao()
    {
        return $this->numeroVersao;
    }

    /**
     * Set numeroDocumento
     *
     * @param string $numeroDocumento
     *
     * @return AmpPlanoControle
     */
    public function setNumeroDocumento($numeroDocumento)
    {
        $this->numeroDocumento = $numeroDocumento;

        return $this;
    }

    /**
     * Get numeroDocumento
     *
     * @return string
     */
    public function getNumeroDocumento()
    {
        return $this->numeroDocumento;
    }

    /**
     * Set revisao
     *
     * @param string $revisao
     *
     * @return AmpPlanoControle
     */
    public function setRevisao($revisao)
    {
        $this->revisao = $revisao;

        return $this;
    }

    /**
     * Get revisao
     *
     * @return string
     */
    public function getRevisao()
    {
        return $this->revisao;
    }

    /**
     * Set efetividade
     *
     * @param \DateTime $efetividade
     *
     * @return AmpPlanoControle
     */
    public function setEfetividade($efetividade)
    {
        $this->efetividade = $efetividade;

        return $this;
    }

    /**
     * Get efetividade
     *
     * @return \DateTime
     */
    public function getEfetividade()
    {
        return $this->efetividade;
    }

    /**
     * Set resultado
     *
     * @param int $resultado
     *
     * @return AmpPlanoControle
     */
    public function setResultado($resultado)
    {
        $this->resultado = $resultado;

        return $this;
    }

    /**
     * Get resultado
     *
     * @return int
     */
    public function getResultado()
    {
        return $this->resultado;
    }

    /**
     * Set dataAprovacao
     *
     * @param \DateTime $dataAprovacao
     *
     * @return AmpPlanoControle
     */
    public function setDataAprovacao($dataAprovacao)
    {
        $this->dataAprovacao = $dataAprovacao;

        return $this;
    }

    /**
     * Get dataAprovacao
     *
     * @return \DateTime
     */
    public function getDataAprovacao()
    {
        return $this->dataAprovacao;
    }

    /**
     * Set historicoAlteracoes
     *
     * @param string $historicoAlteracoes
     *
     * @return AmpPlanoControle
     */
    public function setHistoricoAlteracoes($historicoAlteracoes)
    {
        $this->historicoAlteracoes = $historicoAlteracoes;

        return $this;
    }

    /**
     * Get historicoAlteracoes
     *
     * @return string
     */
    public function getHistoricoAlteracoes()
    {
        return $this->historicoAlteracoes;
    }

    /**
     * Set observacao
     *
     * @param string $observacao
     *
     * @return AmpPlanoControle
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
     * Set imagem
     *
     * @param string $imagem
     *
     * @return AmpPlanoControle
     */
    public function setImagem($imagem)
    {
        $this->imagem = $imagem;

        return $this;
    }

    /**
     * Get imagem
     *
     * @return string
     */
    public function getImagem()
    {
        return $this->imagem;
    }

    /**
     * Set dataCriacao
     *
     * @param \DateTime $dataCriacao
     *
     * @return AmpPlanoControle
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
     * @return AmpPlanoControle
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
     * @return AmpPlanoControle
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
     * @return AmpPlanoControle
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
     * Set codigoGemma
     *
     * @param int $codigoGemma
     *
     * @return AmpPlanoControle
     */
    public function setCodigoGemma($codigoGemma)
    {
        $this->codigoGemma = $codigoGemma;

        return $this;
    }

    /**
     * Get codigoGemma
     *
     * @return int
     */
    public function getCodigoGemma()
    {
        return $this->codigoGemma;
    }

    /**
     * Set idProduto
     *
     * @param \AmpProduto $idProduto
     *
     * @return AmpPlanoControle
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

    /**
     * Set idPoliticaInicial
     *
     * @param \AmpPoliticaInicial $idPoliticaInicial
     *
     * @return AmpPlanoControle
     */
    public function setIdPoliticaInicial(\AmpPoliticaInicial $idPoliticaInicial = null)
    {
        $this->idPoliticaInicial = $idPoliticaInicial;

        return $this;
    }

    /**
     * Get idPoliticaInicial
     *
     * @return \AmpPoliticaInicial
     */
    public function getIdPoliticaInicial()
    {
        return $this->idPoliticaInicial;
    }

    /**
     * Set idEstagio
     *
     * @param \AmpEstado $idEstagio
     *
     * @return AmpPlanoControle
     */
    public function setIdEstagio(\AmpEstado $idEstagio = null)
    {
        $this->idEstagio = $idEstagio;

        return $this;
    }

    /**
     * Get idEstagio
     *
     * @return \AmpEstado
     */
    public function getIdEstagio()
    {
        return $this->idEstagio;
    }

    /**
     * Set idUsuarioAprovador
     *
     * @param \AmpUsuario $idUsuarioAprovador
     *
     * @return AmpPlanoControle
     */
    public function setIdUsuarioAprovador(\AmpUsuario $idUsuarioAprovador = null)
    {
        $this->idUsuarioAprovador = $idUsuarioAprovador;

        return $this;
    }

    /**
     * Get idUsuarioAprovador
     *
     * @return \AmpUsuario
     */
    public function getIdUsuarioAprovador()
    {
        return $this->idUsuarioAprovador;
    }
}

