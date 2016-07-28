<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpSenf
 *
 * @ORM\Table(name="amp_senf", indexes={@ORM\Index(name="fk_amp_senf_1_idx", columns={"id_entidade"}), @ORM\Index(name="fk_senf_4_idx", columns={"id_vencimento"}), @ORM\Index(name="fk_senf_idx", columns={"id_forma_pagamento"}), @ORM\Index(name="fk_amp_senf_7_idx", columns={"id_macro_operacao"}), @ORM\Index(name="fk_senf_8_idx", columns={"id_modulo"}), @ORM\Index(name="fk_amp_senf_2_idx", columns={"id_transportadora"})})
 * @ORM\Entity
 */
class AmpSenf
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_senf", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSenf;

    /**
     * @var int
     *
     * @ORM\Column(name="id_registro", type="integer", nullable=true)
     */
    private $idRegistro;

    /**
     * @var int
     *
     * @ORM\Column(name="id_frete_tomador", type="integer", nullable=true)
     */
    private $idFreteTomador;

    /**
     * @var int
     *
     * @ORM\Column(name="id_volume_especie", type="integer", nullable=true)
     */
    private $idVolumeEspecie;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="string", length=1000, nullable=true)
     */
    private $observacao;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao_nota", type="string", length=1000, nullable=true)
     */
    private $observacaoNota;

    /**
     * @var string
     *
     * @ORM\Column(name="frete_valor", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $freteValor;

    /**
     * @var string
     *
     * @ORM\Column(name="seguro_valor", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $seguroValor = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="peso_liquido", type="decimal", precision=13, scale=4, nullable=true)
     */
    private $pesoLiquido = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="peso_bruto", type="decimal", precision=13, scale=4, nullable=true)
     */
    private $pesoBruto = '0.0000';

    /**
     * @var int
     *
     * @ORM\Column(name="volume", type="integer", nullable=true)
     */
    private $volume = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="placa_veiculo", type="string", length=8, nullable=true)
     */
    private $placaVeiculo;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_motorista", type="string", length=45, nullable=true)
     */
    private $nomeMotorista;

    /**
     * @var string
     *
     * @ORM\Column(name="cpf_motorista", type="string", length=45, nullable=true)
     */
    private $cpfMotorista;

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
     * @var \AmpEntidade
     *
     * @ORM\ManyToOne(targetEntity="AmpEntidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_transportadora", referencedColumnName="id_entidade")
     * })
     */
    private $idTransportadora;

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
     * @var \AmpModulo
     *
     * @ORM\ManyToOne(targetEntity="AmpModulo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_modulo", referencedColumnName="id_modulo")
     * })
     */
    private $idModulo;


    /**
     * Get idSenf
     *
     * @return int
     */
    public function getIdSenf()
    {
        return $this->idSenf;
    }

    /**
     * Set idRegistro
     *
     * @param int $idRegistro
     *
     * @return AmpSenf
     */
    public function setIdRegistro($idRegistro)
    {
        $this->idRegistro = $idRegistro;

        return $this;
    }

    /**
     * Get idRegistro
     *
     * @return int
     */
    public function getIdRegistro()
    {
        return $this->idRegistro;
    }

    /**
     * Set idFreteTomador
     *
     * @param int $idFreteTomador
     *
     * @return AmpSenf
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
     * @return AmpSenf
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
     * Set status
     *
     * @param int $status
     *
     * @return AmpSenf
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
     * Set observacao
     *
     * @param string $observacao
     *
     * @return AmpSenf
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
     * Set observacaoNota
     *
     * @param string $observacaoNota
     *
     * @return AmpSenf
     */
    public function setObservacaoNota($observacaoNota)
    {
        $this->observacaoNota = $observacaoNota;

        return $this;
    }

    /**
     * Get observacaoNota
     *
     * @return string
     */
    public function getObservacaoNota()
    {
        return $this->observacaoNota;
    }

    /**
     * Set freteValor
     *
     * @param string $freteValor
     *
     * @return AmpSenf
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
     * @return AmpSenf
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
     * Set pesoLiquido
     *
     * @param string $pesoLiquido
     *
     * @return AmpSenf
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
     * @return AmpSenf
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
     * @return AmpSenf
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
     * @return AmpSenf
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
     * Set nomeMotorista
     *
     * @param string $nomeMotorista
     *
     * @return AmpSenf
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
     * Set cpfMotorista
     *
     * @param string $cpfMotorista
     *
     * @return AmpSenf
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
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpSenf
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
     * @return AmpSenf
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
     * @return AmpSenf
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
     * @return AmpSenf
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
     * @return AmpSenf
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
     * Set idTransportadora
     *
     * @param \AmpEntidade $idTransportadora
     *
     * @return AmpSenf
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
     * Set idMacroOperacao
     *
     * @param \AmpMacroOperacao $idMacroOperacao
     *
     * @return AmpSenf
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
     * Set idVencimento
     *
     * @param \AmpVencimento $idVencimento
     *
     * @return AmpSenf
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
     * @return AmpSenf
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
     * Set idModulo
     *
     * @param \AmpModulo $idModulo
     *
     * @return AmpSenf
     */
    public function setIdModulo(\AmpModulo $idModulo = null)
    {
        $this->idModulo = $idModulo;

        return $this;
    }

    /**
     * Get idModulo
     *
     * @return \AmpModulo
     */
    public function getIdModulo()
    {
        return $this->idModulo;
    }
}

