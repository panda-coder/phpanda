<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpCartaCorrecaoItem
 *
 * @ORM\Table(name="amp_carta_correcao_item", indexes={@ORM\Index(name="fk_amp_carta_correcao_item_1_idx", columns={"id_carta_correcao"}), @ORM\Index(name="fk_amp_carta_correcao_item_2_idx", columns={"id_carta_correcao_campo"})})
 * @ORM\Entity
 */
class AmpCartaCorrecaoItem
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_carta_correcao_item", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCartaCorrecaoItem;

    /**
     * @var string
     *
     * @ORM\Column(name="retificacao", type="string", length=100, nullable=true)
     */
    private $retificacao;

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
     * @var \AmpCartaCorrecao
     *
     * @ORM\ManyToOne(targetEntity="AmpCartaCorrecao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_carta_correcao", referencedColumnName="id_carta_correcao")
     * })
     */
    private $idCartaCorrecao;

    /**
     * @var \AmpCartaCorrecaoCampo
     *
     * @ORM\ManyToOne(targetEntity="AmpCartaCorrecaoCampo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_carta_correcao_campo", referencedColumnName="id_carta_correcao_campo")
     * })
     */
    private $idCartaCorrecaoCampo;


    /**
     * Get idCartaCorrecaoItem
     *
     * @return int
     */
    public function getIdCartaCorrecaoItem()
    {
        return $this->idCartaCorrecaoItem;
    }

    /**
     * Set retificacao
     *
     * @param string $retificacao
     *
     * @return AmpCartaCorrecaoItem
     */
    public function setRetificacao($retificacao)
    {
        $this->retificacao = $retificacao;

        return $this;
    }

    /**
     * Get retificacao
     *
     * @return string
     */
    public function getRetificacao()
    {
        return $this->retificacao;
    }

    /**
     * Set idUsuarioCriacao
     *
     * @param int $idUsuarioCriacao
     *
     * @return AmpCartaCorrecaoItem
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
     * @return AmpCartaCorrecaoItem
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
     * @return AmpCartaCorrecaoItem
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
     * @return AmpCartaCorrecaoItem
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
     * Set idCartaCorrecao
     *
     * @param \AmpCartaCorrecao $idCartaCorrecao
     *
     * @return AmpCartaCorrecaoItem
     */
    public function setIdCartaCorrecao(\AmpCartaCorrecao $idCartaCorrecao = null)
    {
        $this->idCartaCorrecao = $idCartaCorrecao;

        return $this;
    }

    /**
     * Get idCartaCorrecao
     *
     * @return \AmpCartaCorrecao
     */
    public function getIdCartaCorrecao()
    {
        return $this->idCartaCorrecao;
    }

    /**
     * Set idCartaCorrecaoCampo
     *
     * @param \AmpCartaCorrecaoCampo $idCartaCorrecaoCampo
     *
     * @return AmpCartaCorrecaoItem
     */
    public function setIdCartaCorrecaoCampo(\AmpCartaCorrecaoCampo $idCartaCorrecaoCampo = null)
    {
        $this->idCartaCorrecaoCampo = $idCartaCorrecaoCampo;

        return $this;
    }

    /**
     * Get idCartaCorrecaoCampo
     *
     * @return \AmpCartaCorrecaoCampo
     */
    public function getIdCartaCorrecaoCampo()
    {
        return $this->idCartaCorrecaoCampo;
    }
}

