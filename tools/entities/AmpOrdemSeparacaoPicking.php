<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpOrdemSeparacaoPicking
 *
 * @ORM\Table(name="amp_ordem_separacao_picking", indexes={@ORM\Index(name="fk_ordem_separacao_idx", columns={"id_ordem_separacao"}), @ORM\Index(name="fk_ordem_separacao_produto_idx", columns={"id_ordem_separacao_produto"})})
 * @ORM\Entity
 */
class AmpOrdemSeparacaoPicking
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_ordem_separacao_picking", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrdemSeparacaoPicking;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_conferencia", type="decimal", precision=13, scale=4, nullable=false)
     */
    private $quantidadeConferencia;

    /**
     * @var int
     *
     * @ORM\Column(name="volume", type="integer", nullable=false)
     */
    private $volume;

    /**
     * @var \AmpOrdemSeparacao
     *
     * @ORM\ManyToOne(targetEntity="AmpOrdemSeparacao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ordem_separacao", referencedColumnName="id_ordem_separacao")
     * })
     */
    private $idOrdemSeparacao;

    /**
     * @var \AmpOrdemSeparacaoProduto
     *
     * @ORM\ManyToOne(targetEntity="AmpOrdemSeparacaoProduto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ordem_separacao_produto", referencedColumnName="id_ordem_separacao_produto")
     * })
     */
    private $idOrdemSeparacaoProduto;


    /**
     * Get idOrdemSeparacaoPicking
     *
     * @return int
     */
    public function getIdOrdemSeparacaoPicking()
    {
        return $this->idOrdemSeparacaoPicking;
    }

    /**
     * Set quantidadeConferencia
     *
     * @param string $quantidadeConferencia
     *
     * @return AmpOrdemSeparacaoPicking
     */
    public function setQuantidadeConferencia($quantidadeConferencia)
    {
        $this->quantidadeConferencia = $quantidadeConferencia;

        return $this;
    }

    /**
     * Get quantidadeConferencia
     *
     * @return string
     */
    public function getQuantidadeConferencia()
    {
        return $this->quantidadeConferencia;
    }

    /**
     * Set volume
     *
     * @param int $volume
     *
     * @return AmpOrdemSeparacaoPicking
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
     * Set idOrdemSeparacao
     *
     * @param \AmpOrdemSeparacao $idOrdemSeparacao
     *
     * @return AmpOrdemSeparacaoPicking
     */
    public function setIdOrdemSeparacao(\AmpOrdemSeparacao $idOrdemSeparacao = null)
    {
        $this->idOrdemSeparacao = $idOrdemSeparacao;

        return $this;
    }

    /**
     * Get idOrdemSeparacao
     *
     * @return \AmpOrdemSeparacao
     */
    public function getIdOrdemSeparacao()
    {
        return $this->idOrdemSeparacao;
    }

    /**
     * Set idOrdemSeparacaoProduto
     *
     * @param \AmpOrdemSeparacaoProduto $idOrdemSeparacaoProduto
     *
     * @return AmpOrdemSeparacaoPicking
     */
    public function setIdOrdemSeparacaoProduto(\AmpOrdemSeparacaoProduto $idOrdemSeparacaoProduto = null)
    {
        $this->idOrdemSeparacaoProduto = $idOrdemSeparacaoProduto;

        return $this;
    }

    /**
     * Get idOrdemSeparacaoProduto
     *
     * @return \AmpOrdemSeparacaoProduto
     */
    public function getIdOrdemSeparacaoProduto()
    {
        return $this->idOrdemSeparacaoProduto;
    }
}

