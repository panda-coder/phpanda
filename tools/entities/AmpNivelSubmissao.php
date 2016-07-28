<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpNivelSubmissao
 *
 * @ORM\Table(name="amp_nivel_submissao")
 * @ORM\Entity
 */
class AmpNivelSubmissao
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_nivel_submissao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNivelSubmissao;

    /**
     * @var string
     *
     * @ORM\Column(name="nivel_submissao", type="string", length=145, nullable=false)
     */
    private $nivelSubmissao;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=145, nullable=true)
     */
    private $descricao;


    /**
     * Get idNivelSubmissao
     *
     * @return int
     */
    public function getIdNivelSubmissao()
    {
        return $this->idNivelSubmissao;
    }

    /**
     * Set nivelSubmissao
     *
     * @param string $nivelSubmissao
     *
     * @return AmpNivelSubmissao
     */
    public function setNivelSubmissao($nivelSubmissao)
    {
        $this->nivelSubmissao = $nivelSubmissao;

        return $this;
    }

    /**
     * Get nivelSubmissao
     *
     * @return string
     */
    public function getNivelSubmissao()
    {
        return $this->nivelSubmissao;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return AmpNivelSubmissao
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
}

