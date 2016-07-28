<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpCentroTrabalhoLinha
 *
 * @ORM\Table(name="amp_centro_trabalho_linha", uniqueConstraints={@ORM\UniqueConstraint(name="uq_centro_trabalho_linha_descricao", columns={"id_centro_trabalho", "descricao"}), @ORM\UniqueConstraint(name="uq_centro_trabalho_linha_deposito", columns={"id_deposito"})}, indexes={@ORM\Index(name="fk_amp_centro_trabalho_linha_1_idx", columns={"id_centro_trabalho"}), @ORM\Index(name="fk_amp_centro_trabalho_linha_2_idx", columns={"id_deposito"})})
 * @ORM\Entity
 */
class AmpCentroTrabalhoLinha
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_centro_trabalho_linha", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCentroTrabalhoLinha;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=50, nullable=false)
     */
    private $descricao;

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
     * @ORM\Column(name="data_ultima_alteracao", type="datetime", nullable=false)
     */
    private $dataUltimaAlteracao;

    /**
     * @var \AmpCentroTrabalho
     *
     * @ORM\ManyToOne(targetEntity="AmpCentroTrabalho")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_centro_trabalho", referencedColumnName="id_centro_trabalho")
     * })
     */
    private $idCentroTrabalho;

    /**
     * @var \AmpDeposito
     *
     * @ORM\ManyToOne(targetEntity="AmpDeposito")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_deposito", referencedColumnName="id_deposito")
     * })
     */
    private $idDeposito;


    /**
     * Get idCentroTrabalhoLinha
     *
     * @return int
     */
    public function getIdCentroTrabalhoLinha()
    {
        return $this->idCentroTrabalhoLinha;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return AmpCentroTrabalhoLinha
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
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpCentroTrabalhoLinha
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
     * @return AmpCentroTrabalhoLinha
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
     * @return AmpCentroTrabalhoLinha
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
     * @return AmpCentroTrabalhoLinha
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
     * Set idCentroTrabalho
     *
     * @param \AmpCentroTrabalho $idCentroTrabalho
     *
     * @return AmpCentroTrabalhoLinha
     */
    public function setIdCentroTrabalho(\AmpCentroTrabalho $idCentroTrabalho = null)
    {
        $this->idCentroTrabalho = $idCentroTrabalho;

        return $this;
    }

    /**
     * Get idCentroTrabalho
     *
     * @return \AmpCentroTrabalho
     */
    public function getIdCentroTrabalho()
    {
        return $this->idCentroTrabalho;
    }

    /**
     * Set idDeposito
     *
     * @param \AmpDeposito $idDeposito
     *
     * @return AmpCentroTrabalhoLinha
     */
    public function setIdDeposito(\AmpDeposito $idDeposito = null)
    {
        $this->idDeposito = $idDeposito;

        return $this;
    }

    /**
     * Get idDeposito
     *
     * @return \AmpDeposito
     */
    public function getIdDeposito()
    {
        return $this->idDeposito;
    }
}

