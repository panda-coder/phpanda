<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * AmpMotivoSubmissao
 *
 * @ORM\Table(name="amp_motivo_submissao")
 * @ORM\Entity
 */
class AmpMotivoSubmissao
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_motivo_submissao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMotivoSubmissao;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=145, nullable=false)
     */
    private $descricao;


    /**
     * Get idMotivoSubmissao
     *
     * @return int
     */
    public function getIdMotivoSubmissao()
    {
        return $this->idMotivoSubmissao;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return AmpMotivoSubmissao
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

