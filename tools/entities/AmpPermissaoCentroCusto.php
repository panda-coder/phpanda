<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpPermissaoCentroCusto
 *
 * @ORM\Table(name="amp_permissao_centro_custo", uniqueConstraints={@ORM\UniqueConstraint(name="uq_usuario_centro_custo", columns={"id_usuario", "id_centro_custo"})}, indexes={@ORM\Index(name="fk_centro_custo_idx", columns={"id_centro_custo"}), @ORM\Index(name="IDX_124723C3FCF8192D", columns={"id_usuario"})})
 * @ORM\Entity
 */
class AmpPermissaoCentroCusto
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_permissao_centro_custo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPermissaoCentroCusto;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_criacao", type="integer", nullable=false)
     */
    private $idUsuarioCriacao = '0';

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
     * @ORM\Column(name="data_ultima_alteracao", type="datetime", nullable=true)
     */
    private $dataUltimaAlteracao;

    /**
     * @var \AmpCentroCusto
     *
     * @ORM\ManyToOne(targetEntity="AmpCentroCusto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_centro_custo", referencedColumnName="id_centro_custo")
     * })
     */
    private $idCentroCusto;

    /**
     * @var \AmpUsuario
     *
     * @ORM\ManyToOne(targetEntity="AmpUsuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario", referencedColumnName="id_usuario")
     * })
     */
    private $idUsuario;


    /**
     * Get idPermissaoCentroCusto
     *
     * @return int
     */
    public function getIdPermissaoCentroCusto()
    {
        return $this->idPermissaoCentroCusto;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpPermissaoCentroCusto
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
     * @return AmpPermissaoCentroCusto
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
     * @return AmpPermissaoCentroCusto
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
     * @return AmpPermissaoCentroCusto
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
     * Set idCentroCusto
     *
     * @param \AmpCentroCusto $idCentroCusto
     *
     * @return AmpPermissaoCentroCusto
     */
    public function setIdCentroCusto(\AmpCentroCusto $idCentroCusto = null)
    {
        $this->idCentroCusto = $idCentroCusto;

        return $this;
    }

    /**
     * Get idCentroCusto
     *
     * @return \AmpCentroCusto
     */
    public function getIdCentroCusto()
    {
        return $this->idCentroCusto;
    }

    /**
     * Set idUsuario
     *
     * @param \AmpUsuario $idUsuario
     *
     * @return AmpPermissaoCentroCusto
     */
    public function setIdUsuario(\AmpUsuario $idUsuario = null)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * Get idUsuario
     *
     * @return \AmpUsuario
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }
}

