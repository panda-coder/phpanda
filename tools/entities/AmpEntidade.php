<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpEntidade
 *
 * @ORM\Table(name="amp_entidade", uniqueConstraints={@ORM\UniqueConstraint(name="uq_entidade_cpfcnpj", columns={"cpfcnpj", "identidade_estrangeira"})}, indexes={@ORM\Index(name="fk_amp_entidade_amp_tipo_entidade1_idx", columns={"id_tipo_entidade"}), @ORM\Index(name="fk_amp_entidade_1_idx", columns={"id_regime_tributario"}), @ORM\Index(name="fk_segmento_idx", columns={"id_segmento"})})
 * @ORM\Entity
 */
class AmpEntidade
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_entidade", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEntidade;

    /**
     * @var string
     *
     * @ORM\Column(name="razao_social", type="string", length=150, nullable=false)
     */
    private $razaoSocial;

    /**
     * @var string
     *
     * @ORM\Column(name="fantasia", type="string", length=150, nullable=false)
     */
    private $fantasia;

    /**
     * @var string
     *
     * @ORM\Column(name="cpfcnpj", type="string", length=14, nullable=true)
     */
    private $cpfcnpj;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_pessoa", type="string", length=1, nullable=false)
     */
    private $tipoPessoa;

    /**
     * @var string
     *
     * @ORM\Column(name="rg", type="string", length=10, nullable=true)
     */
    private $rg;

    /**
     * @var string
     *
     * @ORM\Column(name="ie", type="string", length=20, nullable=true)
     */
    private $ie;

    /**
     * @var string
     *
     * @ORM\Column(name="identidade_estrangeira", type="string", length=45, nullable=true)
     */
    private $identidadeEstrangeira;

    /**
     * @var int
     *
     * @ORM\Column(name="situacao", type="integer", nullable=false)
     */
    private $situacao;

    /**
     * @var string
     *
     * @ORM\Column(name="dealer", type="string", length=15, nullable=true)
     */
    private $dealer;

    /**
     * @var string
     *
     * @ORM\Column(name="telefone", type="string", length=45, nullable=true)
     */
    private $telefone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=150, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="contribuinte_icms", type="string", length=1, nullable=false)
     */
    private $contribuinteIcms = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="suframa_inscricao", type="string", length=15, nullable=true)
     */
    private $suframaInscricao;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="text", nullable=true)
     */
    private $observacao;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao_nota", type="text", nullable=true)
     */
    private $observacaoNota;

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
     * @var \AmpRegimeTributario
     *
     * @ORM\ManyToOne(targetEntity="AmpRegimeTributario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_regime_tributario", referencedColumnName="id_regime_tributario")
     * })
     */
    private $idRegimeTributario;

    /**
     * @var \AmpTipoEntidade
     *
     * @ORM\ManyToOne(targetEntity="AmpTipoEntidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_entidade", referencedColumnName="id_tipo_entidade")
     * })
     */
    private $idTipoEntidade;

    /**
     * @var \AmpSegmento
     *
     * @ORM\ManyToOne(targetEntity="AmpSegmento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_segmento", referencedColumnName="id_segmento")
     * })
     */
    private $idSegmento;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AmpContato", inversedBy="idEntidade")
     * @ORM\JoinTable(name="amp_entidade_contato",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_entidade", referencedColumnName="id_entidade")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_contato", referencedColumnName="id_contato")
     *   }
     * )
     */
    private $idContato;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AmpRepresentante", inversedBy="idEntidade")
     * @ORM\JoinTable(name="amp_representante_entidade",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_entidade", referencedColumnName="id_entidade")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_representante", referencedColumnName="id_representante")
     *   }
     * )
     */
    private $idRepresentante;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AmpVendedor", mappedBy="idEntidade")
     */
    private $idVendedor;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idContato = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idRepresentante = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idVendedor = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idEntidade
     *
     * @return int
     */
    public function getIdEntidade()
    {
        return $this->idEntidade;
    }

    /**
     * Set razaoSocial
     *
     * @param string $razaoSocial
     *
     * @return AmpEntidade
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
     * Set fantasia
     *
     * @param string $fantasia
     *
     * @return AmpEntidade
     */
    public function setFantasia($fantasia)
    {
        $this->fantasia = $fantasia;

        return $this;
    }

    /**
     * Get fantasia
     *
     * @return string
     */
    public function getFantasia()
    {
        return $this->fantasia;
    }

    /**
     * Set cpfcnpj
     *
     * @param string $cpfcnpj
     *
     * @return AmpEntidade
     */
    public function setCpfcnpj($cpfcnpj)
    {
        $this->cpfcnpj = $cpfcnpj;

        return $this;
    }

    /**
     * Get cpfcnpj
     *
     * @return string
     */
    public function getCpfcnpj()
    {
        return $this->cpfcnpj;
    }

    /**
     * Set tipoPessoa
     *
     * @param string $tipoPessoa
     *
     * @return AmpEntidade
     */
    public function setTipoPessoa($tipoPessoa)
    {
        $this->tipoPessoa = $tipoPessoa;

        return $this;
    }

    /**
     * Get tipoPessoa
     *
     * @return string
     */
    public function getTipoPessoa()
    {
        return $this->tipoPessoa;
    }

    /**
     * Set rg
     *
     * @param string $rg
     *
     * @return AmpEntidade
     */
    public function setRg($rg)
    {
        $this->rg = $rg;

        return $this;
    }

    /**
     * Get rg
     *
     * @return string
     */
    public function getRg()
    {
        return $this->rg;
    }

    /**
     * Set ie
     *
     * @param string $ie
     *
     * @return AmpEntidade
     */
    public function setIe($ie)
    {
        $this->ie = $ie;

        return $this;
    }

    /**
     * Get ie
     *
     * @return string
     */
    public function getIe()
    {
        return $this->ie;
    }

    /**
     * Set identidadeEstrangeira
     *
     * @param string $identidadeEstrangeira
     *
     * @return AmpEntidade
     */
    public function setIdentidadeEstrangeira($identidadeEstrangeira)
    {
        $this->identidadeEstrangeira = $identidadeEstrangeira;

        return $this;
    }

    /**
     * Get identidadeEstrangeira
     *
     * @return string
     */
    public function getIdentidadeEstrangeira()
    {
        return $this->identidadeEstrangeira;
    }

    /**
     * Set situacao
     *
     * @param int $situacao
     *
     * @return AmpEntidade
     */
    public function setSituacao($situacao)
    {
        $this->situacao = $situacao;

        return $this;
    }

    /**
     * Get situacao
     *
     * @return int
     */
    public function getSituacao()
    {
        return $this->situacao;
    }

    /**
     * Set dealer
     *
     * @param string $dealer
     *
     * @return AmpEntidade
     */
    public function setDealer($dealer)
    {
        $this->dealer = $dealer;

        return $this;
    }

    /**
     * Get dealer
     *
     * @return string
     */
    public function getDealer()
    {
        return $this->dealer;
    }

    /**
     * Set telefone
     *
     * @param string $telefone
     *
     * @return AmpEntidade
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get telefone
     *
     * @return string
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return AmpEntidade
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set contribuinteIcms
     *
     * @param string $contribuinteIcms
     *
     * @return AmpEntidade
     */
    public function setContribuinteIcms($contribuinteIcms)
    {
        $this->contribuinteIcms = $contribuinteIcms;

        return $this;
    }

    /**
     * Get contribuinteIcms
     *
     * @return string
     */
    public function getContribuinteIcms()
    {
        return $this->contribuinteIcms;
    }

    /**
     * Set suframaInscricao
     *
     * @param string $suframaInscricao
     *
     * @return AmpEntidade
     */
    public function setSuframaInscricao($suframaInscricao)
    {
        $this->suframaInscricao = $suframaInscricao;

        return $this;
    }

    /**
     * Get suframaInscricao
     *
     * @return string
     */
    public function getSuframaInscricao()
    {
        return $this->suframaInscricao;
    }

    /**
     * Set observacao
     *
     * @param string $observacao
     *
     * @return AmpEntidade
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
     * @return AmpEntidade
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
     * Set dataCriacao
     *
     * @param \DateTime $dataCriacao
     *
     * @return AmpEntidade
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
     * @return AmpEntidade
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
     * @return AmpEntidade
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
     * @return AmpEntidade
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
     * Set idRegimeTributario
     *
     * @param \AmpRegimeTributario $idRegimeTributario
     *
     * @return AmpEntidade
     */
    public function setIdRegimeTributario(\AmpRegimeTributario $idRegimeTributario = null)
    {
        $this->idRegimeTributario = $idRegimeTributario;

        return $this;
    }

    /**
     * Get idRegimeTributario
     *
     * @return \AmpRegimeTributario
     */
    public function getIdRegimeTributario()
    {
        return $this->idRegimeTributario;
    }

    /**
     * Set idTipoEntidade
     *
     * @param \AmpTipoEntidade $idTipoEntidade
     *
     * @return AmpEntidade
     */
    public function setIdTipoEntidade(\AmpTipoEntidade $idTipoEntidade = null)
    {
        $this->idTipoEntidade = $idTipoEntidade;

        return $this;
    }

    /**
     * Get idTipoEntidade
     *
     * @return \AmpTipoEntidade
     */
    public function getIdTipoEntidade()
    {
        return $this->idTipoEntidade;
    }

    /**
     * Set idSegmento
     *
     * @param \AmpSegmento $idSegmento
     *
     * @return AmpEntidade
     */
    public function setIdSegmento(\AmpSegmento $idSegmento = null)
    {
        $this->idSegmento = $idSegmento;

        return $this;
    }

    /**
     * Get idSegmento
     *
     * @return \AmpSegmento
     */
    public function getIdSegmento()
    {
        return $this->idSegmento;
    }

    /**
     * Add idContato
     *
     * @param \AmpContato $idContato
     *
     * @return AmpEntidade
     */
    public function addIdContato(\AmpContato $idContato)
    {
        $this->idContato[] = $idContato;

        return $this;
    }

    /**
     * Remove idContato
     *
     * @param \AmpContato $idContato
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdContato(\AmpContato $idContato)
    {
        return $this->idContato->removeElement($idContato);
    }

    /**
     * Get idContato
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdContato()
    {
        return $this->idContato;
    }

    /**
     * Add idRepresentante
     *
     * @param \AmpRepresentante $idRepresentante
     *
     * @return AmpEntidade
     */
    public function addIdRepresentante(\AmpRepresentante $idRepresentante)
    {
        $this->idRepresentante[] = $idRepresentante;

        return $this;
    }

    /**
     * Remove idRepresentante
     *
     * @param \AmpRepresentante $idRepresentante
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdRepresentante(\AmpRepresentante $idRepresentante)
    {
        return $this->idRepresentante->removeElement($idRepresentante);
    }

    /**
     * Get idRepresentante
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdRepresentante()
    {
        return $this->idRepresentante;
    }

    /**
     * Add idVendedor
     *
     * @param \AmpVendedor $idVendedor
     *
     * @return AmpEntidade
     */
    public function addIdVendedor(\AmpVendedor $idVendedor)
    {
        $this->idVendedor[] = $idVendedor;

        return $this;
    }

    /**
     * Remove idVendedor
     *
     * @param \AmpVendedor $idVendedor
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdVendedor(\AmpVendedor $idVendedor)
    {
        return $this->idVendedor->removeElement($idVendedor);
    }

    /**
     * Get idVendedor
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdVendedor()
    {
        return $this->idVendedor;
    }
}

