<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpInventarioKardex
 *
 * @ORM\Table(name="amp_inventario_kardex", indexes={@ORM\Index(name="fk_amp_inventario_kardex_1_idx", columns={"id_inventario"})})
 * @ORM\Entity
 */
class AmpInventarioKardex
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_inventario_kardex", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idInventarioKardex;

    /**
     * @var int
     *
     * @ORM\Column(name="num_contagem", type="integer", nullable=true)
     */
    private $numContagem;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=50, nullable=true)
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
     * @ORM\Column(name="data_criacao", type="datetime", nullable=true)
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
     * @var \AmpInventario
     *
     * @ORM\ManyToOne(targetEntity="AmpInventario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_inventario", referencedColumnName="id_inventario")
     * })
     */
    private $idInventario;


    /**
     * Get idInventarioKardex
     *
     * @return int
     */
    public function getIdInventarioKardex()
    {
        return $this->idInventarioKardex;
    }

    /**
     * Set numContagem
     *
     * @param int $numContagem
     *
     * @return AmpInventarioKardex
     */
    public function setNumContagem($numContagem)
    {
        $this->numContagem = $numContagem;

        return $this;
    }

    /**
     * Get numContagem
     *
     * @return int
     */
    public function getNumContagem()
    {
        return $this->numContagem;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return AmpInventarioKardex
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
     * @return AmpInventarioKardex
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
     * @return AmpInventarioKardex
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
     * @return AmpInventarioKardex
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
     * @return AmpInventarioKardex
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
     * Set idInventario
     *
     * @param \AmpInventario $idInventario
     *
     * @return AmpInventarioKardex
     */
    public function setIdInventario(\AmpInventario $idInventario = null)
    {
        $this->idInventario = $idInventario;

        return $this;
    }

    /**
     * Get idInventario
     *
     * @return \AmpInventario
     */
    public function getIdInventario()
    {
        return $this->idInventario;
    }
}

