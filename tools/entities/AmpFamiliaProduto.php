<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpFamiliaProduto
 *
 * @ORM\Table(name="amp_familia_produto", uniqueConstraints={@ORM\UniqueConstraint(name="descricao_UNIQUE", columns={"descricao", "id_tipo_familia"})}, indexes={@ORM\Index(name="fk_amp_familia_produto_amp_tipo_familia1_idx", columns={"id_tipo_familia"})})
 * @ORM\Entity
 */
class AmpFamiliaProduto
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_familia_produto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFamiliaProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=50, nullable=false)
     */
    private $descricao;

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
     * @var \AmpTipoFamilia
     *
     * @ORM\ManyToOne(targetEntity="AmpTipoFamilia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_familia", referencedColumnName="id_tipo_familia")
     * })
     */
    private $idTipoFamilia;


    /**
     * Get idFamiliaProduto
     *
     * @return int
     */
    public function getIdFamiliaProduto()
    {
        return $this->idFamiliaProduto;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return AmpFamiliaProduto
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set dataCriacao
     *
     * @param \DateTime $dataCriacao
     *
     * @return AmpFamiliaProduto
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
     * @return AmpFamiliaProduto
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
     * @return AmpFamiliaProduto
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
     * @return AmpFamiliaProduto
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
     * Set idTipoFamilia
     *
     * @param \AmpTipoFamilia $idTipoFamilia
     *
     * @return AmpFamiliaProduto
     */
    public function setIdTipoFamilia(\AmpTipoFamilia $idTipoFamilia = null)
    {
        $this->idTipoFamilia = $idTipoFamilia;

        return $this;
    }

    /**
     * Get idTipoFamilia
     *
     * @return \AmpTipoFamilia
     */
    public function getIdTipoFamilia()
    {
        return $this->idTipoFamilia;
    }
}

