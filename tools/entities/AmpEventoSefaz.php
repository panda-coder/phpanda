<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpEventoSefaz
 *
 * @ORM\Table(name="amp_evento_sefaz", uniqueConstraints={@ORM\UniqueConstraint(name="uq_evento", columns={"chave", "tipo_evento"})}, indexes={@ORM\Index(name="idx_evento_sefaz", columns={"nsu"}), @ORM\Index(name="idx_tipo_evento", columns={"tipo_evento"}), @ORM\Index(name="idx_ultnsu", columns={"ultnsu"})})
 * @ORM\Entity
 */
class AmpEventoSefaz
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_evento_sefaz", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEventoSefaz;

    /**
     * @var int
     *
     * @ORM\Column(name="nsu", type="integer", nullable=false)
     */
    private $nsu;

    /**
     * @var int
     *
     * @ORM\Column(name="ultnsu", type="integer", nullable=false)
     */
    private $ultnsu;

    /**
     * @var int
     *
     * @ORM\Column(name="tipo_evento", type="integer", nullable=false)
     */
    private $tipoEvento;

    /**
     * @var string
     *
     * @ORM\Column(name="erro", type="string", length=300, nullable=true)
     */
    private $erro;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_orgao", type="string", length=50, nullable=false)
     */
    private $codigoOrgao;

    /**
     * @var string
     *
     * @ORM\Column(name="cnpj", type="string", length=45, nullable=false)
     */
    private $cnpj;

    /**
     * @var string
     *
     * @ORM\Column(name="chave", type="string", length=45, nullable=false)
     */
    private $chave;

    /**
     * @var string
     *
     * @ORM\Column(name="dhevento", type="string", length=45, nullable=false)
     */
    private $dhevento;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_evento", type="string", length=45, nullable=false)
     */
    private $codigoEvento;

    /**
     * @var string
     *
     * @ORM\Column(name="n_seq_evento", type="string", length=45, nullable=false)
     */
    private $nSeqEvento;

    /**
     * @var string
     *
     * @ORM\Column(name="xnome", type="string", length=45, nullable=true)
     */
    private $xnome;

    /**
     * @var string
     *
     * @ORM\Column(name="xevento", type="string", length=45, nullable=false)
     */
    private $xevento;

    /**
     * @var string
     *
     * @ORM\Column(name="dhrecbto", type="string", length=45, nullable=false)
     */
    private $dhrecbto;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_protocolo", type="string", length=45, nullable=false)
     */
    private $numeroProtocolo;

    /**
     * @var string
     *
     * @ORM\Column(name="download_nfe", type="string", length=1, nullable=false)
     */
    private $downloadNfe;

    /**
     * @var string
     *
     * @ORM\Column(name="xml_nota", type="text", nullable=false)
     */
    private $xmlNota;

    /**
     * @var string
     *
     * @ORM\Column(name="importado", type="string", length=1, nullable=false)
     */
    private $importado;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_manifesto", type="string", length=45, nullable=false)
     */
    private $codigoManifesto;

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
     * Get idEventoSefaz
     *
     * @return int
     */
    public function getIdEventoSefaz()
    {
        return $this->idEventoSefaz;
    }

    /**
     * Set nsu
     *
     * @param int $nsu
     *
     * @return AmpEventoSefaz
     */
    public function setNsu($nsu)
    {
        $this->nsu = $nsu;

        return $this;
    }

    /**
     * Get nsu
     *
     * @return int
     */
    public function getNsu()
    {
        return $this->nsu;
    }

    /**
     * Set ultnsu
     *
     * @param int $ultnsu
     *
     * @return AmpEventoSefaz
     */
    public function setUltnsu($ultnsu)
    {
        $this->ultnsu = $ultnsu;

        return $this;
    }

    /**
     * Get ultnsu
     *
     * @return int
     */
    public function getUltnsu()
    {
        return $this->ultnsu;
    }

    /**
     * Set tipoEvento
     *
     * @param int $tipoEvento
     *
     * @return AmpEventoSefaz
     */
    public function setTipoEvento($tipoEvento)
    {
        $this->tipoEvento = $tipoEvento;

        return $this;
    }

    /**
     * Get tipoEvento
     *
     * @return int
     */
    public function getTipoEvento()
    {
        return $this->tipoEvento;
    }

    /**
     * Set erro
     *
     * @param string $erro
     *
     * @return AmpEventoSefaz
     */
    public function setErro($erro)
    {
        $this->erro = $erro;

        return $this;
    }

    /**
     * Get erro
     *
     * @return string
     */
    public function getErro()
    {
        return $this->erro;
    }

    /**
     * Set codigoOrgao
     *
     * @param string $codigoOrgao
     *
     * @return AmpEventoSefaz
     */
    public function setCodigoOrgao($codigoOrgao)
    {
        $this->codigoOrgao = $codigoOrgao;

        return $this;
    }

    /**
     * Get codigoOrgao
     *
     * @return string
     */
    public function getCodigoOrgao()
    {
        return $this->codigoOrgao;
    }

    /**
     * Set cnpj
     *
     * @param string $cnpj
     *
     * @return AmpEventoSefaz
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    /**
     * Get cnpj
     *
     * @return string
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * Set chave
     *
     * @param string $chave
     *
     * @return AmpEventoSefaz
     */
    public function setChave($chave)
    {
        $this->chave = $chave;

        return $this;
    }

    /**
     * Get chave
     *
     * @return string
     */
    public function getChave()
    {
        return $this->chave;
    }

    /**
     * Set dhevento
     *
     * @param string $dhevento
     *
     * @return AmpEventoSefaz
     */
    public function setDhevento($dhevento)
    {
        $this->dhevento = $dhevento;

        return $this;
    }

    /**
     * Get dhevento
     *
     * @return string
     */
    public function getDhevento()
    {
        return $this->dhevento;
    }

    /**
     * Set codigoEvento
     *
     * @param string $codigoEvento
     *
     * @return AmpEventoSefaz
     */
    public function setCodigoEvento($codigoEvento)
    {
        $this->codigoEvento = $codigoEvento;

        return $this;
    }

    /**
     * Get codigoEvento
     *
     * @return string
     */
    public function getCodigoEvento()
    {
        return $this->codigoEvento;
    }

    /**
     * Set nSeqEvento
     *
     * @param string $nSeqEvento
     *
     * @return AmpEventoSefaz
     */
    public function setNSeqEvento($nSeqEvento)
    {
        $this->nSeqEvento = $nSeqEvento;

        return $this;
    }

    /**
     * Get nSeqEvento
     *
     * @return string
     */
    public function getNSeqEvento()
    {
        return $this->nSeqEvento;
    }

    /**
     * Set xnome
     *
     * @param string $xnome
     *
     * @return AmpEventoSefaz
     */
    public function setXnome($xnome)
    {
        $this->xnome = $xnome;

        return $this;
    }

    /**
     * Get xnome
     *
     * @return string
     */
    public function getXnome()
    {
        return $this->xnome;
    }

    /**
     * Set xevento
     *
     * @param string $xevento
     *
     * @return AmpEventoSefaz
     */
    public function setXevento($xevento)
    {
        $this->xevento = $xevento;

        return $this;
    }

    /**
     * Get xevento
     *
     * @return string
     */
    public function getXevento()
    {
        return $this->xevento;
    }

    /**
     * Set dhrecbto
     *
     * @param string $dhrecbto
     *
     * @return AmpEventoSefaz
     */
    public function setDhrecbto($dhrecbto)
    {
        $this->dhrecbto = $dhrecbto;

        return $this;
    }

    /**
     * Get dhrecbto
     *
     * @return string
     */
    public function getDhrecbto()
    {
        return $this->dhrecbto;
    }

    /**
     * Set numeroProtocolo
     *
     * @param string $numeroProtocolo
     *
     * @return AmpEventoSefaz
     */
    public function setNumeroProtocolo($numeroProtocolo)
    {
        $this->numeroProtocolo = $numeroProtocolo;

        return $this;
    }

    /**
     * Get numeroProtocolo
     *
     * @return string
     */
    public function getNumeroProtocolo()
    {
        return $this->numeroProtocolo;
    }

    /**
     * Set downloadNfe
     *
     * @param string $downloadNfe
     *
     * @return AmpEventoSefaz
     */
    public function setDownloadNfe($downloadNfe)
    {
        $this->downloadNfe = $downloadNfe;

        return $this;
    }

    /**
     * Get downloadNfe
     *
     * @return string
     */
    public function getDownloadNfe()
    {
        return $this->downloadNfe;
    }

    /**
     * Set xmlNota
     *
     * @param string $xmlNota
     *
     * @return AmpEventoSefaz
     */
    public function setXmlNota($xmlNota)
    {
        $this->xmlNota = $xmlNota;

        return $this;
    }

    /**
     * Get xmlNota
     *
     * @return string
     */
    public function getXmlNota()
    {
        return $this->xmlNota;
    }

    /**
     * Set importado
     *
     * @param string $importado
     *
     * @return AmpEventoSefaz
     */
    public function setImportado($importado)
    {
        $this->importado = $importado;

        return $this;
    }

    /**
     * Get importado
     *
     * @return string
     */
    public function getImportado()
    {
        return $this->importado;
    }

    /**
     * Set codigoManifesto
     *
     * @param string $codigoManifesto
     *
     * @return AmpEventoSefaz
     */
    public function setCodigoManifesto($codigoManifesto)
    {
        $this->codigoManifesto = $codigoManifesto;

        return $this;
    }

    /**
     * Get codigoManifesto
     *
     * @return string
     */
    public function getCodigoManifesto()
    {
        return $this->codigoManifesto;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpEventoSefaz
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
     * @return AmpEventoSefaz
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
     * @return AmpEventoSefaz
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
     * @return AmpEventoSefaz
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
}

