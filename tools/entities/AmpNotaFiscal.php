<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpNotaFiscal
 *
 * @ORM\Table(name="amp_nota_fiscal", uniqueConstraints={@ORM\UniqueConstraint(name="uq_amp_nota_fiscal_1", columns={"numero_nota", "serie"}), @ORM\UniqueConstraint(name="chave_nfe_UNIQUE", columns={"chave_nfe"})}, indexes={@ORM\Index(name="fk_amp_pedido_venda_1_idx", columns={"id_entidade"}), @ORM\Index(name="fk_amp_pedido_venda_4_idx", columns={"id_vencimento"}), @ORM\Index(name="fk_amp_pedido_venda_3_idx", columns={"id_representante_indireto"}), @ORM\Index(name="fk_amp_pedido_venda_5_idx", columns={"id_forma_pagamento"}), @ORM\Index(name="fk_amp_nota_fiscal_7_idx", columns={"id_macro_operacao"}), @ORM\Index(name="fk_amp_nota_fiscal_8_idx", columns={"id_ordem_separacao"}), @ORM\Index(name="fk_amp_nota_fiscal_2_idx", columns={"id_representante_direto"}), @ORM\Index(name="fk_amp_nota_fiscal_9_idx", columns={"id_senf"}), @ORM\Index(name="fk_id_transportadora_idx", columns={"id_transportadora"}), @ORM\Index(name="fk_id_transportadora_2_idx", columns={"id_transportadora"})})
 * @ORM\Entity
 */
class AmpNotaFiscal
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_nota_fiscal", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNotaFiscal;

    /**
     * @var int
     *
     * @ORM\Column(name="numero_nota", type="integer", nullable=false)
     */
    private $numeroNota;

    /**
     * @var int
     *
     * @ORM\Column(name="serie", type="integer", nullable=false)
     */
    private $serie;

    /**
     * @var int
     *
     * @ORM\Column(name="id_frete_tomador", type="integer", nullable=false)
     */
    private $idFreteTomador;

    /**
     * @var int
     *
     * @ORM\Column(name="id_volume_especie", type="integer", nullable=false)
     */
    private $idVolumeEspecie;

    /**
     * @var int
     *
     * @ORM\Column(name="tipo_nota_fiscal", type="integer", nullable=false)
     */
    private $tipoNotaFiscal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_emissao", type="datetime", nullable=false)
     */
    private $dataEmissao;

    /**
     * @var string
     *
     * @ORM\Column(name="razao_social", type="string", length=45, nullable=false)
     */
    private $razaoSocial;

    /**
     * @var string
     *
     * @ORM\Column(name="total_icms", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $totalIcms;

    /**
     * @var string
     *
     * @ORM\Column(name="base_calculo_icms", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $baseCalculoIcms;

    /**
     * @var string
     *
     * @ORM\Column(name="base_calculo_st", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $baseCalculoSt;

    /**
     * @var string
     *
     * @ORM\Column(name="total_produtos", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $totalProdutos;

    /**
     * @var string
     *
     * @ORM\Column(name="total_st", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $totalSt;

    /**
     * @var string
     *
     * @ORM\Column(name="total_ii", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $totalIi;

    /**
     * @var string
     *
     * @ORM\Column(name="total_ipi", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $totalIpi;

    /**
     * @var string
     *
     * @ORM\Column(name="total_pis", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $totalPis;

    /**
     * @var string
     *
     * @ORM\Column(name="total_cofins", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $totalCofins;

    /**
     * @var string
     *
     * @ORM\Column(name="total_outros", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $totalOutros;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_total_nota", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $valorTotalNota;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="chave_nfe", type="string", length=45, nullable=true)
     */
    private $chaveNfe;

    /**
     * @var string
     *
     * @ORM\Column(name="protocolo", type="string", length=45, nullable=true)
     */
    private $protocolo;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="string", length=1000, nullable=false)
     */
    private $observacao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_entrega", type="datetime", nullable=false)
     */
    private $dataEntrega;

    /**
     * @var string
     *
     * @ORM\Column(name="frete_valor", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $freteValor;

    /**
     * @var string
     *
     * @ORM\Column(name="seguro_valor", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $seguroValor;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_local_destino", type="string", length=45, nullable=false)
     */
    private $codigoLocalDestino;

    /**
     * @var string
     *
     * @ORM\Column(name="motivo", type="string", length=255, nullable=false)
     */
    private $motivo;

    /**
     * @var string
     *
     * @ORM\Column(name="peso_liquido", type="decimal", precision=13, scale=4, nullable=false)
     */
    private $pesoLiquido;

    /**
     * @var string
     *
     * @ORM\Column(name="peso_bruto", type="decimal", precision=13, scale=4, nullable=false)
     */
    private $pesoBruto;

    /**
     * @var int
     *
     * @ORM\Column(name="volume", type="integer", nullable=false)
     */
    private $volume;

    /**
     * @var string
     *
     * @ORM\Column(name="placa_veiculo", type="string", length=8, nullable=true)
     */
    private $placaVeiculo;

    /**
     * @var string
     *
     * @ORM\Column(name="cpf_motorista", type="string", length=20, nullable=true)
     */
    private $cpfMotorista;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_motorista", type="string", length=45, nullable=true)
     */
    private $nomeMotorista;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_atualizacao_sefaz", type="datetime", nullable=true)
     */
    private $dataAtualizacaoSefaz;

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
     * @ORM\Column(name="data_criacao", type="datetime", nullable=false)
     */
    private $dataCriacao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_ultima_alteracao", type="datetime", nullable=false)
     */
    private $dataUltimaAlteracao;

    /**
     * @var \AmpEntidade
     *
     * @ORM\ManyToOne(targetEntity="AmpEntidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_entidade", referencedColumnName="id_entidade")
     * })
     */
    private $idEntidade;

    /**
     * @var \AmpRepresentante
     *
     * @ORM\ManyToOne(targetEntity="AmpRepresentante")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_representante_direto", referencedColumnName="id_representante")
     * })
     */
    private $idRepresentanteDireto;

    /**
     * @var \AmpRepresentante
     *
     * @ORM\ManyToOne(targetEntity="AmpRepresentante")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_representante_indireto", referencedColumnName="id_representante")
     * })
     */
    private $idRepresentanteIndireto;

    /**
     * @var \AmpVencimento
     *
     * @ORM\ManyToOne(targetEntity="AmpVencimento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_vencimento", referencedColumnName="id_vencimento")
     * })
     */
    private $idVencimento;

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
     * @var \AmpMacroOperacao
     *
     * @ORM\ManyToOne(targetEntity="AmpMacroOperacao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_macro_operacao", referencedColumnName="id_macro_operacao")
     * })
     */
    private $idMacroOperacao;

    /**
     * @var \AmpOrdemSeparacao
     *
     * @ORM\ManyToOne(targetEntity="AmpOrdemSeparacao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ordem_separacao", referencedColumnName="id_ordem_separacao")
     * })
     */
    private $idOrdemSeparacao;

    /**
     * @var \AmpSenf
     *
     * @ORM\ManyToOne(targetEntity="AmpSenf")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_senf", referencedColumnName="id_senf")
     * })
     */
    private $idSenf;

    /**
     * @var \AmpEntidade
     *
     * @ORM\ManyToOne(targetEntity="AmpEntidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_transportadora", referencedColumnName="id_entidade")
     * })
     */
    private $idTransportadora;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AmpTitulo", inversedBy="idNotaFiscal")
     * @ORM\JoinTable(name="amp_nota_fiscal_titulo",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_nota_fiscal", referencedColumnName="id_nota_fiscal")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_titulo", referencedColumnName="id_titulo")
     *   }
     * )
     */
    private $idTitulo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idTitulo = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idNotaFiscal
     *
     * @return int
     */
    public function getIdNotaFiscal()
    {
        return $this->idNotaFiscal;
    }

    /**
     * Set numeroNota
     *
     * @param int $numeroNota
     *
     * @return AmpNotaFiscal
     */
    public function setNumeroNota($numeroNota)
    {
        $this->numeroNota = $numeroNota;

        return $this;
    }

    /**
     * Get numeroNota
     *
     * @return int
     */
    public function getNumeroNota()
    {
        return $this->numeroNota;
    }

    /**
     * Set serie
     *
     * @param int $serie
     *
     * @return AmpNotaFiscal
     */
    public function setSerie($serie)
    {
        $this->serie = $serie;

        return $this;
    }

    /**
     * Get serie
     *
     * @return int
     */
    public function getSerie()
    {
        return $this->serie;
    }

    /**
     * Set idFreteTomador
     *
     * @param int $idFreteTomador
     *
     * @return AmpNotaFiscal
     */
    public function setIdFreteTomador($idFreteTomador)
    {
        $this->idFreteTomador = $idFreteTomador;

        return $this;
    }

    /**
     * Get idFreteTomador
     *
     * @return int
     */
    public function getIdFreteTomador()
    {
        return $this->idFreteTomador;
    }

    /**
     * Set idVolumeEspecie
     *
     * @param int $idVolumeEspecie
     *
     * @return AmpNotaFiscal
     */
    public function setIdVolumeEspecie($idVolumeEspecie)
    {
        $this->idVolumeEspecie = $idVolumeEspecie;

        return $this;
    }

    /**
     * Get idVolumeEspecie
     *
     * @return int
     */
    public function getIdVolumeEspecie()
    {
        return $this->idVolumeEspecie;
    }

    /**
     * Set tipoNotaFiscal
     *
     * @param int $tipoNotaFiscal
     *
     * @return AmpNotaFiscal
     */
    public function setTipoNotaFiscal($tipoNotaFiscal)
    {
        $this->tipoNotaFiscal = $tipoNotaFiscal;

        return $this;
    }

    /**
     * Get tipoNotaFiscal
     *
     * @return int
     */
    public function getTipoNotaFiscal()
    {
        return $this->tipoNotaFiscal;
    }

    /**
     * Set dataEmissao
     *
     * @param \DateTime $dataEmissao
     *
     * @return AmpNotaFiscal
     */
    public function setDataEmissao($dataEmissao)
    {
        $this->dataEmissao = $dataEmissao;

        return $this;
    }

    /**
     * Get dataEmissao
     *
     * @return \DateTime
     */
    public function getDataEmissao()
    {
        return $this->dataEmissao;
    }

    /**
     * Set razaoSocial
     *
     * @param string $razaoSocial
     *
     * @return AmpNotaFiscal
     */
    public function setRazaoSocial($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;

        return $this;
    }

    /**
     * Get razaoSocial
     *
     * @return string
     */
    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

    /**
     * Set totalIcms
     *
     * @param string $totalIcms
     *
     * @return AmpNotaFiscal
     */
    public function setTotalIcms($totalIcms)
    {
        $this->totalIcms = $totalIcms;

        return $this;
    }

    /**
     * Get totalIcms
     *
     * @return string
     */
    public function getTotalIcms()
    {
        return $this->totalIcms;
    }

    /**
     * Set baseCalculoIcms
     *
     * @param string $baseCalculoIcms
     *
     * @return AmpNotaFiscal
     */
    public function setBaseCalculoIcms($baseCalculoIcms)
    {
        $this->baseCalculoIcms = $baseCalculoIcms;

        return $this;
    }

    /**
     * Get baseCalculoIcms
     *
     * @return string
     */
    public function getBaseCalculoIcms()
    {
        return $this->baseCalculoIcms;
    }

    /**
     * Set baseCalculoSt
     *
     * @param string $baseCalculoSt
     *
     * @return AmpNotaFiscal
     */
    public function setBaseCalculoSt($baseCalculoSt)
    {
        $this->baseCalculoSt = $baseCalculoSt;

        return $this;
    }

    /**
     * Get baseCalculoSt
     *
     * @return string
     */
    public function getBaseCalculoSt()
    {
        return $this->baseCalculoSt;
    }

    /**
     * Set totalProdutos
     *
     * @param string $totalProdutos
     *
     * @return AmpNotaFiscal
     */
    public function setTotalProdutos($totalProdutos)
    {
        $this->totalProdutos = $totalProdutos;

        return $this;
    }

    /**
     * Get totalProdutos
     *
     * @return string
     */
    public function getTotalProdutos()
    {
        return $this->totalProdutos;
    }

    /**
     * Set totalSt
     *
     * @param string $totalSt
     *
     * @return AmpNotaFiscal
     */
    public function setTotalSt($totalSt)
    {
        $this->totalSt = $totalSt;

        return $this;
    }

    /**
     * Get totalSt
     *
     * @return string
     */
    public function getTotalSt()
    {
        return $this->totalSt;
    }

    /**
     * Set totalIi
     *
     * @param string $totalIi
     *
     * @return AmpNotaFiscal
     */
    public function setTotalIi($totalIi)
    {
        $this->totalIi = $totalIi;

        return $this;
    }

    /**
     * Get totalIi
     *
     * @return string
     */
    public function getTotalIi()
    {
        return $this->totalIi;
    }

    /**
     * Set totalIpi
     *
     * @param string $totalIpi
     *
     * @return AmpNotaFiscal
     */
    public function setTotalIpi($totalIpi)
    {
        $this->totalIpi = $totalIpi;

        return $this;
    }

    /**
     * Get totalIpi
     *
     * @return string
     */
    public function getTotalIpi()
    {
        return $this->totalIpi;
    }

    /**
     * Set totalPis
     *
     * @param string $totalPis
     *
     * @return AmpNotaFiscal
     */
    public function setTotalPis($totalPis)
    {
        $this->totalPis = $totalPis;

        return $this;
    }

    /**
     * Get totalPis
     *
     * @return string
     */
    public function getTotalPis()
    {
        return $this->totalPis;
    }

    /**
     * Set totalCofins
     *
     * @param string $totalCofins
     *
     * @return AmpNotaFiscal
     */
    public function setTotalCofins($totalCofins)
    {
        $this->totalCofins = $totalCofins;

        return $this;
    }

    /**
     * Get totalCofins
     *
     * @return string
     */
    public function getTotalCofins()
    {
        return $this->totalCofins;
    }

    /**
     * Set totalOutros
     *
     * @param string $totalOutros
     *
     * @return AmpNotaFiscal
     */
    public function setTotalOutros($totalOutros)
    {
        $this->totalOutros = $totalOutros;

        return $this;
    }

    /**
     * Get totalOutros
     *
     * @return string
     */
    public function getTotalOutros()
    {
        return $this->totalOutros;
    }

    /**
     * Set valorTotalNota
     *
     * @param string $valorTotalNota
     *
     * @return AmpNotaFiscal
     */
    public function setValorTotalNota($valorTotalNota)
    {
        $this->valorTotalNota = $valorTotalNota;

        return $this;
    }

    /**
     * Get valorTotalNota
     *
     * @return string
     */
    public function getValorTotalNota()
    {
        return $this->valorTotalNota;
    }

    /**
     * Set status
     *
     * @param int $status
     *
     * @return AmpNotaFiscal
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set chaveNfe
     *
     * @param string $chaveNfe
     *
     * @return AmpNotaFiscal
     */
    public function setChaveNfe($chaveNfe)
    {
        $this->chaveNfe = $chaveNfe;

        return $this;
    }

    /**
     * Get chaveNfe
     *
     * @return string
     */
    public function getChaveNfe()
    {
        return $this->chaveNfe;
    }

    /**
     * Set protocolo
     *
     * @param string $protocolo
     *
     * @return AmpNotaFiscal
     */
    public function setProtocolo($protocolo)
    {
        $this->protocolo = $protocolo;

        return $this;
    }

    /**
     * Get protocolo
     *
     * @return string
     */
    public function getProtocolo()
    {
        return $this->protocolo;
    }

    /**
     * Set observacao
     *
     * @param string $observacao
     *
     * @return AmpNotaFiscal
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
     * Set dataEntrega
     *
     * @param \DateTime $dataEntrega
     *
     * @return AmpNotaFiscal
     */
    public function setDataEntrega($dataEntrega)
    {
        $this->dataEntrega = $dataEntrega;

        return $this;
    }

    /**
     * Get dataEntrega
     *
     * @return \DateTime
     */
    public function getDataEntrega()
    {
        return $this->dataEntrega;
    }

    /**
     * Set freteValor
     *
     * @param string $freteValor
     *
     * @return AmpNotaFiscal
     */
    public function setFreteValor($freteValor)
    {
        $this->freteValor = $freteValor;

        return $this;
    }

    /**
     * Get freteValor
     *
     * @return string
     */
    public function getFreteValor()
    {
        return $this->freteValor;
    }

    /**
     * Set seguroValor
     *
     * @param string $seguroValor
     *
     * @return AmpNotaFiscal
     */
    public function setSeguroValor($seguroValor)
    {
        $this->seguroValor = $seguroValor;

        return $this;
    }

    /**
     * Get seguroValor
     *
     * @return string
     */
    public function getSeguroValor()
    {
        return $this->seguroValor;
    }

    /**
     * Set codigoLocalDestino
     *
     * @param string $codigoLocalDestino
     *
     * @return AmpNotaFiscal
     */
    public function setCodigoLocalDestino($codigoLocalDestino)
    {
        $this->codigoLocalDestino = $codigoLocalDestino;

        return $this;
    }

    /**
     * Get codigoLocalDestino
     *
     * @return string
     */
    public function getCodigoLocalDestino()
    {
        return $this->codigoLocalDestino;
    }

    /**
     * Set motivo
     *
     * @param string $motivo
     *
     * @return AmpNotaFiscal
     */
    public function setMotivo($motivo)
    {
        $this->motivo = $motivo;

        return $this;
    }

    /**
     * Get motivo
     *
     * @return string
     */
    public function getMotivo()
    {
        return $this->motivo;
    }

    /**
     * Set pesoLiquido
     *
     * @param string $pesoLiquido
     *
     * @return AmpNotaFiscal
     */
    public function setPesoLiquido($pesoLiquido)
    {
        $this->pesoLiquido = $pesoLiquido;

        return $this;
    }

    /**
     * Get pesoLiquido
     *
     * @return string
     */
    public function getPesoLiquido()
    {
        return $this->pesoLiquido;
    }

    /**
     * Set pesoBruto
     *
     * @param string $pesoBruto
     *
     * @return AmpNotaFiscal
     */
    public function setPesoBruto($pesoBruto)
    {
        $this->pesoBruto = $pesoBruto;

        return $this;
    }

    /**
     * Get pesoBruto
     *
     * @return string
     */
    public function getPesoBruto()
    {
        return $this->pesoBruto;
    }

    /**
     * Set volume
     *
     * @param int $volume
     *
     * @return AmpNotaFiscal
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Get volume
     *
     * @return int
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Set placaVeiculo
     *
     * @param string $placaVeiculo
     *
     * @return AmpNotaFiscal
     */
    public function setPlacaVeiculo($placaVeiculo)
    {
        $this->placaVeiculo = $placaVeiculo;

        return $this;
    }

    /**
     * Get placaVeiculo
     *
     * @return string
     */
    public function getPlacaVeiculo()
    {
        return $this->placaVeiculo;
    }

    /**
     * Set cpfMotorista
     *
     * @param string $cpfMotorista
     *
     * @return AmpNotaFiscal
     */
    public function setCpfMotorista($cpfMotorista)
    {
        $this->cpfMotorista = $cpfMotorista;

        return $this;
    }

    /**
     * Get cpfMotorista
     *
     * @return string
     */
    public function getCpfMotorista()
    {
        return $this->cpfMotorista;
    }

    /**
     * Set nomeMotorista
     *
     * @param string $nomeMotorista
     *
     * @return AmpNotaFiscal
     */
    public function setNomeMotorista($nomeMotorista)
    {
        $this->nomeMotorista = $nomeMotorista;

        return $this;
    }

    /**
     * Get nomeMotorista
     *
     * @return string
     */
    public function getNomeMotorista()
    {
        return $this->nomeMotorista;
    }

    /**
     * Set dataAtualizacaoSefaz
     *
     * @param \DateTime $dataAtualizacaoSefaz
     *
     * @return AmpNotaFiscal
     */
    public function setDataAtualizacaoSefaz($dataAtualizacaoSefaz)
    {
        $this->dataAtualizacaoSefaz = $dataAtualizacaoSefaz;

        return $this;
    }

    /**
     * Get dataAtualizacaoSefaz
     *
     * @return \DateTime
     */
    public function getDataAtualizacaoSefaz()
    {
        return $this->dataAtualizacaoSefaz;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpNotaFiscal
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
     * @return AmpNotaFiscal
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
     * Set dataCriacao
     *
     * @param \DateTime $dataCriacao
     *
     * @return AmpNotaFiscal
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
     * Set dataUltimaAlteracao
     *
     * @param \DateTime $dataUltimaAlteracao
     *
     * @return AmpNotaFiscal
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
     * Set idEntidade
     *
     * @param \AmpEntidade $idEntidade
     *
     * @return AmpNotaFiscal
     */
    public function setIdEntidade(\AmpEntidade $idEntidade = null)
    {
        $this->idEntidade = $idEntidade;

        return $this;
    }

    /**
     * Get idEntidade
     *
     * @return \AmpEntidade
     */
    public function getIdEntidade()
    {
        return $this->idEntidade;
    }

    /**
     * Set idRepresentanteDireto
     *
     * @param \AmpRepresentante $idRepresentanteDireto
     *
     * @return AmpNotaFiscal
     */
    public function setIdRepresentanteDireto(\AmpRepresentante $idRepresentanteDireto = null)
    {
        $this->idRepresentanteDireto = $idRepresentanteDireto;

        return $this;
    }

    /**
     * Get idRepresentanteDireto
     *
     * @return \AmpRepresentante
     */
    public function getIdRepresentanteDireto()
    {
        return $this->idRepresentanteDireto;
    }

    /**
     * Set idRepresentanteIndireto
     *
     * @param \AmpRepresentante $idRepresentanteIndireto
     *
     * @return AmpNotaFiscal
     */
    public function setIdRepresentanteIndireto(\AmpRepresentante $idRepresentanteIndireto = null)
    {
        $this->idRepresentanteIndireto = $idRepresentanteIndireto;

        return $this;
    }

    /**
     * Get idRepresentanteIndireto
     *
     * @return \AmpRepresentante
     */
    public function getIdRepresentanteIndireto()
    {
        return $this->idRepresentanteIndireto;
    }

    /**
     * Set idVencimento
     *
     * @param \AmpVencimento $idVencimento
     *
     * @return AmpNotaFiscal
     */
    public function setIdVencimento(\AmpVencimento $idVencimento = null)
    {
        $this->idVencimento = $idVencimento;

        return $this;
    }

    /**
     * Get idVencimento
     *
     * @return \AmpVencimento
     */
    public function getIdVencimento()
    {
        return $this->idVencimento;
    }

    /**
     * Set idFormaPagamento
     *
     * @param \AmpFormaPagamento $idFormaPagamento
     *
     * @return AmpNotaFiscal
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
     * Set idMacroOperacao
     *
     * @param \AmpMacroOperacao $idMacroOperacao
     *
     * @return AmpNotaFiscal
     */
    public function setIdMacroOperacao(\AmpMacroOperacao $idMacroOperacao = null)
    {
        $this->idMacroOperacao = $idMacroOperacao;

        return $this;
    }

    /**
     * Get idMacroOperacao
     *
     * @return \AmpMacroOperacao
     */
    public function getIdMacroOperacao()
    {
        return $this->idMacroOperacao;
    }

    /**
     * Set idOrdemSeparacao
     *
     * @param \AmpOrdemSeparacao $idOrdemSeparacao
     *
     * @return AmpNotaFiscal
     */
    public function setIdOrdemSeparacao(\AmpOrdemSeparacao $idOrdemSeparacao = null)
    {
        $this->idOrdemSeparacao = $idOrdemSeparacao;

        return $this;
    }

    /**
     * Get idOrdemSeparacao
     *
     * @return \AmpOrdemSeparacao
     */
    public function getIdOrdemSeparacao()
    {
        return $this->idOrdemSeparacao;
    }

    /**
     * Set idSenf
     *
     * @param \AmpSenf $idSenf
     *
     * @return AmpNotaFiscal
     */
    public function setIdSenf(\AmpSenf $idSenf = null)
    {
        $this->idSenf = $idSenf;

        return $this;
    }

    /**
     * Get idSenf
     *
     * @return \AmpSenf
     */
    public function getIdSenf()
    {
        return $this->idSenf;
    }

    /**
     * Set idTransportadora
     *
     * @param \AmpEntidade $idTransportadora
     *
     * @return AmpNotaFiscal
     */
    public function setIdTransportadora(\AmpEntidade $idTransportadora = null)
    {
        $this->idTransportadora = $idTransportadora;

        return $this;
    }

    /**
     * Get idTransportadora
     *
     * @return \AmpEntidade
     */
    public function getIdTransportadora()
    {
        return $this->idTransportadora;
    }

    /**
     * Add idTitulo
     *
     * @param \AmpTitulo $idTitulo
     *
     * @return AmpNotaFiscal
     */
    public function addIdTitulo(\AmpTitulo $idTitulo)
    {
        $this->idTitulo[] = $idTitulo;

        return $this;
    }

    /**
     * Remove idTitulo
     *
     * @param \AmpTitulo $idTitulo
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdTitulo(\AmpTitulo $idTitulo)
    {
        return $this->idTitulo->removeElement($idTitulo);
    }

    /**
     * Get idTitulo
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdTitulo()
    {
        return $this->idTitulo;
    }
}

