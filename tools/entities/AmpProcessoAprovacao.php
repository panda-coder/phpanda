<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpProcessoAprovacao
 *
 * @ORM\Table(name="amp_processo_aprovacao", indexes={@ORM\Index(name="fk_amp_processo_aprovacao_1_idx", columns={"id_produto"}), @ORM\Index(name="fk_amp_processo_aprovacao_2_idx", columns={"id_fornecedor"})})
 * @ORM\Entity
 */
class AmpProcessoAprovacao
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_processo_aprovacao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProcessoAprovacao;

    /**
     * @var int
     *
     * @ORM\Column(name="tipo", type="integer", nullable=true)
     */
    private $tipo;

    /**
     * @var int
     *
     * @ORM\Column(name="id_motivo_submissao", type="integer", nullable=true)
     */
    private $idMotivoSubmissao;

    /**
     * @var int
     *
     * @ORM\Column(name="id_nivel_submissao", type="integer", nullable=true)
     */
    private $idNivelSubmissao;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_documento", type="string", length=50, nullable=true)
     */
    private $numeroDocumento;

    /**
     * @var string
     *
     * @ORM\Column(name="revisao", type="string", length=45, nullable=true)
     */
    private $revisao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="efetividade", type="datetime", nullable=true)
     */
    private $efetividade;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_externo", type="string", length=45, nullable=true)
     */
    private $numeroExterno;

    /**
     * @var int
     *
     * @ORM\Column(name="id_origem", type="integer", nullable=true)
     */
    private $idOrigem;

    /**
     * @var int
     *
     * @ORM\Column(name="id_alteracao_engenharia", type="integer", nullable=true)
     */
    private $idAlteracaoEngenharia;

    /**
     * @var string
     *
     * @ORM\Column(name="amostra", type="string", length=1, nullable=true)
     */
    private $amostra;

    /**
     * @var string
     *
     * @ORM\Column(name="psw", type="string", length=1, nullable=true)
     */
    private $psw;

    /**
     * @var string
     *
     * @ORM\Column(name="resultado_dimensionais", type="string", length=1, nullable=true)
     */
    private $resultadoDimensionais;

    /**
     * @var string
     *
     * @ORM\Column(name="ensaios", type="string", length=1, nullable=true)
     */
    private $ensaios;

    /**
     * @var string
     *
     * @ORM\Column(name="teste_pratico", type="string", length=1, nullable=true)
     */
    private $testePratico;

    /**
     * @var string
     *
     * @ORM\Column(name="relatorio_aparencia", type="string", length=1, nullable=true)
     */
    private $relatorioAparencia;

    /**
     * @var string
     *
     * @ORM\Column(name="ensaios_desempenho", type="string", length=1, nullable=true)
     */
    private $ensaiosDesempenho;

    /**
     * @var string
     *
     * @ORM\Column(name="registros_projeto", type="string", length=1, nullable=true)
     */
    private $registrosProjeto;

    /**
     * @var string
     *
     * @ORM\Column(name="marcacao", type="string", length=1, nullable=true)
     */
    private $marcacao;

    /**
     * @var string
     *
     * @ORM\Column(name="alteracao_engenharia", type="string", length=1, nullable=true)
     */
    private $alteracaoEngenharia;

    /**
     * @var string
     *
     * @ORM\Column(name="fmea_projeto", type="string", length=1, nullable=true)
     */
    private $fmeaProjeto;

    /**
     * @var string
     *
     * @ORM\Column(name="fluxo_processo", type="string", length=1, nullable=true)
     */
    private $fluxoProcesso;

    /**
     * @var string
     *
     * @ORM\Column(name="fmea_processo", type="string", length=1, nullable=true)
     */
    private $fmeaProcesso;

    /**
     * @var string
     *
     * @ORM\Column(name="plano_controle", type="string", length=1, nullable=true)
     */
    private $planoControle;

    /**
     * @var string
     *
     * @ORM\Column(name="analise_medicao", type="string", length=1, nullable=true)
     */
    private $analiseMedicao;

    /**
     * @var string
     *
     * @ORM\Column(name="estudos_iniciais", type="string", length=1, nullable=true)
     */
    private $estudosIniciais;

    /**
     * @var string
     *
     * @ORM\Column(name="auxilio_verificacao", type="string", length=1, nullable=true)
     */
    private $auxilioVerificacao;

    /**
     * @var int
     *
     * @ORM\Column(name="resultado_submissao", type="integer", nullable=true)
     */
    private $resultadoSubmissao;

    /**
     * @var int
     *
     * @ORM\Column(name="resultado_submissao_usuario", type="integer", nullable=true)
     */
    private $resultadoSubmissaoUsuario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="resultado_submissao_data", type="datetime", nullable=true)
     */
    private $resultadoSubmissaoData;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao_submissao", type="text", nullable=true)
     */
    private $observacaoSubmissao;

    /**
     * @var int
     *
     * @ORM\Column(name="resultado_amostra", type="integer", nullable=true)
     */
    private $resultadoAmostra;

    /**
     * @var int
     *
     * @ORM\Column(name="resultado_amostra_usuario", type="integer", nullable=true)
     */
    private $resultadoAmostraUsuario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="resultado_amostra_data", type="datetime", nullable=true)
     */
    private $resultadoAmostraData;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao_amostra", type="text", nullable=true)
     */
    private $observacaoAmostra;

    /**
     * @var int
     *
     * @ORM\Column(name="resultado_aprovacao", type="integer", nullable=true)
     */
    private $resultadoAprovacao;

    /**
     * @var int
     *
     * @ORM\Column(name="resultado_aprovacao_usuario", type="integer", nullable=true)
     */
    private $resultadoAprovacaoUsuario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="resultado_aprovacao_data", type="datetime", nullable=true)
     */
    private $resultadoAprovacaoData;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao_aprovacao", type="text", nullable=true)
     */
    private $observacaoAprovacao;

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
     * @var \AmpProduto
     *
     * @ORM\ManyToOne(targetEntity="AmpProduto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_produto", referencedColumnName="id_produto")
     * })
     */
    private $idProduto;

    /**
     * @var \AmpEntidade
     *
     * @ORM\ManyToOne(targetEntity="AmpEntidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_fornecedor", referencedColumnName="id_entidade")
     * })
     */
    private $idFornecedor;


    /**
     * Get idProcessoAprovacao
     *
     * @return int
     */
    public function getIdProcessoAprovacao()
    {
        return $this->idProcessoAprovacao;
    }

    /**
     * Set tipo
     *
     * @param int $tipo
     *
     * @return AmpProcessoAprovacao
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return int
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set idMotivoSubmissao
     *
     * @param int $idMotivoSubmissao
     *
     * @return AmpProcessoAprovacao
     */
    public function setIdMotivoSubmissao($idMotivoSubmissao)
    {
        $this->idMotivoSubmissao = $idMotivoSubmissao;

        return $this;
    }

    /**
     * Get idMotivoSubmissao
     *
     * @return int
     */
    public function getIdMotivoSubmissao()
    {
        return $this->idMotivoSubmissao;
    }

    /**
     * Set idNivelSubmissao
     *
     * @param int $idNivelSubmissao
     *
     * @return AmpProcessoAprovacao
     */
    public function setIdNivelSubmissao($idNivelSubmissao)
    {
        $this->idNivelSubmissao = $idNivelSubmissao;

        return $this;
    }

    /**
     * Get idNivelSubmissao
     *
     * @return int
     */
    public function getIdNivelSubmissao()
    {
        return $this->idNivelSubmissao;
    }

    /**
     * Set numeroDocumento
     *
     * @param string $numeroDocumento
     *
     * @return AmpProcessoAprovacao
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
     * @return AmpProcessoAprovacao
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
     * @return AmpProcessoAprovacao
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
     * Set numeroExterno
     *
     * @param string $numeroExterno
     *
     * @return AmpProcessoAprovacao
     */
    public function setNumeroExterno($numeroExterno)
    {
        $this->numeroExterno = $numeroExterno;

        return $this;
    }

    /**
     * Get numeroExterno
     *
     * @return string
     */
    public function getNumeroExterno()
    {
        return $this->numeroExterno;
    }

    /**
     * Set idOrigem
     *
     * @param int $idOrigem
     *
     * @return AmpProcessoAprovacao
     */
    public function setIdOrigem($idOrigem)
    {
        $this->idOrigem = $idOrigem;

        return $this;
    }

    /**
     * Get idOrigem
     *
     * @return int
     */
    public function getIdOrigem()
    {
        return $this->idOrigem;
    }

    /**
     * Set idAlteracaoEngenharia
     *
     * @param int $idAlteracaoEngenharia
     *
     * @return AmpProcessoAprovacao
     */
    public function setIdAlteracaoEngenharia($idAlteracaoEngenharia)
    {
        $this->idAlteracaoEngenharia = $idAlteracaoEngenharia;

        return $this;
    }

    /**
     * Get idAlteracaoEngenharia
     *
     * @return int
     */
    public function getIdAlteracaoEngenharia()
    {
        return $this->idAlteracaoEngenharia;
    }

    /**
     * Set amostra
     *
     * @param string $amostra
     *
     * @return AmpProcessoAprovacao
     */
    public function setAmostra($amostra)
    {
        $this->amostra = $amostra;

        return $this;
    }

    /**
     * Get amostra
     *
     * @return string
     */
    public function getAmostra()
    {
        return $this->amostra;
    }

    /**
     * Set psw
     *
     * @param string $psw
     *
     * @return AmpProcessoAprovacao
     */
    public function setPsw($psw)
    {
        $this->psw = $psw;

        return $this;
    }

    /**
     * Get psw
     *
     * @return string
     */
    public function getPsw()
    {
        return $this->psw;
    }

    /**
     * Set resultadoDimensionais
     *
     * @param string $resultadoDimensionais
     *
     * @return AmpProcessoAprovacao
     */
    public function setResultadoDimensionais($resultadoDimensionais)
    {
        $this->resultadoDimensionais = $resultadoDimensionais;

        return $this;
    }

    /**
     * Get resultadoDimensionais
     *
     * @return string
     */
    public function getResultadoDimensionais()
    {
        return $this->resultadoDimensionais;
    }

    /**
     * Set ensaios
     *
     * @param string $ensaios
     *
     * @return AmpProcessoAprovacao
     */
    public function setEnsaios($ensaios)
    {
        $this->ensaios = $ensaios;

        return $this;
    }

    /**
     * Get ensaios
     *
     * @return string
     */
    public function getEnsaios()
    {
        return $this->ensaios;
    }

    /**
     * Set testePratico
     *
     * @param string $testePratico
     *
     * @return AmpProcessoAprovacao
     */
    public function setTestePratico($testePratico)
    {
        $this->testePratico = $testePratico;

        return $this;
    }

    /**
     * Get testePratico
     *
     * @return string
     */
    public function getTestePratico()
    {
        return $this->testePratico;
    }

    /**
     * Set relatorioAparencia
     *
     * @param string $relatorioAparencia
     *
     * @return AmpProcessoAprovacao
     */
    public function setRelatorioAparencia($relatorioAparencia)
    {
        $this->relatorioAparencia = $relatorioAparencia;

        return $this;
    }

    /**
     * Get relatorioAparencia
     *
     * @return string
     */
    public function getRelatorioAparencia()
    {
        return $this->relatorioAparencia;
    }

    /**
     * Set ensaiosDesempenho
     *
     * @param string $ensaiosDesempenho
     *
     * @return AmpProcessoAprovacao
     */
    public function setEnsaiosDesempenho($ensaiosDesempenho)
    {
        $this->ensaiosDesempenho = $ensaiosDesempenho;

        return $this;
    }

    /**
     * Get ensaiosDesempenho
     *
     * @return string
     */
    public function getEnsaiosDesempenho()
    {
        return $this->ensaiosDesempenho;
    }

    /**
     * Set registrosProjeto
     *
     * @param string $registrosProjeto
     *
     * @return AmpProcessoAprovacao
     */
    public function setRegistrosProjeto($registrosProjeto)
    {
        $this->registrosProjeto = $registrosProjeto;

        return $this;
    }

    /**
     * Get registrosProjeto
     *
     * @return string
     */
    public function getRegistrosProjeto()
    {
        return $this->registrosProjeto;
    }

    /**
     * Set marcacao
     *
     * @param string $marcacao
     *
     * @return AmpProcessoAprovacao
     */
    public function setMarcacao($marcacao)
    {
        $this->marcacao = $marcacao;

        return $this;
    }

    /**
     * Get marcacao
     *
     * @return string
     */
    public function getMarcacao()
    {
        return $this->marcacao;
    }

    /**
     * Set alteracaoEngenharia
     *
     * @param string $alteracaoEngenharia
     *
     * @return AmpProcessoAprovacao
     */
    public function setAlteracaoEngenharia($alteracaoEngenharia)
    {
        $this->alteracaoEngenharia = $alteracaoEngenharia;

        return $this;
    }

    /**
     * Get alteracaoEngenharia
     *
     * @return string
     */
    public function getAlteracaoEngenharia()
    {
        return $this->alteracaoEngenharia;
    }

    /**
     * Set fmeaProjeto
     *
     * @param string $fmeaProjeto
     *
     * @return AmpProcessoAprovacao
     */
    public function setFmeaProjeto($fmeaProjeto)
    {
        $this->fmeaProjeto = $fmeaProjeto;

        return $this;
    }

    /**
     * Get fmeaProjeto
     *
     * @return string
     */
    public function getFmeaProjeto()
    {
        return $this->fmeaProjeto;
    }

    /**
     * Set fluxoProcesso
     *
     * @param string $fluxoProcesso
     *
     * @return AmpProcessoAprovacao
     */
    public function setFluxoProcesso($fluxoProcesso)
    {
        $this->fluxoProcesso = $fluxoProcesso;

        return $this;
    }

    /**
     * Get fluxoProcesso
     *
     * @return string
     */
    public function getFluxoProcesso()
    {
        return $this->fluxoProcesso;
    }

    /**
     * Set fmeaProcesso
     *
     * @param string $fmeaProcesso
     *
     * @return AmpProcessoAprovacao
     */
    public function setFmeaProcesso($fmeaProcesso)
    {
        $this->fmeaProcesso = $fmeaProcesso;

        return $this;
    }

    /**
     * Get fmeaProcesso
     *
     * @return string
     */
    public function getFmeaProcesso()
    {
        return $this->fmeaProcesso;
    }

    /**
     * Set planoControle
     *
     * @param string $planoControle
     *
     * @return AmpProcessoAprovacao
     */
    public function setPlanoControle($planoControle)
    {
        $this->planoControle = $planoControle;

        return $this;
    }

    /**
     * Get planoControle
     *
     * @return string
     */
    public function getPlanoControle()
    {
        return $this->planoControle;
    }

    /**
     * Set analiseMedicao
     *
     * @param string $analiseMedicao
     *
     * @return AmpProcessoAprovacao
     */
    public function setAnaliseMedicao($analiseMedicao)
    {
        $this->analiseMedicao = $analiseMedicao;

        return $this;
    }

    /**
     * Get analiseMedicao
     *
     * @return string
     */
    public function getAnaliseMedicao()
    {
        return $this->analiseMedicao;
    }

    /**
     * Set estudosIniciais
     *
     * @param string $estudosIniciais
     *
     * @return AmpProcessoAprovacao
     */
    public function setEstudosIniciais($estudosIniciais)
    {
        $this->estudosIniciais = $estudosIniciais;

        return $this;
    }

    /**
     * Get estudosIniciais
     *
     * @return string
     */
    public function getEstudosIniciais()
    {
        return $this->estudosIniciais;
    }

    /**
     * Set auxilioVerificacao
     *
     * @param string $auxilioVerificacao
     *
     * @return AmpProcessoAprovacao
     */
    public function setAuxilioVerificacao($auxilioVerificacao)
    {
        $this->auxilioVerificacao = $auxilioVerificacao;

        return $this;
    }

    /**
     * Get auxilioVerificacao
     *
     * @return string
     */
    public function getAuxilioVerificacao()
    {
        return $this->auxilioVerificacao;
    }

    /**
     * Set resultadoSubmissao
     *
     * @param int $resultadoSubmissao
     *
     * @return AmpProcessoAprovacao
     */
    public function setResultadoSubmissao($resultadoSubmissao)
    {
        $this->resultadoSubmissao = $resultadoSubmissao;

        return $this;
    }

    /**
     * Get resultadoSubmissao
     *
     * @return int
     */
    public function getResultadoSubmissao()
    {
        return $this->resultadoSubmissao;
    }

    /**
     * Set resultadoSubmissaoUsuario
     *
     * @param int $resultadoSubmissaoUsuario
     *
     * @return AmpProcessoAprovacao
     */
    public function setResultadoSubmissaoUsuario($resultadoSubmissaoUsuario)
    {
        $this->resultadoSubmissaoUsuario = $resultadoSubmissaoUsuario;

        return $this;
    }

    /**
     * Get resultadoSubmissaoUsuario
     *
     * @return int
     */
    public function getResultadoSubmissaoUsuario()
    {
        return $this->resultadoSubmissaoUsuario;
    }

    /**
     * Set resultadoSubmissaoData
     *
     * @param \DateTime $resultadoSubmissaoData
     *
     * @return AmpProcessoAprovacao
     */
    public function setResultadoSubmissaoData($resultadoSubmissaoData)
    {
        $this->resultadoSubmissaoData = $resultadoSubmissaoData;

        return $this;
    }

    /**
     * Get resultadoSubmissaoData
     *
     * @return \DateTime
     */
    public function getResultadoSubmissaoData()
    {
        return $this->resultadoSubmissaoData;
    }

    /**
     * Set observacaoSubmissao
     *
     * @param string $observacaoSubmissao
     *
     * @return AmpProcessoAprovacao
     */
    public function setObservacaoSubmissao($observacaoSubmissao)
    {
        $this->observacaoSubmissao = $observacaoSubmissao;

        return $this;
    }

    /**
     * Get observacaoSubmissao
     *
     * @return string
     */
    public function getObservacaoSubmissao()
    {
        return $this->observacaoSubmissao;
    }

    /**
     * Set resultadoAmostra
     *
     * @param int $resultadoAmostra
     *
     * @return AmpProcessoAprovacao
     */
    public function setResultadoAmostra($resultadoAmostra)
    {
        $this->resultadoAmostra = $resultadoAmostra;

        return $this;
    }

    /**
     * Get resultadoAmostra
     *
     * @return int
     */
    public function getResultadoAmostra()
    {
        return $this->resultadoAmostra;
    }

    /**
     * Set resultadoAmostraUsuario
     *
     * @param int $resultadoAmostraUsuario
     *
     * @return AmpProcessoAprovacao
     */
    public function setResultadoAmostraUsuario($resultadoAmostraUsuario)
    {
        $this->resultadoAmostraUsuario = $resultadoAmostraUsuario;

        return $this;
    }

    /**
     * Get resultadoAmostraUsuario
     *
     * @return int
     */
    public function getResultadoAmostraUsuario()
    {
        return $this->resultadoAmostraUsuario;
    }

    /**
     * Set resultadoAmostraData
     *
     * @param \DateTime $resultadoAmostraData
     *
     * @return AmpProcessoAprovacao
     */
    public function setResultadoAmostraData($resultadoAmostraData)
    {
        $this->resultadoAmostraData = $resultadoAmostraData;

        return $this;
    }

    /**
     * Get resultadoAmostraData
     *
     * @return \DateTime
     */
    public function getResultadoAmostraData()
    {
        return $this->resultadoAmostraData;
    }

    /**
     * Set observacaoAmostra
     *
     * @param string $observacaoAmostra
     *
     * @return AmpProcessoAprovacao
     */
    public function setObservacaoAmostra($observacaoAmostra)
    {
        $this->observacaoAmostra = $observacaoAmostra;

        return $this;
    }

    /**
     * Get observacaoAmostra
     *
     * @return string
     */
    public function getObservacaoAmostra()
    {
        return $this->observacaoAmostra;
    }

    /**
     * Set resultadoAprovacao
     *
     * @param int $resultadoAprovacao
     *
     * @return AmpProcessoAprovacao
     */
    public function setResultadoAprovacao($resultadoAprovacao)
    {
        $this->resultadoAprovacao = $resultadoAprovacao;

        return $this;
    }

    /**
     * Get resultadoAprovacao
     *
     * @return int
     */
    public function getResultadoAprovacao()
    {
        return $this->resultadoAprovacao;
    }

    /**
     * Set resultadoAprovacaoUsuario
     *
     * @param int $resultadoAprovacaoUsuario
     *
     * @return AmpProcessoAprovacao
     */
    public function setResultadoAprovacaoUsuario($resultadoAprovacaoUsuario)
    {
        $this->resultadoAprovacaoUsuario = $resultadoAprovacaoUsuario;

        return $this;
    }

    /**
     * Get resultadoAprovacaoUsuario
     *
     * @return int
     */
    public function getResultadoAprovacaoUsuario()
    {
        return $this->resultadoAprovacaoUsuario;
    }

    /**
     * Set resultadoAprovacaoData
     *
     * @param \DateTime $resultadoAprovacaoData
     *
     * @return AmpProcessoAprovacao
     */
    public function setResultadoAprovacaoData($resultadoAprovacaoData)
    {
        $this->resultadoAprovacaoData = $resultadoAprovacaoData;

        return $this;
    }

    /**
     * Get resultadoAprovacaoData
     *
     * @return \DateTime
     */
    public function getResultadoAprovacaoData()
    {
        return $this->resultadoAprovacaoData;
    }

    /**
     * Set observacaoAprovacao
     *
     * @param string $observacaoAprovacao
     *
     * @return AmpProcessoAprovacao
     */
    public function setObservacaoAprovacao($observacaoAprovacao)
    {
        $this->observacaoAprovacao = $observacaoAprovacao;

        return $this;
    }

    /**
     * Get observacaoAprovacao
     *
     * @return string
     */
    public function getObservacaoAprovacao()
    {
        return $this->observacaoAprovacao;
    }

    /**
     * Set dataCriacao
     *
     * @param \DateTime $dataCriacao
     *
     * @return AmpProcessoAprovacao
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
     * @return AmpProcessoAprovacao
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
     * @return AmpProcessoAprovacao
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
     * @return AmpProcessoAprovacao
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
     * Set idProduto
     *
     * @param \AmpProduto $idProduto
     *
     * @return AmpProcessoAprovacao
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
     * Set idFornecedor
     *
     * @param \AmpEntidade $idFornecedor
     *
     * @return AmpProcessoAprovacao
     */
    public function setIdFornecedor(\AmpEntidade $idFornecedor = null)
    {
        $this->idFornecedor = $idFornecedor;

        return $this;
    }

    /**
     * Get idFornecedor
     *
     * @return \AmpEntidade
     */
    public function getIdFornecedor()
    {
        return $this->idFornecedor;
    }
}

