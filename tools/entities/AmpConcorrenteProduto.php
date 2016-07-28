<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpConcorrenteProduto
 *
 * @ORM\Table(name="amp_concorrente_produto", uniqueConstraints={@ORM\UniqueConstraint(name="index4", columns={"id_concorrente", "id_produto"})}, indexes={@ORM\Index(name="fk_amp_concorrente_produto_1_idx", columns={"id_produto"}), @ORM\Index(name="fk_amp_concorrente_produto_2_idx", columns={"id_concorrente"})})
 * @ORM\Entity
 */
class AmpConcorrenteProduto
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_concorrente_produto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConcorrenteProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_produto_concorrente", type="string", length=50, nullable=false)
     */
    private $codigoProdutoConcorrente;

    /**
     * @var \AmpProduto
     *
     * @ORM\ManyToOne(targetEntity="AmpProduto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_produto", referencedColumnName="id_produto")
     * })
     */
    private $idProduto;

    /**
     * @var \AmpConcorrente
     *
     * @ORM\ManyToOne(targetEntity="AmpConcorrente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_concorrente", referencedColumnName="id_concorrente")
     * })
     */
    private $idConcorrente;


    /**
     * Get idConcorrenteProduto
     *
     * @return int
     */
    public function getIdConcorrenteProduto()
    {
        return $this->idConcorrenteProduto;
    }

    /**
     * Set codigoProdutoConcorrente
     *
     * @param string $codigoProdutoConcorrente
     *
     * @return AmpConcorrenteProduto
     */
    public function setCodigoProdutoConcorrente($codigoProdutoConcorrente)
    {
        $this->codigoProdutoConcorrente = $codigoProdutoConcorrente;

        return $this;
    }

    /**
     * Get codigoProdutoConcorrente
     *
     * @return string
     */
    public function getCodigoProdutoConcorrente()
    {
        return $this->codigoProdutoConcorrente;
    }

    /**
     * Set idProduto
     *
     * @param \AmpProduto $idProduto
     *
     * @return AmpConcorrenteProduto
     */
    public function setIdProduto(\AmpProduto $idProduto = null)
    {
        $this->idProduto = $idProduto;

        return $this;
    }

    /**
     * Get idProduto
     *
     * @return \AmpProduto
     */
    public function getIdProduto()
    {
        return $this->idProduto;
    }

    /**
     * Set idConcorrente
     *
     * @param \AmpConcorrente $idConcorrente
     *
     * @return AmpConcorrenteProduto
     */
    public function setIdConcorrente(\AmpConcorrente $idConcorrente = null)
    {
        $this->idConcorrente = $idConcorrente;

        return $this;
    }

    /**
     * Get idConcorrente
     *
     * @return \AmpConcorrente
     */
    public function getIdConcorrente()
    {
        return $this->idConcorrente;
    }
}

