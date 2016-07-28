<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpContato
 *
 * @ORM\Table(name="amp_contato")
 * @ORM\Entity
 */
class AmpContato
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_contato", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idContato;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=100, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=150, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="telefone", type="string", length=30, nullable=true)
     */
    private $telefone;

    /**
     * @var int
     *
     * @ORM\Column(name="ramal_telefone", type="integer", nullable=true)
     */
    private $ramalTelefone;

    /**
     * @var string
     *
     * @ORM\Column(name="celular", type="string", length=30, nullable=true)
     */
    private $celular;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=30, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="envia_danfe", type="string", length=1, nullable=true)
     */
    private $enviaDanfe = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="envia_xml", type="string", length=1, nullable=true)
     */
    private $enviaXml;

    /**
     * @var int
     *
     * @ORM\Column(name="tipo", type="integer", nullable=false)
     */
    private $tipo = '1';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_criacao", type="datetime", nullable=true)
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
     * @ORM\Column(name="data_ultima_alteracao", type="datetime", nullable=true)
     */
    private $dataUltimaAlteracao;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AmpEntidade", mappedBy="idContato")
     */
    private $idEntidade;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idEntidade = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idContato
     *
     * @return int
     */
    public function getIdContato()
    {
        return $this->idContato;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return AmpContato
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return AmpContato
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
     * Set telefone
     *
     * @param string $telefone
     *
     * @return AmpContato
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
     * Set ramalTelefone
     *
     * @param int $ramalTelefone
     *
     * @return AmpContato
     */
    public function setRamalTelefone($ramalTelefone)
    {
        $this->ramalTelefone = $ramalTelefone;

        return $this;
    }

    /**
     * Get ramalTelefone
     *
     * @return int
     */
    public function getRamalTelefone()
    {
        return $this->ramalTelefone;
    }

    /**
     * Set celular
     *
     * @param string $celular
     *
     * @return AmpContato
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;

        return $this;
    }

    /**
     * Get celular
     *
     * @return string
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return AmpContato
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set enviaDanfe
     *
     * @param string $enviaDanfe
     *
     * @return AmpContato
     */
    public function setEnviaDanfe($enviaDanfe)
    {
        $this->enviaDanfe = $enviaDanfe;

        return $this;
    }

    /**
     * Get enviaDanfe
     *
     * @return string
     */
    public function getEnviaDanfe()
    {
        return $this->enviaDanfe;
    }

    /**
     * Set enviaXml
     *
     * @param string $enviaXml
     *
     * @return AmpContato
     */
    public function setEnviaXml($enviaXml)
    {
        $this->enviaXml = $enviaXml;

        return $this;
    }

    /**
     * Get enviaXml
     *
     * @return string
     */
    public function getEnviaXml()
    {
        return $this->enviaXml;
    }

    /**
     * Set tipo
     *
     * @param int $tipo
     *
     * @return AmpContato
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
     * Set dataCriacao
     *
     * @param \DateTime $dataCriacao
     *
     * @return AmpContato
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
     * @return AmpContato
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
     * @return AmpContato
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
     * @return AmpContato
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
     * Add idEntidade
     *
     * @param \AmpEntidade $idEntidade
     *
     * @return AmpContato
     */
    public function addIdEntidade(\AmpEntidade $idEntidade)
    {
        $this->idEntidade[] = $idEntidade;

        return $this;
    }

    /**
     * Remove idEntidade
     *
     * @param \AmpEntidade $idEntidade
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeIdEntidade(\AmpEntidade $idEntidade)
    {
        return $this->idEntidade->removeElement($idEntidade);
    }

    /**
     * Get idEntidade
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdEntidade()
    {
        return $this->idEntidade;
    }
}

