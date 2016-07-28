<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpOrdemSeparacao
 *
 * @ORM\Table(name="amp_ordem_separacao", indexes={@ORM\Index(name="fk_amp_ordem_separacao_1_idx", columns={"id_expedidor"}), @ORM\Index(name="fk_amp_ordem_separacao_2_idx", columns={"id_conferente"}), @ORM\Index(name="fk_amp_ordem_separacao_3_idx", columns={"id_separador"}), @ORM\Index(name="fk_amp_ordem_separacao_4_idx", columns={"id_transportadora"}), @ORM\Index(name="idx_cpf_separacao", columns={"cpf_motorista"}), @ORM\Index(name="fk_amp_ordem_separacao_5_idx", columns={"id_romaneio_despacho"}), @ORM\Index(name="fk_amp_ordem_separacao_6_idx", columns={"id_nota_fiscal"}), @ORM\Index(name="fk_amp_ordem_separacao_7_idx", columns={"id_entidade"}), @ORM\Index(name="fk_id_frete_tomador_idx", columns={"id_frete_tomador"})})
 * @ORM\Entity
 */
class AmpOrdemSeparacao
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_ordem_separacao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrdemSeparacao;

    /**
     * @var int
     *
     * @ORM\Column(name="id_volume_especie", type="integer", nullable=true)
     */
    private $idVolumeEspecie;

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
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var int
     *
     * @ORM\Column(name="volume", type="integer", nullable=false)
     */
    private $volume = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="peso_liquido", type="decimal", precision=13, scale=4, nullable=true)
     */
    private $pesoLiquido;

    /**
     * @var string
     *
     * @ORM\Column(name="peso_bruto", type="decimal", precision=13, scale=4, nullable=true)
     */
    private $pesoBruto;

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
     * @var \AmpUsuario
     *
     * @ORM\ManyToOne(targetEntity="AmpUsuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_expedidor", referencedColumnName="id_usuario")
     * })
     */
    private $idExpedidor;

    /**
     * @var \AmpUsuario
     *
     * @ORM\ManyToOne(targetEntity="AmpUsuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_conferente", referencedColumnName="id_usuario")
     * })
     */
    private $idConferente;

    /**
     * @var \AmpUsuario
     *
     * @ORM\ManyToOne(targetEntity="AmpUsuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_separador", referencedColumnName="id_usuario")
     * })
     */
    private $idSeparador;

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
     * @var \AmpRomaneioDespacho
     *
     * @ORM\ManyToOne(targetEntity="AmpRomaneioDespacho")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_romaneio_despacho", referencedColumnName="id_romaneio_despacho")
     * })
     */
    private $idRomaneioDespacho;

    /**
     * @var \AmpNotaFiscal
     *
     * @ORM\ManyToOne(targetEntity="AmpNotaFiscal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_nota_fiscal", referencedColumnName="id_nota_fiscal")
     * })
     */
    private $idNotaFiscal;

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
     * @var \AmpFreteTomador
     *
     * @ORM\ManyToOne(targetEntity="AmpFreteTomador")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_frete_tomador", referencedColumnName="id_frete_tomador")
     * })
     */
    private $idFreteTomador;


    /**
     * Get idOrdemSeparacao
     *
     * @return int
     */
    public function getIdOrdemSeparacao()
    {
        return $this->idOrdemSeparacao;
    }

    /**
     * Set idVolumeEspecie
     *
     * @param int $idVolumeEspecie
     *
     * @return AmpOrdemSeparacao
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
     * Set placaVeiculo
     *
     * @param string $placaVeiculo
     *
     * @return AmpOrdemSeparacao
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
     * @return AmpOrdemSeparacao
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
     * @return AmpOrdemSeparacao
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
     * Set status
     *
     * @param int $status
     *
     * @return AmpOrdemSeparacao
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
     * Set volume
     *
     * @param int $volume
     *
     * @return AmpOrdemSeparacao
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
     * Set pesoLiquido
     *
     * @param string $pesoLiquido
     *
     * @return AmpOrdemSeparacao
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
     * @return AmpOrdemSeparacao
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
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpOrdemSeparacao
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
     * @return AmpOrdemSeparacao
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
     * @return AmpOrdemSeparacao
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
     * @return AmpOrdemSeparacao
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
     * Set idExpedidor
     *
     * @param \AmpUsuario $idExpedidor
     *
     * @return AmpOrdemSeparacao
     */
    public function setIdExpedidor(\AmpUsuario $idExpedidor = null)
    {
        $this->idExpedidor = $idExpedidor;

        return $this;
    }

    /**
     * Get idExpedidor
     *
     * @return \AmpUsuario
     */
    public function getIdExpedidor()
    {
        return $this->idExpedidor;
    }

    /**
     * Set idConferente
     *
     * @param \AmpUsuario $idConferente
     *
     * @return AmpOrdemSeparacao
     */
    public function setIdConferente(\AmpUsuario $idConferente = null)
    {
        $this->idConferente = $idConferente;

        return $this;
    }

    /**
     * Get idConferente
     *
     * @return \AmpUsuario
     */
    public function getIdConferente()
    {
        return $this->idConferente;
    }

    /**
     * Set idSeparador
     *
     * @param \AmpUsuario $idSeparador
     *
     * @return AmpOrdemSeparacao
     */
    public function setIdSeparador(\AmpUsuario $idSeparador = null)
    {
        $this->idSeparador = $idSeparador;

        return $this;
    }

    /**
     * Get idSeparador
     *
     * @return \AmpUsuario
     */
    public function getIdSeparador()
    {
        return $this->idSeparador;
    }

    /**
     * Set idTransportadora
     *
     * @param \AmpEntidade $idTransportadora
     *
     * @return AmpOrdemSeparacao
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
     * Set idRomaneioDespacho
     *
     * @param \AmpRomaneioDespacho $idRomaneioDespacho
     *
     * @return AmpOrdemSeparacao
     */
    public function setIdRomaneioDespacho(\AmpRomaneioDespacho $idRomaneioDespacho = null)
    {
        $this->idRomaneioDespacho = $idRomaneioDespacho;

        return $this;
    }

    /**
     * Get idRomaneioDespacho
     *
     * @return \AmpRomaneioDespacho
     */
    public function getIdRomaneioDespacho()
    {
        return $this->idRomaneioDespacho;
    }

    /**
     * Set idNotaFiscal
     *
     * @param \AmpNotaFiscal $idNotaFiscal
     *
     * @return AmpOrdemSeparacao
     */
    public function setIdNotaFiscal(\AmpNotaFiscal $idNotaFiscal = null)
    {
        $this->idNotaFiscal = $idNotaFiscal;

        return $this;
    }

    /**
     * Get idNotaFiscal
     *
     * @return \AmpNotaFiscal
     */
    public function getIdNotaFiscal()
    {
        return $this->idNotaFiscal;
    }

    /**
     * Set idEntidade
     *
     * @param \AmpEntidade $idEntidade
     *
     * @return AmpOrdemSeparacao
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
     * Set idFreteTomador
     *
     * @param \AmpFreteTomador $idFreteTomador
     *
     * @return AmpOrdemSeparacao
     */
    public function setIdFreteTomador(\AmpFreteTomador $idFreteTomador = null)
    {
        $this->idFreteTomador = $idFreteTomador;

        return $this;
    }

    /**
     * Get idFreteTomador
     *
     * @return \AmpFreteTomador
     */
    public function getIdFreteTomador()
    {
        return $this->idFreteTomador;
    }
}

